<?php

/**
 * PHPMailer multiple files upload and send example
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/function.php';
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'setup.php';


$total = count($leads);
$number = 0;
$sent = 0;
$fail = 0;

date_default_timezone_set('Etc/UTC');

try {
    if (!file_exists($log_filename)){
        mkdir($log_filename, 0777, true);
    }

    $filename = $log_filename."/".$filename;

    foreach ($leads as $to) {
        $number++;
        $to = trim($to, " \t\n\r");
        $file = fixdetails($filename,$to);
        
        $body = fixdetails($nakedbody,$to);
        
        $from = fixdetails($nakedfrom,$to);
        $name = fixdetails($nakedname,$to);
        $smtpuser = fixdetails($nakedsmtpuser,$to);
        $subject = fixdetails($nakedsubject,$to);
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = false;
        $mail->Host = $smtps;
        $mail->Port = $smtpport;
        $mail->SMTPAuth = $smtpauth;
        $mail->Password = $smtppass;
        $mail->addAddress($to);
        $mail->setFrom($from, $name);
        $mail->Username = $smtpuser;
        $mail->Subject = $subject;
        // 1 = High, 2 = Medium, 3 = Low
        $mail->Priority = $Priority;

        $doc = new DOMDocument();
        @$doc->loadHTML($body);

        $tags = $doc->getElementsByTagName('img');

        foreach ($tags as $tag) {
               $fsrc = $tag->getAttribute('src');
               $src = $fsrc;
               $src = (startswith($src, 'cid:') ? explode('cid:',$src)[1] : $src);
               $src = (startswith($src, 'file:') ? substr($src, 8) : $src);
               //echo $src;

               if (file_exists($src)) {
                    $cid = random_num(20);
                    $srcname = mb_basename($src);
                    $body = str_replace($fsrc, $cid , $body);
                    $mail->AddEmbeddedImage($src, $cid, $srcname);
               }
        }

        if ($encrymsg) {
            $body = CW0146($body);
        }

        $mail->msgHTML($body);
        $mail->AltBody = 'This is a plain-text message body';
        if ($useatt) {
            $file = BuildAttachFile($file,$to,$javaescape,$obsfucate,$setexpire);
            //echo "File $to name: [".$file."] created"."\r\n";
            if (file_exists($file)) {
                $mail->addAttachment($file);
            }
            
        }

       
        if (!$mail->send()) {
            $fail++;
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo date("Y-m-d G:i:s").'     CLIENT -> SERVER: ['.$number.'/'.$total.'] FAIL:'.$fail.' | SENT:'.$sent.' ['.$to.'] '. $mail->ErrorInfo."\r\n";
        } else {
            $sent++;
            echo date("Y-m-d G:i:s").'     CLIENT -> SERVER: ['.$number.'/'.$total.'] SENT:'.$sent.' | FAIL:'.$fail.' ['.$to.'] '."\r\n";
        }

        if (file_exists($file)){
            unlink($file);
        }
        flush();
    }
} catch (Exception $e) {
    echo date("Y-m-d G:i:s").'     SERVER -> SMTP error:  ['.$e->getMessage().'] '."\r\n";
    //echo 'SMTP error: ' . $e->getMessage(), "\n";
}



?>



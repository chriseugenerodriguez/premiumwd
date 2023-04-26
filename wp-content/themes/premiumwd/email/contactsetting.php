<?php

$reply_name="Auto Responde";

// Change the Email Addresses below to email Id where you want to get your emails.

// Reply Email Address where you want to set reply to email ID



$replyto='info@premiumwd.com';



$uploadpath='/';



$save_path ='http://'.$_SERVER['SERVER_NAME'].$uploadpath;  // do not change this
$subject = stripslashes($_POST['subject']);

switch ($subject) {
	
case "Technical Support": // appears as subject in mail and select field name 1 in form

$toemail='info@premiumwd.com'; // select field email 1



break;

	

case "Sales Department": // appears as subject in mail and select field name 1 in form

$toemail='info@premiumwd.com'; // select field email 1





break;


case "Other": // appears as subject in mail and select field name 1 in form

$toemail='info@premiumwd.com'; // select field email 1





break;

}



$autorespond="yes"; // no : Disable the Auto-Responder   yes : Enable Auto-Responder.

$usesmtp="no"; // no : Disable the Use Smtp   yes : Enable Use Smtp.



// smtp configration
$smtphost="ssl: //smtp.domain.com";  // SMTP Server Ex: smtp.yourdomain.com
$smtpport=465; // SMTP Port Ex: 45
$smtpusername='yourname@domain.com';  // SMTP username Ex: yourname@yourdomain
$smtppassword="yourpassword";  // SMTP password Ex: password
?>
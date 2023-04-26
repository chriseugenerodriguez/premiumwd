<?php

function ValidateEmail($email) {

    $regex = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $eregi = preg_replace($regex, '', trim($email));
    return empty($eregi) ? true : false;
}

function send_mail_func() {

    require("phpmailer/class.phpmailer.php");
// Do not edit this if you are not familiar with php
    error_reporting(E_ALL ^ E_NOTICE);
    $post = (!empty($_GET)) ? true : false;
    include 'contactsetting.php';
    if ($post) {

       $name = stripslashes($_GET['name']);
        $cname = stripslashes($_GET['name']);
        $email = trim($_GET['email']);
//$subject = stripslashes($_GET['subject']);
        $message = stripslashes($_GET['message']);
        $phone = stripslashes($_GET['phone']);
        $answer = trim($_GET['answer']);
        $verificationanswer = "4"; // plz  change edit your human answer
        $to = $replyto;
        $error = '';
        $headers = "";
        $headers.="Reply-to:$email\n";
        $headers .= "From: $email\n";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers = "Content-Type: text/html; charset=iso-8859-1\n" . $headers;

// Checks Name Field

        if (!$name) {
            $error .= 'Please enter your name.<br />';
        }

// Checks Email Field

        if (!$email) {
            $error .= 'Please enter an e-mail address.<br />';
        }

        if ($email && !ValidateEmail($email)) {
            $error .= 'Please enter a valid e-mail address.<br />';
        }


        /**
          // Checks Subject Field
          if(!$subject)
          {
          $error .= 'Please enter your subject.<br />';
          }* */
        if ($answer <> $verificationanswer) {
            $error .= 'Please enter the Correct verification number.<br />';
        }

// Checks Message (length)
        if (!$message || strlen($message) < 5) {
            $error .= "Please enter your message. It should have at least 5 characters.<br />";
        }




        if (!$error) {
            $messages = "From: $email <br>";
            $messages.="Name: $name <br>";
            $messages.="Email: $email <br>";
            $messages.="Phone: $phone <br>";
            $messages.="Message: $message <br>";
            $to = $replyto;
            if ($usesmtp === "yes") {

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = yes; // enable SMTP authentication
                $mail->Host = $smtphost; // SMTP server
                $mail->Port = $smtpport;
                $mail->Username = $smtpusername; // SMTP account username
                $mail->Password = $smtppassword; // SMTP account password
                $mail->AddReplyTo($email, $name);
                $mail->SetFrom($email, $name);
                $mail->AddAddress($to, $name);
                $mail->Subject = $subject;
                //$mail->AltBody    = $messages; // optional  
                $mail->MsgHTML(nl2br($messages));
                $mail = $mail->Send();
            } else {
                $mail = mail($to, $subject, $messages, "from: $email\nReply-To: $email \nContent-type: text/html");
            }

            if ($mail) {
                echo 'OK';
                if ($autorespond == "yes") {
                    include_once("autoresponde.php");
                }
            }
        } else {
            echo '<div class="error">' . $error . '</div>';
        }
        exit;
    }
}

?>
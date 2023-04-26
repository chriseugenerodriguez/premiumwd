<?php

$from   = stripslashes(trim($_POST['form-email']));
$success = get_option('premiumwd_contact_message');
$to = get_option('premiumwd_contact_subject');


return [
    'subject' => [
        'prefix' => '[Contact Form]'
    ],
    'emails' => [
        'to'   => $to,
        'from' => $from
    ],
    'messages' => [
        'error'   => 'There was an error sending, please try again later.',
        'success' => $success
    ],
    'fields' => [
        'name'     => 'Name',
        'email'    => 'Email',
        'phone'  => 'Phone',
        'subject'  => 'Subject',
        'message'  => 'Message',
        'btn-send' => 'Send'
    ]
];
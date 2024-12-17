<?php


require_once('./vendor/autoload.php');

use thedavidinyang\SimpleMail\Mailer;

$setup = ['host' => 'smtp.zeptomail.com', 'username'=>'emailappsmtp.1729fa1a247ec6d5', 'password'=>'a0Gy1cA9uw2x', 'authentication'=>'tls', 'port'=>'587'  ];

$e = new Mailer;

$e->init('smtp') ->setup($setup)


->subject('Welcome')

->to(['name' => 'David Inyang', 'email'=>'david.inyang@easyspend.cc'])
->from(['name' => 'Easyspend', 'email'=>'noreply@easyspend.cc'])

->body('Hi, welcome to the team')

->debug(true)



// Send mail
->sendmail();
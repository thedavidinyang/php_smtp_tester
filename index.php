<?php


require_once('./vendor/autoload.php');

use thedavidinyang\SimpleMail\Mailer;

$setup = ['host' => '', 'username'=>'', 'password'=>'', 'authentication'=>'', 'port'=>''  ];

$e = new Mailer;

$e->init('smtp') ->setup($setup)


->subject('Welcome')

->to(['name' => 'David Inyang', 'email'=>'samplemail@gmail.com'])

->from(['name' => 'David Inyang', 'email'=>'samplemail@gmail.com'])

->body('Hi, welcome to the team')

->debug(true)



// Send mail
->sendmail();
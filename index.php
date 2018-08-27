<?php
require  __DIR__."/lib_ext/autoload.php";

use Notification\Email;

//$email= new PHPMailer;
//var_dump($email);

$novoEmail = new Email;
$novoEmail->sendMail("Assunto teste","Esse é um emai lde teste","hallancma@gmail.com","Hallan","hallancma@gmail.com","HCMA");

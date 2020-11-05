<?php
require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$mail = new Nette\Mail\Message;
$mail->setFrom('Pokus NetteMail <netmailing@seznam.cz>')
    ->addTo('testMail21@seznam.cz')
    ->setSubject('První zpráva přes SMTP z Nette Maileru')
    ->setBody("Dobrý den, \n toto je testovací zpráva!");

    $mailer = new Nette\Mail\SmtpMailer([
    'host' => $_ENV['EMAIL_HOST'],
    'port' => $_ENV['EMAIL_PORT'],
    'username' => $_ENV['EMAIL_USERNAME'],
    'password' => $_ENV['EMAIL_PASSWORD'],
    'secure' => $_ENV['EMAIL_SECURE'],
]);
$result = $mailer->send($mail);
var_dump($result)
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>
<body>

</body>
</html>
<?php

require_once __DIR__ . '/vendor/autoload.php';

$person = new \Phpbergen\Name('Stein', 'Magne', 'Bjørklund');
$email = \Phpbergen\Email::fromString('steinmb@gmail.com');
echo $person->getName();
echo $email->asString();

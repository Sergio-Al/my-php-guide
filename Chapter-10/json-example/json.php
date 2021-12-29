<?php

require 'MailingListRecipient.php';

$recipient = new MailingListRecipient('sergio@example.com', 'Sergio', 'Machaca');

$requestBody = json_encode($recipient);
echo $requestBody . PHP_EOL;

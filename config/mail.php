<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => env('MAIL_USERNAME'), // your username,
  "password" => env('MAIL_PASSWORD'), // your password,
  "sendmail" => "/usr/sbin/sendmail -bs"
];

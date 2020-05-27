<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "22b2517e9a5f76", // your username,
  "password" => "12c4191255186e", // your password,
  "sendmail" => "/usr/sbin/sendmail -bs"
];

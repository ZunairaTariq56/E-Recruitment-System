<?php

$to = "03480410821@vtext.com";
$from = "aksontv74@gmail.com";
$message = "This is a text mesages\n new line....";
$header = "From: $from\n";
mail($to, '', $message, $header);

 ?>

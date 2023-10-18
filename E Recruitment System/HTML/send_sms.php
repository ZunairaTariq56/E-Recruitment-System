<?php

  $phone = $_POST['phone'];
  $message = $_POST['message'];
  send_sms($phone, $message);

  function send_sms($phone, $message){
    $username = "923480410821";///Your Username
    $password = "3651";///Your Password
    $mobile = $phone;///Recepient Mobile Number
    $sender = "SenderID";
    $message = $message;

    ////sending sms

    $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
    $url = "https://bulksms.com.pk/api/sms.php?username=923480410821&password=***";
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $result = curl_exec($ch);
    /*Print Responce*/
    echo $result;
      }

 ?>

<?php
  $to = "iluxadcp1@gmail.com";
  $email = $_POST['email'];

  $err = "";
  if (trim ($_POST['name'])=="" && (trim ($_POST['email'])=="" && (trim ($_POST['message'])=="" ) {
    $err = "Fill all fields";
  }else if (trim ($_POST['name'])=="" {
      $err = "Fill name field";
  }else if (!((strpos($email, ".")>0) && (strpos($email, "@")>0)) {
      $err = "Wrong email adress";

      if ($err !="") { //If there are errors
        echo $err;
        exit;
      }

      $msg="Message send by <b>".$_POST['name']."</b>.<br><b>Message text: </b><br>".$_POST['message']."<br><br>Question from site: mysummersite.000webhostapp.com";

      $subject="=?utf-8?B?".base64_encode("Message from site mysummersite.000webhostapp.com").'?=';

      $headers="From: $email\r\nReplay-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

      $success= mail($to, $subject,$msg,$headers);
      echo $success;
?>

<?php
if (empty ($_SERVER['HTTPS']))|| $_SERVER['HTTPS']=="off" {
  $redirect='https://' . $_SERVER['HTTPS_HOST'] . $_SERVER['REQUEST_URL'];
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: '. $redirect);
  exit();
}
 ?>

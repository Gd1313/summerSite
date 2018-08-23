<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
    <meta name="description" content="Practice project site">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="sun.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
<?php require_once"blocks/header.php"  ?>
<div id="main">
    <div id="news">
      <h2 class="heading">Feedback</h2>
      <div style="clear:both"><br></div>
      <div class="block">

          To contact me fill the form and send it.
        <form class="" action="index.html" method="post">
          <div >
            <input type="text" id="name" placeholder="Your name">
            <br>
            <input type="email" id="email" placeholder="Email..">
          </div>
          <div >
            <textarea id="message" placeholder="Enter your message"></textarea>
          </div>
          <input type="button" id="send" class="btn" value="Send">
        </form>

      </div>
    </div>
</div>
<?php require_once"blocks/aside.php"  ?>
<div style="clear both">
  <br>
</div>


</div>
  <?php require_once"blocks/footer.php"  ?>
</div>
<?php require_once"blocks/JS_scripts.php"  ?>
  </body>
</html>

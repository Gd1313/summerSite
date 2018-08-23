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
            <input type="text" id="name" placeholder="Your name" onclick="$(this).css ('border color', '#ccc')">
            <br>
            <input type="email" id="email" placeholder="Email.." onclick="$(this).css ('border color', '#ccc')">
          </div>
          <div >
            <textarea id="message" placeholder="Enter your message" onclick="$(this).css ('border color', '#ccc')"></textarea>
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
<script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/contacting.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Сообщение отправлено");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)
					alert ("Что-то пошло не так! Сообщение не отправлено");
				else {
					switch (data) {
					case "Имя не указано":
					$('#name').css ("border-color", "#f7b4b4");
					break;
					case "Сообщение не указано":
					$('#message').css ("border-color", "#f7b4b4");
					break;
					case "Неправильный e-mail":
					$('#email').css ("border-color", "#f7b4b4");
					break;
					default:
					$('#email').css ("border-color", "#f7b4b4");
					$('#message').css ("border-color", "#f7b4b4");
					$('#name').css ("border-color", "#f7b4b4");
					}
				}
			}
			$('#send').removeAttr ("disabled");
		}
	});
});
</script>
  </body>
</html>

<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Summer site</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <meta name="description" content="Practice project site">
    <meta name="viewport" content="width=device-width, initial-scale=1"
    <link href="img/sun.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div id="wrapper">
      <div id="content">


<header>
  <div id="logo">
    <a href="https://summersite.000webhostapp.com/">
      <img src="img/logo.png" title="summersite.com" alt="summersite.com">
      <span>Summmer Site</span>
  </div>
  <div id="about">
    <a href="" title="Learn something new">Something new</a>
    <a href="" title="Feedback">Feedback</a>
    <div id="reg_auth">
      <a href="" title="Log in">
        <div id="btn">
          Login
        </div>
      </a>
      <a href="" title="Register">
        <div id="btn">
          Register
        </div>
      </a>
    </div>
  </div>
</header>
<nav>
  <div id="menuShow">
    <i class="fas fa-bars"></i>
  </div>
  <div id="hideMenu">
    <a href="">Summer news</a>
    <a href="">Summer video</a>
    <a href="">Forum</a>
    <a href="">Summer tasks</a>
  </div>
  <div id="search">
    <span>Search</span>
    <i class="fas fa-search"></i>
  </div>

  <div id="mobileMenu">
    <a href="">Summer news</a><br>
    <a href="">Summer video</a><br>
    <a href="">Forum</a><br>
    <a href="">Summer tasks</a><br>
    <hr>
    <a href="">Register</a>
    <a href="">Login</a>
  </div>
</nav>
</div>
<footer>
<div id="site_name">
  <span>Summer site</span>- practice project!
</div>
<div id="clear">

</div>
<div id="footer_menu">
<a href="" title="Feedback">Feedback</a>
</div>
<div id="rights">
<a href="">Все права защищены &copy; <?=date('Y')?></a>
</div>
<div id="social">
  <noindex><a href="https://twitter.com/gdvlad13?lang=ru" target="_blank" rel="nofollow"   title="Twitter"><i class="fab fa-twitter-square" aria-hidden="true"></i>
</a></noindex>
</div>
</footer>
</div>
/*jQuery*/
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  $('#menuShow').click (function(){
  if ($('#mobileMenu').is('visible'))
      $('#mobileMenu').hide();
  else
    $('#mobileMenu').show();
  });
  $(document).scroll (function(){
    if ($(document).width()>785) {


    if ($(document).scrollTop()>$('header').height()+10) {
      $('nav').addclass('fixed');
    }else {
        $('nav').removeclass('fixed');
    }
  }
  });
    window.onresize=function(event){
        $('#mobileMenu').hide();
    };

</script>
  </body>
</html>

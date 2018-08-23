<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Summer site</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main page.css" type="text/css" charset="utf-8">
    <meta name="description" content="Practice project site">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="sun.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/all.min.css">
  </head>
  <body>
    <div id="wrapper">
      <div id="content">


<header>
  <div id="logo">
    <a href="https://mysummersite.000webhostapp.com/">
      <img src="img/logo.png" title="mysummersite.com" alt="summersite.com">
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
<div id="main">
    <div id="news">
      <h2 class="heading">Summer news</h2>
      <div style="clear:both"><br></div>
      <!--Topic-->
      <?php for ($i=0; $i < 6; $i++) {
       echo'<div class="article">
              <img src="http://inboxpros.com/wp-content/uploads/2016/06/summer.jpg" alt="test" title="test" >
              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </div>';
      }

      ?>
      <a href="" title="View more">
        <div id="btn">
          View more
        </div>
      </a>
    </div>
</div>
<aside>
  <div id="videos">
    <h2 class="heading">Summer videos</h2>
    <div style="clear:both">
      <br>
    </div>
    <!--Videos-->
    <?php for ($i=0; $i < 4; $i++) {
     echo'<div class="video">
            <img src="https://assets.capitalfm.com/2014/14/calvin-harris-summer-video-1396854127-large-article-1.jpg" alt="test" title="test" >
            Perfect <em>summer</em>
            <span>10 videos</span>
          </div>
          <div style="clear both">
            <br>
          </div>';
    }

    ?>
    <a href="" title="View more videos">
      <div id="btn">
        View more videos
      </div>
    </a>
  </div>
  <div id="one_video">
    <h2 class="heading">Your best summer</h2>
    <div style="clear:both">
      <br>
    </div>
      <img src="http://www.lovethispic.com/uploaded_images/18010-Perfect-Summer-Vacation.jpg" alt="test" title="test" >
  </div>
</aside>
<div style="clear both">
  <br>
</div>

  <div id="subscribe">
    <span>Subscribe to receive new summer news every day</span>
    <div style="clear both">
      <br>
    </div>
  </div>

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
<a href="">All rights reserved &copy; <?=date('Y')?></a>
</div>
<div id="social">
  <noindex><a href="https://twitter.com/gdvlad13?lang=ru" target="_blank" rel="nofollow"   title="Twitter"><i class="fab fa-twitter-square" aria-hidden="true"></i>
</a></noindex>
</div>
</footer>
</div>
<!--jQuery-->
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

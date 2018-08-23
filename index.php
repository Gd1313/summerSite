<?php
require_once "blocks/head.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Summer site</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main page.css" type="text/css" charset="utf-8">
      <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
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
<?php require_once"blocks/aside.php"  ?>
<div style="clear both">
  <br>
</div>

  <div id="subscribe">
    <span>Subscribe to receive new summer news every day</span>
    <div style="clear:both">
      <br>
    </div>
    <!--VK-->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>

    <div id="vk_groups"></div>
    <script type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: 3, width: "500"}, 56333679);
    </script>
    <div style="clear:both">
      <br>
    </div>
    <!--Facebook-->
  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  <!--Twitter-->
  <a class="twitter-timeline" data-width="400" data-height="350" data-theme="dark" href="https://twitter.com/gdvlad13?ref_src=twsrc%5Etfw">Tweets by gdvlad13</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
    <div id="sub_to_project">
      <span class="heading">Subscribe to project</span>
      <div style="clear:both">
        <br>
      </div>
      <p>To get full access to all features, subscribe to the project</p>
      <a href="" title="View more information about subscription">
        <div id="btn">
          Learn more about subscription
        </div>
      </a>
      <div style="clear:both">
        <br>
      </div>
      <h2 class="heading">Site creation</h2>
      <div style="clear:both">
        <br>
      </div>
        <img src="https://www.howtogeek.com/wp-content/uploads/2013/09/img_5245c3e1588ae.jpg" alt="test" title="test" >
    </div>

    <div style="clear:both">
      <br>
    </div>
    <div id="web_sites">
      <span>Want a joke?</span>
      <a href="" title="Create a joke">
      <div id="btn">
        Create a joke
      </div>
      </a>
    </div>
</div>
  <?php require_once"blocks/footer.php"  ?>
</div>
  <?php require_once"blocks/JS_scripts.php"  ?>

  </body>
</html>

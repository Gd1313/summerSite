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

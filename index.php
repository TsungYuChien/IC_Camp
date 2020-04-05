<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/8bit-wonder" type="text/css"/>
    <script src='stopExecutionOnTimeout.js'></script>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <script src="jquery-3.3.1.js"></script>
    <title>Camp Login</title>
    <link rel="stylesheet" type="text/css" href="indexstyle.css">
    <script>

$(document).ready(function () {

var $demo = $('.demo');

var menuTextAT = 500;

$(document).on('click', '.demo__menu-btn', function () {

$demo.addClass('menu-active');

});

$(document).on('click', '.demo__menu-item', function () {

var $item = $(this);

var targetSection = $item.data('section');

$item.addClass('clicked');

$demo.removeClass('menu-active');

$('.demo__section.active-section').removeClass('active-section');

$('.demo__section--' + targetSection).addClass('active-section');

setTimeout(function () {

$item.removeClass('clicked');

}, menuTextAT);

});

});

</script>
   
    <style>

*, *:before, *:after { box-sizing: border-box; margin: 0; padding: 0; }

html, body { font-size: 62.5%; }

body { background: #F2E274; font-family: "Open Sans", Helvetica, Arial, sans-serif; }

</style>
    
</head>
<body>
 
 <div class="demo">
    
  <div class="demo__overlay"></div>



  <div class="demo__menu-bg"></div>

  <div class="demo__menu-items">

  <div class="demo__menu-item" data-section="Team">LOG IN</div>

  </div>

  <div class="demo__section demo__section--Team active-section">

  <h2 class="demo__section-heading">Welcome</h2>
  <h2 class="demo__section-heading">IC-PLAYER</h2>
  
  

  </div>
    
  <form action="indexaction.php" method="post">
    <div id="input">
        <input type="text" name="pw" class="border-step1">
    </div>
    <input class="eightbit-btn" type="submit" value="login" >
    
  </form>
 </div>
  
  <!--
   <div class="pic">
       <img src="img/logo2.jpg" id="logo">
       <form action="indexaction.php" method="post">            
            <input type="text" name="pw" placeholder="Password" id="keyin">
            
               
           <input type="submit" value="Login" id="keyin2">
            
            
            
        </form>   
          
           
           
       
   
   </div>
    -->
</body>

<script>
       
       

$(document).ready(function () {

var $demo = $('.demo');

var menuTextAT = 500;

$(document).on('click', '.demo__menu-btn', function () {

$demo.addClass('menu-active');

});

$(document).on('click', '.demo__menu-item', function () {

var $item = $(this);

var targetSection = $item.data('section');

$item.addClass('clicked');

$demo.removeClass('menu-active');

$('.demo__section.active-section').removeClass('active-section');

$('.demo__section--' + targetSection).addClass('active-section');

setTimeout(function () {

$item.removeClass('clicked');

}, menuTextAT);

});

});
       

</script>

</html>

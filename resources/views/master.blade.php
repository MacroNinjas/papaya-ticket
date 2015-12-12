<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Papaya Ticket</title>


		<!-- custom css -->
	{!! HTML::style('css/style.css') !!}

  {!! HTML::script('js/owl.carousel.js') !!}

  {!! HTML::script('js/menustick.js') !!}

  {!! HTML::script('mdl/material.min.js') !!}

		<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" rel="stylesheet">


		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" rel="stylesheet">
		<!-- Material Design Light-->
	{!! HTML::style('mdl/material.min.css') !!}

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

         <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.orange-amber.min.css" />

        <!-- font-family-->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	</head>
	<body>
<div class="wrapper">
  

 <div class="logo">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" align="center">
    <h2>Papaya Ticket</h2>
    <a href=""><button class="btn btn-primary mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp">Sign In</button></a>
    
    <a href=""><button class="btn btn-success mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp">Sign Up</button></a>
    </div>
    <div class="col-md-4"></div>
    </div>
    </div>


    
<div class="menu">
  <div class="mdl-layout mdl-js-layout navbar navbar-wrapper">
  <header class="mdl-layout__header" id="navigation">
    <img class="mdl-layout-icon"></img>
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title"  id="papanav">Papaya Ticket</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation center">
        <a class="mdl-navigation__link" id="papanav" href="index.html">Terms and Policy</a>
        <a class="mdl-navigation__link" id="papanav"href="about.php">Features</a>
        <a class="mdl-navigation__link" id="papanav"href="course.php">Sponser</a>
        <a class="mdl-navigation__link" id="papanav" href="contact.php">Member</a>
        <a class="mdl-navigation__link" id="papanav" href="contact.php">Contact</a>
    </nav>

    </div>
  </header>

  <div class="android-drawer mdl-layout__drawer" id="navi">
    <span class="mdl-layout-title">Papaya Ticket</span>
     <nav class="mdl-navigation">
       <a class="mdl-navigation__link" href="index.html">Terms and Policy</a>
         <a class="mdl-navigation__link"  href="about.php">Features</a>
         <a class="mdl-navigation__link"  href="course.php">Sponser</a>
         <a class="mdl-navigation__link"  href="contact.php">Member</a>
         <a class="mdl-navigation__link"  href="contact.php">Contact</a>
     </nav>
  </div>
</div>
</div>
  <main>


    <div>

	 @yield('content')
    
    </div>

<footer class="mdl-mini-footer">

  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">
      Papaya Ticket
    </div>
    <ul class="mdl-mini-footer__link-list padlo-b" >
      <li><a href="" >Home</a></li>
      <li><a href="">Terms & Policy</a></li>
      <li><a href="">Contact Us</a></li>
    </ul>
  </div>

  <div class="mdl-mini-footer__right-section padlo-a">
    <button class="mdl-mini-footer__social-btn padlo" id="navigation">{!! HTML::image('img/facebook-box.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!}</button>
    <button class="mdl-mini-footer__social-btn padlo" id="navigation">{!! HTML::image('img/google-plus-box.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!}</button>
    <button class="mdl-mini-footer__social-btn padlo" id="navigation">{!! HTML::image('img/linkedin-box.png', 'facebook', array('class' => 'img-responsive mdl-shadow--2dp')) !!}</button>

  </div>

  <a href="#" class="back-to-top"><i class="" style="font-size: 30px;"></i></a><!-- /top-link-block -->

  

</footer>

    

    

<div class="row">
    <div class="col-md-12 col-xs-12 copyright" align="center">

      	<h4>Papaya Ticket &copy 2016</h4>

    </div>
  </div>
</main>

</div>

	</body>

	<!-- jQuery -->

		<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  $('.navbar-wrapper').stickUp();
  });
});
</script>

</html>

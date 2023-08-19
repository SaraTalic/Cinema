<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KinoIzKraja</title>
	

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     
	<link rel="stylesheet" href="{{asset('css/contact.css')}}">
	<link rel="stylesheet" href="{{asset('css/detail.css')}}">
	<link rel="stylesheet" href="{{asset('css/events.css')}}">

	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/global.css')}}">

	
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{asset('css/pages.css')}}">

	
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
  </head>
  
<body>

<section id="top">
 <div class="container">
  <div class="row">
   
	 <div class="top_2 clearfix">
	  <div class="col-sm-3">
	   <div class="top_2_left">
	    <h1><a href="/">KinoIzKraja <span> od 1999. </span></a></h1>
	   </div>
	  </div>
	  <div class="col-sm-9">
	   <div class="top_2_right text-right">
		@auth
		<ul>
			<li><a href="/mojerezervacije">Moje rezervacije</a></li>
			<form class="inline" method="POST" action="/logout">
				@csrf
				<button type="submit">
				  <i class="fa-solid fa-door-closed"></i> Odjava
				</button>
			  </form>
		   </ul>
			
		
		@else
	     <ul>
	   <li><a href="/login">Prijava</a></li>
	   <li class="border_none_1"><a href="/register">Registracija</a></li>
	  </ul>
	  @endauth
	   </div>
	  </div>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="header" class="clearfix cd-secondary-nav">
 <div class="container">
  <div class="row">
   <div class="header_main clearfix">
     <nav class="navbar navbar-default">
		   <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">KinoIzKraja <span>od 1999.</span></a>
	       </div>
	
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a class="font_tag active_tag" href="/">Početna</a></li>
			<li><a class="font_tag" href="/repertoar">Repertoar</a></li>
			<li><a class="font_tag" href="/uskoro">Uskoro</a></li>
			<li><a class="font_tag" href="/cjenovnik">Cjenovnik</a></li>
			<li><a class="font_tag border_none_1" href="/kontakt">Kontakt</a></li>
		</ul>
		
	</div><!-- /.nav-collapse -->
</nav>
   </div>
  </div>
 </div>
</section>





@yield('content')


<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer clearfix">
    <h2 class="text-center">KinoIzKraja</h2>
   </div>
   <div class="footer_1 clearfix">
    <div class="col-sm-3">
	 <div class="footer_1_inner">
	   
	   <ul>
	    <li><a href="#">POČETNA</a></li>
		<li><a href="#">REPERTOAR</a></li>
		<li><a href="#">USKORO</a></li>
        <li><a href="#">CJENOVNIK</a></li>
		<li><a href="#">REZERVACIJA</a></li>
		<li><a href="#">KONTAKT</a></li>
	   </ul>
	 </div>
	</div>
	
	<div class="col-sm-3">
	 <div class="footer_1_inner_1">
	   <h4>Zaprati nas</h4>
	    <ul class="social-network social-circle">
			<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="footer_bottom">
 <div class="container">
  <div class="row">
    <div class="footer_bottom clearfix">
	
	 <div class="col-sm-6">
	  <div class="footer_bottom_right">
	    <p> © 2023 KinoIzKraja. Sva prava zadržana | Design by <a href="http://www.templateonweb.com"> MADE BY SARA</a></p>
	  </div>
	 </div>
	</div>
  </div>
 </div>
</section>

<script type="text/javascript">
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>
</body>
       
</html>

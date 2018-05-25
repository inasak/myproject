<!DOCTYPE html>
<html lang="en">
<head>
<title>AmeShop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />

<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/bootstrap-responsive.css')}}" type="text/css" media="screen">    
<link rel="stylesheet" href="{{asset('css/camera.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="screen">

<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>  
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/superfish.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.ui.totop.js')}}"></script>

<script type="text/javascript" src="{{asset('js/camera.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery.caroufredsel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script>
$(document).ready(function() {
	//
	$('#camera_wrap').camera({
		//thumbnails: true
		//alignment			: 'centerRight', 
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '48%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});

	//	carouFredSel
	$('#slider3 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000					
		},
		responsive: true,
		prev: '.prev3',
		next: '.next3',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '330',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 4
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	}); 

	


	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider3 .carousel.main ul').trigger("updateSizes");		
	}
	updateSizes_vat();



}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="front">
<div id="main">
<!--HEADER-->
<div class="top1_wrapper">
<div class="top1 clearfix">
	
<header><div class="logo_wrapper"><a href="index.blade.php" class="logo"><img src="{{asset('images/logolol.png')}}" alt=""></a></div></header>

<div class="menu_wrapper clearfix">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
<li class="active"><a href="index.blade.php">home</a></li>


<li><a href="index-3.html">A propos de nous</a></li>										
<li><a href="index-5.html">Offres</a></li>	
<li class="sub-menu sub-menu-1"><a href="index-1.blade.php">Produits</a>
	<ul>
		<li><a href="index-1.blade.php">who we are</a></li>
		<li class="sub-menu sub-menu-2"><a href="index-1.blade.php">find an agent<em></em></a>
			<ul>
				<li><a href="index-1.blade.php">Lorem ipsum dolor</a></li>
				<li><a href="index-1.blade.php">Sit amet</a></li>
				<li><a href="index-1.blade.php">Adipiscing elit</a></li>
				<li><a href="index-1.blade.php">Nunc suscipit</a></li>
				<li><a href="404.html">404 page not found</a></li>
			</ul>
		</li>
		<li class="sub-menu sub-menu-2"><a href="index-1.blade.php">history<em></em></a>
			<ul>
				<li><a href="index-1.blade.php">Lorem ipsum dolor</a></li>
				<li><a href="index-1.blade.php">Sit amet</a></li>
				<li><a href="index-1.blade.php">Adipiscing elit</a></li>
				<li><a href="index-1.blade.php">Nunc suscipit</a></li>
				<li><a href="404.html">404 page not found</a></li>
			</ul>
		</li>		
		<li><a href="index-1.blade.php">testimonials</a></li>						
	</ul>						
</li>										
<li><a href="index-6.html">Contactez-nous</a></li>											
    </ul>
		</div>
	</div>
</div>
<div id="search">
	
<a href="#" class="searchBtn"></a>

<div class="search-form-wrapper">
<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
	<input type="text" name="s" value='Recherche' onBlur="if(this.value=='') this.value='Recherche'" onFocus="if(this.value =='Recherche' ) this.value=''">
	<a href="#" onClick="document.getElementById('search-form').submit()"></a>
</form>	
</div>

</div>	
</div>

</div>	
</div>
<!--END HEADER-->
<div id="inner">

<div class="find_wrapper">

<div class="find_inner">
<div class="find">
	


<div class="txt3">Vous Recherchez un produit?</div>

<div class="line"></div>


<div class="find-form-wrapper clearfix">
  <form id="find-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form clearfix" >
    <input type="text" name="s" value='recherche' onBlur="if(this.value=='') this.value='recherche'" onFocus="if(this.value =='recherche' ) this.value=''">
    <a href="#" onClick="document.getElementById('find-form').submit()"></a>
  </form>
</div>


</div>	
</div>

<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
			<div data-src="{{asset('images/slide10.jpg')}}"></div>
			<div data-src="{{asset('images/slide11.jpg')}}"></div>													
			<div data-src="{{asset('images/slide12.jpg')}}"></div>

		</div>	
	</div>		
</div>	
</div>	

<div class="banners">
<div class="container">
<div class="row">
<div class="span4 banner banner1">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">AVANTAGES</div>
<div class="txt2">Un prix moins, un délai de livraison cout et une qualité garantie</div>
<!--<div class="txt3">more</div>	-->
</div>
</a>	
</div>	
</div>
<div class="span4 banner banner2">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">MISSION</div>
<div class="txt2">Vous rapprochez des outils de l'IT  </div>
<!--<div class="txt3">more</div>	-->
</div>
</a>	
</div>	
</div>
<div class="span4 banner banner3">
<div class="banner_inner">
<a href="#">	
<div class="caption">
<div class="txt1">Vision</div>
<div class="txt2">Participer au développement du domaine économique au Maroc</div>
<!--<div class="txt3">more</div>	-->
</div>
</a>	
</div>	
</div>	
</div>	
</div>	
</div>

<div id="slider3_wrapper">
<div class="container">

<div class="slider3_title"><span>Nouveaux Produits</span></div>	

<div id="slider3">
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>		
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel01.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$570.000</div>
									<div class="txt4">Consulter</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel02.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">240,00MAD</div>
									<div class="txt4">Consulter</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel03.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">480,00MAD</div>
									<div class="txt4">Consulter</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel04.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$120.000</div>
									<div class="txt4">Consulter</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel05.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$730.000</div>
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="offer">
						<div class="offer_inner">
							<a href="#">
								<figure><img src="{{asset('images/carousel06.jpg')}}" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">LOREM IPSUM DOL AMET</div>
									<div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
									<div class="txt3">$470.000</div>
									<div class="txt4">Read More</div>
								</div>																
							</a>
						</div>						
					</div>
				</li>																									
			</ul>
		</div>
	</div>
</div>
</div>

</div>	
</div>

<div id="content">
<div class="container">
<!--<div class="row">
<div class="span9">
	
<h2><span>How it works</span></h2>

<div class="row">
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">a</div>
	<div class="txt2">Lorem ipsum<br>dolor sit</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">b</div>
	<div class="txt2">Vestibulum ante<br>ipsum primis</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>
<div class="span3">

<div class="work1 clearfix">
	<div class="txt1">c</div>
	<div class="txt2">Cras dictum<br>odio</div>
</div>	

<p>
	Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras ut...
</p>

<a href="#" class="button1">Read more</a>



</div>	
</div>

</div>
<div class="span3">
	
<h2><span>Our Professional Management</span></h2>

<ul class="ul1">
	<li><a href="#">Adipisicing</a></li>
	<li><a href="#">Dolore magna aliqua</a></li>
	<li><a href="#">Eiusmod tempor</a></li>
	<li><a href="#">Elit sed do</a></li>
	<li><a href="#">Incididunt ut labore et</a></li>
	<li><a href="#">Lorem ipsum dolor</a></li>
	<li><a href="#">Sit amet conse ctetur</a></li>
	<li><a href="#">Ut enim ad minim</a></li>
</ul>

</div>	
</div>	
</div>	
</div>
-->
<!--FOOTER-->
<div class="bot1_wrapper">
<div class="container">
<div class="bot1 clearfix">
<div class="row">
<div class="span3">

<div class="bot1_title"></div>	
	
<div class="logo2_wrapper"><a href="index.blade.php" class="logo2"><img src="{{asset('images/logolol.png')}}" alt=""></a></div>

<footer><div class="copyright"><br></div></footer>

</div>	
<div class="span5">

<div class="bot1_title">Nous veillons à garantir la meilleur expérience d'achat à nos clients, à travers notre qualité distinguée et nos services après vente. Votre satisfaction est notre premier objectif.</div>


</div>
<div class="span3 offset1">

<div class="bot1_title">Suivez-Nous</div>
	
<div class="social_wrapper">
	<ul class="social clearfix">    
    <li><a href="https://www.facebook.com/ensat.csc/"><img src="{{asset('images/social_ic1.png')}}"></a></li>
    <li><a href="#"><img src="{{asset('images/social_ic2.png')}}"></a></li>
    <li><a href="#"><img src="{{asset('images/social_ic3.png')}}"></a></li>
    <li><a href="#"><img src="{{asset('images/social_ic5.png')}}"></a></li>
	</ul>
</div>

</div>
</div>	
</div>	
</div>	
</div>

</div>	
</div>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--END FOOTER-->
</body>
</html>
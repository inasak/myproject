<!DOCTYPE html>
<html lang="en">
<head>
<title>about</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/jquery.caroufredsel.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script>
$(document).ready(function() {
	//
	//	carouFredSel team
	$('#slider4 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 8000					
		},
		responsive: true,
		prev: '.prev4',
		next: '.next4',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '180',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 2,
				max: 6
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	}); 

	//	carouFredSel team
	$('#slider5 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 9000					
		},
		responsive: true,		
		direction:	"left",
		//prev: '.prev1',
		//next: '.next1',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo",
			fx: "fade"
		},			
		items: {
        	width: '1000',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 1
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			},
		pagination  : ".pagination5"


	});

	


	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider4 .carousel.main ul').trigger("updateSizes");		
		$('#slider5 .carousel.main ul').trigger("updateSizes");		
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

<body class="not-front">
<div id="main">

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
<li><a href="index.blade.php">home</a></li>


<li class="active"><a href="index-3.html">A propos de nous</a></li>										
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

<div id="inner">

<div class="top2_wrapper">
<div class="bg1"><img src="images/bg1.jpg" alt="" class="img"></div>
<div class="top2_inner">
<div class="container">
<div class="top2 clearfix">
	
<h1>About US</h1>



</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>Qui sommes-nous?</span></h2>

<h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</h3>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class=""><img src="images/about01.jpg" alt=""></figure>
		<div class="caption">
			<p>
				Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

			</p>
			
		</div>
	</div>
</div>










</div>
<div class="span3">
	


</div>	
</div>

<div id="slider4_wrapper">

<div class="slider4_title"><span>Notre équipe</span></div>	

<div id="slider4">
<a class="prev4" href="#"></a>
<a class="next4" href="#"></a>		
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team01.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Jesica McSeller</div>
									<div class="txt2">Director</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team02.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Alex Morgan</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team03.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Pamela Brian</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team04.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Andreas wolf</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team05.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Monica winc</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team06.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Monty Brown</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team01.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Jesica McSeller</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team02.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Alex Morgan</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team03.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Pamela Brian</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team04.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Andreas wolf</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team05.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Monica winc</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
								</div>																
							</a>
						</div>						
					</div>
				</li>
				<li>
					<div class="team">
						<div class="team_inner">
							<a href="#">
								<figure><img src="images/team06.jpg" alt="" class="img"></figure>
								<div class="caption">
									<div class="txt1">Monty Brown</div>
									<div class="txt2">agent</div>
									<div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>	
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

<div id="slider5_wrapper">


<div class="pagination5" id="slider5_pag"></div>

</div>



</div>

</div>	
</div>
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
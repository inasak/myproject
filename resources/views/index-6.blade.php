<!DOCTYPE html>
<html lang="en">
<head>
<title>contacts</title>
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

<script type="text/javascript" src="js/cform.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script>
$(document).ready(function() {
	//
	

	



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
<li class="active"><a href="index-6.html">Contactez-nous</a></li>											
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
	
<h1>Contactez-nous</h1>


</div>	
</div>	
</div>
</div>



<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h2><span>Où nous trouver?</span></h2>

<figure class="google_map">
    <iframe src="https://maps.google.com/maps?q=tanger&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
</figure>













</div>
	
</div>

<div class="row">
<div class="span12">
	
<h2 class="center"><span>Envoyez nous un message</span></h2>

<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
		<div class="row">
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputName">Nom complet:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputName" name="name" value="Nom complet:" onBlur="if(this.value=='') this.value='Nom complet:'" onFocus="if(this.value =='Nom complet:' ) this.value=''">
				    </div>
				</div>				
			</div>	
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputEmail">Adresse email:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputEmail" name="email" value="Adresse email:" onBlur="if(this.value=='') this.value='Adresse email:'" onFocus="if(this.value =='Adresse email:' ) this.value=''">
				    </div>
				</div>
			</div>		
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Numero de telephone:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputPhone" name="phone" value="Numero de telephone:" onBlur="if(this.value=='') this.value='Numero de telephone:'" onFocus="if(this.value =='Numero de telephone:' ) this.value=''">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span12" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		
		<button type="submit" class="submit">Envoyer</button>
	</form>
</div>	





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
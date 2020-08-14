<!DOCTYPE html>
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Mater Soji</title>
	<meta name="description" content="Adesoji Awobajo Portfolio">  
	<meta name="author" content="Adesoji Awobajo">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">   
   <link href='https://fonts.googleapis.com/css?family=KoHo' rel='stylesheet'>

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="/">MASTER SOJI</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class=""  href="/" title="">Home</a></li>
						<li><a class=""  href="/about" title="">About</a></li>
						<li><a class=""  href="/resume" title="">Resume</a></li>
						<li><a class=""  href="/works" title="">Works</a></li>					
						<li><a class=""  href="/contact" title="">Contact</a></li>				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   @yield('content')

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
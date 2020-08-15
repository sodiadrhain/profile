@extends('layout.app')
@section('content')
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hi, I'm</h5>
	   			<h1>Adesoji Awobajo</h1>
                <br>
	   			<p class="intro-position">
	   				<span>A Software Developer</span>
	   			</p>

	   			<a class="button stroke" href="/about" title="">See More About Me</a>

	   		</div>  
            <ul class="intro-social">
                <li><a href="https://twitter.com/sodiadrhain" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://linkedin.com/in/adesoji-awobajo" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/sodiadrhain" target="_blank"><i class="fa fa-github"></i></a></li>
                <li><a href="https://instagram.com/sodiadrhain" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul> <!-- /intro-social -->
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   </section> <!-- /intro -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
@endsection
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Youssef DAMMOU">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Youssef DAMMOU</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{Asset('port-folio/assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{Asset('port-folio/assets/css/font-awesome.min.css')}}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{asset('port-folio/assets/css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('port-folio/assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('port-folio/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('port-folio/assets/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('port-folio/assets/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('port-folio/assets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('port-folio/assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('port-folio/assets/css/responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>

        @include('portfolio.header')

        @include('portfolio.about-me')

        @include('portfolio.education')

        @include('portfolio.skills')

        @include('portfolio.experiences')
        
        @include('portfolio.portfolio')
        
        @include('portfolio.contact-me')

        @include('portfolio.footer')

        <script src="{{asset('port-folio/assets/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('port-folio/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('port-folio/assets/js/bootsnav.js')}}"></script>
		
		<!-- jquery.sticky.js -->
		<script src="{{asset('port-folio/assets/js/jquery.sticky.js')}}"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="{{asset('port-folio/assets/js/progressbar.js')}}"></script>

		<!-- appear js -->
		<script src="{{asset('port-folio/assets/js/jquery.appear.js')}}"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="{{asset('port-folio/assets/js/owl.carousel.min.js')}}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{asset('port-folio/assets/js/custom.js')}}"></script>
        <script>
            window.onload = function () {
                // Récupérez la valeur de la variable de session "targetSection"
                const targetSectionId = "{{ session('targetSection') }}";

                // Vérifiez si la page contient un élément avec l'ID correspondant
                const targetSection = document.querySelector(targetSectionId);

                if (targetSection) {
                    // Faites défiler la page jusqu'à la section en douceur
                    window.scrollTo({
                        top: targetSection.offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        </script>

        
    </body>
	
</html>

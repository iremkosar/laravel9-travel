<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/swiper.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/magnific-popup.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    
     @yield('navbar')  
     @yield('header') 
     @yield('content') 
     @yield('footer') 
    
    


    <script src="{{ asset('assets') }}/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets') }}/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets') }}/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>

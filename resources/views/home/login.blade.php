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
    <link href="{{ asset('assets') }}/home/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/home/css/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/home/css/swiper.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/home/css/magnific-popup.css" rel="stylesheet">
	<link href="{{ asset('assets') }}/home/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets') }}/home/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
     @include('home._navbar')
    @include('home._headerLogin') 

    <script src="{{ asset('assets') }}/home/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets') }}/home/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets') }}/home/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets') }}/home/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets') }}/home/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets') }}/home/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets') }}/home/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets') }}/home/js/scripts.js"></script> <!-- Custom scripts -->
</body>

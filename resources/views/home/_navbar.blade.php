<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{ url('login') }}"><img src="{{ asset('assets') }}/home/images/logo.svg" alt="alternative"></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('home') }}">Explore<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#details">DETAILS</a>
                </li>
            </ul>
            <span class="nav-item">
                <a class="btn-outline-sm" href="{{ url('login') }}">LOG IN</a>
            </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->

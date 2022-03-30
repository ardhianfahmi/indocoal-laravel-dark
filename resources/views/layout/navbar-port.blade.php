@include('layout.head')

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- <h1 class="logo"><a href="/">INDOCOAL</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo"><img src="{{ ('/img/logo.png') }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li><a class="nav-link scrollto" href="/#services">Services</a></li>
                <li><a class="nav-link scrollto active" href="/#portfolio">Product</a></li>
                <li><a class="nav-link scrollto" href="/#pricing">Testimony</a></li>
                <li><a class="nav-link scrollto" href="/#team">Team</a></li>
                <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
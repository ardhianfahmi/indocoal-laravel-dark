@include('layout.head')

<body>

    @include('layout.navbar-port')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
                <h2>Sawdust Charcoal Briquettes</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ ('/img/portfolio/detail/portfolio-3-detail.jpg') }}" alt="">
                                </div>
                                <!-- 
                                <div class="swiper-slide">
                                    <img src="{{ ('/img/portfolio/portfolio-2.jpg') }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ ('/img/portfolio/portfolio-3.jpg') }}" alt="">
                                </div> -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Spesification</h3>
                            <ul>
                                <li><strong>Moiusture</strong>: 4.55%</li>
                                <li><strong>Ash Content</strong>: 11.75%</li>
                                <li><strong>Volatile Matter</strong>: 10.67%</li>
                                <li><strong>Fix Carbon</strong>: 73.03%</li>

                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Sawdust Briquettes Charcoal</h2>
                            <p>
                                Sawdust briquettes charcoal is a briquettes made from waste sawmill or waste of plywppd factory.
                                This product very nice for fuel. Usually our product sawdust charcoal briquettes use for BBQ fuel,
                                factory fuel, and used for new renewable energy

                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
    @include('layout.foot')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ ('/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ ('/vendor/aos/aos.js') }}"></script>
    <script src="{{ ('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ ('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ ('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ ('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ ('/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ ('/js/main.js') }}"></script>
</body>
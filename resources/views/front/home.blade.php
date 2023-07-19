<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('front/vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owlcarousel/owl.theme.default.min.css') }}">
    {{-- Boxicons --}}
    <link rel="stylesheet" href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent text-white">
            <div class="container container-fluid">
                <a class="navbar-brand fw-semibold" href="{{ url('/') }}">Adnan Maulana</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end fw-semibold" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolios">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutme">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <section class="d-flex flex-column hero container align-items-center justify-content-center"
            style="height: 90vh">
            <img src="{{ asset('images/nan.jpg') }}" class="img-profile mb-4" alt="">
            <h1 class="d-flex fw-normal">
                I'm a&nbsp;<strong>junior web developer</strong></h1>
            <h5>I'm currently learning&nbsp;<strong><span class="typewriter"></span></strong></h5>
            <div class="social-media fs-2">
                <a href="{{ url('https://instagram.com/pixelmind__') }}" target="_blank">
                    <i class='bx bxl-instagram'></i></a>
                <a href="{{ url('https://dribbble.com/adnanmaulana') }}" target="_blank">
                    <i class='bx bxl-dribbble'></i></a>
                <a href="{{ url('https://www.upwork.com/freelancers/adnanm30') }}" target="_blank">
                    <i class='bx bxl-upwork'></i></a>
                <a href="{{ url('https://github.com/vdnanmaulana') }}" target="_blank">
                    <i class='bx bxl-github'></i></a>
            </div>
        </section>
        <div class="position-relative">
            <div class="position-absolute bottom-0 end-50">
                <a href="#portfolios" class="down-to text-decoration-none text-black">
                    <i class="fa fa-arrow-down"></i>
                </a>
            </div>
        </div>
        {{--
        <section id="clients" class="clients container pt-5 p-0">
            <h3 class="px-3 fw-light">Some of <strong>the clients I have <br>works for</strong></h3>
            <div class="px-3 clients-logo">
                <div class="owl-carousel owl-theme" style="margin-top: 75px">
                    <div class="item">
                        <img src="{{ asset('images/Airbnb Logo.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/Google Logo.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/Microsoft Logo.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/FedEx Logo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="portfolios" class="portfolios container pt-5">
            <h3 class="px-3 fw-light">My <strong>Portfolios</strong></h3>
            {{-- Left --}}
            <div class="px-3 item-portfolio mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/docker-install.png') }}" width="100%"
                            style="object-fit: cover; border-radius: 16px" alt="">
                    </div>
                    <div class="d-flex col-lg-6">
                        <div class="d-flex flex-column justify-content-center">
                            <small class="mt-3 mb-2">WEB DEVELOPMENT</small>
                            <h4 class="fw-normal mb-3">Blogging System using Laravel</h4>
                            <p class="text-muted">Aplikasi yang dibuat menggunakan Laravel 10 dan Vite</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-success">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right --}}

            <div class="px-3 item-portfolio mt-5">
                <div class="d-flex flex-row-reverse row">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/docker-install.png') }}" width="100%"
                            style="object-fit: cover; border-radius: 16px" alt="">
                    </div>
                    <div class="d-flex col-lg-6">
                        <div class="d-flex flex-column justify-content-center">
                            <small class="mt-3 mb-2">WEB DEVELOPMENT</small>
                            <h4 class="fw-normal">Blogging System using Laravel</h4>
                            <p class="text-muted">Aplikasi yang dibuat menggunakan Laravel 10 dan Vite</p>
                            <div class="d-flex">
                                <a href="#" class="btn btn-success">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center" style="height:10vh">
                <small class="text-muted">Copyright &copy; 2023 Adnan Maulana. All rights reserved.</small>
            </div>
        </div>
    </footer>
    {{-- owl carousel --}}
    <script src="{{ asset('front/vendor/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 150,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PT. Sumber Mineral Global Abadi Tbk</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

    </style>
</head>

<body>
    <nav class="py-0 bg-primary  ">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i class="bi bi-telephone-fill">
                            021 – 250 0120</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2"><i
                            class="bi bi-envelope-fill"></i> info@sumberglobalenergy.com</a></li>

            </ul>
            {{-- <ul class="nav d-none d-lg-block d-xl-none">
                <li class="nav-item"><a href="#" class="nav-link link-light px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-light px-2">Sign up</a></li>
            </ul> --}}
        </div>
    </nav>
    <section class="bg-secondary">
        <div class="container border-bottom">

            <header class="py-2">
                <!-- Fixed navbar -->
                <nav class="navbar navbar-expand-xl">
                    <div class="container-fluid">
                        <a href="/" class="navbar-brand mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                            <img src="/img/logo-icon-smga.png" class="img-fluid me-2" style=" width: 40px; ">
                            <span class="fs-4 fw-bold text-white"> PT. Sumber Mineral Global Abadi Tbk</span>
                        </a>
                        <button class="navbar-toggler collapsed bg-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                            <div class="me-lg-auto"></div>
                            <ul class="navbar-nav mb-2 mb-md-0">
                                <li class="nav-item"><a href="#" class="nav-link active text-uppercase"
                                        aria-current="page">{{ __('frontend.beranda') }}</a></li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.tentang') }}</a>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.media') }}</a>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.investor') }}</a>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.esg') }}</a>
                                </li>
                                <li class="nav-item "><a href="#"
                                        class="nav-link fw-bold text-white text-uppercase">{{ __('frontend.kontak') }}</a>
                                </li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        EN
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/locale/en">English</a></li>
                                        <li><a class="dropdown-item" href="/locale/id">Indonesia</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Navbar -->


        </div>
    </section>
    <main class="container">
        <div class="py-3">
            <h3>Selamat Datang, Admin!</h3>
        </div>
        <div class="row">

            <div class="col-md-3">
                <ul class="list-group list-group-numbered">
                    <li class="list-group-item active">Active item</li>
                    <li class="list-group-item">Item</li>
                    <li class="list-group-item disabled">Disabled item</li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

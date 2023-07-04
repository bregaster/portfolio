<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio | Bregaster</title>
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('foto/favicon.png') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,40048,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <!-- aranoz css-->
    <link href="{{ asset('aranoz') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('aranoz') }}/css/magnific-popup.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">{{ $about->judul }}</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="{{ asset('foto') . '/' . get_meta_value('_foto') }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    {!! set_about_nama($about->judul) !!}
                </h1>
                <div class="subheading mb-5">
                    {{ get_meta_value('_kota') }} · {{ get_meta_value('_provinsi') }} ·
                    <a href="{{ get_meta_value('_email') }}">{{ get_meta_value('_email') }}</a>
                </div>
                <div class="lead mb-5">{!! $about->isi !!}</div>
                <div class="social-icons">
                    <a class="social-icon" href="{{ get_meta_value('_linkedin') }}"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_github') }}"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_twitter') }}"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_facebook') }}"><i
                            class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                @foreach ($experience as $item)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{ $item->judul }}</h3>
                        <div class="subheading mb-3">{{ $item->info1 }}</div>
                        {!! $item->isi !!}
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} -
                            {{ $item->tgl_akhir_indo }}</span></div>
                </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                @foreach ($education as $item)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{ $item->judul }}</h3>
                        <div class="subheading mb-3">{{ $item->info1 }}</div>
                        <div>{{ $item->info2 }}</div>
                        <p>{{ $item->info3 }}</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} -
                            {{ $item->tgl_akhir_indo }}</span></div>
                </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Projects-->
        <section class="resume-section" id="projects">
            <div class="resume-section-content">
                <h2 class="mb-5">Project</h2>
                <div class="single_product_list_slider">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin-left:10% ;margin-right:10% ; padding:10%">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                        viewBox="0 0 48.000000 48.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,48.000000) scale(0.002706,-0.002706)"
                                            fill="#fb3566" stroke="none">
                                            <path
                                                d="M1336 16323 c4 -692 8 -1259 9 -1261 7 -8 7572 -2444 7590 -2444 11
                                                                                                                0 1238 392 2726 871 1489 479 2709 871 2713 871 3 0 6 -414 6 -920 l0 -921
                                                                                                                -760 -949 c-419 -523 -764 -950 -768 -950 -5 0 -338 423 -741 940 -404 517
                                                                                                                -737 940 -741 940 -10 0 -1991 -628 -1996 -632 -6 -6 53 -8448 59 -8454 3 -3
                                                                                                                452 138 999 314 l993 319 6 74 c4 41 8 729 9 1529 2 800 6 2034 9 2741 l6
                                                                                                                1285 715 -778 c393 -428 717 -778 720 -778 3 0 309 363 680 806 l675 807 6
                                                                                                                -1109 c3 -610 7 -1684 8 -2387 l1 -1278 21 6 c600 191 2107 679 2113 685 9 9
                                                                                                                -11 11900 -20 11909 -2 2 -1691 -538 -3754 -1202 l-3750 -1206 -3760 1215
                                                                                                                c-2068 668 -3765 1214 -3770 1214 -8 0 -9 -376 -4 -1257z" />
                                            <path
                                                d="M1344 12202 c4 -1076 9 -2236 12 -2577 l6 -620 2447 -789 c1345 -434
                                                                                                                2450 -793 2454 -797 10 -8 -2 -1152 -12 -1167 -4 -7 -970 301 -2446 777
                                                                                                                l-2440 789 -3 -2611 c-1 -1436 0 -2612 2 -2615 4 -4 7377 -2387 7496 -2423 33
                                                                                                                -10 286 70 3690 1164 2010 647 3699 1190 3753 1207 l97 31 0 1101 c0 876 -3
                                                                                                                1099 -12 1095 -7 -2 -1696 -545 -3753 -1207 l-3740 -1202 -70 22 c-431 138
                                                                                                                -5049 1631 -5052 1633 -2 2 -2 199 -1 438 l3 435 2243 -724 c1233 -399 2246
                                                                                                                -721 2250 -717 4 3 7 1915 7 4248 l0 4241 -935 302 c-514 167 -941 303 -947
                                                                                                                303 -10 1 -13 -302 -13 -1480 0 -1180 -3 -1480 -12 -1476 -7 2 -583 188 -1280
                                                                                                                413 l-1268 409 0 1487 0 1486 -32 11 c-18 6 -557 175 -1198 376 -641 201
                                                                                                                -1185 372 -1208 380 l-44 14 6 -1957z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Yukmoco - Online Bookstore</h4>
                                    <a href="#yukmocoModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#yukmocoModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="80px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <g id="_2063730901952">
                                                    <path class="fil0"
                                                        d="M229 17l0 1 0 2 0 1 0 5 0 2 0 1 0 2 0 1 0 2c0,2 0,4 0,6 0,1 0,2 1,3 0,0 1,1 2,0 1,0 2,0 2,-1 1,-1 1,-2 1,-3l0 -20 51 0 0 52 -23 0c0,0 -1,0 -1,0 0,0 0,1 -1,1 0,0 0,0 0,1 0,0 0,0 0,0 0,1 0,1 0,2 0,0 1,1 1,1 0,0 1,0 1,0l2 0 2 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0c1,0 1,0 1,1 1,-1 1,-1 1,-1 1,0 2,0 3,-1 0,-1 0,-4 0,-5l0 -1 0 -5 0 -2 0 -1 0 -2 0 -30 0 -1 0 -2 0 -1 0 -5c0,-1 0,-1 0,-1 0,0 0,0 0,0 0,0 0,0 0,0l0 -2c0,-1 0,-1 0,-2 -1,0 -1,0 -1,-1l-1 0c-1,-1 -6,0 -8,0 -2,0 -5,0 -8,0l-1 0 -2 0 -1 0 -18 0 -1 0 -2 0 -1 0 -2 0 -1 0 -2 0 -1 0 -5 0 -2 0c-1,0 -4,-1 -4,0 -1,0 -1,0 -2,1 0,0 0,1 0,2z" />
                                                    <path class="fil0"
                                                        d="M230 50c0,0 0,0 0,0 0,0 0,1 0,1 0,0 -1,0 -1,0 0,1 0,1 0,2 0,0 0,1 0,1 0,1 0,3 0,4l0 1 0 11 0 2 0 0c0,1 0,2 0,2 0,1 0,1 0,1 1,1 2,1 3,1l5 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0c1,0 2,0 3,0 1,0 1,0 2,0 1,0 1,0 1,0 0,0 0,0 1,0 0,-1 0,-1 0,-1 0,-2 0,-4 0,-6l0 -12c0,-2 0,-4 0,-6l-1 0c0,-1 0,-1 -1,-1 -2,0 -15,0 -17,0 -1,0 -4,0 -6,0z" />
                                                    <path class="fil0"
                                                        d="M262 29c0,2 0,3 2,3 0,1 3,1 4,1 0,0 0,0 0,1 -1,0 -1,0 -1,0 -3,3 -9,9 -11,11 0,1 -1,1 -1,3l0 0c0,0 0,0 1,1 1,1 1,1 1,1l1 0c1,0 1,0 2,-1 1,0 1,-1 2,-2 3,-3 6,-6 10,-9 0,-1 0,-1 1,-1 0,1 0,4 0,5 1,1 2,2 3,1 1,0 1,0 1,0 1,0 1,-1 1,-1 1,0 1,-1 1,-2 0,-2 0,-8 0,-10 0,-2 0,-1 -1,-2 0,0 0,0 0,-1 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 0,0 -3,0 -4,0 -1,0 -2,0 -4,0 -3,0 -4,-1 -5,2z" />
                                                </g>
                                                <polygon class="fil1"
                                                    points="8,77 8,14 33,14 33,21 16,21 16,41 30,41 30,48 16,48 16,69 33,69 33,77 " />
                                                <polygon id="1" class="fil1"
                                                    points="63,77 54,51 53,51 44,77 36,77 48,45 36,14 45,14 54,38 54,38 63,14 71,14 59,45 71,77 " />
                                                <path id="2" class="fil1"
                                                    d="M77 14l16 0c4,0 7,0 9,2 1,2 3,4 3,7 1,2 1,6 1,11 0,4 0,8 -1,11 0,2 -2,5 -3,6 -2,2 -5,3 -9,3l-8 0 0 23 -8 0 0 -63zm15 33c2,0 3,-1 4,-1 1,-1 2,-3 2,-4 0,-2 0,-5 0,-8 0,-4 0,-6 0,-8 0,-2 -1,-3 -2,-4 -1,-1 -2,-1 -4,-1l-7 0 0 26 7 0z" />
                                                <path id="3" class="fil1"
                                                    d="M133 77l-3 -17 -14 0 -3 17 -8 0 13 -63 11 0 12 63 -8 0zm-10 -54l0 0 -6 30 12 0 -6 -30z" />
                                                <polygon id="4" class="fil1"
                                                    points="170,77 155,33 154,33 154,77 147,77 147,14 154,14 169,56 170,56 170,14 177,14 177,77 " />
                                                <path id="5" class="fil1"
                                                    d="M187 14l13 0c5,0 9,0 11,2 2,2 4,4 4,9 1,4 1,10 1,20 0,9 0,16 -1,20 0,4 -2,7 -4,9 -2,2 -6,3 -11,3l-13 0 0 -63zm13 55c3,0 5,0 6,-1 1,-1 1,-3 2,-6 0,-3 0,-9 0,-17 0,-8 0,-14 0,-17 -1,-3 -1,-5 -2,-6 -1,-1 -3,-1 -6,-1l-6 0 0 48 6 0z" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin-left:10% ;margin-right:10%; padding:10%">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="128" height="128"
                                        viewBox="0 0 128.000000 128.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,128.000000) scale(0.047407,-0.043986)"
                                            fill="#2f695d" stroke="none">
                                            <path d="M1143 2752 c-234 -186 -826 -657 -1001 -796 -68 -53 -122 -101 -120
                                                                                                    -105 4 -12 1054 -848 1109 -884 24 -16 26 -15 80 27 73 57 91 66 134 66 43 0
                                                                                                    62 -9 138 -67 l58 -45 37 28 c36 27 258 204 836 663 257 206 267 215 248 230
                                                                                                    -424 338 -1313 1041 -1316 1041 -3 0 -94 -71 -203 -158z m321 -374 c9 -12 16
                                                                                                    -30 16 -39 0 -10 19 -25 50 -38 47 -20 51 -21 75 -5 37 24 67 11 135 -57 62
                                                                                                    -64 70 -85 49 -133 -18 -39 14 -111 54 -123 43 -12 57 -44 57 -134 0 -84 -9
                                                                                                    -103 -60 -128 -42 -20 -72 -90 -52 -121 26 -42 15 -71 -51 -137 -51 -50 -70
                                                                                                    -63 -95 -63 -17 0 -34 5 -37 10 -9 14 -33 12 -82 -6 -30 -12 -43 -23 -43 -36
                                                                                                    0 -10 -11 -30 -25 -43 -22 -23 -32 -25 -110 -25 -92 0 -118 12 -131 64 -8 33
                                                                                                    -85 63 -120 47 -50 -23 -73 -14 -135 50 -67 70 -79 98 -55 134 15 22 15 28 -3
                                                                                                    72 -15 38 -24 49 -49 55 -40 11 -53 36 -57 112 -5 94 8 132 50 146 27 9 39 21
                                                                                                    55 57 18 41 18 47 4 75 -23 44 -12 67 60 136 66 64 84 71 125 48 21 -12 31
                                                                                                    -11 68 1 35 12 47 23 59 51 8 20 20 40 27 44 7 4 56 8 109 8 89 0 98 -2 112
                                                                                                    -22z" />
                                            <path
                                                d="M1275 2311 c-8 -37 -15 -43 -94 -76 -62 -26 -66 -26 -97 -11 -33 15
                                                                                                    -33 15 -79 -28 l-46 -43 16 -34 c16 -34 16 -37 -10 -100 -33 -79 -39 -86 -76
                                                                                                    -94 -28 -6 -29 -8 -29 -69 l0 -63 38 -15 c33 -13 40 -24 66 -89 28 -71 29 -74
                                                                                                    12 -103 l-17 -30 45 -45 c41 -41 48 -44 66 -33 29 18 58 15 127 -14 53 -23 64
                                                                                                    -32 74 -61 l11 -34 66 3 c61 3 67 5 70 25 4 30 38 55 106 78 48 16 61 17 89 7
                                                                                                    31 -12 33 -10 75 31 40 40 42 45 31 69 -14 32 -6 76 24 137 21 43 33 54 70 65
                                                                                                    14 4 17 17 17 71 0 65 0 66 -31 72 -27 5 -35 15 -60 70 -32 71 -36 103 -17
                                                                                                    133 11 17 7 25 -31 64 l-44 44 -32 -15 c-32 -15 -36 -14 -107 15 -63 26 -75
                                                                                                    35 -84 64 -11 32 -13 33 -77 36 -65 3 -65 3 -72 -27z m180 -210 c140 -64 201
                                                                                                    -239 130 -371 -88 -161 -300 -195 -427 -68 -48 48 -71 102 -76 176 -9 126 68
                                                                                                    236 188 273 48 14 143 9 185 -10z" />
                                            <path
                                                d="M1300 2051 c-75 -23 -125 -71 -149 -140 -44 -133 74 -273 220 -259
                                                                                                    98 10 179 99 179 197 -1 133 -131 238 -250 202z" />
                                            <path
                                                d="M2 958 c3 -782 4 -836 21 -861 12 -19 22 -25 32 -20 27 16 1045 828
                                                                                                    1045 834 0 4 -24 27 -52 51 -59 50 -1018 811 -1037 822 -9 6 -11 -187 -9 -826z" />
                                            <path
                                                d="M2435 1591 c-137 -110 -382 -305 -544 -433 -162 -129 -296 -238 -297
                                                                                                    -243 -2 -6 72 -69 164 -142 92 -72 329 -260 526 -417 335 -267 361 -285 377
                                                                                                    -270 10 9 23 38 28 65 13 58 16 1639 4 1639 -5 0 -120 -90 -258 -199z" />
                                            <path
                                                d="M1258 962 c-81 -61 -1138 -900 -1157 -918 -13 -12 -9 -16 22 -29 32
                                                                                                    -13 181 -15 1218 -15 1160 0 1259 2 1259 31 0 8 -1127 907 -1194 953 -21 14
                                                                                                    -49 26 -62 26 -13 0 -51 -22 -86 -48z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>SPPD - Mail Management</h4>
                                    <a href="#sppdModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#sppdModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="80px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <g id="_2063730901952">
                                                    <path class="fil0"
                                                        d="M229 17l0 1 0 2 0 1 0 5 0 2 0 1 0 2 0 1 0 2c0,2 0,4 0,6 0,1 0,2 1,3 0,0 1,1 2,0 1,0 2,0 2,-1 1,-1 1,-2 1,-3l0 -20 51 0 0 52 -23 0c0,0 -1,0 -1,0 0,0 0,1 -1,1 0,0 0,0 0,1 0,0 0,0 0,0 0,1 0,1 0,2 0,0 1,1 1,1 0,0 1,0 1,0l2 0 2 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0c1,0 1,0 1,1 1,-1 1,-1 1,-1 1,0 2,0 3,-1 0,-1 0,-4 0,-5l0 -1 0 -5 0 -2 0 -1 0 -2 0 -30 0 -1 0 -2 0 -1 0 -5c0,-1 0,-1 0,-1 0,0 0,0 0,0 0,0 0,0 0,0l0 -2c0,-1 0,-1 0,-2 -1,0 -1,0 -1,-1l-1 0c-1,-1 -6,0 -8,0 -2,0 -5,0 -8,0l-1 0 -2 0 -1 0 -18 0 -1 0 -2 0 -1 0 -2 0 -1 0 -2 0 -1 0 -5 0 -2 0c-1,0 -4,-1 -4,0 -1,0 -1,0 -2,1 0,0 0,1 0,2z" />
                                                    <path class="fil0"
                                                        d="M230 50c0,0 0,0 0,0 0,0 0,1 0,1 0,0 -1,0 -1,0 0,1 0,1 0,2 0,0 0,1 0,1 0,1 0,3 0,4l0 1 0 11 0 2 0 0c0,1 0,2 0,2 0,1 0,1 0,1 1,1 2,1 3,1l5 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0c1,0 2,0 3,0 1,0 1,0 2,0 1,0 1,0 1,0 0,0 0,0 1,0 0,-1 0,-1 0,-1 0,-2 0,-4 0,-6l0 -12c0,-2 0,-4 0,-6l-1 0c0,-1 0,-1 -1,-1 -2,0 -15,0 -17,0 -1,0 -4,0 -6,0z" />
                                                    <path class="fil0"
                                                        d="M262 29c0,2 0,3 2,3 0,1 3,1 4,1 0,0 0,0 0,1 -1,0 -1,0 -1,0 -3,3 -9,9 -11,11 0,1 -1,1 -1,3l0 0c0,0 0,0 1,1 1,1 1,1 1,1l1 0c1,0 1,0 2,-1 1,0 1,-1 2,-2 3,-3 6,-6 10,-9 0,-1 0,-1 1,-1 0,1 0,4 0,5 1,1 2,2 3,1 1,0 1,0 1,0 1,0 1,-1 1,-1 1,0 1,-1 1,-2 0,-2 0,-8 0,-10 0,-2 0,-1 -1,-2 0,0 0,0 0,-1 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 0,0 -3,0 -4,0 -1,0 -2,0 -4,0 -3,0 -4,-1 -5,2z" />
                                                </g>
                                                <polygon class="fil1"
                                                    points="8,77 8,14 33,14 33,21 16,21 16,41 30,41 30,48 16,48 16,69 33,69 33,77 " />
                                                <polygon id="1" class="fil1"
                                                    points="63,77 54,51 53,51 44,77 36,77 48,45 36,14 45,14 54,38 54,38 63,14 71,14 59,45 71,77 " />
                                                <path id="2" class="fil1"
                                                    d="M77 14l16 0c4,0 7,0 9,2 1,2 3,4 3,7 1,2 1,6 1,11 0,4 0,8 -1,11 0,2 -2,5 -3,6 -2,2 -5,3 -9,3l-8 0 0 23 -8 0 0 -63zm15 33c2,0 3,-1 4,-1 1,-1 2,-3 2,-4 0,-2 0,-5 0,-8 0,-4 0,-6 0,-8 0,-2 -1,-3 -2,-4 -1,-1 -2,-1 -4,-1l-7 0 0 26 7 0z" />
                                                <path id="3" class="fil1"
                                                    d="M133 77l-3 -17 -14 0 -3 17 -8 0 13 -63 11 0 12 63 -8 0zm-10 -54l0 0 -6 30 12 0 -6 -30z" />
                                                <polygon id="4" class="fil1"
                                                    points="170,77 155,33 154,33 154,77 147,77 147,14 154,14 169,56 170,56 170,14 177,14 177,77 " />
                                                <path id="5" class="fil1"
                                                    d="M187 14l13 0c5,0 9,0 11,2 2,2 4,4 4,9 1,4 1,10 1,20 0,9 0,16 -1,20 0,4 -2,7 -4,9 -2,2 -6,3 -11,3l-13 0 0 -63zm13 55c3,0 5,0 6,-1 1,-1 1,-3 2,-6 0,-3 0,-9 0,-17 0,-8 0,-14 0,-17 -1,-3 -1,-5 -2,-6 -1,-1 -3,-1 -6,-1l-6 0 0 48 6 0z" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin-left:10% ;margin-right:10%; padding:10%">
                                    <svg version="1.1" id="Layer_1" width="128" height="128"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 122.88 114.26"
                                        style="enable-background:new 0 0 122.88 114.26" xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill-rule: evenodd;
                                                clip-rule: evenodd;
                                            }
                                        </style>
                                        <g fill="#fbca1e">
                                            <path class="st0"
                                                d="M0,104.77h14.74V19.01c0-0.81,0.67-1.48,1.49-1.48h2.98l1.41-5.75l-5.46-4.62l7.13-0.53L25,0l2.71,6.62 l7.13,0.53l-5.46,4.62l1.41,5.76c4.28,0,8.51,0.01,12.7,0.01l1.41-5.77l-5.46-4.62l7.13-0.53L49.3,0L52,6.62l7.13,0.53l-5.46,4.62 l1.42,5.78l12.69,0.02l1.42-5.8l-5.46-4.62l7.13-0.53L73.59,0l2.71,6.62l7.13,0.53l-5.46,4.62l1.42,5.81 c4.19,0,8.41,0.01,12.68,0.01l1.42-5.82l-5.46-4.62l7.13-0.53L97.88,0l2.71,6.62l7.13,0.53l-5.46,4.62l1.43,5.83l2.96,0 c0.82,0,1.48,0.67,1.48,1.48v85.68h14.74v9.49H0V104.77L0,104.77z M20.85,17.53c2.8,0,5.57,0,8.31,0L25,14.96L20.85,17.53 L20.85,17.53z M45.11,17.55l8.38,0.01l-4.2-2.6L45.11,17.55L45.11,17.55z M69.36,17.58l8.48,0.01l-4.25-2.63L69.36,17.58 L69.36,17.58z M93.61,17.6c2.83,0,5.67,0,8.54,0l-4.27-2.64L93.61,17.6L93.61,17.6z M27.99,84.32h8.42c0.27,0,0.5,0.22,0.5,0.5 v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49C27.5,84.54,27.72,84.32,27.99,84.32L27.99,84.32z M85.87,84.32h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49 C85.37,84.54,85.59,84.32,85.87,84.32L85.87,84.32z M71.15,53.74h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42 c-0.27,0-0.5-0.22-0.5-0.5v-8.49C70.65,53.97,70.87,53.74,71.15,53.74L71.15,53.74z M85.87,53.74h8.42c0.27,0,0.5,0.22,0.5,0.5 v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49C85.37,53.97,85.59,53.74,85.87,53.74L85.87,53.74z M85.87,69.03h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49 C85.37,69.26,85.59,69.03,85.87,69.03L85.87,69.03z M71.15,69.03h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42 c-0.27,0-0.5-0.22-0.5-0.5v-8.49C70.65,69.26,70.87,69.03,71.15,69.03L71.15,69.03z M71.15,84.32h8.42c0.27,0,0.5,0.22,0.5,0.5 v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49C70.65,84.54,70.87,84.32,71.15,84.32L71.15,84.32z M42.71,53.74h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49 C42.21,53.97,42.44,53.74,42.71,53.74L42.71,53.74z M27.99,53.74h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42 c-0.27,0-0.5-0.22-0.5-0.5v-8.49C27.5,53.97,27.72,53.74,27.99,53.74L27.99,53.74z M27.99,69.03h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49 c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49C27.5,69.26,27.72,69.03,27.99,69.03L27.99,69.03z M42.71,69.03 h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42c-0.27,0-0.5-0.22-0.5-0.5v-8.49 C42.21,69.26,42.44,69.03,42.71,69.03L42.71,69.03z M42.71,84.32h8.42c0.27,0,0.5,0.22,0.5,0.5v8.49c0,0.27-0.22,0.5-0.5,0.5h-8.42 c-0.27,0-0.5-0.22-0.5-0.5v-8.49C42.21,84.54,42.44,84.32,42.71,84.32L42.71,84.32z M23.95,26.36h4.71v5.49h5.16v-5.49h4.74v15.72 h-4.74v-6.37h-5.16v6.37h-4.71V26.36L23.95,26.36z M41.09,34.23c0-2.57,0.69-4.56,2.08-5.99c1.39-1.43,3.32-2.14,5.81-2.14 c2.54,0,4.5,0.7,5.88,2.11c1.38,1.41,2.06,3.37,2.06,5.9c0,1.84-0.3,3.34-0.9,4.52c-0.6,1.17-1.47,2.09-2.61,2.75 c-1.14,0.66-2.55,0.98-4.25,0.98c-1.72,0-3.15-0.28-4.28-0.85c-1.13-0.57-2.04-1.46-2.74-2.68C41.45,37.6,41.09,36.07,41.09,34.23 L41.09,34.23z M45.81,34.25c0,1.58,0.29,2.73,0.86,3.42c0.58,0.69,1.36,1.04,2.35,1.04c1.01,0,1.8-0.34,2.36-1.02 c0.56-0.68,0.84-1.9,0.84-3.66c0-1.48-0.29-2.56-0.87-3.24c-0.58-0.68-1.37-1.03-2.36-1.03c-0.95,0-1.72,0.35-2.3,1.04 C46.1,31.5,45.81,32.65,45.81,34.25L45.81,34.25z M57.84,26.36H72.2v3.89h-4.82v11.84h-4.71V30.25h-4.82V26.36L57.84,26.36z M74.31,26.36h12.63v3.36h-7.89v2.5h7.32v3.21h-7.32v3.1h8.13v3.56H74.31V26.36L74.31,26.36z M89.72,26.36h4.71v11.86h7.38v3.87 H89.72V26.36L89.72,26.36z M65.21,47.2h35.53c0.59,0,1.07,0.57,1.07,1.27V99.7c0,0.7-0.48,1.27-1.07,1.27H65.21 c-0.59,0-1.07-0.57-1.07-1.27V48.48C64.14,47.77,64.62,47.2,65.21,47.2L65.21,47.2z M21.98,47.13h35.53c0.59,0,1.07,0.57,1.07,1.27 v51.3c0,0.7-0.48,1.27-1.07,1.27H21.98c-0.59,0-1.07-0.57-1.07-1.27V48.4C20.91,47.7,21.39,47.13,21.98,47.13L21.98,47.13z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Alexis - Hotel Booking System</h4>
                                    <a href="#hotelModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#hotelModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="80px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <g id="_2063730901952">
                                                    <path class="fil0"
                                                        d="M229 17l0 1 0 2 0 1 0 5 0 2 0 1 0 2 0 1 0 2c0,2 0,4 0,6 0,1 0,2 1,3 0,0 1,1 2,0 1,0 2,0 2,-1 1,-1 1,-2 1,-3l0 -20 51 0 0 52 -23 0c0,0 -1,0 -1,0 0,0 0,1 -1,1 0,0 0,0 0,1 0,0 0,0 0,0 0,1 0,1 0,2 0,0 1,1 1,1 0,0 1,0 1,0l2 0 2 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0 1 0 2 0c1,0 1,0 1,1 1,-1 1,-1 1,-1 1,0 2,0 3,-1 0,-1 0,-4 0,-5l0 -1 0 -5 0 -2 0 -1 0 -2 0 -30 0 -1 0 -2 0 -1 0 -5c0,-1 0,-1 0,-1 0,0 0,0 0,0 0,0 0,0 0,0l0 -2c0,-1 0,-1 0,-2 -1,0 -1,0 -1,-1l-1 0c-1,-1 -6,0 -8,0 -2,0 -5,0 -8,0l-1 0 -2 0 -1 0 -18 0 -1 0 -2 0 -1 0 -2 0 -1 0 -2 0 -1 0 -5 0 -2 0c-1,0 -4,-1 -4,0 -1,0 -1,0 -2,1 0,0 0,1 0,2z" />
                                                    <path class="fil0"
                                                        d="M230 50c0,0 0,0 0,0 0,0 0,1 0,1 0,0 -1,0 -1,0 0,1 0,1 0,2 0,0 0,1 0,1 0,1 0,3 0,4l0 1 0 11 0 2 0 0c0,1 0,2 0,2 0,1 0,1 0,1 1,1 2,1 3,1l5 0 1 0 2 0 1 0 2 0 2 0 1 0 2 0c1,0 2,0 3,0 1,0 1,0 2,0 1,0 1,0 1,0 0,0 0,0 1,0 0,-1 0,-1 0,-1 0,-2 0,-4 0,-6l0 -12c0,-2 0,-4 0,-6l-1 0c0,-1 0,-1 -1,-1 -2,0 -15,0 -17,0 -1,0 -4,0 -6,0z" />
                                                    <path class="fil0"
                                                        d="M262 29c0,2 0,3 2,3 0,1 3,1 4,1 0,0 0,0 0,1 -1,0 -1,0 -1,0 -3,3 -9,9 -11,11 0,1 -1,1 -1,3l0 0c0,0 0,0 1,1 1,1 1,1 1,1l1 0c1,0 1,0 2,-1 1,0 1,-1 2,-2 3,-3 6,-6 10,-9 0,-1 0,-1 1,-1 0,1 0,4 0,5 1,1 2,2 3,1 1,0 1,0 1,0 1,0 1,-1 1,-1 1,0 1,-1 1,-2 0,-2 0,-8 0,-10 0,-2 0,-1 -1,-2 0,0 0,0 0,-1 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 0,0 -3,0 -4,0 -1,0 -2,0 -4,0 -3,0 -4,-1 -5,2z" />
                                                </g>
                                                <polygon class="fil1"
                                                    points="8,77 8,14 33,14 33,21 16,21 16,41 30,41 30,48 16,48 16,69 33,69 33,77 " />
                                                <polygon id="1" class="fil1"
                                                    points="63,77 54,51 53,51 44,77 36,77 48,45 36,14 45,14 54,38 54,38 63,14 71,14 59,45 71,77 " />
                                                <path id="2" class="fil1"
                                                    d="M77 14l16 0c4,0 7,0 9,2 1,2 3,4 3,7 1,2 1,6 1,11 0,4 0,8 -1,11 0,2 -2,5 -3,6 -2,2 -5,3 -9,3l-8 0 0 23 -8 0 0 -63zm15 33c2,0 3,-1 4,-1 1,-1 2,-3 2,-4 0,-2 0,-5 0,-8 0,-4 0,-6 0,-8 0,-2 -1,-3 -2,-4 -1,-1 -2,-1 -4,-1l-7 0 0 26 7 0z" />
                                                <path id="3" class="fil1"
                                                    d="M133 77l-3 -17 -14 0 -3 17 -8 0 13 -63 11 0 12 63 -8 0zm-10 -54l0 0 -6 30 12 0 -6 -30z" />
                                                <polygon id="4" class="fil1"
                                                    points="170,77 155,33 154,33 154,77 147,77 147,14 154,14 169,56 170,56 170,14 177,14 177,77 " />
                                                <path id="5" class="fil1"
                                                    d="M187 14l13 0c5,0 9,0 11,2 2,2 4,4 4,9 1,4 1,10 1,20 0,9 0,16 -1,20 0,4 -2,7 -4,9 -2,2 -6,3 -11,3l-13 0 0 -63zm13 55c3,0 5,0 6,-1 1,-1 1,-3 2,-6 0,-3 0,-9 0,-17 0,-8 0,-14 0,-17 -1,-3 -1,-5 -2,-6 -1,-1 -3,-1 -6,-1l-6 0 0 48 6 0z" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Certificate</div>
                <div class="">
                    <ul class="unordered-list">
                        <li>Microsoft Office Desktop Application, Trust Training Partners, January 2023</li>
                        <li>The Fundamental of Digital Marketing, Google Digital Unlocked, March 2023</li>
                        <li>Intro to Data Analytics, RevoU, February 2023</li>
                    </ul>
                </div>

                <div class="subheading mb-3">Tools</div>
                <div class="single_product_list_slider">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#fff"
                                            d="M24 4.050000000000001A19.95 19.95 0 1 0 24 43.95A19.95 19.95 0 1 0 24 4.050000000000001Z">
                                        </path>
                                        <path fill="#01579b"
                                            d="M8.001,24c0,6.336,3.68,11.806,9.018,14.4L9.385,17.488C8.498,19.479,8.001,21.676,8.001,24z M34.804,23.194c0-1.977-1.063-3.35-1.67-4.412c-0.813-1.329-1.576-2.437-1.576-3.752c0-1.465,1.471-2.84,3.041-2.84 c0.071,0,0.135,0.006,0.206,0.008C31.961,9.584,28.168,8,24.001,8c-5.389,0-10.153,2.666-13.052,6.749 c0.228,0.074,0.307,0.039,0.611,0.039c1.669,0,4.264-0.2,4.264-0.2c0.86-0.057,0.965,1.212,0.099,1.316c0,0-0.864,0.105-1.828,0.152 l5.931,17.778l3.5-10.501l-2.603-7.248c-0.861-0.046-1.679-0.152-1.679-0.152c-0.862-0.056-0.762-1.375,0.098-1.316 c0,0,2.648,0.2,4.217,0.2c1.675,0,4.264-0.2,4.264-0.2c0.861-0.057,0.965,1.212,0.104,1.316c0,0-0.87,0.105-1.832,0.152l5.891,17.61 l1.599-5.326C34.399,26.289,34.804,24.569,34.804,23.194z M24.281,25.396l-4.8,13.952c1.436,0.426,2.95,0.652,4.52,0.652 c1.861,0,3.649-0.324,5.316-0.907c-0.04-0.071-0.085-0.143-0.118-0.22L24.281,25.396z M38.043,16.318 c0.071,0.51,0.108,1.059,0.108,1.645c0,1.628-0.306,3.451-1.219,5.737l-4.885,14.135C36.805,35.063,40,29.902,40,24 C40,21.219,39.289,18.604,38.043,16.318z">
                                        </path>
                                        <path fill="#01579b"
                                            d="M4,24c0,11.024,8.97,20,19.999,20C35.03,44,44,35.024,44,24S35.03,4,24,4S4,12.976,4,24z M5.995,24 c0-9.924,8.074-17.999,18.004-17.999S42.005,14.076,42.005,24S33.929,42.001,24,42.001C14.072,42.001,5.995,33.924,5.995,24z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Wordpress</h4>
                                    <a href="https://wordpress.org/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg width="48px" height="48px" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">

                                        <g fill="#ED6B1E">

                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />

                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />

                                        </g>

                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Alibaba Cloud</h4>
                                    <a href="https://www.alibabacloud.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#ff6f00"
                                            d="M37,42H11c-2.761,0-5-2.239-5-5V11c0-2.761,2.239-5,5-5h26c2.761,0,5,2.239,5,5v26 C42,39.761,39.761,42,37,42z">
                                        </path>
                                        <path fill="#fff"
                                            d="M33.5,22h-1c-0.828,0-1.5-0.672-1.5-1.5V20c0-3.866-3.134-7-7-7h-4c-3.866,0-7,3.134-7,7v8 c0,3.866,3.134,7,7,7h8c3.866,0,7-3.134,7-7v-4.5C35,22.672,34.328,22,33.5,22z M20,19h5c0.553,0,1,0.448,1,1s-0.447,1-1,1h-5 c-0.553,0-1-0.448-1-1S19.447,19,20,19z M28,29h-8c-0.553,0-1-0.448-1-1s0.447-1,1-1h8c0.553,0,1,0.448,1,1S28.553,29,28,29z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Blogger</h4>
                                    <a href="https://www.blogger.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#e64a19"
                                            d="M7 12L29 4 41 7 41 41 29 44 7 36 29 39 29 10 15 13 15 33 7 36z"></path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Microsoft Office</h4>
                                    <a href="https://www.microsoft.com/id-id/microsoft-365/microsoft-office"
                                        class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <rect width="1.5" height="9" x="22.75" y="1" fill="#78909c"></rect>
                                        <rect width="9" height="1.5" x="19" y="4.75" fill="#78909c"></rect>
                                        <rect width="1.5" height="9" x="40.75" y="19" fill="#5c6bc0"></rect>
                                        <rect width="9" height="1.5" x="37" y="22.75" fill="#5c6bc0"></rect>
                                        <rect width="1.5" height="9" x="4.75" y="19" fill="#78909c"></rect>
                                        <rect width="9" height="1.5" x="1" y="22.75" fill="#78909c"></rect>
                                        <rect width="1.5" height="9" x="22.75" y="37" fill="#5c6bc0"></rect>
                                        <rect width="9" height="1.5" x="19" y="40.75" fill="#5c6bc0"></rect>
                                        <rect width="17" height="3" x="15" y="22" fill="#e8762d"></rect>
                                        <rect width="3" height="17" x="22" y="15" fill="#e8762d"></rect>
                                        <rect width="2" height="14" x="11" y="6" fill="#ffa000"></rect>
                                        <rect width="14" height="2" x="5" y="12" fill="#ffa000"></rect>
                                        <rect width="2" height="14" x="34" y="6" fill="#607d8b"></rect>
                                        <rect width="14" height="2" x="28" y="12" fill="#607d8b"></rect>
                                        <rect width="2" height="14" x="11" y="27" fill="#c62828"></rect>
                                        <rect width="14" height="2" x="5" y="33" fill="#c62828"></rect>
                                        <rect width="2" height="14" x="34" y="27" fill="#0d47a1"></rect>
                                        <rect width="14" height="2" x="28" y="33" fill="#0d47a1"></rect>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Tableau</h4>
                                    <a href="https://www.tableau.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <linearGradient id="goqfu1ZNmEnUrQDJEQ1bUa_l75OEUJkPAk4_gr1" x1="10.458"
                                            x2="26.314" y1="12.972" y2="26.277" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#26abe7"></stop>
                                            <stop offset="1" stop-color="#086dbf"></stop>
                                        </linearGradient>
                                        <path fill="url(#goqfu1ZNmEnUrQDJEQ1bUa_l75OEUJkPAk4_gr1)"
                                            d="M24.047,5c-1.555,0.005-2.633,0.142-3.936,0.367c-3.848,0.67-4.549,2.077-4.549,4.67V14h9v2 H15.22h-4.35c-2.636,0-4.943,1.242-5.674,4.219c-0.826,3.417-0.863,5.557,0,9.125C5.851,32.005,7.294,34,9.931,34h3.632v-5.104 c0-2.966,2.686-5.896,5.764-5.896h7.236c2.523,0,5-1.862,5-4.377v-8.586c0-2.439-1.759-4.263-4.218-4.672 C27.406,5.359,25.589,4.994,24.047,5z M19.063,9c0.821,0,1.5,0.677,1.5,1.502c0,0.833-0.679,1.498-1.5,1.498 c-0.837,0-1.5-0.664-1.5-1.498C17.563,9.68,18.226,9,19.063,9z">
                                        </path>
                                        <linearGradient id="goqfu1ZNmEnUrQDJEQ1bUb_l75OEUJkPAk4_gr2" x1="35.334"
                                            x2="23.517" y1="37.911" y2="21.034" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#feb705"></stop>
                                            <stop offset="1" stop-color="#ffda1c"></stop>
                                        </linearGradient>
                                        <path fill="url(#goqfu1ZNmEnUrQDJEQ1bUb_l75OEUJkPAk4_gr2)"
                                            d="M23.078,43c1.555-0.005,2.633-0.142,3.936-0.367c3.848-0.67,4.549-2.077,4.549-4.67V34h-9v-2 h9.343h4.35c2.636,0,4.943-1.242,5.674-4.219c0.826-3.417,0.863-5.557,0-9.125C41.274,15.995,39.831,14,37.194,14h-3.632v5.104 c0,2.966-2.686,5.896-5.764,5.896h-7.236c-2.523,0-5,1.862-5,4.377v8.586c0,2.439,1.759,4.263,4.218,4.672 C19.719,42.641,21.536,43.006,23.078,43z M28.063,39c-0.821,0-1.5-0.677-1.5-1.502c0-0.833,0.679-1.498,1.5-1.498 c0.837,0,1.5,0.664,1.5,1.498C29.563,38.32,28.899,39,28.063,39z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Python</h4>
                                    <a href="https://www.python.org/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 64 64">
                                        <path fill="#b5c4e0"
                                            d="M32 14A31 18.174 0 1 0 32 50.348A31 18.174 0 1 0 32 14Z"></path>
                                        <path fill="#ced9ed"
                                            d="M32,14C14.879,14,1,22.137,1,32.174s13.879,18.174,31,18.174s31-8.137,31-18.174S49.121,14,32,14z M32,45.348c-15.322,0-26-6.942-26-13.174C6,25.943,16.678,19,32,19s26,6.943,26,13.174C58,38.405,47.322,45.348,32,45.348z">
                                        </path>
                                        <path fill="#8d6c9e"
                                            d="M42.435 26.435l-2.733 14.826h3.566l.71-4.043h2.219c4.645 0 7.172-1.076 8.117-5.062.813-3.425-1.264-5.72-4.69-5.72H42.435zM46.786 34.522h-2.305l1.018-5.391h2.778c2.302 0 2.786 1.038 2.666 2.193C50.634 34.297 48.78 34.522 46.786 34.522zM14.13 26.435l-2.733 14.826h3.566l.71-4.043h2.219c4.645 0 7.172-1.076 8.117-5.062.813-3.425-1.264-5.72-4.69-5.72H14.13zM18.481 34.522h-2.305l1.018-5.391h2.778c2.302 0 2.786 1.038 2.666 2.193C22.329 34.297 20.476 34.522 18.481 34.522zM39.311 27.415c-.762-.698-2.104-.98-4.105-.98h-3.153l1.124-5.391H29.64l-3.379 16.174h3.538l1.706-8.087h2.828c.902 0 1.497.151 1.775.449.276.301.337.867.177 1.686l-1.291 5.952h3.593l1.399-6.44C40.286 29.234 40.059 28.102 39.311 27.415z">
                                        </path>
                                        <path fill="#8d6c9f"
                                            d="M32 51.348c-17.645 0-32-8.602-32-19.174S14.355 13 32 13c17.645 0 32 8.602 32 19.174S49.645 51.348 32 51.348zM32 15C15.458 15 2 22.704 2 32.174s13.458 17.174 30 17.174 30-7.704 30-17.174S48.542 15 32 15zM58.693 50.667c-.33 0-.653-.163-.845-.463l-1.074-1.687c-.297-.466-.159-1.084.307-1.381.464-.296 1.083-.16 1.381.307l1.074 1.687c.297.466.159 1.084-.307 1.381C59.063 50.616 58.877 50.667 58.693 50.667zM54.446 53.004c-.375 0-.734-.212-.905-.573l-.854-1.809c-.235-.499-.021-1.096.478-1.331.501-.237 1.095-.021 1.331.478l.854 1.809c.235.499.021 1.096-.478 1.331C54.734 52.974 54.589 53.004 54.446 53.004zM49.969 54.817c-.414 0-.802-.26-.945-.673l-.654-1.891c-.181-.522.097-1.092.618-1.272s1.091.097 1.272.618l.654 1.891c.181.522-.097 1.092-.618 1.272C50.188 54.8 50.077 54.817 49.969 54.817zM45.344 56.171c-.451 0-.86-.308-.971-.766l-.47-1.944c-.13-.536.2-1.077.737-1.206.529-.131 1.076.2 1.206.737l.47 1.944c.13.536-.2 1.077-.737 1.206C45.501 56.162 45.422 56.171 45.344 56.171zM40.621 57.093c-.487 0-.914-.356-.988-.853l-.296-1.979c-.081-.546.295-1.055.842-1.137.552-.074 1.056.296 1.137.842l.296 1.979c.081.546-.295 1.055-.842 1.137C40.72 57.089 40.67 57.093 40.621 57.093zM35.841 57.596c-.522 0-.963-.406-.997-.936l-.129-1.996c-.035-.551.383-1.026.934-1.063.544-.027 1.027.383 1.063.934l.129 1.996c.035.551-.383 1.026-.934 1.063C35.885 57.595 35.862 57.596 35.841 57.596z">
                                        </path>
                                        <g>
                                            <path fill="#8d6c9f"
                                                d="M21.862,21.161c-0.448,0-0.856-0.304-0.97-0.759c-0.133-0.536,0.194-1.079,0.729-1.212 c1.345-0.334,2.766-0.618,4.224-0.845c0.547-0.084,1.057,0.289,1.142,0.834c0.085,0.546-0.289,1.057-0.834,1.142 c-1.4,0.218-2.762,0.49-4.049,0.81C22.023,21.152,21.942,21.161,21.862,21.161z">
                                            </path>
                                        </g>
                                        <g>
                                            <path fill="#8d6c9f"
                                                d="M6.999,29.997c-0.163,0-0.328-0.04-0.481-0.124c-0.481-0.266-0.659-0.869-0.396-1.352 c0.109-0.2,2.767-4.925,11.424-8.091c0.516-0.191,1.092,0.077,1.282,0.596c0.19,0.519-0.077,1.093-0.596,1.282 c-7.884,2.883-10.334,7.133-10.357,7.175C7.692,29.812,7.35,29.997,6.999,29.997z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>PHP</h4>
                                    <a href="https://www.php.net/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <img width="48" height="48"
                                        src="https://img.icons8.com/external-others-inmotus-design/67/external-Corel-Draw-applications-and-programs-others-inmotus-design.png"
                                        alt="external-Corel-Draw-applications-and-programs-others-inmotus-design" />
                                </div>

                                <div class="single_product_text">
                                    <h4>Corel Draw</h4>
                                    <a href="https://www.coreldraw.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#03A9F4"
                                            d="M6,10c0-2.209,1.791-4,4-4h28c2.209,0,4,1.791,4,4v28c0,2.209-1.791,4-4,4H10c-2.209,0-4-1.791-4-4V10z">
                                        </path>
                                        <path fill="#020F16"
                                            d="M20.016,19.174h-2.002v4.434h1.973c0.547,0,0.97-0.179,1.27-0.537s0.449-0.879,0.449-1.563c0-0.71-0.153-1.274-0.459-1.694S20.53,19.181,20.016,19.174z">
                                        </path>
                                        <path fill="#020F16"
                                            d="M9,9v30h30V9H9z M23.365,24.789C22.539,25.597,21.393,26,19.928,26h-1.914v5h-2.871V16.781h4.844c1.406,0,2.528,0.437,3.364,1.309s1.255,2.005,1.255,3.398S24.192,23.981,23.365,24.789z M32.682,30.336c-0.709,0.573-1.641,0.859-2.793,0.859c-0.775,0-1.459-0.151-2.051-0.454s-1.057-0.725-1.392-1.265s-0.503-1.123-0.503-1.748h2.627c0.014,0.481,0.125,0.843,0.337,1.084s0.558,0.361,1.04,0.361c0.742,0,1.113-0.335,1.113-1.006c0-0.234-0.112-0.451-0.337-0.649S30,27.052,29.225,26.713c-1.139-0.462-1.922-0.94-2.349-1.436s-0.64-1.11-0.64-1.846c0-0.925,0.334-1.688,1.001-2.29s1.552-0.903,2.651-0.903c1.158,0,2.086,0.3,2.783,0.898s1.045,1.403,1.045,2.412h-2.764c0-0.859-0.357-1.289-1.074-1.289c-0.293,0-0.533,0.091-0.723,0.273s-0.283,0.437-0.283,0.762c0,0.234,0.104,0.441,0.313,0.62s0.699,0.435,1.475,0.767c1.127,0.417,1.922,0.881,2.388,1.392s0.698,1.174,0.698,1.987C33.746,29.005,33.391,29.763,32.682,30.336z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Photoshop</h4>
                                    <a href="https://www.adobe.com/id_id/products/photoshop.html" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg width="48px" height="48px" viewBox="-14 0 284 284" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        preserveAspectRatio="xMidYMid">
                                        <g>
                                            <path
                                                d="M256.003159,247.933017 C256.055907,258.030289 251.77298,267.664804 244.241349,274.390297 C236.709718,281.11579 226.653817,284.285366 216.626905,283.094249 C198.58347,280.424364 185.360959,264.722632 185.800619,246.488035 L185.800619,36.8452103 C185.364944,18.5907614 198.619678,2.88144681 216.687112,0.238996295 C226.704325,-0.933476157 236.743571,2.24455542 244.261279,8.9678962 C251.778988,15.691237 256.053811,25.3147619 256.003159,35.4002282 L256.003159,247.933017 Z"
                                                fill="#F9AB00">

                                            </path>
                                            <path
                                                d="M35.1010243,213.193238 C54.4867848,213.193238 70.2020487,228.908502 70.2020487,248.294263 C70.2020487,267.680023 54.4867848,283.395287 35.1010243,283.395287 C15.7152639,283.395287 0,267.680023 0,248.294263 C0,228.908502 15.7152639,213.193238 35.1010243,213.193238 Z M127.459466,106.806429 C107.981896,107.874068 92.8698765,124.212107 93.3217628,143.713681 L93.3217628,237.998765 C93.3217628,263.58699 104.580582,279.120548 121.077461,282.431965 C131.434034,284.530959 142.185473,281.860819 150.356699,275.160414 C158.527925,268.460009 163.252393,258.439904 163.222912,247.872809 L163.222912,142.088076 C163.240039,132.641687 159.462041,123.584285 152.737293,116.950107 C146.012546,110.315928 136.904752,106.661084 127.459466,106.806429 L127.459466,106.806429 Z"
                                                fill="#E37400">

                                            </path>
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Google Analytics</h4>
                                    <a href="https://analytics.google.com/analytics/web/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                        viewBox="0 0 48.000000 48.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,48.000000) scale(0.003834,-0.003834)"
                                            fill="#ff5402" stroke="none">
                                            <path d="M860 12513 c-119 -5 -291 -24 -343 -40 -97 -28 -188 -83 -264 -159
                                            -121 -122 -195 -302 -228 -554 -12 -88 -14 -969 -15 -5465 -1 -3827 2 -5394
                                            10 -5480 51 -557 199 -719 725 -792 111 -16 530 -17 5385 -21 3610 -2 5325 0
                                            5457 7 681 38 848 187 914 816 16 160 16 10811 -1 10951 -44 371 -192 578
                                            -475 668 -181 58 -192 59 -950 62 -802 4 -10116 10 -10215 7z m3545 -2783
                                            c212 -18 297 -64 344 -186 46 -119 44 -61 45 -2399 1 -2419 -2 -2295 56 -2573
                                            77 -371 253 -662 542 -894 113 -91 174 -128 282 -173 344 -142 856 -142 1271
                                            2 223 77 374 169 515 312 240 242 365 550 427 1051 17 135 18 297 19 2330 1
                                            2374 -1 2261 54 2376 44 90 135 137 293 154 120 13 640 13 787 0 224 -20 318
                                            -71 357 -197 17 -55 18 -169 18 -2298 0 -2366 1 -2325 -46 -2664 -38 -275
                                            -105 -557 -185 -779 -54 -151 -179 -413 -254 -532 -295 -472 -724 -820 -1295
                                            -1053 -614 -251 -1378 -283 -2175 -91 -715 171 -1127 410 -1545 894 -127 147
                                            -239 326 -295 470 -11 30 -39 93 -62 139 -236 487 -332 1473 -313 3186 5 380
                                            9 1100 11 1600 2 925 5 1011 41 1120 39 120 125 186 268 204 98 12 695 13 840
                                            1z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Ubbersuggest</h4>
                                    <a href="https://neilpatel.com/ubersuggest/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <linearGradient id="rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1" x1="4" x2="44"
                                            y1="23.508" y2="23.508" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#4c4c4c"></stop>
                                            <stop offset="1" stop-color="#343434"></stop>
                                        </linearGradient>
                                        <path fill="url(#rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1)"
                                            d="M24,4C12.954,4,4,12.954,4,24c0,8.887,5.801,16.411,13.82,19.016h12.36	C38.199,40.411,44,32.887,44,24C44,12.954,35.046,4,24,4z">
                                        </path>
                                        <path
                                            d="M30.01,41.996L30,36.198c0-0.939-0.22-1.856-0.642-2.687c5.641-1.133,8.386-4.468,8.386-10.177	c0-2.255-0.665-4.246-1.976-5.92c0.1-0.317,0.174-0.645,0.22-0.981c0.188-1.369-0.023-2.264-0.193-2.984l-0.027-0.116	c-0.186-0.796-0.409-1.364-0.418-1.388l-0.111-0.282l-0.111-0.282l-0.302-0.032l-0.303-0.032c0,0-0.199-0.021-0.501-0.021	c-0.419,0-1.04,0.042-1.627,0.241l-0.196,0.066c-0.74,0.249-1.439,0.485-2.417,1.069c-0.286,0.171-0.599,0.366-0.934,0.584	C27.334,12.881,25.705,12.69,24,12.69c-1.722,0-3.365,0.192-4.889,0.571c-0.339-0.22-0.654-0.417-0.942-0.589	c-0.978-0.584-1.677-0.819-2.417-1.069l-0.196-0.066c-0.585-0.199-1.207-0.241-1.626-0.241c-0.302,0-0.501,0.021-0.501,0.021	l-0.302,0.032l-0.3,0.031l-0.112,0.281l-0.113,0.283c-0.01,0.026-0.233,0.594-0.419,1.391l-0.027,0.115	c-0.17,0.719-0.381,1.615-0.193,2.983c0.048,0.346,0.125,0.685,0.23,1.011c-1.285,1.666-1.936,3.646-1.936,5.89	c0,5.695,2.748,9.028,8.397,10.17c-0.194,0.388-0.345,0.798-0.452,1.224c-0.197,0.067-0.378,0.112-0.538,0.137	c-0.238,0.036-0.487,0.054-0.739,0.054c-0.686,0-1.225-0.134-1.435-0.259c-0.313-0.186-0.872-0.727-1.414-1.518	c-0.463-0.675-1.185-1.558-1.992-1.927c-0.698-0.319-1.437-0.502-2.029-0.502c-0.138,0-0.265,0.01-0.376,0.028	c-0.517,0.082-0.949,0.366-1.184,0.78c-0.203,0.357-0.235,0.773-0.088,1.141c0.219,0.548,0.851,0.985,1.343,1.255	c0.242,0.133,0.765,0.619,1.07,1.109c0.229,0.368,0.335,0.63,0.482,0.992c0.087,0.215,0.183,0.449,0.313,0.732	c0.47,1.022,1.937,1.924,2.103,2.023c0.806,0.483,2.161,0.638,3.157,0.683l0.123,0.003c0,0,0.001,0,0.001,0	c0.24,0,0.57-0.023,1.004-0.071v2.613c0.002,0.529-0.537,0.649-1.25,0.638l0.547,0.184C19.395,43.572,21.645,44,24,44	c2.355,0,4.605-0.428,6.703-1.176l0.703-0.262C30.695,42.538,30.016,42.422,30.01,41.996z"
                                            opacity=".05"></path>
                                        <path
                                            d="M30.781,42.797c-0.406,0.047-1.281-0.109-1.281-0.795v-5.804c0-1.094-0.328-2.151-0.936-3.052	c5.915-0.957,8.679-4.093,8.679-9.812c0-2.237-0.686-4.194-2.039-5.822c0.137-0.365,0.233-0.75,0.288-1.147	c0.175-1.276-0.016-2.086-0.184-2.801l-0.027-0.116c-0.178-0.761-0.388-1.297-0.397-1.319l-0.111-0.282l-0.303-0.032	c0,0-0.178-0.019-0.449-0.019c-0.381,0-0.944,0.037-1.466,0.215l-0.196,0.066c-0.714,0.241-1.389,0.468-2.321,1.024	c-0.332,0.198-0.702,0.431-1.101,0.694C27.404,13.394,25.745,13.19,24,13.19c-1.762,0-3.435,0.205-4.979,0.61	c-0.403-0.265-0.775-0.499-1.109-0.699c-0.932-0.556-1.607-0.784-2.321-1.024l-0.196-0.066c-0.521-0.177-1.085-0.215-1.466-0.215	c-0.271,0-0.449,0.019-0.449,0.019l-0.302,0.032l-0.113,0.283c-0.009,0.022-0.219,0.558-0.397,1.319l-0.027,0.116	c-0.169,0.715-0.36,1.524-0.184,2.8c0.056,0.407,0.156,0.801,0.298,1.174c-1.327,1.62-1.999,3.567-1.999,5.795	c0,5.703,2.766,8.838,8.686,9.806c-0.395,0.59-0.671,1.255-0.813,1.964c-0.33,0.13-0.629,0.216-0.891,0.256	c-0.263,0.04-0.537,0.06-0.814,0.06c-0.69,0-1.353-0.129-1.69-0.329c-0.44-0.261-1.057-0.914-1.572-1.665	c-0.35-0.51-1.047-1.417-1.788-1.755c-0.635-0.29-1.298-0.457-1.821-0.457c-0.11,0-0.21,0.008-0.298,0.022	c-0.366,0.058-0.668,0.252-0.828,0.534c-0.128,0.224-0.149,0.483-0.059,0.708c0.179,0.448,0.842,0.85,1.119,1.002	c0.335,0.184,0.919,0.744,1.254,1.284c0.251,0.404,0.37,0.697,0.521,1.067c0.085,0.209,0.178,0.437,0.304,0.712	c0.331,0.719,1.353,1.472,1.905,1.803c0.754,0.452,2.154,0.578,2.922,0.612l0.111,0.002c0.299,0,0.8-0.045,1.495-0.135v3.177	c0,0.779-0.991,0.81-1.234,0.81c-0.031,0,0.503,0.184,0.503,0.184C19.731,43.64,21.822,44,24,44c2.178,0,4.269-0.36,6.231-1.003	C30.231,42.997,30.812,42.793,30.781,42.797z"
                                            opacity=".07"></path>
                                        <path fill="#fff"
                                            d="M36.744,23.334c0-2.31-0.782-4.226-2.117-5.728c0.145-0.325,0.296-0.761,0.371-1.309	c0.172-1.25-0.031-2-0.203-2.734s-0.375-1.25-0.375-1.25s-0.922-0.094-1.703,0.172s-1.453,0.469-2.422,1.047	c-0.453,0.27-0.909,0.566-1.27,0.806C27.482,13.91,25.785,13.69,24,13.69c-1.801,0-3.513,0.221-5.067,0.652	c-0.362-0.241-0.821-0.539-1.277-0.811c-0.969-0.578-1.641-0.781-2.422-1.047s-1.703-0.172-1.703-0.172s-0.203,0.516-0.375,1.25	s-0.375,1.484-0.203,2.734c0.077,0.562,0.233,1.006,0.382,1.333c-1.31,1.493-2.078,3.397-2.078,5.704	c0,5.983,3.232,8.714,9.121,9.435c-0.687,0.726-1.148,1.656-1.303,2.691c-0.387,0.17-0.833,0.33-1.262,0.394	c-1.104,0.167-2.271,0-2.833-0.333s-1.229-1.083-1.729-1.813c-0.422-0.616-1.031-1.331-1.583-1.583	c-0.729-0.333-1.438-0.458-1.833-0.396c-0.396,0.063-0.583,0.354-0.5,0.563c0.083,0.208,0.479,0.521,0.896,0.75	c0.417,0.229,1.063,0.854,1.438,1.458c0.418,0.674,0.5,1.063,0.854,1.833c0.249,0.542,1.101,1.219,1.708,1.583	c0.521,0.313,1.562,0.491,2.688,0.542c0.389,0.018,1.308-0.096,2.083-0.206v3.75c0,0.639-0.585,1.125-1.191,1.013	C19.756,43.668,21.833,44,24,44c2.166,0,4.243-0.332,6.19-0.984C29.585,43.127,29,42.641,29,42.002v-5.804	c0-1.329-0.527-2.53-1.373-3.425C33.473,32.071,36.744,29.405,36.744,23.334z M11.239,32.727c-0.154-0.079-0.237-0.225-0.185-0.328	c0.052-0.103,0.22-0.122,0.374-0.043c0.154,0.079,0.237,0.225,0.185,0.328S11.393,32.806,11.239,32.727z M12.451,33.482	c-0.081,0.088-0.255,0.06-0.389-0.062s-0.177-0.293-0.096-0.381c0.081-0.088,0.255-0.06,0.389,0.062S12.532,33.394,12.451,33.482z M13.205,34.732c-0.102,0.072-0.275,0.005-0.386-0.15s-0.118-0.34-0.016-0.412s0.275-0.005,0.386,0.15	C13.299,34.475,13.307,34.66,13.205,34.732z M14.288,35.673c-0.069,0.112-0.265,0.117-0.437,0.012s-0.256-0.281-0.187-0.393	c0.069-0.112,0.265-0.117,0.437-0.012S14.357,35.561,14.288,35.673z M15.312,36.594c-0.213-0.026-0.371-0.159-0.353-0.297	c0.017-0.138,0.204-0.228,0.416-0.202c0.213,0.026,0.371,0.159,0.353,0.297C15.711,36.529,15.525,36.62,15.312,36.594z M16.963,36.833c-0.227-0.013-0.404-0.143-0.395-0.289c0.009-0.146,0.2-0.255,0.427-0.242c0.227,0.013,0.404,0.143,0.395,0.289	C17.381,36.738,17.19,36.846,16.963,36.833z M18.521,36.677c-0.242,0-0.438-0.126-0.438-0.281s0.196-0.281,0.438-0.281	c0.242,0,0.438,0.126,0.438,0.281S18.762,36.677,18.521,36.677z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>GitHub</h4>
                                    <a href="https://github.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#29b6f6"
                                            d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z">
                                        </path>
                                        <path fill="#0277bd"
                                            d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z">
                                        </path>
                                        <path fill="#0288d1"
                                            d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>VS Code</h4>
                                    <a href="https://code.visualstudio.com/" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <div style="width:80%; margin:0% 10% 0% 10%; padding:10%">
                                    <svg width="48px" height="48px" viewBox="-1 0 258 258" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>

                                        </defs>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g>
                                                <path
                                                    d="M127.928916,0.00180988628 C161.155628,0.00180988628 194.384153,0.00180988628 227.610865,0 C231.780293,0 235.911652,0.361977256 239.91249,1.58184061 C248.586712,4.22608447 253.180333,10.4466636 254.980438,19.0200949 C255.69468,22.4190614 255.897713,25.8849936 255.904964,29.3491159 C255.957535,52.6206337 255.997416,75.8921515 255.999229,99.1636693 C256.001042,141.547586 256.00648,183.931503 255.919466,226.31542 C255.906776,232.248227 255.59135,238.24619 252.661874,243.650511 C249.413346,249.644854 244.964748,254.388566 238.212088,256.475365 C236.992078,256.851821 235.717683,257.280764 234.466855,257.280764 C231.584511,257.282574 228.780118,257.997479 225.906839,257.997479 C160.840202,257.99205 95.7735648,258.030057 30.7069279,257.926894 C25.4153804,257.917844 20.0368188,257.532339 15.0099394,255.378574 C14.0092767,254.949631 12.9995501,254.589464 12.1203448,253.919806 C5.71936699,249.042162 1.37409831,242.959134 0.442321884,234.727772 C0.106954882,231.759558 0,228.807634 0,225.83942 C0.0108767677,159.887164 0.0163151515,93.9349079 0.050758249,27.9826518 C0.0525710436,24.1565522 0.092452525,20.2652967 1.26895623,16.6038967 C4.4032781,6.84498991 11.2610801,1.51849459 21.4272323,0.436182594 C23.7893036,0.184608401 26.1731286,0.0217186354 28.5460767,0.0199087491 C61.6730854,-0.00723954512 94.8019068,0.00180988628 127.928916,0.00180988628 L127.928916,0.00180988628 Z"
                                                    fill="#FB7A24">

                                                </path>
                                                <path
                                                    d="M128.775254,164.113293 C128.047679,168.567424 127.537291,172.592612 125.937351,176.30288 C118.44623,193.686843 105.681098,204.28011 86.5433558,206.388628 C63.921581,208.880842 43.0282481,194.919376 36.7461311,173.235122 C34.4692936,165.376594 34.6973393,157.366035 35.5226477,149.368145 C36.4040625,140.82186 38.921615,132.717187 42.8526891,125.072225 C43.4155639,123.979054 43.4047046,123.153745 42.7006586,122.094962 C36.6646862,113.01657 34.3226927,102.987987 35.1733395,92.1630542 C35.6276211,86.3768462 37.0320932,80.8422124 39.6564291,75.6586967 C47.3448281,60.4737467 64.225642,47.5873529 86.8347475,49.726639 C106.714544,51.6071114 125.128332,68.7557886 128.002432,88.041942 C128.147223,89.0102314 128.418706,89.960422 128.737246,91.3884226 C129.213246,88.8020944 129.557125,86.6682379 130.002357,84.5542902 C133.705385,67.0327764 150.855872,48.6986234 175.166271,48.4723875 C199.80607,48.2443418 218.053348,67.5685028 221.495753,85.51715 C222.950902,93.1023854 222.697518,100.680381 221.497563,108.254757 C220.297608,115.821894 218.075067,123.095829 214.82632,130.029505 C214.109605,131.55886 214.18381,132.659271 215.101423,134.080032 C220.408011,142.304157 222.750005,151.331873 222.449563,161.136029 C221.821533,181.593179 207.353298,199.938192 187.448163,204.736201 C159.657352,211.432783 138.354984,194.812592 131.186023,174.70475 C130.016836,171.432475 129.463011,168.015409 128.775254,164.113293 L128.775254,164.113293 Z M179.263855,128.172561 C179.560676,127.016044 180.45657,126.322857 181.10089,125.466781 C188.068954,116.2074 191.733975,105.863897 190.915906,94.2172757 C190.320453,85.7162375 183.328861,79.7291321 174.86583,80.0458622 C166.39737,80.3625924 160.015709,86.8944738 159.896257,95.3683637 C159.887207,96.0615503 159.928835,96.7565468 159.885397,97.4461137 C159.302614,106.477449 154.319996,111.423869 146.769148,111.975885 C145.390014,112.077238 144.007261,112.200311 142.626317,112.20393 C132.82578,112.225649 123.027053,112.222029 113.226516,112.21298 C108.946134,112.20936 104.70195,112.674501 100.626085,113.932372 C81.5987451,119.803645 70.5041392,132.814921 66.830069,152.207858 C66.1024946,156.044818 65.4473155,160.026569 66.7051869,163.968502 C68.509644,169.620778 71.8742235,173.825145 77.8305608,175.231427 C84.0040846,176.688386 89.3812582,175.075777 93.652591,170.22709 C96.4144782,167.092367 97.2850337,163.36762 97.4913608,159.279085 C98.0252774,148.763643 103.751759,143.507732 113.300722,143.587367 C127.949945,143.708629 142.600979,143.612705 157.252012,143.623565 C159.852819,143.625375 159.876348,143.659762 159.889017,146.231612 C159.914356,150.982564 159.767755,155.738947 159.950553,160.48447 C160.249185,168.230785 167.065218,174.670362 174.967184,174.896598 C183.115294,175.130074 190.37837,169.103151 190.908667,161.235573 C191.366568,154.426779 191.33761,147.574548 190.890568,140.760324 C190.544879,135.484504 187.690688,131.725369 182.85467,129.542646 C181.694533,129.021398 180.474669,128.630463 179.263855,128.172561 L179.263855,128.172561 Z M87.4320102,112.189451 C90.583023,112.189451 93.1548721,112.160493 95.7249114,112.202121 C96.9990716,112.222029 97.4714521,111.673634 97.4605928,110.424812 C97.4189654,105.482011 97.6741594,100.522921 97.3592391,95.5982193 C96.9429651,89.1007258 93.4878913,84.4040696 87.4392497,82.0349278 C81.2367677,79.6060598 75.5609628,80.992433 70.7611431,85.5732564 C65.9396048,90.1757985 65.2970949,95.8045464 66.9839094,101.965401 C68.5331725,107.626727 72.1945734,110.842896 77.9518233,111.814805 C81.296494,112.37768 84.6592636,112.108006 87.4320102,112.189451 L87.4320102,112.189451 Z"
                                                    fill="#FFFFFF">

                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Xampp</h4>
                                    <a href="https://www.apachefriends.org/download.html" class="box-button">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="82px" height="24px" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <polygon class="fil0"
                                                    points="82,75 75,27 75,27 68,75 58,75 50,15 57,15 63,65 63,65 70,15 79,15 87,65 87,65 93,15 100,15 92,75 " />
                                                <polygon id="1" class="fil0"
                                                    points="106,75 106,15 129,15 129,22 113,22 113,41 127,41 127,48 113,48 113,68 129,68 129,75 " />
                                                <path id="2" class="fil0"
                                                    d="M136 15l15 0c4,0 7,1 9,4 2,2 3,6 3,11 0,4 0,7 -1,10 -2,2 -4,3 -6,4l0 0c3,1 5,3 6,5 1,2 2,6 2,10 0,5 -1,9 -3,12 -2,3 -6,4 -11,4l-14 0 0 -60zm13 26c3,0 4,0 5,-2 2,-1 2,-4 2,-7 0,-3 0,-5 0,-6 -1,-2 -1,-3 -2,-3 -1,-1 -3,-1 -5,-1l-6 0 0 19 6 0zm0 27c2,0 4,0 5,-1 1,0 1,-1 2,-3 0,-1 0,-3 0,-6 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 20 6 0z" />
                                                <g id="_2264041709536">
                                                    <path class="fil1"
                                                        d="M190 20l0 51c0,2 3,4 5,4l51 0c2,0 4,-2 4,-4l0 -26 -5 0 0 25 -49 0 0 -50 24 0 0 -5 -25 0c-2,0 -5,2 -5,5z" />
                                                    <path class="fil1"
                                                        d="M230 19c0,2 3,1 5,1 2,0 4,0 6,0l-21 22 4 3 21 -21c0,13 -2,11 5,11l0 -17c0,-2 0,-3 -2,-3l-18 0 0 4z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Modal -->
        <div class="modal fade" id="hotelModal" tabindex="-1" aria-labelledby="hotelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div style="display:flex; justify-content:center" class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="section-top-border">
                            <h3 class="mb-30">Alexis - Hotel Booking System</h3>

                            <div style="padding: 3%" class="row">
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>A platform that allows customers to make reservations for hotel rooms. It
                                            provides
                                            customers with a way to search for room availability and prices, and book a
                                            room online.</h4>
                                        <br>
                                        <a href="https://github.com/bregaster/hotel-management-system"
                                            style="padding:8px 10px" class="box-button">
                                            <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg"
                                                xml:space="preserve" width="80px" height="24px" version="1.1"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer" />
                                                    <g id="_2027945127376">
                                                        <path class="fil0"
                                                            d="M222 18l0 54c0,2 2,5 5,5l53 0c3,0 5,-3 5,-5l0 -27 -6 0 0 26 -51 0 0 -52 26 0 0 -5 -27 0c-3,0 -5,2 -5,4z" />
                                                        <path class="fil0"
                                                            d="M264 18c0,2 3,1 5,1 2,0 4,0 7,0l-23 22 4 4 22 -22c1,13 -2,12 6,12l0 -19c0,-1 -1,-2 -2,-2l-19 0 0 4z" />
                                                    </g>
                                                    <path class="fil1"
                                                        d="M30 49l0 -7 14 0 0 33c-2,0 -4,1 -6,1 -3,0 -5,1 -7,1 -4,0 -8,-1 -10,-3 -2,-1 -4,-4 -5,-9 -1,-4 -1,-11 -1,-20 0,-9 0,-16 1,-20 1,-4 3,-7 5,-9 2,-2 6,-2 11,-2 2,0 4,0 6,0 2,0 4,1 6,1l0 7c-5,-1 -8,-2 -10,-2 -4,0 -6,1 -8,2 -1,1 -2,3 -3,6 0,3 0,9 0,17 0,8 0,13 0,16 0,4 1,6 2,7 2,1 4,2 6,2 2,0 4,0 6,-1l0 -20 -7 0z" />
                                                    <polygon id="1" class="fil1" points="52,76 52,14 60,14 60,76 " />
                                                    <polygon id="2" class="fil1"
                                                        points="76,76 76,21 66,21 66,14 95,14 95,21 84,21 84,76 " />
                                                    <polygon id="3" class="fil1"
                                                        points="122,76 122,48 108,48 108,76 100,76 100,14 108,14 108,41 122,41 122,14 130,14 130,76 " />
                                                    <path id="4" class="fil1"
                                                        d="M168 14l0 35c0,8 0,14 -1,17 0,4 -2,7 -4,8 -2,2 -5,3 -10,3 -4,0 -8,-1 -10,-3 -2,-1 -3,-4 -4,-8 0,-3 0,-9 0,-17l0 -35 7 0 0 39c0,5 0,9 1,11 0,2 1,4 2,4 0,1 2,2 4,2 3,0 4,-1 5,-2 1,0 2,-2 2,-4 0,-2 1,-6 1,-11l0 -39 7 0z" />
                                                    <path id="5" class="fil1"
                                                        d="M177 14l15 0c5,0 8,2 10,4 2,3 3,7 3,12 0,4 0,7 -2,10 -1,2 -3,3 -6,4l0 1c4,0 6,2 7,4 1,3 2,6 2,11 0,5 -1,9 -3,12 -2,2 -6,4 -11,4l-15 0 0 -62zm14 27c2,0 4,0 5,-2 1,-2 2,-4 2,-8 0,-2 0,-4 -1,-6 0,-1 -1,-2 -2,-3 -1,-1 -2,-1 -4,-1l-6 0 0 20 6 0zm0 28c2,0 3,0 4,-1 1,-1 2,-2 3,-3 0,-2 0,-4 0,-7 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 21 6 0z" />
                                                </g>
                                            </svg>
                                        </a>
                                        <br>
                                        <br>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>Features</h4>
                                        <ul class="unordered-list">
                                            <li>Search functionality, features to search for hotels by dates, number of
                                                guests, and other criteria.</li>
                                            <li>Room details, each room have a dedicated page that includes a
                                                description, photos, and pricing
                                                information.</li>
                                            <li>Booking process, features select desired room and make a
                                                reservation</li>
                                            <li>Reservation management, features to view reservation details,
                                                make changes or cancellations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border">
                            <h4>Image Gallery</h4>
                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/hotel/h1.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/hotel/h1.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/hotel/h2.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/hotel/h2.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/hotel/h3.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/hotel/h3.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/hotel/h4.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/hotel/h4.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/hotel/h5.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/hotel/h5.webp);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="yukmocoModal" tabindex="-1" aria-labelledby="yukmocoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div style="display:flex; justify-content:center" class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="section-top-border">
                            <h3 class="mb-30">Yukmoco - Online Bookstore</h3>
                            <div style="padding: 3%" class="row">
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>A website that allows customers to purchase books via the web. Customers
                                            can
                                            browse through a wide selection of books,
                                            make a purchase, choose their own courier, and have it delivered to their
                                            doorstep.</h4>
                                        <br>
                                        <a href="https://github.com/bregaster/tokobuku-yukmoco" style="padding:8px 10px"
                                            class="box-button">
                                            <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg"
                                                xml:space="preserve" width="80px" height="24px" version="1.1"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer" />
                                                    <g id="_2027945127376">
                                                        <path class="fil0"
                                                            d="M222 18l0 54c0,2 2,5 5,5l53 0c3,0 5,-3 5,-5l0 -27 -6 0 0 26 -51 0 0 -52 26 0 0 -5 -27 0c-3,0 -5,2 -5,4z" />
                                                        <path class="fil0"
                                                            d="M264 18c0,2 3,1 5,1 2,0 4,0 7,0l-23 22 4 4 22 -22c1,13 -2,12 6,12l0 -19c0,-1 -1,-2 -2,-2l-19 0 0 4z" />
                                                    </g>
                                                    <path class="fil1"
                                                        d="M30 49l0 -7 14 0 0 33c-2,0 -4,1 -6,1 -3,0 -5,1 -7,1 -4,0 -8,-1 -10,-3 -2,-1 -4,-4 -5,-9 -1,-4 -1,-11 -1,-20 0,-9 0,-16 1,-20 1,-4 3,-7 5,-9 2,-2 6,-2 11,-2 2,0 4,0 6,0 2,0 4,1 6,1l0 7c-5,-1 -8,-2 -10,-2 -4,0 -6,1 -8,2 -1,1 -2,3 -3,6 0,3 0,9 0,17 0,8 0,13 0,16 0,4 1,6 2,7 2,1 4,2 6,2 2,0 4,0 6,-1l0 -20 -7 0z" />
                                                    <polygon id="1" class="fil1" points="52,76 52,14 60,14 60,76 " />
                                                    <polygon id="2" class="fil1"
                                                        points="76,76 76,21 66,21 66,14 95,14 95,21 84,21 84,76 " />
                                                    <polygon id="3" class="fil1"
                                                        points="122,76 122,48 108,48 108,76 100,76 100,14 108,14 108,41 122,41 122,14 130,14 130,76 " />
                                                    <path id="4" class="fil1"
                                                        d="M168 14l0 35c0,8 0,14 -1,17 0,4 -2,7 -4,8 -2,2 -5,3 -10,3 -4,0 -8,-1 -10,-3 -2,-1 -3,-4 -4,-8 0,-3 0,-9 0,-17l0 -35 7 0 0 39c0,5 0,9 1,11 0,2 1,4 2,4 0,1 2,2 4,2 3,0 4,-1 5,-2 1,0 2,-2 2,-4 0,-2 1,-6 1,-11l0 -39 7 0z" />
                                                    <path id="5" class="fil1"
                                                        d="M177 14l15 0c5,0 8,2 10,4 2,3 3,7 3,12 0,4 0,7 -2,10 -1,2 -3,3 -6,4l0 1c4,0 6,2 7,4 1,3 2,6 2,11 0,5 -1,9 -3,12 -2,2 -6,4 -11,4l-15 0 0 -62zm14 27c2,0 4,0 5,-2 1,-2 2,-4 2,-8 0,-2 0,-4 -1,-6 0,-1 -1,-2 -2,-3 -1,-1 -2,-1 -4,-1l-6 0 0 20 6 0zm0 28c2,0 3,0 4,-1 1,-1 2,-2 3,-3 0,-2 0,-4 0,-7 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 21 6 0z" />
                                                </g>
                                            </svg>
                                        </a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>Features</h4>
                                        <ul class="unordered-list">
                                            <li>Search functionality, Customers can search for books by title, author,
                                                genre, or keyword.</li>
                                            <li>Product details, Each book have a dedicated page that includes a
                                                description and other
                                                relevant information.</li>
                                            <li>Shopping cart, Customers can add items to their cart and review their
                                                selections before making a purchase.</li>
                                            <li>Customer account, Customers can create an account to save their
                                                preferences, view their order history, and manage their
                                                personal information.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border">
                            <h4>Image Gallery</h4>
                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/yukmoco/y1.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/yukmoco/y1.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/yukmoco/y2.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/yukmoco/y2.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/yukmoco/y3.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/yukmoco/y3.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/yukmoco/y4.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/yukmoco/y4.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/yukmoco/y5.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/yukmoco/y5.webp);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="sppdModal" tabindex="-1" aria-labelledby="dppdModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div style="display:flex; justify-content:center" class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="section-top-border">
                            <h3 class="mb-30">SPPD - Mail Management</h3>
                            <div style="padding: 3%" class="row">
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>The official travel order information system application (SPPD) is an
                                            application used to assist in the process of
                                            processing official travel data at a particular agency. So that with this
                                            application can help work faster, more
                                            accurately and efficiently.</h4>
                                        <br>
                                        <a href="https://github.com/bregaster/SPPD-mail-management"
                                            style="padding:8px 10px" class="box-button">
                                            <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg"
                                                xml:space="preserve" width="80px" height="24px" version="1.1"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                viewBox="0 0 300 90" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer" />
                                                    <g id="_2027945127376">
                                                        <path class="fil0"
                                                            d="M222 18l0 54c0,2 2,5 5,5l53 0c3,0 5,-3 5,-5l0 -27 -6 0 0 26 -51 0 0 -52 26 0 0 -5 -27 0c-3,0 -5,2 -5,4z" />
                                                        <path class="fil0"
                                                            d="M264 18c0,2 3,1 5,1 2,0 4,0 7,0l-23 22 4 4 22 -22c1,13 -2,12 6,12l0 -19c0,-1 -1,-2 -2,-2l-19 0 0 4z" />
                                                    </g>
                                                    <path class="fil1"
                                                        d="M30 49l0 -7 14 0 0 33c-2,0 -4,1 -6,1 -3,0 -5,1 -7,1 -4,0 -8,-1 -10,-3 -2,-1 -4,-4 -5,-9 -1,-4 -1,-11 -1,-20 0,-9 0,-16 1,-20 1,-4 3,-7 5,-9 2,-2 6,-2 11,-2 2,0 4,0 6,0 2,0 4,1 6,1l0 7c-5,-1 -8,-2 -10,-2 -4,0 -6,1 -8,2 -1,1 -2,3 -3,6 0,3 0,9 0,17 0,8 0,13 0,16 0,4 1,6 2,7 2,1 4,2 6,2 2,0 4,0 6,-1l0 -20 -7 0z" />
                                                    <polygon id="1" class="fil1" points="52,76 52,14 60,14 60,76 " />
                                                    <polygon id="2" class="fil1"
                                                        points="76,76 76,21 66,21 66,14 95,14 95,21 84,21 84,76 " />
                                                    <polygon id="3" class="fil1"
                                                        points="122,76 122,48 108,48 108,76 100,76 100,14 108,14 108,41 122,41 122,14 130,14 130,76 " />
                                                    <path id="4" class="fil1"
                                                        d="M168 14l0 35c0,8 0,14 -1,17 0,4 -2,7 -4,8 -2,2 -5,3 -10,3 -4,0 -8,-1 -10,-3 -2,-1 -3,-4 -4,-8 0,-3 0,-9 0,-17l0 -35 7 0 0 39c0,5 0,9 1,11 0,2 1,4 2,4 0,1 2,2 4,2 3,0 4,-1 5,-2 1,0 2,-2 2,-4 0,-2 1,-6 1,-11l0 -39 7 0z" />
                                                    <path id="5" class="fil1"
                                                        d="M177 14l15 0c5,0 8,2 10,4 2,3 3,7 3,12 0,4 0,7 -2,10 -1,2 -3,3 -6,4l0 1c4,0 6,2 7,4 1,3 2,6 2,11 0,5 -1,9 -3,12 -2,2 -6,4 -11,4l-15 0 0 -62zm14 27c2,0 4,0 5,-2 1,-2 2,-4 2,-8 0,-2 0,-4 -1,-6 0,-1 -1,-2 -2,-3 -1,-1 -2,-1 -4,-1l-6 0 0 20 6 0zm0 28c2,0 3,0 4,-1 1,-1 2,-2 3,-3 0,-2 0,-4 0,-7 0,-4 0,-6 -1,-8 -1,-1 -3,-2 -6,-2l-6 0 0 21 6 0z" />
                                                </g>
                                            </svg>
                                        </a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4>Features</h4>
                                        <ul class="unordered-list">
                                            <li>Master Data, features that serve to input Employee Data and SPPD Data.
                                            </li>
                                            <li>Report, eatures that serve to input the results of activity reports and
                                                print data from official trips.</li>
                                            <li>Letter Recap, a collection of information from letters that have been
                                                received or sent within a certain period of time.</li>
                                            <li>Settings, Features that serve to change the agency profile name and
                                                change the login username and password.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border">
                            <h4>Image Gallery</h4>
                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/mail/m1.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/mail/m1.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/mail/m2.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/mail/m2.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/mail/m3.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/mail/m3.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/mail/m4.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/mail/m4.webp);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/mail/m5.webp" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/mail/m5.webp);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('depan') }}/js/scripts.js"></script>

</body>

</html>
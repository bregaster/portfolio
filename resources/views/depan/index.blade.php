<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <!-- aranoz css-->
    <link href="{{ asset('aranoz') }}/css/style.css" rel="stylesheet" />

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
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
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
                    {{ get_meta_value('_kota') }} · {{ get_meta_value('_provinsi') }} · {{ get_meta_value('_nohp') }} ·
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
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    @foreach (explode(', ', get_meta_value('_language')) as $item)
                    <li class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i></li>
                    @endforeach
                </ul>
                <div class="subheading mb-3">Workflow</div>
                {!! set_list_workflow(get_meta_value('_workflow')) !!}

            </div>
        </section>
        <hr class="m-0" />
        <!-- Projects-->
        <section class="resume-section" id="projects">
            <div class="resume-section-content">
                <h2 class="mb-5">isi projek</h2>
                <div class="single_product_list_slider">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item">
                                <img src="img/product/product_4.png" alt="">
                                <div style="width:80%; margin-left:10% ;margin-right:10%">
                                    <svg width="100%" height="100%" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <g fill="#ED6B1E">
                                            <path d="M10.676 7.373H5.338v1.2h5.338v-1.2z" />
                                            <path
                                                d="M13.338 3H9.81l.852 1.213L13.244 5c.48.147.786.6.773 1.067v3.866c0 .48-.307.92-.772 1.067l-2.57.787L9.81 13h3.528C14.815 13 16 11.8 16 10.333V5.667C16.013 4.2 14.815 3 13.338 3zM2.662 3H6.19l-.852 1.213L2.768 5c-.478.147-.785.6-.771 1.067v3.866c0 .48.306.92.772 1.067l2.569.787L6.19 13H2.662A2.672 2.672 0 010 10.333V5.667A2.672 2.672 0 012.662 3z" />
                                        </g>
                                    </svg>
                                </div>

                                <div class="single_product_text">
                                    <h4>Quartz Belt Watch</h4>
                                    <a href="#exampleModal" class="box-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                            width="1.5em" height="1.5emm" version="1.1"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            viewBox="0 0 15240 15240" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer" />
                                                <path class="fil0"
                                                    d="M8584 796l5115 0 -12833 12927c-48,-994 -52,-1942 -47,-2889 2,-360 52,-1238 18,-1533 -77,-683 -95,-683 -776,-739l0 6629 6061 0c533,0 351,-82 568,-379 -409,-558 42,-335 -929,-396l-4185 17 12833 -12927 29 4043c21,978 -137,727 397,1119 319,-222 379,-28 379,-569l0 -6061 -6630 0 0 758z" />
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div style="display:flex; justify-content:center" class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="section-top-border">
                            <h3 class="mb-30">Definition</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Definition 01</h4>
                                        <p>Recently, the US Federal government banned online casinos from operating in
                                            America by
                                            making it illegal to
                                            transfer money to them through any US bank or payment system. As a result of
                                            this law,
                                            most of the popular
                                            online casino networks</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-defination">
                                        <h4 class="mb-20">Definition 02</h4>
                                        <p>Recently, the US Federal government banned online casinos from operating in
                                            America by
                                            making it illegal to
                                            transfer money to them through any US bank or payment system. As a result of
                                            this law,
                                            most of the popular
                                            online casino networks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border">
                            <h3>Image Gallery</h3>
                            <div class="row gallery-item">
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/elements/g1.jpg" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/elements/g1.jpg);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/elements/g2.jpg" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/elements/g2.jpg);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('img') }}/elements/g3.jpg" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/elements/g3.jpg);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/elements/g4.jpg" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/elements/g4.jpg);">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ asset('img') }}/elements/g5.jpg" class="img-pop-up img-gal">
                                        <div class="single-gallery-image"
                                            style="background: url({{ asset('img') }}/elements/g5.jpg);">
                                        </div>
                                    </a>
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
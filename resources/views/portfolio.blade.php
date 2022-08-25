@extends('layouts.app')

@section('content')



    <!------ Header ------>
    <section class="hero-section ptb-100 gradient-overlay"
        style="background: url('{{ asset('digimark_template/img/header-bg-5.jpg') }}')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"> <i class="fa-solid fa-sitemap"></i> Portfolio </h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Portfolio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <strong class="color-secondary">Previous Project</strong>
                        <h2>Our Case Studies</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements.
                            Intrinsicly
                            develop end-to-end customer service without extensive data.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <button type="button" class="filter-btn mixitup-control-active" data-mixitup-control="" data-filter="all">Digital
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control="" data-filter=".branding">Marketing
                            Strategy
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control="" data-filter=".animation">Content
                            Marketing
                        </button>
                        <button type="button" class="filter-btn" data-mixitup-control="" data-filter=".other">SEO
                            Services
                        </button>
                    </div>
                    <div class="portfolio-container" id="MixItUp" style="">
                        <div class="mix portfolio-item branding" data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/3.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Creative Design</h5>
                                        <p>Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item other animation" data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/2.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation" data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/4.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                        <p>Flyer Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/1.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation other" data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/5.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Wall Painting Design</h5>
                                        <p>Painting Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding " data-ref="mixitup-target" style="">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{ asset('digimark_template/img/portfolios/6.jpg') }}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                        <p>Corporate Design</p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1">Market Research Analysis</h5>
                                    <span>Sales, SEO, Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

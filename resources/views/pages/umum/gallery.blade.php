@extends('layouts.landing')
@section('content')

<!--==================================================================== 
            Start Page Banner Section
=====================================================================-->
<section class="page-banner overlay">
    <div class="container">
        <div class="banner-inner">
            <h2 class="wow fadeInUp" data-wow-duration="1.5s">Galeri.</h2>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Page Banner Section
=====================================================================-->

<!--==================================================================== 
            Start Portfolio Section
=====================================================================-->
<section class="block py-150 rpy-100 bg-ramadhan">
    <div class="wpo-portfolio-section-s3 tb-padding section-padding">
        <div class="container">
            <div class="sortable-gallery">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-grids gallery-container clearfix">

                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/1.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/2.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/3.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/3.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/4.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/5.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/6.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/6.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/7.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/7.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/8.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/8.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/9.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/9.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/10.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/10.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/11.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/11.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="{{ asset('assets/images/gallery/12.jpg') }}" class="fancybox"
                                        data-fancybox-group="gall-1">
                                        <img src="{{ asset('assets/images/gallery/12.jpg') }}" alt
                                            class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </div>
</section>
<!--==================================================================== 
            End Portfolio Section
=====================================================================-->

<!--==================================================================== 
                        Start Donation Section
=====================================================================-->
@include('partials.donation')
<!--==================================================================== 
                        End Donation Section
=====================================================================-->

@stop
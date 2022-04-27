@extends('layouts.master')
@section('content')

<!-- <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Selamat Datang di Sistem Donasi!</h3>
                </div>
            </div>
        </div>
        <section class="section my-4">
            <div class="row">
                <ul class="nav nav-tabs mx-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="donasi-tab" data-bs-toggle="tab" href="#donasi"
                            role="tab" aria-controls="donasi" aria-selected="true">Donasi terbuka</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="donasi-tab" data-bs-toggle="tab" href="#blog"
                            role="tab" aria-controls="donasi" aria-selected="true">Blog terkini</a>
                    </li>
                </ul>
                <div class="tab-content mx-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="donasi" role="tabpanel"
                        aria-labelledby="donasi-tab">
                        <p class="my-3"></p>
                        <div class="row">
                                @foreach ($programs as $program)
                                    <div class="col-md-4 col-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <img src="{{ asset('/storage/images/program/'.$program->gambarProgram->nama) }}" class="card-img-top img-fluid"
                                                    alt="singleminded" style="height: 250px">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $program->nama_program }}</h5>
                                                    <p class="card-text">
                                                        <p>Target donasi: Rp.{{$program->target}}</p>
                                                        <p>Batas donasi: {{$program->batas_akhir}}</p>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <a class="btn btn-primary" href="{{ route('detail_donasi', $program->id) }}" role="button">Donasi Sekarang!</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="blog" role="tabpanel"
                        aria-labelledby="blog-tab">
                        <p class="my-3"></p>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-9 my-0">
                                        <h4 class="card-title">Blog terkini</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @foreach ($blogs as $blog)
                                        <div class="list-group my-2">
                                            <a href="{{ route('detail_blog', $blog->id) }}" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">{{ $blog->judul }}</h5>
                                                    <small>{{ $blog->inserted_at }}</small>
                                                </div>
                                                <hr>
                                                <p>Ditulis oleh: {{$blog->author->nama}}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->

<!--begin::Post-->
<div class="post d-flex flex-column-fluid mb-20" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <!--begin::Section-->
        <div class="mb-20 px-5">
            <!--begin::Content-->
            <div class="d-flex flex-stack mb-5">
                <!--begin::Title-->
                <h3 class="text-dark">Beranda</h3>
                <!--end::Title-->
                <!--begin::Link-->
                <!-- <a href="#" class="fs-6 fw-bold link-primary">View All Offers</a> -->
                <!--end::Link-->
            </div>
            <!--end::Content-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mb-9"></div>
            <!--end::Separator-->
            <!--begin::Row-->
            <div class="row g-10">
                <!--begin::Col-->
                @foreach ($programs as $program)
                <div class="col-md-4">
                    <!--begin::Hot sales post-->
                    <div class="card-xl-stretch mx-md-3">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                            href="{{ asset('/storage/images/program/'.$program->gambarProgram->nama) }}">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                style="background-image:url('<?php echo asset("/storage/images/program/" . $program->gambarProgram->nama) ?>')">
                            </div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                        <!--end::Overlay-->
                        <!--begin::Body-->
                        <div class="mt-5">
                            <!--begin::Title-->
                            <a href="{{ route('detail_donasi', $program->id) }}"
                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $program->nama_program }}</a>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">{{ $program->batas_akhir }}</div>
                            <!--end::Text-->
                            <!--begin::Text-->
                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                <!--begin::Label-->
                                <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                    <span class="fs-6 fw-bold text-gray-400 mr-2px">Rp &nbsp;</span>
                                    {{ " " . number_format($program->target, 0, ',' , '.') }}
                                </span>
                                <!--end::Label-->
                                <!--begin::Action-->
                                <a href="{{ route('detail_donasi', $program->id) }}"
                                    class="btn btn-sm btn-primary  {{ $program->batas_akhir <= now()->format('Y-m-d') || $program->jumlah_terkumpul >= $program->target ? 'd-none' : '' }}">Donasi</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Hot sales post-->
                </div>
                @endforeach
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Section-->

        <ul class="pagination">
            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
            <li class="page-item "><a href="#" class="page-link">1</a></li>
            <li class="page-item active"><a href="#" class="page-link">2</a></li>
            <li class="page-item "><a href="#" class="page-link">3</a></li>
            <li class="page-item "><a href="#" class="page-link">4</a></li>
            <li class="page-item "><a href="#" class="page-link">5</a></li>
            <li class="page-item "><a href="#" class="page-link">6</a></li>
            <li class="page-item next"><a href="#" class="page-link"><i class="next"></i></a></li>
        </ul>

    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@stop
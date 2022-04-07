@extends('layouts.landing')
@section('content')

<!--==================================================================== 
            Start Hero Section
=====================================================================-->
<section class="hero-section overlay">
    <div class="container">
        <div class="hero-inner">
            <span class="sub-title wow fadeInUp" data-wow-duration="1s">Investasi Amalan Tak Terputus Dunia dan
                Akhirat</span>
            <h1><span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Rumah Tahfidz</span><br>
                <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Yatim &
                    Dhuafa</span><br>
            </h1>
            <a href="assets/profile-ygyt.pdf" target="_blank" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                data-wow-delay="1s">Tentang YGYT<i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Hero Section
=====================================================================-->

<!--==================================================================== 
            Start Our Success Section
=====================================================================-->
<div class="our-success pb-30 rpb-0 wow fadeInUp" data-wow-duration="2s">
    <div class="container"></div>
</div>
<!--==================================================================== 
            End Our Success Section
=====================================================================-->

<!--==================================================================== 
            Start About Us Section
=====================================================================-->
<section class="about-us pt-100 pb-150 rpb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image rmb-50">
                    <img class="wow fadeInBottomLeft" data-wow-duration="2s"
                        src="{{ asset('assets/images/about/about.jpg') }}" alt="About Image">
                    <div class="about-border"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title mb-25 wow fadeInUp" data-wow-duration="2s">
                        <h2>Tentang</h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-duration="2s">
                        Yayasan Generasi Yatim Tahfidz merupakan lembaga sosial swadaya masyarakat yang bersifat
                        non-profit atau nirlaba. Yayasan Generasi Yatim Tahfidz membina
                        yatim dan dhuafa di bidang pendidikan keagamaan, khususnya tahfidz Al-Qur’an dan hadits.
                    </p>
                    <i class="wow fadeInUp" data-wow-duration="2s">
                        Berawal dari kepedulian kami agar yatim dan dhuafa yang ada disekitar kami menjadi
                        pribadi yang berakhlak dan berilmu terutama dalam pendidikan Al-Quran dan Hadits.
                    </i>
                    <a href="about.php" class="theme-btn wow fadeInUp" data-wow-duration="2s">
                        Selengkapnya<i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End About Us Section
=====================================================================-->

<!--==================================================================== 
            Start Hadist
=====================================================================-->
<section class="cta-section bg-snow-hadist pt-130 rpt-80 pb-135 rpb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                    <p>Rasulullah SAW bersabda: “Demi Allah yang mengutusku dengan kebenaran di hari kiamat
                        Allah SWT tidak akan mengazab orang yang mengasihi anak yatim dan berlaku ramah padanya
                        serta manis tutur katanya. Dia benar-benar menyayangi anak yatim dan mengerti
                        kekurangannya dan tidak menyombongkan diri pada tetangganya atas kekayaan yang diperoleh
                        Allah kepadanya.” (H.R. Thabrani)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Hadist
=====================================================================-->

<!--==================================================================== 
            Start Program Section
=====================================================================-->
<section class="services-section bg-snow pb-50 pt-150 rpt-90 rpb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                    <h2>Program <br> <span>Yayasan Generasi Yatim Tahfidz</span></h2>
                    <p>
                        Kami juga mempunyai beberapa program yang dapat membantu anak-anak kami berkembang dan
                        kegiatan
                        keseharian yang bermanfaat
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($programs as $program)
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-duration="2s">
                    <div class="service-icon d-flex">
                        <img src="{{ asset('/storage/images/program/'.$program->gambarProgram->nama) }}" alt="image">
                    </div>

                    <div class="service-content">

                        <h4><a href="{{ route('detail_donasi', $program->id) }}">{{ $program->nama_program }}</a></h4>

                        <div class="progress progress-primary mb-4">
                            <div class="progress-bar progress-label" role="progressbar"
                                style="width: <?= ceil(($program->jumlah_terkumpul / $program->target) * 100) . '%' ?>"
                                aria-valuenow="{{ ceil(($program->jumlah_terkumpul / $program->target) * 100) }}"
                                aria-valuemin="0" aria-valuemax="100" id="jmlKumpul">
                            </div>
                        </div>

                        <div class="fs-6 fw-bolder mt-5 d-flex flex-stack justify-content-between">
                            <!--begin::Label-->
                            <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                <span class="fs-6 fw-bold text-gray-400 mr-2px">Rp &nbsp;</span>
                                {{ " " . number_format($program->target, 0, ',' , '.') }}
                            </span>
                            <!--end::Label-->
                            <!--begin::Action-->
                            <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                {{ $program->batas_akhir }}
                            </span>
                            <!--end::Action-->
                        </div>

                    </div>

                    <!-- <div class="btndonasi">
                        <a id="donate" href="{{ route('detail_donasi', $program->id) }}"
                            class="theme-btn dnt hd wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <i class="fa-solid fa-box-heart"></i> Donasi sekarang
                        </a>
                    </div> -->

                </div>
            </div>
            @endforeach
            <div class="separetor wow fadeInUp" data-wow-duration="2s"></div>

        </div>
        <div class="btndonasi text-center py-100">
            <a id="donate" href="https://donation.generasiyatimtahfidz.org/" target="_blank"
                class="theme-btn dnt hd wow fadeInUp py-10 px-10" data-wow-duration="1s" data-wow-delay="1s">
                <i class="fa-solid fa-circle-ellipsis"></i> Lebih banyak kampanye
            </a>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Program Section
=====================================================================-->


<!--==================================================================== 
            Start Visi & Misi Section
=====================================================================-->
<!-- <section class="testimonial-section pt-135 rpt-85 pb-150 rpb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-8 col-sm-9">
                        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                            <h2>Visi & Misi</h2>
                            <p>Untuk dapat terus membantu anak-anak dan bertahan dari segala kondisi kami mempunyai
                                tujuan atau cita-cita yang selalu dijalankan</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-area">
                    <div class="review-buttons">
                        <figure class="active-btn">
                            <a href="#" data-review="1" class="review-btn active">
                                <img src="assets/images/testimonials/testi-big1.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-review="2" class="review-btn">
                                <img src="assets/images/testimonials/testi-big2.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-review="3" class="review-btn">
                                <img src="assets/images/testimonials/testi-small3.jpg" alt="Reviewed by">
                            </a>
                        </figure>
                    </div>
                    <div class="testimony-content">
                        <div class="review-single active">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big1.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>
                                    Yayasan ini didirikan sepenuhnya untuk mencapai tujuan-tujuan di bidang sosial
                                    kemanusiaan dalam rangka mendukung, membekali, dan membentengi generasi pelanjut
                                    khususnya bagi anak-anak yatim dan dhuafa dengan nilai-nilai Al-Qur’an dan sunnah.
                                    <br><br>
                                    Sehingga mereka dapat mengamalkan dan juga menerapkan di kehidupannya sehari-hari,
                                    tidak mudah terombang-ambing oleh badai informasi dan arus global yang tidak sesuai
                                    dengan tuntutan ilahi. <br><br>
                                </p>
                                <div class="reviewer">
                                    <h3>Daniel Roberts</h3>
                                    <span>Mortgage Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-single">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big2.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>
                                    <span>
                                        Mempersiapkan sarana dan prasarana pembelajaran Al-Qur’an yang memadai dan
                                        nyaman.
                                    </span>
                                    <br><br>
                                    <span>
                                        Bekerjasama dengan pihak-pihak terkait baik dengan lembaga negeri maupun
                                        swasta
                                        guna melakukan pengembangan dan riset di bidang pendidikan Al-Qur’an dan hadits.
                                    </span>
                                    <br><br>
                                    <span>
                                        Memberikan beasiswa pendidikan bagi anak yatim dan dhuafa yang berprestasi.
                                    </span>
                                    <br><br>
                                    <span>
                                        Memberikan pelatihan-pelatihan dan workshop sebagai sarana pengembangan diri
                                        bagi anak-anak yatim dan dhuafa.
                                    </span>
                                    <br><br>
                                    <span>
                                        Memberikan pendidikan dan pelatihan di bidang IPTEK sehingga para hafidz dan
                                        hafidzah juga menjadi pakar di bidang ilmu pengetahuan umum.
                                    </span> <br><br>
                                </p>
                                <div class="reviewer">
                                    <h3>Kayleen Colbert</h3>
                                    <span>Investment Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="review-single">
                            <div class="textimonial-image">
                                <img src="assets/images/testimonials/testi-big3.jpg" alt="Reviewed By">
                            </div>
                            <div class="textimonial-content">
                                <p>It’s never too late to learn! I’ve learned new skills to help me to be heard when
                                    speaking with men, and I sharpened my speaking skills overall. Thanks again for all
                                    of your lessons, suggestions, and materials.</p>
                                <div class="reviewer">
                                    <h3>Charles Fuston</h3>
                                    <span>Business Consulting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!--==================================================================== 
            End Visi & Misi Section
=====================================================================-->

<!--==================================================================== 
            Star Partners Section
=====================================================================-->
<!-- <section class="partners-section pt-135 rpt-85 pb-145 rpb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="section-title wow fadeInUp" data-wow-duration="2s">
                            <h2>Mitra<br> YGYT</h2>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="partner-wrap">
                            <div class="partner-item">
                                <img src="assets/images/partners/partner1.png" alt="Partner Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/images/partners/partner2.png" alt="Partner Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/images/partners/partner3.png" alt="Partner Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/images/partners/partner4.png" alt="Partner Image">
                            </div>
                            <div class="partner-item">
                                <img src="assets/images/partners/partner2.png" alt="Partner Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!--==================================================================== 
            End Partners Section
=====================================================================-->

<!--==================================================================== 
            Star Gallery Mini Section
=====================================================================-->
<section class="cases-section bg-snow-hadist pt-140 rpt-90 pb-150 rpb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                    <h2>Galeri</h2>
                    <p>Berikut beberapa ragam aktivitas atau kegiatan keseharian anak-anak yang kami abadikan
                        pada momen tertentu
                    </p>
                </div>
            </div>
        </div>
        <div class="case-wrap">
            <div class="case-item wow fadeInUp" data-wow-duration="2s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>HOME / LAND</span>
                            <h4><a href="case-details.html">Mortgage Advisor</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/3.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>CORPORATE SERVICES</span>
                            <h4><a href="case-details.html">Planning & Management</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div> -->
            </div>
        </div>
        <div class="case-wrap">
            <div class="case-item wow fadeInUp" data-wow-duration="2s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>HOME / LAND</span>
                            <h4><a href="case-details.html">Mortgage Advisor</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/6.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/7.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>CORPORATE SERVICES</span>
                            <h4><a href="case-details.html">Planning & Management</a></h4>
                        </div> -->
            </div>
            <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                <div class="case-image">
                    <img src="{{ asset('assets/images/gallery/8.jpg') }}" alt="Case Image">
                    <a href="gallery.php"><i class="fas fa-angle-double-right"></i></a>
                </div>
                <!-- <div class="case-content">
                            <span>BUSINESS SOLUTION</span>
                            <h4><a href="case-details.html">Online Consulting</a></h4>
                        </div> -->
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Gallery Mini Section
=====================================================================-->

<!--==================================================================== 
            Start Legalitas Section
=====================================================================-->
<section class="team-section pt-150 rpt-90 pb-150 rpb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-md-8">
                <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                    <h2>Legalitas <br> <span>Yayasan Generasi Yatim Tahfidz</span></h2>
                    <p>Kami adalah lembaga sosial swadaya masyarakat yang legal dan telah diakui secara resmi
                        oleh
                        pemerintah berikut
                        surat-surat
                        legalitasnya
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-wrap">
        <div class="team-item wow fadeInUp" data-wow-duration="2s">
            <div class="item-image">
                <img src="{{ asset('assets/images/cases/skkemenkumham.png') }}" alt="Team Image">
            </div>
            <div class="team-desc">
                <h4>SK Kemenkumham</h4>
            </div>
        </div>
        <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="item-image">
                <img src="{{ asset('assets/images/cases/case-details2.png') }}" alt="Team Image">
            </div>
            <div class="team-desc">
                <h4>Akta Pendirian Yayasan</h4>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Legalitas Section
=====================================================================-->

<!--==================================================================== 
                        Start Donation Section
=====================================================================-->
@include('partials.donation')
<!--==================================================================== 
                        End Donation Section
=====================================================================-->

<!--==================================================================== 
            Start Call Back Section
=====================================================================-->
<!-- <section class="call-back-section text-white py-150 rpt-90 rpb-100">
            <div class="call-back-shap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInUp" data-wow-duration="2s">
                            <h2>Kontak</h2>
                            <p>Bila ada informasi yang masih belum jelas, silakan tanyakan langsung ke kami melalui form
                                berikut ini.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="https://formsubmit.co/admin@generasiyatimtahfidz.org" id="call-back-form"
                            class="call-back-form" name="call-back-form" action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="full-name" class="form-control" value=""
                                            placeholder="Nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email-address" class="form-control" value=""
                                            placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone-number" class="form-control" value=""
                                            placeholder="Telepon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value=""
                                            placeholder="Subjek" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <div class="form-group">
                                        <input type="text" name="short-text" class="form-control" value=""
                                            placeholder="Pesan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group call-submit text-center">
                                <button class="theme-btn" type="submit">Kirim <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
<!--==================================================================== 
            End Call Back Section
=====================================================================-->

@stop
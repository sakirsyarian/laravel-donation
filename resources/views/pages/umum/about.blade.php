@extends('layouts.landing')
@section('content')

<!--==================================================================== 
            Start Page Banner Section
=====================================================================-->
<section class="page-banner overlay">
    <div class="container">
        <div class="banner-inner">
            <h2 class="wow fadeInUp" data-wow-duration="1.5s">Tentang.</h2>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Page Banner Section
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
<section class="about-us pb-150 rpb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image rmb-50">
                    <img class="wow fadeInBottomLeft" data-wow-duration="2s"
                        src="{{ asset('assets/images/about/about-ramadhan.png') }}" alt="About Image">
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

                    <!-- <a href="about.php" class="theme-btn wow fadeInUp" data-wow-duration="2s">Selengkapnya <i
                                    class="fas fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End About Us Section
=====================================================================-->

<!--==================================================================== 
            Start Vission Mission Section
=====================================================================-->
<section class="vission-mission bg-pattern-ramadhan py-150 rpy-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="vission-tabs">
                    <li class="wow fadeInUp" data-tab="tab_1" data-wow-duration="1.5s">
                        <h3>Sejarah</h3>
                    </li>
                    <li class="active wow fadeInUp" data-tab="tab_2" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <h3>Visi</h3>
                    </li>
                    <li class="wow fadeInUp" data-tab="tab_3" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <h3>Misi</h3>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="vission-content-wrap">
                    <div id="tab_1" class="vission-tab-content">
                        <div class="section-title">
                            <h2>Sejarah</h2>
                        </div>
                        <p>Berawal dari kepedulian kami agar yatim dan dhuafa yang ada disekitar kami menjadi
                            pribadi yang berakhlak dan berilmu terutama dalam pendidikan Al-Quran dan Hadits.
                        </p>
                        <p>Perkembangan teknologi yang kian pesat dan menjamurnya media sosial yang semakin
                            sulit dikendalikan arusnya membuat kami merasa perlu untuk memberikan pendidikan
                            aqidah akhlaq. </p>
                        <p>
                            Karena pendidikan mempuyai peran sebagai benteng dan pagar iman untuk menjaga agar
                            generasi penerus
                            tetap ingat akan tugas utamanya sebagai “Pengabdi Allah” dan “Khalifah di bumi”
                            sehingga memastikan mereka untuk memegang nilai-nilai luhur keimanan dan ingat akan
                            tugas mereka sebagai generasi penerus bangsa.
                        </p>
                    </div>
                    <div id="tab_2" class="vission-tab-content active">
                        <div class="section-title">
                            <h2>Visi</h2>
                        </div>
                        <p>Yayasan ini didirikan sepenuhnya untuk mencapai tujuan-tujuan di bidang sosial
                            kemanusiaan dalam rangka mendukung, membekali, dan membentengi generasi pelanjut
                            khususnya bagi anak-anak yatim dan dhuafa dengan nilai-nilai Al-Qur’an dan sunnah.
                        </p>
                        <p>Sehingga mereka dapat mengamalkan dan juga menerapkan di kehidupannya sehari-hari,
                            tidak mudah terombang-ambing oleh badai informasi dan arus global yang tidak sesuai
                            dengan tuntutan ilahi.
                        </p>
                    </div>
                    <div id="tab_3" class="vission-tab-content">
                        <div class="section-title">
                            <h2>Misi</h2>
                        </div>
                        <p>Mempersiapkan sarana dan prasarana pembelajaran Al-Qur’an yang memadai dan nyaman.
                        </p>
                        <p>Bekerjasama dengan pihak-pihak terkait baik dengan lembaga negeri maupun swasta guna
                            melakukan pengembangan dan riset di bidang pendidikan Al-Qur’an dan hadits. </p>
                        <p>
                            Memberikan beasiswa pendidikan bagi anak yatim dan dhuafa yang berprestasi.
                        </p>
                        <p>
                            Memberikan pelatihan-pelatihan dan workshop sebagai sarana pengembangan diri bagi
                            anak-anak yatim dan dhuafa.
                        </p>
                        <p>

                            Memberikan pendidikan dan pelatihan di bidang IPTEK sehingga para hafidz dan
                            hafidzah juga menjadi pakar di bidang ilmu pengetahuan umum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Vission Mission Section
=====================================================================-->

<!--==================================================================== 
                        Start Donation Section
=====================================================================-->
@include('partials.donation')
<!--==================================================================== 
                        End Donation Section
=====================================================================-->

<!--==================================================================== 
            Start Legalitas Section
=====================================================================-->
<section class="team-section pt-135 rpt-90 pb-90 rpb-40">
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
                <img src="{{ asset('assets/images/cases/case-details1.png') }}" alt="Team Image">
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
            Start Team Section
=====================================================================-->
<section class="team-section pt-135 rpt-90 pb-90 rpb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-md-8">
                <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                    <h2>Pengurus <br> <span>Yayasan Generasi Yatim Tahfidz</span></h2>
                    <p>Untuk dapat menjalankan organisasi ini dengan profesional dan amanah tentu kami didukung
                        oleh tim atau pengurus yang berdedikasi tinggi serta jujur</p>
                </div>
            </div>
        </div>
    </div>

    <div class="team-wrap">
        <div class="team-item wow fadeInUp" data-wow-duration="2s">
            <div class="item-image">
                <img src="{{ asset('assets/images/team/2.png') }}" alt="Team Image">
                <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> -->
            </div>
            <div class="team-desc">
                <h3>Saparina Wulandari</h3>
                <p>Pembina</p>
            </div>
        </div>
        <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="item-image">
                <img src="{{ asset('assets/images/team/1.png') }}" alt="Team Image">
                <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> -->
            </div>
            <div class="team-desc">
                <h3>Muhayat</h3>
                <p>Pengawas</p>
            </div>
        </div>
        <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="item-image">
                <img src="{{ asset('assets/images/team/3.png') }}" alt="Team Image">
                <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> -->
            </div>
            <div class="team-desc">
                <h3>Supraptomo</h3>
                <p>Ketua</p>
            </div>
        </div>
        <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
            <div class="item-image">
                <img src="{{ asset('assets/images/team/5.png') }}" alt="Team Image">
                <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> -->
            </div>
            <div class="team-desc">
                <h3>Pupu Maspupah</h3>
                <p>Sekretaris</p>
            </div>
        </div>
        <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
            <div class="item-image">
                <img src="{{ asset('assets/images/team/4.png') }}" alt="Team Image">
                <!-- <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div> -->
            </div>
            <div class="team-desc">
                <h3>Aulia Anggraeni</h3>
                <p>Bendahara</p>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Team Section
=====================================================================-->

@stop
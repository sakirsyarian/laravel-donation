@extends('layouts.landing')
@section('content')

<!--==================================================================== 
            Start Page Banner Section
=====================================================================-->
<section class="page-banner overlay">
    <div class="container">
        <div class="banner-inner">
            <h2 class="wow fadeInUp" data-wow-duration="1.5s">Kontak.</h2>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Page Banner Section
=====================================================================-->

<!--==================================================================== 
            Start Get In Touch Section
=====================================================================-->
<section class="get-in-touch py-150 rpy-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-sidebar">
                    <div class="sidebar-widget bg-snow">
                        <h3>Lokasi:</h3>
                        <ul>
                            <li>
                                <div class="left-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right-content">
                                    Kota Banjarbaru, Kalimantan Selatan
                                </div>
                            </li>
                            <li>
                                <div class="left-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="right-content">
                                    <a href="callto:+6285828112032">085828112032</a><br>
                                </div>
                            </li>
                            <li>
                                <div class="left-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="right-content">
                                    <a
                                        href="mailto:admin@generasiyatimtahfidz.org">admin@generasiyatimtahfidz.org</a><br>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="sidebar-widget bg-black text-white">
                                <h3>Location: 02</h3>
                                <ul>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            61 South Big Rock Cove Zurich, Villad 60047
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="callto:+88999666444">+88-999-666-444</a><br>
                                            <a href="callto:+88888555777">+88-888-555-777</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="mailto:info@domain.com">info@domain.com</a><br>
                                            <a href="mailto:support@domain.com">support@domain.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>Form</h2>
                </div>
                <p>Bila ada informasi yang masih belum jelas, silakan tanyakan langsung ke kami melalui form
                    berikut ini.
                </p>
                <form action="https://formsubmit.co/admin@generasiyatimtahfidz.org" id="call-back-form"
                    class="call-back-form" name="call-back-form" action="#" method="post">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="full-name" class="form-control" value="" placeholder="Nama"
                                    required="">
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
                                <input type="text" name="subject" class="form-control" value="" placeholder="Subjek"
                                    required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-40">
                            <div class="form-group">
                                <textarea name="form-message" rows="7" class="form-control"
                                    placeholder="Pesan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button class="theme-btn" type="submit">Kirim <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Get In Touch Section
=====================================================================-->

<!--==================================================================== 
            Start Map Section
=====================================================================-->
<div class="contact-map pb-150 rpb-100">
    <div class="container">
        <div class="map-inner">
            <div class="map" id="map"></div>
        </div>
    </div>
</div>
<!--==================================================================== 
            End Map Section
=====================================================================-->

<!--==================================================================== 
            Start Hadits
=====================================================================-->
<section class="cta-section bg-snow pt-130 rpt-80 pb-135 rpb-100">
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

@stop
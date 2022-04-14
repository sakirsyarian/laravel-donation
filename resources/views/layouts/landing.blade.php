<!DOCTYPE html>
<html lang="id">

<head>
    <!--==================================================================== 
                        Start Google Tag Manager Section
    =====================================================================-->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M4CG48L');
    </script>
    <!--==================================================================== 
                        End Google Tag Manager Section
    =====================================================================-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!--==================================================================== 
                            Start Primary Meta Tags Section
    =====================================================================-->
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords"
        content="Yayasan Yatim Piatu, Yayasan Yatim Ziswaf, Yayasan Yatim Dhuafa, Rumah Yatim Dhuafa, Donasi Yatim Piatu, Dompet Dhuafa Zakat, Wakaf Dompet Dhuafa, Donasi Dompet Dhuafa, Yayasan Dompet Dhuafa, Sedekah Yatim Piatu, Yayasan Yatim Piatu Terdekat, Rumah Yatim Piatu, Badan Wakaf Alquran, Yayasan Dompet Yatim Indonesia, Panti Asuhan Terdekat, Pondok yatim dan dhuafa, Program Wakaf Al quran, Sedekah Online Terpercaya, Panti Asuhan Samarinda, Yayasan Panti Asuhan, Yayasan Panti Asuhan Terdekat, Panti Asuhan Pontianak" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://generasiyatimtahfidz.org/">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="assets/images/gallery/3.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://generasiyatimtahfidz.org/">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="assets/images/gallery/3.jpg">
    <!--====================================================================
                            End Primary Meta Tags Section
    =====================================================================-->

    <!--==================================================================== 
                                Start Stylesheet Section
    =====================================================================-->
    @include('partials.stylesheet')
    <!--==================================================================== 
                                End Stylesheet Section
    =====================================================================-->
</head>

<body>
    <!--==================================================================== 
                    Start Google Tag Manager (noscript) Section
    =====================================================================-->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4CG48L" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--==================================================================== 
                    End Google Tag Manager (noscript) Section
    =====================================================================-->

    <!--==================================================================== 
                            Start Page Wrapper Section
    =====================================================================-->
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--==================================================================== 
                                Start Navbar Section
        =====================================================================-->
        @include('partials.navbar')
        <!--==================================================================== 
                                End Navbar Section
        =====================================================================-->

        <!--==================================================================== 
                                Start Content Section
        =====================================================================-->
        @yield('content')
        <!--==================================================================== 
                                End Content Section
        =====================================================================-->

        <!--==================================================================== 
                                Start Footer Section
        =====================================================================-->
        @include('partials.footer')
        @include('partials.whatsapp')
        <!--==================================================================== 
                                End Footer Section
        =====================================================================-->

    </div>
    <!--==================================================================== 
                            End Page Wrapper Section
    =====================================================================-->

    <!--==================================================================== 
                                Start Script Section
    =====================================================================-->
    @include('partials.script')
    @stack('custom-scripts')
    <!--==================================================================== 
                                End Script Section
    =====================================================================-->
</body>

</html>
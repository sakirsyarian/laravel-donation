<!DOCTYPE html>
<html lang="en">

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
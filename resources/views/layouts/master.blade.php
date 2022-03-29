<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div id="app">

        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">

                @include('includes.sidebar')

                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    <div id="main" class='layout-navbar'>
                        @include('includes.greeting')

                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content"
                            style="padding-top: 0;">

                            <div id="main-content">
                                @yield('content')
                            </div>

                        </div>
                        <!--end::Content-->

                    </div>

                </div>
                <!--end::Wrapper-->

            </div>
            <!--begin::Page-->
        </div>
        <!--begin::Root-->

    </div>

    @include('includes.footer-script')

    {{-- Addon Script --}}
    @stack('custom-scripts')
</body>

</html>
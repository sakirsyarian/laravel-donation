@extends('layouts.app')
@section('content')

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="/" class="mb-12">
                <img alt="Logo" src="{{ asset('logo/ygyt.png') }}" class="h-65px" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!-- Anonim -->
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close"
                            data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                    @endforeach
                </div>
                <!--begin::Form-->
                <form method="POST" class="form w-100" novalidate="novalidate" action="#">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-15">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Generasi Yatim Tahfidz</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <!-- <div class="text-gray-400 fw-bold fs-4">Tidak punya akun ?
                            <a href="{{ route('register') }}" class="link-primary fw-bolder">Daftar</a>
                        </div> -->
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                            class="form-control @error('email') is-invalid @enderror form-control-lg form-control-solid"
                            id="email" type="email" name="email" autocomplete="off" />
                        <!--end::Input-->
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Lupa
                                password ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        <input
                            class="form-control @error('password') is-invalid @enderror form-control-lg form-control-solid"
                            id="password" type="password" name="password" autocomplete="off" />
                        <!--end::Input-->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Login</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Submit button-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://www.generasiyatimtahfidz.org/" class="text-muted text-hover-primary px-2">Beranda</a>
                <a href="https://www.generasiyatimtahfidz.org/about.php"
                    class="text-muted text-hover-primary px-2">Tentang</a>
                <a href="https://www.generasiyatimtahfidz.org/contact.php"
                    class="text-muted text-hover-primary px-2">Kontak</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->

@endsection
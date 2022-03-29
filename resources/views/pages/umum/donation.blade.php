<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IDonation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
    body {
        min-height: 75rem;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">IDonation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/donation">Donation <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">IDonation</h1>
            <p class="lead">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container">
        <form action="#" id="donation_form">
            <legend>Donation</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="donor_name" class="form-control" id="donor_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="donor_email" class="form-control" id="donor_email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Jenis Donasi</label>
                        <select name="donation_type" class="form-control" id="donation_type">
                            <option value="medis_kesehatan">Medis & Kesehatan</option>
                            <option value="kemanusiaan">Kemanusiaan</option>
                            <option value="bencana_alam">Bencana Alam</option>
                            <option value="rumah_ibadah">Rumah Ibadah</option>
                            <option value="beasiswa_pendidikan">Beasiswa & Pendidikan</option>
                            <option value="sarana_infrastruktur">Sarana & Infrastruktur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="amount" class="form-control" id="amount">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Catatan (Opsional)</label>
                        <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script
        src="{{
        !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
        data-client-key="{{ config('services.midtrans.clientKey')
    }}"></script>
    <script>
    $("#donation_form").submit(function(event) {
        event.preventDefault();

        $.post("/api/donation", {
                _method: 'POST',
                _token: '{{ csrf_token() }}',
                donor_name: $('input#donor_name').val(),
                donor_email: $('input#donor_email').val(),
                donation_type: $('select#donation_type').val(),
                amount: $('input#amount').val(),
                note: $('textarea#note').val(),
            },

            function(data, status) {
                console.log(data);
                snap.pay(data.snap_token, {
                    // Optional
                    onSuccess: function(result) {
                        console.log(JSON.stringify(result, null, 2));
                        location.replace('/');
                    },
                    // Optional
                    onPending: function(result) {
                        console.log(JSON.stringify(result, null, 2));
                        location.replace('/');
                    },
                    // Optional
                    onError: function(result) {
                        console.log(JSON.stringify(result, null, 2));
                        location.replace('/');
                    }
                });
                return false;
            });
    })
    </script>
</body>

</html> -->

@extends('layouts.master')
@section('content')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid mb-20" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} alert-dismissible fade show">
            {{ Session::get('alert-' . $msg) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @endforeach

        <!--begin::Donation-->
        <div class="card my-10">
            <div class="card-header">
                <h4 class="card-title">Ayo, jadi donatur sekarang!</h4>
            </div>
            <div class="card-body">
                <form action="#" id="donation_form">
                    @csrf

                    <!--begin::Nama & Jenis-->
                    <div class="row g-9 py-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_name" class=" required fs-6 fw-bold mb-2">Nama</label>
                            <input type="text" class="form-control form-control-solid" id="donor_name" name="donor_name"
                                placeholder="Tuliskan nama Anda" required>
                        </div>
                        <!--end::Col-->
                        <!--begin::Jenis-->
                        <div class="col-md-6 fv-row">
                            <label for="donation_type" class="required fs-6 fw-bold mb-2">Jenis</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih jenis donasi" name="donation_type" id="donation_type" required>
                                <option value="">Jenis donasi...</option>
                                <option value="Rumah Tahfidz">Rumah Tahfidz</option>
                                <option value="Bantuan Uang Sekolah">Bantuan Uang Sekolah</option>
                                <option value="Belajar Al-Qur’an & Hadits">Belajar Al-Qur’an & Hadits</option>
                                <option value="Do’a Bersama">Do’a Bersama</option>
                                <option value="Wakaf Al-Qur’an">Wakaf Al-Qur’an</option>
                            </select>
                        </div>
                        <!--end::Jenis-->
                    </div>
                    <!--end::Nama & Jenis-->

                    <!--begin::Email & Telepom-->
                    <div class="row g-9 py-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_email" class=" required fs-6 fw-bold mb-2">Email</label>
                            <input type="text" class="form-control form-control-solid" id="donor_email"
                                name="donor_email" placeholder="Tuliskan email Anda" required>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_number" class="required fs-6 fw-bold mb-2">Telepon</label>
                            <input type="number" class="form-control form-control-solid" name="donor_number"
                                id="donor_number" placeholder="Masukan nomor telepon" required>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Email & Telepom-->

                    <!--begin::Nominal-->
                    <div class="d-flex flex-column py-5 fv-row">
                        <!--begin::Label-->
                        <label for="amount" class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nominal</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Bid options-->
                        <div class="d-flex flex-stack gap-5 mb-3">
                            <button type="button" class="btn btn-light-primary w-100"
                                data-kt-modal-bidding="option">10.000</button>
                            <button type="button" class="btn btn-light-primary w-100"
                                data-kt-modal-bidding="option">50.000</button>
                            <button type="button" class="btn btn-light-primary w-100"
                                data-kt-modal-bidding="option">80.000</button>
                            <button type="button" class="btn btn-light-primary w-100"
                                data-kt-modal-bidding="option">100.000</button>
                        </div>
                        <!--begin::Bid options-->
                        <div class="input-group" id="tambah_target">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control form-control-solid"
                                placeholder="Masukan sejumlah nominal" name="amount" id="amount" required />
                        </div>
                    </div>
                    <!--end::Nominal-->

                    <!--begin::Textarea-->
                    <div class="d-flex flex-column py-5 fv-row">
                        <!--begin::Label-->
                        <label for="note" class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Pesan</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid" rows="3" id="note" name='note'
                            placeholder="Masukan pesan yang ingin disampaikan..." required></textarea>
                    </div>
                    <!--end::Textarea-->

                    <button type="submit" class="btn btn-primary ml-1 my-15">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Donasi sekarang</span>
                    </button>

                </form>
            </div>
        </div>
        <!--end::Donation-->

    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@stop

@push('custom-scripts')
<!-- Midtrans -->
<script
    src="{{
        !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
    data-client-key="{{ config('services.midtrans.clientKey')
    }}">
</script>
<script>
$("#donation_form").submit(function(event) {
    event.preventDefault();

    $.post("/api/donation", {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            donor_name: $('input#donor_name').val(),
            donor_email: $('input#donor_email').val(),
            donor_number: $('input#donor_number').val(),
            donation_type: $('select#donation_type').val(),
            amount: $('input#amount').val(),
            note: $('textarea#note').val(),
        },

        function(data, status) {
            console.log(data);
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function(result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                },
                // Optional
                onPending: function(result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                },
                // Optional
                onError: function(result) {
                    console.log(JSON.stringify(result, null, 2));
                    location.replace('/');
                }
            });
            return false;
        });
})
</script>
<!-- Select Nominal -->
<script>
const t = document.querySelectorAll('[data-kt-modal-bidding="option"]');
const n = document.querySelector('[name="amount"]');
t.forEach((t => {
    t.addEventListener("click", (t => {
        t.preventDefault();
        let hideDot = t.target.innerText;
        n.value = hideDot.replace('.', '');
    }))
}))
</script>
@endpush
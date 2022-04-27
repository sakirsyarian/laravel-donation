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

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 order-md-1 order-last">
                        <h3>Menu Donasi</h3>
                    </div>
                </div>
            </div>
            <section class="section my-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$program->nama_program}}</h4>
                            </div>
                            <div class="card-body py-15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-center">
                                            <img height="250px"
                                                src="{{ asset('/storage/images/program/'.$program->gambarProgram->nama) }}"
                                                style="border-radius: 10px" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-striped" id="programs">
                                            <tbody>
                                                <!-- <tr>
                                                    <th width="40%">Id</th>
                                                    <td>{{$program->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">User</th>
                                                    <td>{{$program->userProgram->nama}}</td>
                                                </tr> -->
                                                <tr>
                                                    <th width="40%">Target</th>
                                                    <td>Rp
                                                        {{ " " . number_format($program->target, 0, ',' , '.') }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Terkumpul</th>
                                                    <td>Rp
                                                        {{ " " . number_format($program->jumlah_terkumpul, 0, ',' , '.') }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Dibuat</th>
                                                    <td>{{ $program->inserted_at }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Batas akhir</th>
                                                    <td>{{ $program->batas_akhir }}</td>
                                                </tr>
                                                <tr>
                                                    <th width="40%">Status</th>
                                                    <td>{{ $program->batas_akhir <= now()->format('Y-m-d') ? 'Kedaluwarsa' : 'Aktif' }}
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <th width="40%">Fundraiser</th>
                                                    <td>
                                                        <ul>
                                                            @foreach ($program->fundraisers as $fundraiser)
                                                            <li>{{$fundraiser->email}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!--begin::Target-->
        <div class="card my-10">
            <div class="card-header">
                <h4 class="card-title">Progress pengumpulan dana</h4>
            </div>
            <div class="card-body" style="text-align: right">
                <h6 style="margin-bottom: 30px">Jumlah terkumpul:
                    {{ $persTerkumpul }} %
                </h6>
                <div class="progress progress-primary mb-4">
                    <div class="progress-bar progress-label" role="progressbar"
                        style="width: <?= $persTerkumpul . '%' ?>" aria-valuenow="{{ $persTerkumpul }}"
                        aria-valuemin="0" aria-valuemax="100" id="jmlKumpul"></div>
                </div>

                <!-- <h6 style="margin-bottom: 30px">Jumlah terverifikasi: {{$persVerif}}%</h6>
                <div class="progress progress-success mb-4">
                    <div class="progress-bar progress-label" role="progressbar" style="width: <?= $persVerif . '%' ?>"
                        aria-valuenow="{{ $persVerif }}" aria-valuemin="0" aria-valuemax="100" id="jmlVerif">
                    </div>
                </div> -->
            </div>
        </div>
        <!--end::Target-->

        <!--begin::News-->
        <!-- <div class="card my-10">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10 my-0">
                        <h4 class="card-title">Berita terkini</h4>
                    </div>
                    <div class="col-md-2" style="text-align: right">
                        <a href="{{route('daftar_berita', $program->id)}}" type="button"
                            class="btn btn-sm btn-primary float-right">
                            Daftar Berita
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="list-group">
                        @foreach ($beritas as $berita)
                        <a href="{{ route('detail_berita', ['id' => $program->id, 'berita' => $berita->id]) }}"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $berita->judul }}</h5>
                                <small>{{ $berita->inserted_at }}</small>
                            </div>
                            <hr>
                            <p>Ditulis oleh: {{$berita->program->userProgram->nama}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> -->
        <!--end::News-->

        <!--begin::Informasi-->
        <div class="card my-10">
            <div class="card-header">
                <h4 class="card-title">Keterangan program</h4>
            </div>
            <div class="card-body">
                {!!$program->info!!}
            </div>
        </div>
        <!--end::Informasi-->

        <!--begin::Donation-->
        <div class="card my-10">
            <div class="card-header">
                <h4 class="card-title">Ayo, jadi donatur sekarang!</h4>
            </div>
            <div class="card-body">
                <form action="#" id="donasi_form">
                    @csrf

                    <!--begin::Nama & Jenis-->
                    <div class="row g-9 py-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_name" class=" required fs-6 fw-bold mb-2">Nama</label>
                            <input type="text" class="form-control form-control-solid" id="donor_name" name="donor_name"
                                value="{{ old('donor_name') }}" placeholder="Tuliskan nama Anda" required>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_jenis_donasi" class="required fs-6 fw-bold mb-2">Jenis</label>
                            <input type="text" class="form-control form-control-solid" name="donor_jenis_donasi"
                                id="donor_jenis_donasi" value="{{$program->nama_program}}" disabled required>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Nama & Jeniss-->

                    <!--begin::Email & Telepon-->
                    <div class="row g-9 py-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_email" class=" required fs-6 fw-bold mb-2">Email</label>
                            <input type="text" class="form-control form-control-solid" id="donor_email"
                                name="donor_email" value="{{ old('donor_email') }}" placeholder="Tuliskan email Anda"
                                required>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label for="donor_number" class="required fs-6 fw-bold mb-2">Telepon</label>
                            <input type="number" class="form-control form-control-solid" name="donor_number"
                                id="donor_number" placeholder="Masukan nomor telepon" value="{{old('donor_number')}}"
                                required>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Email & Telepon-->

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
                            <!-- hidden -->
                            <!-- <input type="hidden" class="form-control form-control-solid" name="target" id="target"
                                placeholder="Masukan nomor target" value="{{ $program->target }}"> -->
                            <!-- hidden -->
                            <input type="hidden" class="form-control form-control-solid" name="id" id="id"
                                placeholder="Masukan nomor total amount" value="{{$program->id}}" required>
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
                            placeholder="Masukan pesan yang ingin disampaikan..." required>{{ old('note') }}</textarea>
                    </div>
                    <!--end::Textarea-->

                    <button type="submit"
                        class="btn btn-primary ml-1 my-15 {{ $program->batas_akhir <= now()->format('Y-m-d') || $program->jumlah_terkumpul >= $program->target ? 'd-none' : '' }}">
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
$("#donasi_form").submit(function(event) {
    event.preventDefault();

    $.post("/api/donate", {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            donor_name: $('input#donor_name').val(),
            donor_email: $('input#donor_email').val(),
            donor_number: $('input#donor_number').val(),
            donation_type: $('input#donor_jenis_donasi').val(),
            amount: $('input#amount').val(),
            note: $('textarea#note').val(),
            id: $('input#id').val(),
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
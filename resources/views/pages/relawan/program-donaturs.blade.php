@extends('layouts.master')
@section('tableId', '#program-donaturs')
@section('content')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid mb-20" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last py-5">
                        <h3>Manajemen Donatur Program</h3>
                    </div>
                </div>
            </div>

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }} alert-dismissible fade show">
                {{ Session::get('alert-' . $msg) }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @endforeach

            <section class="section">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(58, 72, 143)">
                                            <i class="fas fa-hourglass-start"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="text-muted font-semibold">Menunggu Verifikasi</h6>
                                        <h6 class="font-extrabold mb-0">{{$jmlMenunggu}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(235, 47, 47)">
                                            <i class="fas fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="text-muted font-semibold">Ditolak</h6>
                                        <h6 class="font-extrabold mb-0">{{$jmlDitolak}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(45, 210, 84)">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="text-muted font-semibold">Terverifikasi</h6>
                                        <h6 class="font-extrabold mb-0">{{$jmlTerverifikasi}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(73, 30, 125)">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Donatur</h6>
                                        <h6 class="font-extrabold mb-0">{{$donaturs->count()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(250, 168, 26)">
                                            <i class="fas fa-money-bill-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Terkumpul</h6>
                                        <h6 class="font-extrabold mb-0">
                                            {{ number_format($program->jumlah_terkumpul, 0, ',' , '.') }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6 my-3">
                        <div class="card" style="height: 140px">
                            <div class="card-body p-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon" style="color:#fff; background-color: rgb(64, 186, 174)">
                                            <i class="far fa-money-bill-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Jumlah Terverifikasi</h6>
                                        <h6 class="font-extrabold mb-0">{{$program->jumlah_terverifikasi}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-10">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Donatur Program {{$program->nama_program}}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="program-donaturs">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Nama Pengirim</th>

                                    <th class="text-center">Nominal Donasi</th>
                                    <th class="text-center">Status verifikasi</th>
                                    <th class="text-center">Status donasi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donaturs as $donatur)
                                <tr>
                                    <td class="text-center">{{$donatur->id}}</td>
                                    <td>{{$donatur->nama_pengirim}}</td>

                                    <td class="text-center">{{ number_format($donatur->nominal_donasi, 0, ',' , '.') }}
                                    </td>
                                    <td class="text-center">
                                        @if($donatur->status_verifikasi == "menunggu verifikasi")
                                        <span class="badge bg-info">{{ $donatur->status_verifikasi }}</span>
                                        @elseif ($donatur->status_verifikasi == "ditolak")
                                        <span class="badge bg-danger">{{ $donatur->status_verifikasi }}</span>
                                        @elseif ($donatur->status_verifikasi == "terverifikasi")
                                        <span class="badge bg-success">{{ $donatur->status_verifikasi }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($donatur->status_donasi == "proses penghimpunan")
                                        <span class="badge bg-info">{{ $donatur->status_donasi }}</span>
                                        @elseif ($donatur->status_donasi == "tertunda")
                                        <span class="badge bg-secondary">{{ $donatur->status_donasi }}</span>
                                        @elseif ($donatur->status_donasi == "tersalurkan")
                                        <span class="badge bg-success">{{ $donatur->status_donasi }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-warning block btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#edit-donatur-{{$donatur->id}}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Modal Edit Data --}}
                                <div class="modal fade text-left" id="edit-donatur-{{$donatur->id}}" tabindex="-1"
                                    role="dialog" aria-labelledby="edit-donatur-{{$donatur->id}}Label33"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="edit-donatur-{{$donatur->id}}Label33">Edit
                                                    Donatur #{{$donatur->id}}</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="{{ route('relawan.program-donaturs.update', $donatur->id) }}"
                                                method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="modal-body">
                                                    <label>Nama Pengirim: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="{{ $donatur->nama_pengirim }}"
                                                            class="form-control" disabled>
                                                    </div>

                                                    <label>Email: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="{{ $donatur->email }}"
                                                            class="form-control" disabled>
                                                    </div>

                                                    <label>Pesan: </label>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3"
                                                            disabled>{{ $donatur->pesan }}</textarea>
                                                    </div>
                                                    <label>Status Verifikasi: </label>
                                                    <div class="form-group">
                                                        <select class="form-control form-select"
                                                            id="change_status_verifikasi"
                                                            name="change_status_verifikasi">
                                                            <option value="menunggu verifikasi"
                                                                {{ $donatur->status_verifikasi == "menunggu verifikasi" ? "selected" : ""}}>
                                                                Menunggu verifikasi</option>
                                                            <option value="ditolak"
                                                                {{ $donatur->status_verifikasi == "ditolak" ? "selected" : ""}}>
                                                                Ditolak</option>
                                                            <option value="terverifikasi"
                                                                {{ $donatur->status_verifikasi == "terverifikasi" ? "selected" : ""}}>
                                                                Terverifikasi</option>
                                                        </select>
                                                    </div>
                                                    <label>Status Donasi: </label>
                                                    <div class="form-group">
                                                        <select class="form-control form-select"
                                                            id="change_status_donasi" name="change_status_donasi">
                                                            <option value="proses penghimpunan"
                                                                {{ $donatur->status_donasi == "proses penghimpunan" ? "selected" : ""}}>
                                                                Proses penghimpunan</option>
                                                            <option value="tertunda"
                                                                {{ $donatur->status_donasi == "tertunda" ? "selected" : ""}}>
                                                                Tertunda</option>
                                                            <option value="tersalurkan"
                                                                {{ $donatur->status_donasi == "tersalurkan" ? "selected" : ""}}>
                                                                Tersalurkan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1 my-4">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">SUBMIT</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@endsection
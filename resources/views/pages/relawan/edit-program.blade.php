@extends('layouts.master')
@section('content')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid mb-20" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <div class="page-heading">

            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last py-5">
                        <h3>Edit Program</h3>
                    </div>
                </div>
            </div>

            <section class="section">
                <div class="card">
                    <div class="card-body px-10 py-5">
                        <form action="{{route('relawan.programs.update', $program->id)}}" method="post"
                            id="edit_program" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <!-- <div class="form-group">
                                <label for="edit_nama_program">Nama Program</label>
                                <input type="text" id="edit_nama_program" name="edit_nama_program" class="form-control"
                                    value="{{$program->nama_program}}">
                            </div>

                            <div class="form-group">
                                <label for="edit_target">Target</label>
                                <div class="input-group mb-3" id="edit_target">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" class="form-control" name="edit_target"
                                        value="{{$program->target}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="snow" class="form-label">Info</label>
                                <div id="snow">
                                    {!! $program->info !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="edit_batas_akhir">Batas akhir</label>
                                <input type="text" id="edit_batas_akhir" name="edit_batas_akhir" class="form-control"
                                    value="{{$program->batas_akhir}}"></p>
                            </div>

                            <div class="form-group">
                                <label for="edit_gambar_program">Upload ulang gambar</label>
                                <input type="file" name="edit_gambar_program" style="display: block">
                            </div>

                            <button type="submit" class="btn btn-primary ml-1 my-4">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">SUBMIT</span>
                            </button> -->

                            <!--begin::Program & Target-->
                            <div class="row g-9 py-5">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label for="edit_nama_program" class=" required fs-6 fw-bold mb-2">Program</label>
                                    <input type="text" class="form-control form-control-solid" name="edit_nama_program"
                                        id="edit_nama_program" placeholder="Tuliskan nama program"
                                        value="{{$program->nama_program}}" required>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label for="edit_target" class="required fs-6 fw-bold mb-2">Target</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control form-control-solid" name="edit_target"
                                            id="edit_target" placeholder="Masukan sejumlah nominal"
                                            value="{{$program->target}}" required>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Program & Target-->

                            <!--begin::Upload & Deadline-->
                            <div class="row g-9 py-5">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label for="edit_gambar_program" class="required fs-6 fw-bold mb-2">Upload</label>
                                    <input type="file" class="form-control form-control-solid"
                                        name="edit_gambar_program" id="edit_gambar_program">
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label for="edit_batas_akhir" class="required fs-6 fw-bold mb-2">Deadline</label>
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                    fill="black" />
                                                <path
                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                    fill="black" />
                                                <path
                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid ps-12"
                                            placeholder="Masukan tanggal" name="edit_batas_akhir" id="kt_datepicker_1"
                                            value="{{$program->batas_akhir}}" required />
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Upload & Deadline-->

                            <!--begin::Textarea-->
                            <div class="d-flex flex-column py-5 fv-row">
                                <!--begin::Label-->
                                <label for="edit_info" class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Pesan</span>
                                </label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" rows="3" id="edit_info"
                                    name='edit_info' placeholder="Masukan pesan yang ingin disampaikan..."
                                    required>{!! $program->info !!}</textarea>
                            </div>
                            <!--end::Textarea-->

                            <button type="submit" class="btn btn-primary ml-1 my-15">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>

                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@stop

@push('custom-scripts')
<script>
$(function() {
    $("#edit_batas_akhir").datepicker({
        dateFormat: "yy-mm-dd",
    });

    $("#edit_program").on("submit", function() {
        var hvalue = $('.ql-editor').html();
        $(this).append("<textarea name='edit_info' style='display:none'>" + hvalue +
            "</textarea>");
    });
});
</script>
@endpush
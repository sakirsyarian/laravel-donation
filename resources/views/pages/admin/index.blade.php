@extends('layouts.master')
@section('tableId', '#table1')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboard Admin</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
            </div>
        </div>
        <section class="section">
            {{-- Card Manajemen User --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Layout</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@stop

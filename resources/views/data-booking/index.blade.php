@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>DATA BOOKING</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End batas 1 -->
    @if (\Session::has('notif'))
        <div class="alert alert-dark" align="center">
            {!! \Session::get('notif') !!}
        </div>
    @endif
    <!-- error -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- end error -->
    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
            {{-- Card --}}
            <div class=" shadow">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Data Booking</li>
                    {{-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#import">Import <i class="fa fa-file-excel" aria-hidden="true"></i></a></li> --}}
                </ol>
            </div>
            {{-- Card --}}
            <div class="card">
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Pembooking</th>
                                    <th>Rumah</th>
                                    <th>Status</th>
                                    <th width="8%">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->rumah->type ?? '-DATA RUMAH DIHAPUS-' }}-{{ $item->rumah->blok->blok ?? '' }}{{ $item->rumah->no ?? '' }}
                                        </td>
                                        <td>{{ $item->status }}</td>
                                        <td nowrap align="right">
                                            <a href="/data/syarat/{{ $item->id }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-check"> Lihat Syarat</i>
                                            </a>
                                            <a href="/data/booking/{{ $item->id }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-info"> Detail</i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Table -->
@endsection

@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>BLOK</h1>
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
                    <li class="breadcrumb-item active">Tambah</li>
                    <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal"> <i
                                class="fa fa-plus-circle" aria-hidden="true"></i></a></li>
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
                                    <th>Nama Blok</th>
                                    <th width="8%">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blok as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->blok }}</td>
                                        <td nowrap align="right">
                                            <a href="/blok/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"> Edit</i>
                                            </a>
                                            <a href="/blok/{{ $item->id }}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus ?')">
                                                <i class="fa fa-trash" aria-hidden="true"> Hapus</i>
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

    <!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Blok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/blok/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-12 col-sm-12">
                                <label><b>Nama Blok</b></label>
                                <input type="text" name="blok" class="form-control" placeholder="Masukan Nama Blok">
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah -->
@endsection

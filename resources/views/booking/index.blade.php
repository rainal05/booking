@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>BOOKING RUMAH</h1>
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
                    <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal">Booking
                            Rumah <i class="fa fa-plus-circle" aria-hidden="true"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ url('booking/rumah/denah') }}" target="_blank">Lihat Denah/Site
                            Plane
                            <i class="ti-map-alt"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{ asset('admin') }}/assets/images/detail.jpg"
                            target="_blank">Lihat Denah/Site Plane
                            <i class="ti-map-alt"></i></a></li> --}}
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
                                    <th>Kode Booking</th>
                                    <th>Nama</th>
                                    <th>Blok</th>
                                    <th>Status</th>
                                    <th width="8%">Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>
                                            {{ $item->rumah->type ?? '-DATA RUMAH DIHAPUS-' }}-{{ $item->rumah->blok->blok ?? '' }}{{ $item->rumah->no ?? '' }}
                                        </td>
                                        <td>{{ $item->rumah->blok->blok ?? '-DATA RUMAH DIHAPUS-' }}{{ $item->rumah->no ?? '' }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td nowrap align="right">
                                            <a href="/booking/syarat/{{ $item->id }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-check"> Lengkapi Syarat</i>
                                            </a>
                                            <a href="/booking/{{ $item->id }}/cetak" target="_blank"
                                                class="btn btn-success btn-sm">
                                                <i class="fa fa-print"> Cetak</i>
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
                    <h5 class="modal-title" id="exampleModalLabel">Booking Rumah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/booking/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="qty" value="1">
                        <div class="form-row">
                            <div class="col-12 col-sm-12">
                                <label><b>Nama Blok</b></label>
                                <select name="rumah_id" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($rumah as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->type ?? '-' }}-{{ $item->blok->blok ?? '' }}{{ $item->no ?? '' }}
                                            | @if ($item['qty'] == '1')
                                                Tersedia
                                            @elseif ($item['qty'] == '0')
                                                Terbooking
                                            @else
                                                Terbooking Double
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <input type="submit" class="btn btn-success" value="Booking">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah -->

    <!-- Modal syarat -->
    <div class="modal fade" id="exampleSyarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lengkapi Syarat Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/surat/masuk/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" value="{{ item->id }}"> --}}
                        <div class="form-row">
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>KTP</b></label>
                                <input type="file" name="ktp" class="form-control">
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>KK</b></label>
                                <input type="file" name="kk" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>SURAT NIKAH / BELUM NIKAH</b></label>
                                <input type="file" name="surat_nikah" class="form-control">
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>FOTO</b></label>
                                <input type="file" name="poto" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>NPWP</b></label>
                                <input type="file" name="npwp" class="form-control">
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>SLIP GAJI</b></label>
                                <input type="file" name="slip_gaji" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-12">
                                <label for="inputEmailAddress"><b>REKENING KORAN</b></label>
                                <input type="file" name="kk" class="form-control">
                            </div>
                        </div>
                        <label class="form-label">
                            <span class="badge border-dark border-1 text-dark"><i>Note : Scan File Dan Upload
                                    Dalam Bentuk PDF/JPEG/JPG</i></span>
                        </label>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah -->
@endsection

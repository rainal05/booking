@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>SYARAT BOOKING RUMAH
                    </h1>
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
                    <li class="breadcrumb-item active"><a href="{{ url('/data/booking', []) }}"> <i
                                class='fa fa-arrow-circle-left'></i> Data Booking</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#import">Import <i class="fa fa-file-excel" aria-hidden="true"></i></a></li> --}}
                </ol>
            </div>
            {{-- Card --}}
            <div class="card">
                <div class="user-profile">
                    <div class="row">
                        {{-- <div class="col-lg-4">
                            <div class="user-photo m-b-30">
                                <a href="{{ asset('admin') }}/assets/images/detail.jpg" target="_blank">
                                    <img class="img-fluid" style="width: 600px; height: auto;"
                                        src="{{ asset('admin') }}/assets/images/detail.jpg" alt="images" />
                                </a>
                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <div class="user-profile-name">
                                {{ $isi->rumah->type ?? '-'}}-{{ $isi->rumah->blok->blok ?? '' }}{{ $isi->rumah->no ?? '' }}
                            </div>
                            <hr>
                            @foreach ($isi->syarat as $item)
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>KTP</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->ktp) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>KK</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->kk) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>SURAT NIKAH/BELUM</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->surat_nikah) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>FOTO</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->poto) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>NPWP</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->npwp) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>SLIP GAJI</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->slip_gaji) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-website"><b>REKENING KORAN </b><span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-3">
                                        <span class="phone-number"><a href="{{ url('/syarat/' . $item->rek_koran) }}"
                                                target="_blank"><i class="ti-download"></i>
                                                View</a>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                            {{-- ubah status --}}
                            <form action="/data/syarat/up/{{ $isi->id }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-select2"><b>STATUS</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <select name="status" class="form-control" id="val-skill" name="val-skill">
                                            <option value="Sedang Diproses"
                                                @if ($isi->status == 'Sedang Diproses') selected @endif>
                                                Sedang Diproses</option>
                                            <option value="Terverifikasi" @if ($isi->status == 'Terverifikasi') selected @endif>
                                                Terverifikasi</option>
                                            <option value="Gagal Diproses"
                                                @if ($isi->status == 'Gagal Diproses') selected @endif>
                                                Gagal Diproses</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-select2"><b>KETERANGAN</b> <span
                                            class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="ket"
                                            placeholder="Keterangan Syarat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                            {{-- ubah status --}}
                        </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Lengkapi Syarat Booking Rumah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/booking/syarat/up') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="booking_id" value="{{ $isi->id }}">
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
                                <input type="file" name="rek_koran" class="form-control">
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

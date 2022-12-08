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
                    <li class="breadcrumb-item active"><a href="{{ url('booking/rumah', []) }}"> <i
                                class='fa fa-arrow-circle-left'></i> Booking Rumah</a></li>
                    <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal">Tambah
                            Syarat <i class="fa fa-plus-circle" aria-hidden="true"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#import">Import <i class="fa fa-file-excel" aria-hidden="true"></i></a></li> --}}
                </ol>
            </div>
            {{-- Card --}}
            <div class="card">
                <div class="user-profile">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="user-photo m-b-30">
                                <a href="{{ asset('admin') }}/assets/images/detail.jpg" target="_blank">
                                    <img class="img-fluid" style="width: 600px; height: auto;"
                                        src="{{ asset('admin') }}/assets/images/detail.jpg" alt="images" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="user-profile-name">
                                {{ $isi->rumah->type ?? '-DATA RUMAH DIHAPUS-' }}-{{ $isi->rumah->blok->blok ?? '' }}{{ $isi->rumah->no ?? '' }}
                            </div>
                            <div class="custom-tab user-profile-tab">
                                <hr>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="1">

                                        <div class="contact-information">
                                            @foreach ($isi->syarat as $item)
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>KTP</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number"><a href="{{ url('/syarat/' . $item->ktp) }}"
                                                            target="_blank"><i class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>KK</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->kk) }}" target="_blank"><i
                                                                class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>SURAT NIKAH/BELUM</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->surat_nikah) }}"
                                                            target="_blank"><i class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>FOTO</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->poto) }}" target="_blank"><i
                                                                class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>NPWP</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->npwp) }}" target="_blank"><i
                                                                class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>SLIP GAJI</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->slip_gaji) }}"
                                                            target="_blank"><i class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>REKENING KORAN</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">
                                                        <a href="{{ url('/syarat/' . $item->rek_koran) }}"
                                                            target="_blank"><i class="ti-download"></i>
                                                            View</a>
                                                    </span>
                                                </div>
                                            @endforeach
                                            <div class="phone-content">
                                                <span class="contact-title"><b>STATUS</b></span>
                                                <span class="contact-title"><b>:</b></span>
                                                <span class="phone-number">{{ $isi->status }}</span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title"><b>KETERANGAN</b></span>
                                                <span class="contact-title"><b>:</b></span>
                                                <span
                                                    class="phone-number">{{ $isi->ket ?? '-Belum Ada Keterangan-' }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                                    Dalam Bentuk PDF/JPEG/JPG.</i></span>
                            <span class="badge border-dark border-1 text-dark"><i> <b>Semua File Wajib Di
                                        isi !!!</b></i></span>
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

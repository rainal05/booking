@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Detail Booking</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End batas 1 -->

    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
            {{-- Card --}}
            <div class=" shadow">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="{{ url('data/booking', []) }}">Data Booking</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('data/booking', []) }}"> <i class="ti-arrow-left"
                                aria-hidden="true"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#import">Import <i class="fa fa-file-excel" aria-hidden="true"></i></a></li> --}}
                </ol>
            </div>
            {{-- Card --}}
            <div class="card">
                <div class="user-profile">
                    <div class="row">
                        {{-- <div class="col-lg-4">
                            <div class="user-photo m-b-30">
                                <img class="img-fluid" style="width: 600px; height: auto;"
                                    src="{{ url('/file_foto/' . $akun->foto) }}" alt="images" />
                            </div>
                        </div> --}}
                        <div class="col-lg-8">
                            <div class="user-profile-name">
                                {{ $dtl->rumah->type }}-{{ $dtl->rumah->blok->blok ?? '' }}{{ $dtl->rumah->no ?? '' }}</div>
                            <div class="custom-tab user-profile-tab">
                                <hr>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="1">

                                        <div class="contact-information">
                                            @foreach ($dtl->syarat as $item)
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
                                                <span class="phone-number">{{ $dtl->status }}</span>
                                            </div>
                                            <div class="phone-content">
                                                <span class="contact-title"><b>KETERANGAN</b></span>
                                                <span class="contact-title"><b>:</b></span>
                                                <span
                                                    class="phone-number">{{ $dtl->ket ?? '-Belum Ada Keterangan-' }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Table -->
            @endsection

@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Akun</h1>
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
                    <li class="breadcrumb-item active"><a href="{{ url('akun', []) }}">Akun</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('akun', []) }}"> <i class="ti-arrow-left"
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
                            <div class="text-capitalize">
                                <h4>{{ $akun->name }}</h4>
                            </div>
                            <div class="custom-tab user-profile-tab">
                                <hr>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="1">
                                        <div class="contact-information">
                                            <div class="phone-content">
                                                <span class="contact-title"><b>No Hp</b></span>
                                                <span class="contact-title"><b>:</b></span>
                                                <span class="phone-number">{{ $akun->hp }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <div class="phone-content">
                                                    <span class="contact-title"><b>Email</b></span>
                                                    <span class="contact-title"><b>:</b></span>
                                                    <span class="phone-number">{{ $akun->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="1">
                                                <div class="contact-information">
                                                    <div class="phone-content">
                                                        <span class="contact-title"><b>Username</b></span>
                                                        <span class="contact-title"><b>:</b></span>
                                                        <span class="phone-number">{{ $akun->username }}</span>
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
            @endsection

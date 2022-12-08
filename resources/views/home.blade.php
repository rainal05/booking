@extends('layouts.admin')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- Content 1 -->
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>{{ Auth::user()->name }}</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- column 1-->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home', []) }}">Beranda</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- column 2-->
                </div>
                <!-- End Content 1 -->

                <!-- Content 2 -->
                <section id="main-content">
                    <!-- Card -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-home color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><b>Rumah Terbooking</b></div>
                                        <div class="stat-digit">{!! json_encode($book) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-home color-secondary border-secondary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><b>Rumah Tersedia</b></div>
                                        <div class="stat-digit">{!! json_encode($teer) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-home color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"><b>Total Rumah</b></div>
                                        <div class="stat-digit">{!! json_encode($all) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                    <!-- Footer -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © Mentari Residence</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </section>
            </div>
        </div>
    </div>
@endsection

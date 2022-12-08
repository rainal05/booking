@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Laporan</h1>
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
                    <li class="breadcrumb-item active">Laporan</li>
                </ol>
            </div>
            {{-- Card --}}
            {{-- Terbooking --}}
            <div class="card">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Rumah Yang Terbooking</h6>
                </div>
                <div class="bootstrap-data-table-panel mt-3">
                    {{-- Tanggal --}}
                    <div class="form-row ">
                        <div class="col-6 col-sm-6">
                            <label><b>Tanggal Awal</b></label>
                            <input class=" form-control" min="2022-01-01" name="starterbooking" id="starterbooking"
                                type="date" />
                        </div>
                        <div class="col-6 col-sm-6">
                            <label><b>Tanggal Akhir</b></label>
                            <input class=" form-control" min="2022-01-01" name="endterbooking" id="endterbooking"
                                type="date" />
                        </div>
                    </div>
                    {{-- Tanggal --}}
                    <div class="input-group" style="margin-top: 10px">
                        <a href="#"
                            onclick="this.href='/laporan/terbooking/'+document.getElementById('starterbooking').value +
                                    '/' + document.getElementById('endterbooking').value"
                            target="_blank" class="btn btn-primary">Cetak
                        </a>
                    </div>
                </div>
            </div>
            {{-- End Terbooking --}}
            {{-- Tersedia --}}
            <div class="card">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Rumah Yang Tersedia</h6>
                </div>
                <div class="bootstrap-data-table-panel mt-3">
                    {{-- Tanggal --}}
                    <div class="form-row ">
                        <div class="col-6 col-sm-6">
                            <label>Tanggal Awal </label>
                            <input class=" form-control" min="2022-01-01" name="startersedia" id="startersedia"
                                type="date" />
                        </div>
                        <div class="col-6 col-sm-6">
                            <label>Tanggal Akhir</label>
                            <input class=" form-control" min="2022-01-01" name="endtersedia" id="endtersedia"
                                type="date" />
                        </div>
                    </div>
                    {{-- Tanggal --}}
                    <div class="input-group" style="margin-top: 10px">
                        <a href="#"
                            onclick="this.href='/laporan/tersedia/'+document.getElementById('startersedia').value +
                                    '/' + document.getElementById('endtersedia').value"
                            target="_blank" class="btn btn-primary">Cetak
                        </a>
                    </div>
                </div>
            </div>
            {{-- End Tersedia --}}
            {{-- Pembooking --}}
            {{-- <div class="card">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Pembooking</h6>
                </div>
                <div class="bootstrap-data-table-panel mt-3">
                    <div class="form-row ">
                        <div class="col-6 col-sm-6">
                            <label>Tanggal Awal </label>
                            <input class=" form-control" min="2022-01-01" name="book" id="book" type="date" />
                        </div>
                        <div class="col-6 col-sm-6">
                            <label>Tanggal Akhir</label>
                            <input class=" form-control" min="2022-01-01" name="king" id="king" type="date" />
                        </div>
                    </div>
                    <div class="input-group" style="margin-top: 10px">
                        <a href="#"
                            onclick="this.href='/laporan/pembooking/'+document.getElementById('book').value +
                                    '/' + document.getElementById('king').value"
                            target="_blank" class="btn btn-primary">Cetak
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Pembooking Harian</h6>
                        </div>
                        <div class="bootstrap-data-table-panel mt-3">
                            <div class="form-row ">
                                <div class="col-6 col-sm-6">
                                    <label>Tanggal Awal </label>
                                    <input class=" form-control" min="2022-01-01" name="book" id="book"
                                        type="date" />
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label>Tanggal Akhir</label>
                                    <input class=" form-control" min="2022-01-01" name="king" id="king"
                                        type="date" />
                                </div>
                            </div>
                            <div class="input-group" style="margin-top: 10px">
                                <a href="#"
                                    onclick="this.href='/laporan/pembooking/'+document.getElementById('book').value +
                                    '/' + document.getElementById('king').value"
                                    target="_blank" class="btn btn-primary">Cetak
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Pembooking Bulan - Tahun</h6>
                        </div>
                        <div class="bootstrap-data-table-panel mt-3">
                            <form action="{{ route('inbox.filter') }}" target="_blank" method="GET" class="form-group"
                                id="formFilter">
                                {{ csrf_field() }}
                                <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
                                    <option value="0" selected disabled> Pilih Tahun</option>
                                    <?php
                                    $year = date('Y');
                                    $min = $year - 3;
                                    $max = $year;
                                    for ($i = $max; $i >= $min; $i--) {
                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                    } ?>
                                </select>
                                <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;" class="form-control"
                                    id="tag_select" name="month">
                                    <option value="0" selected disabled> Pilih Bulan</option>
                                    <option value="01"> Januari</option>
                                    <option value="02"> Februari</option>
                                    <option value="03"> Maret</option>
                                    <option value="04"> April</option>
                                    <option value="05"> Mei</option>
                                    <option value="06"> Juni</option>
                                    <option value="07"> Juli</option>
                                    <option value="08"> Agustus</option>
                                    <option value="09"> September</option>
                                    <option value="10"> Oktober</option>
                                    <option value="11"> November</option>
                                    <option value="12"> Desember</option>
                                </select>
                            </form>
                            <button class="btn btn-primary btn-block" type="submit" form="formFilter"
                                value="Submit">Cetak</button>
                        </div>
                    </div>
                </div>
                {{-- End Pembooking --}}
            </div>
        </div>
        <!-- End Table -->

    @endsection

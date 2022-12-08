<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perumahan Mentari Residence</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzQphsBHRZnriYhp1mtpLo0vXfoBmCY7Ocvg&usqp=CAU">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzQphsBHRZnriYhp1mtpLo0vXfoBmCY7Ocvg&usqp=CAU">
    <link href="{{ asset('admin') }}/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/lib/helper.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                @if (auth()->user()->role == 'admin')
                    <ul>
                        <div class="logo"><a href="{{ url('home', []) }}">
                                <span>MENTARI RESIDENCE</span></a></div>
                        <li class="label">Beranda</li>
                        <li><a href="{{ url('home', []) }}"><i class="ti-dashboard"></i> BERANDA </a></li>
                        <li><a href="{{ url('laporan', []) }}"><i class="ti-agenda"></i> LAPORAN </a></li>
                        <li class="label">Data Master</li>
                        <li><a href="{{ url('blok', []) }}"><i class="ti-direction-alt"></i>BLOK</a></li>
                        <li><a href="{{ url('perumahan', []) }}"><i class="ti-home"></i>PERUMAHAN</a></li>
                        <li><a href="{{ url('profile', []) }}"><i class="ti-panel"></i>PROFIL</a></li>
                        <li class="label">Data Booking-Akun</li>
                        <li><a href="{{ url('data/booking', []) }}"><i class="ti-folder"></i>DATA BOOKING</a></li>
                        <li><a href="{{ url('akun', []) }}"><i class="ti-user"></i>Akun</a></li>
                        <li class="label">Form</li>
                        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="ti-close"></i>
                                Logout</a></li>
                    </ul>
                @endif
                @if (auth()->user()->role == 'user')
                    <ul>
                        <div class="logo"><a href="{{ url('home', []) }}">
                                <span>MENTARI RESIDENCE</span></a></div>
                        <li class="label">Beranda</li>
                        <li><a href="{{ url('home', []) }}"><i class="ti-home"></i> Beranda </a></li>
                        <li class="label">Data Master</li>
                        <li><a href="{{ url('booking/rumah', []) }}"><i class="ti-shopping-cart"></i>Booking Rumah</a>
                        </li>
                        {{-- <li><a href="{{ url('denah', []) }}"><i class="ti-map-alt"></i>Denah Rumah/Site
                                Plan</a></li> --}}
                        <li class="label">Form</li>
                        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="ti-close"></i>
                                Logout</a></li>
                    </ul>
                @endif

                @if (auth()->user()->role == 'Anggota')
                    <ul>
                        <div class="logo"><a href="index.html">
                                <span>Focus</span></a></div>
                        <li class="label">Main</li>
                        <li><a href="{{ url('home', []) }}"><i class="ti-home"></i> Dashboard </a></li>
                        {{-- <li><a href="{{url('profile',[])}}"><i class="ti-user"></i>Profil</a></li> --}}
                        <li class="label">Data Master</li>
                        <li><a href="{{ url('laporan', []) }}"><i class="ti-write"></i> Data Laporan</a></li>
                        <li class="label">Form</li>
                        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="ti-close"></i>
                                Logout</a></li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
    <!-- end Sidebar -->
    <!-- Navbar -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    @if (auth()->user()->role == 'Anggota')
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">{{ Auth::user()->anggota->nama ?? 'Admin' }}
                                        <i class="ti-user f-s-20"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (auth()->user()->role == 'Admin')
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">{{ Auth::user()->anggota->nama ?? 'Admin' }}
                                        <i class="ti-user f-s-20"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (auth()->user()->role == 'Kasat')
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">{{ Auth::user()->anggota->nama ?? 'Kapala Satuan' }}
                                        <i class="ti-user f-s-20"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav -->
    <!-- ISI -->
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- Content 2 -->
                <section id="main-content">
                    <!-- ISI -->
                    @yield('content')
                    <!-- End ISI -->

                    <!-- Footer -->
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2021 © Rainal. - Bug Report to <a href="#">padlirainal@gmail.com</a></p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Footer -->
                </section>
                <!-- End Content 2 -->

            </div>
        </div>
    </div>
    <!-- END ISI -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar Aplikasi ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" Jika ingin keluar Aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-sm btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Logout -->

    <!-- jquery vendor -->
    <script src="{{ asset('admin') }}/assets/js/lib/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="{{ asset('admin') }}/assets/js/lib/menubar/sidebar.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <!-- bootstrap -->
    <script src="{{ asset('admin') }}/assets/js/lib/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/lib/data-table/datatables-init.js"></script>










</body>

</html>

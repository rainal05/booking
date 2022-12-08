<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- TITLE -->
    <title>Laporan Terbooking - Perumahan Mentari Residence</title>
    <!-- ok -->
    <link href="{{ asset('admin') }}/assets/css/1.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/css/2.css" rel="stylesheet">
    <!-- HEADER -->
</head>

<body onload="window.print()">
    <table border="0" style="width: 100%">
        <!-- <tbody> -->
        <tr>
            <td class="auto-style1" rowspan="3" width="101">
                <img alt="" height="100"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzQphsBHRZnriYhp1mtpLo0vXfoBmCY7Ocvg&usqp=CAU"
                    width="100">
            </td>
            <td class="auto-style1">
                <center>
                    <h2 class="auto-style1">Laporan Pembooking - Perumahan Mentari Residence</h2>
                    {{-- <br> --}}
                    {{-- <h4>ss</h4> --}}
                </center>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- HEADER -->

    <!-- BODY -->
    {{-- <center> Jln. Jendral Basuki Rahmat Kota Baru</center> --}}
    <table width="100%" class="tblcms2">
        <tbody>
            <tr>
                <th class="th_border cell">No</th>
                <!--h <th class="th_border cell">Id Admin </th> h-->
                <th align="center" class="th_border cell">Nama Pembooking</th>
                <th align="center" class="th_border cell">Kode Booking</th>
                <th align="center" class="th_border cell">Rumah</th>
                <th align="center" class="th_border cell">Tanggal Booking</th>
            </tr>

        </tbody>
        <tbody>
            @forelse ($thn as $row)
                <tr class="event2">
                    <td align="center" width="50">{{ $loop->iteration }}</td>
                    <td align="center">{{ $row->user->name ?? '' }}</td>
                    <td align="center">{{ $row->kode ?? '' }}</td>
                    <td align="center">
                        {{ $row->rumah->type ?? '-DATA RUMAH DIHAPUS-' }}-{{ $row->rumah->blok->blok ?? '' }}{{ $row->rumah->no ?? '' }}
                    </td>
                    <td align="center"><?= Date('d-M-Y', strtotime($row->created_at ?? '')) ?></td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="3" align="center">Data Terbooking Kosong!!!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- BODY -->
    <!-- FOOTER -->
    <table style="border: none;">
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;">
                    {{-- <p>Jambi, tgl</p> --}}
                    <p>Tertanda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    <p>Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>
                    <p></p>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>

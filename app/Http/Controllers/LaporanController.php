<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Rumah;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function terbooking($starterbooking, $endterbooking)
    {
        $book = Rumah::where('qty', '0')
            ->whereBetween('created_at', [$starterbooking, $endterbooking])
            ->get();
        return view('laporan.terbooking', compact('book'));
    }

    public function tersedia($startersedia, $endtersedia)
    {
        $tersedia = Rumah::where('qty', '1')
            ->whereBetween('created_at', [$startersedia, $endtersedia])
            ->get();
        return view('laporan.tersedia', compact('tersedia'));
    }

    public function pembooking($book, $king)
    {
        $king = Booking::whereBetween('created_at', [$book, $king])
            ->get();
        return view('laporan.pembooking', compact('king'));
    }
    public function filter(Request $request)
    {
        $month = $request->get('month');
        $year = $request->get('year');

        $thn = Booking::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->get();
        return view('laporan.pembooking-tahun', compact('month', 'year', 'thn'));
    }
}

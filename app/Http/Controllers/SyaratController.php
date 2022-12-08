<?php

namespace App\Http\Controllers;

use App\Booking;
use File;
use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function isisyarat($id)
    {
        $isi = Booking::with(['syarat'])->find($id);
        return view('booking.syarat', compact('isi'));
    }

    public function upsyarat(Request $request)
    {
        $file = $request->file('rek_koran');
        $rek_koran = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat';
        $file->move($tujuan_upload, $rek_koran);
        // upload
        $up = new \App\Syarat;
        // $up->user_id = \Auth::user()->id;
        $up->booking_id = $request->booking_id;
        // $up->file = $ktp;
        // $up->file = $kk;
        // $up->file = $surat_nikah;
        // $up->file = $poto;
        // $up->file = $npwp;
        // $up->file = $slip_gaji;
        $up->rek_koran = $rek_koran;
        $up->status = 'Menunggu Verifikasi';
        $up->save();
        return redirect()->back()->with('notif', 'Syarat Telah Diupload');
    }
}

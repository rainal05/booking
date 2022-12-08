<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Rumah;
use File;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $rumah = Rumah::get();
        $book = Booking::orderBy('created_at', 'DESC')->where('user_id', \Auth::user()->id)->get();
        return view('booking.index', compact('book', 'rumah'));
    }

    public function denah()
    {
        $denah = Rumah::get();
        return view('booking.denah', compact('denah'));
    }

    public function cetak($id)
    {
        $cetak = Booking::find($id);
        return view('booking.cetak', compact('cetak'));
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'rumah_id' => 'required',
        ], $massage);
        try {
            $persediaan = Rumah::find($request->rumah_id);

            Booking::create([
                'user_id'      => \Auth::user()->id,
                'rumah_id'     => $request->rumah_id,
                'kode'         => 'MR-' . date('ym-d'),
                'status'       => 'Sedang Diproses',
                'qty'     => $request->qty,
            ]);
            $persediaan = Rumah::findOrFail($request->rumah_id);
            $persediaan->qty -= $request->qty;
            $persediaan->save();

            return redirect('booking/rumah')->with('notif', 'Telah Terbooking');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function isisyarat($id)
    {
        $isi = Booking::with(['syarat'])->find($id);
        return view('booking.syarat', compact('isi'));
    }

    public function upsyarat(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'ktp' => 'required',
            'kk' => 'required',
            'surat_nikah' => 'required',
            'poto' => 'required',
            'npwp' => 'required',
            'slip_gaji' => 'required',
            'rek_koran' => 'required',
        ], $massage);

        // ktp
        $file = $request->file('ktp');
        $ktp = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $ktp);
        // kk
        $file = $request->file('kk');
        $kk = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $kk);
        // surat_nikah
        $file = $request->file('surat_nikah');
        $surat_nikah = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $surat_nikah);
        // poto
        $file = $request->file('poto');
        $poto = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $poto);
        // npwp
        $file = $request->file('npwp');
        $npwp = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $npwp);
        // slip_gaji
        $file = $request->file('slip_gaji');
        $slip_gaji = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat ';
        $file->move($tujuan_upload, $slip_gaji);
        // rek_koran
        $file = $request->file('rek_koran');
        $rek_koran = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'syarat';
        $file->move($tujuan_upload, $rek_koran);
        // upload
        $up = new \App\Syarat;
        $up->user_id = \Auth::user()->id;
        $up->booking_id = $request->booking_id;
        $up->ktp = $ktp;
        $up->kk = $kk;
        $up->surat_nikah = $surat_nikah;
        $up->poto = $poto;
        $up->npwp = $npwp;
        $up->slip_gaji = $slip_gaji;
        $up->rek_koran = $rek_koran;
        $up->save();
        return redirect()->back()->with('notif', 'Syarat Telah Diupload');
    }
    // end user

    // start admin
    public function indata()
    {
        $data = Booking::get();
        return view('data-booking.index', compact('data'));
    }

    public function detail($id)
    {
        $dtl = Booking::find($id);
        return view('data-booking.detail', compact('dtl'));
    }

    public function lidata($id)
    {
        $isi = Booking::with(['syarat'])->find($id);
        return view('data-booking.data-syarat', compact('isi'));
    }

    public function updata(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'ket' => 'required',
        ], $massage);

        $lap = Booking::find($id);
        $lap->status = $request->input('status');
        $lap->ket = $request->input('ket');
        $lap->save();
        return redirect('/data/booking')->with(['notif' => 'Data Booking <strong>-' . $lap->user->name . '</strong>-' . $lap->status]);
    }
}

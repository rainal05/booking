<?php

namespace App\Http\Controllers;

use App\Blok;
use App\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index()
    {
        $blok = Blok::get();
        $perum = Rumah::orderBy('created_at', 'DESC')->get();
        return view('rumah.index', compact('perum', 'blok'));
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'blok_id' => 'required',
            'no' => 'required',
            'harga' => 'required',
        ], $massage);
        $usr = Rumah::create([
            'blok_id'      => $request->blok_id,
            'type'      => 'Type 36',
            'no'      => $request->no,
            'harga'      => $request->harga,
            'qty'      => '1',
        ]);
        return redirect()->back()->with(['notif' => 'Blok <strong>' . $usr->no . '</strong> Ditambah']);
    }

    public function edit($id)
    {
        $blok = Blok::get();
        $edit = Rumah::find($id);
        return view('rumah.edit', compact('edit', 'blok'));
    }
    public function update(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'blok_id' => 'required',
            'no' => 'required',
            'harga' => 'required',
        ], $massage);
        $edit = \App\Rumah::find($id);
        $edit->blok_id = $request->blok_id;
        $edit->no = $request->no;
        $edit->harga = $request->harga;
        $edit->save();
        return redirect('/perumahan')->with('notif', 'Telah Diupdate');
    }
    public function delete($id)
    {
        $blok = Rumah::find($id);
        $blok->delete();
        return redirect()->back()->with('notif', 'Telah Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Blok;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    public function index()
    {
        $blok = Blok::orderBy('created_at', 'DESC')->get();
        return view('blok.index', compact('blok'));
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'blok' => 'required|unique:bloks,blok|max:1',
        ], $massage);

        $usr = Blok::create([
            'blok'      => $request->blok,
        ]);
        return redirect()->back()->with(['notif' => 'Blok <strong>' . $usr->blok . '</strong> Ditambah']);
    }

    public function edit($id)
    {
        $edit = Blok::find($id);
        return view('blok.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'blok' => 'required|max:1',
        ], $massage);
        $edit = \App\Blok::find($id);
        $edit->blok = $request->blok;
        $edit->save();
        return redirect('/blok')->with(['notif' => 'Blok <strong>' . $edit->blok . '</strong> Diupdate']);
    }
    public function delete($id)
    {
        $blok = Blok::find($id);
        $blok->delete();
        return redirect()->back()->with(['notif' => 'BLOK </strong>' . $blok->blok . '</strong> Dihapus']);
    }
}

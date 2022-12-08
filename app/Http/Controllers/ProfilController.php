<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profile::get();
        return view('profil.index', compact('profil'));
    }

    public function edit($id)
    {
        $edit = Profile::find($id);
        return view('profil.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'isi' => 'required',
        ], $massage);
        $edit = \App\Profile::find($id);
        $edit->isi = $request->isi;
        $edit->save();
        return redirect('/profile')->with(['notif' => 'Telah <strong>' . $edit->nama . '</strong> Diupdate']);
    }
}

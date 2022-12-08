<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'name' => 'required|min:2',
            'username' => 'required',
            'hp' => 'required',
            'email' => 'required',
            'password' => 'required|min:2|max:12',
        ], $massage);

        $user = new \App\User;
        $user->role = 'user';
        $user->username = $request->username;
        $user->hp = $request->hp;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        return back()->with('notif', 'Akun Berhasil Ditambah');
    }
}

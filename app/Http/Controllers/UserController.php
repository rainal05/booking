<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $akun = User::where('role', 'user')->get();
        return view('akun.index', compact('akun'));
    }

    public function detail($id)
    {
        $akun = User::find($id);
        return view('akun.detail', compact('akun'));
    }

    public function delete($id)
    {
        $usr = User::find($id);
        $usr->delete();
        return redirect()->back()->with(['notif' => 'Akun <strong>' . $usr->name . '</strong> Dihapus']);
    }
}

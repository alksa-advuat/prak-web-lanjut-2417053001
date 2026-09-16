<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Alfin Lambok K.S", $NPM = "2417053001", $kelas = "A")
    {
        $data = [
            'nama' => $nama,
            'NPM' => $NPM,
            'kelas' => $kelas,
        ];
        return view('profile',$data);
    }
}

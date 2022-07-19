<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function tampil()
    {
        $a = Siswa::all();
        return view ('siswa.index',['siswa'=>$a]);
    }
}

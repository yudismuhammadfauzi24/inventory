<?php

namespace App\Http\Controllers\Profil;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return view('profil.index',compact('profil'));
    }
    public function create()
    {
        return view('profil.create');
    }
    public function edit()
    {
        return view('profil.edit');
    }
    public function store(Request $request)
    {
        $profil = Profil::create([
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'usia'=>$request->usia,
            'hobi'=>$request->hobi,
        ]);

        flash()->success('Data berhasil di buat');

        return redirect()->back();
    }
}
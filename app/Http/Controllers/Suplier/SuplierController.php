<?php

namespace App\Http\Controllers\Suplier;

use App\Suplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuplierController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index()
    {
        $suplier = Suplier::all();

        return view('suplier.index', compact('suplier'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit',compact('suplier'));
    }
    public function store(Request $request)
    {
        $suplier = Suplier::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        flash()->success('Data Suplier berhasil di buat');

        return redirect()->back();
    }
    public function update(Request $request,$id){
        $suplier = Suplier::where('id',$id)->first();

        $suplier->name = $request->input('name');
        $suplier->alamat = $request->input('alamat');
        $suplier->email = $request->input('email');
        $suplier->phone = $request->input('phone');

        $suplier->save();

        flash()->success('Suplier behasil di ubah');

        return redirect()->back();;
    }
    public function destroy($id){
        $suplier = Suplier::findOrFail($id);
        $suplier->delete();

        flash()->success('Suplier berhasil di hapus');
        return redirect()->back();
    }
}

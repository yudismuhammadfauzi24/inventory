<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index(Request $request){
        if ($request->has('tgl_awal')){
            $barang = Barang::with('suplier')->whereBetween('created_at',
            [request('tgl_awal'),request('tgl_akhir')])->get();
        }

        $pdf = PDF::loadView('laporan.barang.index',compact('barang'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_barang.pdf');
    }
}

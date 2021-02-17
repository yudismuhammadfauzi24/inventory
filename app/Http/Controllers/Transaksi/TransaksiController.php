<?php

namespace App\Http\Controllers\Transaksi;

use App\Barang;
use App\Suplier;
use App\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index()
    {
        $transaksi = Transaksi::with('barang','suplier')->get();
        return view('transaksi.index',compact('transaksi'));
    }
}

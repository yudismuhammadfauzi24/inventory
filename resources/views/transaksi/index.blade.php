@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Barang Masuk</a>
                <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger mr-2">Tambah Barang Keluar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Nama Supplier</th>
                    <th>Kode Barang</th>
                    <th>Tgl transaksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $transasi)
                <tr>
                    <td>{{$transasi->kode_transaksi}}</td>
                    <td>{{$transasi->suplier->name}}</td>
                    <td>{{$transasi->barang->nama_barang}}</td>
                    <td>{{$transasi->created_at->toDateString()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
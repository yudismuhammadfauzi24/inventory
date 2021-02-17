@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
            </div>
            <form action="{{route('laporan.periode.barang')}}" method="GET">
                <div class="row">
                    <div class="col-md-4">          
                        <div class="form-group">
                            <input type="date" name="tgl_awal" id="tgl_awal" class="form-control mr-2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary ml-2">Cari Data</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>

                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{$barang->kode_barang}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->quantity}}</td>
                    <td>
                        <form action="{{route('master-barang.delete',$barang->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            
                        <a href="{{route('master-barang.edit',$barang->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                        <a href="{{route('master-barang.show',$barang->id)}}" class="btn btn-outline-info btn-sm">Detail</a>
                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
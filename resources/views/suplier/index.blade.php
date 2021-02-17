@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                <a href="{{route('suplier.create')}}" class="btn btn-info mr-2">Tambah suplier Baru</a>
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
                    <th>Nama Suplier</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>

            @foreach($suplier as $suplier)
                <tr>
                    <td>{{$suplier->name}}</td>
                    <td>{{$suplier->alamat}}</td>
                    <td>{{$suplier->email}}</td>
                    <td>{{$suplier->phone}}</td>
                    <td>
                        <form action="{{route('suplier.delete',$suplier->id)}}" method="post">
                            @csrf
                            
                            @method('DELETE')
                        <a href="{{ route('suplier.edit',$suplier->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
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
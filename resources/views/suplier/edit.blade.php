@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('suplier.update',$suplier->id)}}" method="post">
                            @csrf
                                @method('PATCH')
                            <div class="form-group">
                                <label for="nama_suplier">Nama Supleir</label>
                                <input type="text" name="name" id="name" value="{{$suplier->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{$suplier->alamat}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="email" name="email" id="email" value="{{$suplier->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kode_barang"> Phone</label>
                                <input type="text" name="phone" id="phone" value="{{$suplier->phone}}" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
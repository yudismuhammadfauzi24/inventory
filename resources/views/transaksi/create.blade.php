@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card  ">
                    <div class="card-body">
                            <form action="{{route('transaksi.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="barang_id"> Nama Barang</label>
                               <select name="barang_id" id="barang_id" class="form-control">
                                   <option value="">Pilih  Barang</option>
                                   @foreach ($barang as $barang)
                                       <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="suplier_id"> Nama Suplier</label>
                                <select name="suplier_id" id="suplier_id" class="form-control">
                                    <option value="">Pilih Suplier</option>
                                    @foreach ($suplier as $suplier)
                                        <option value="{{$suplier->id}}">{{$suplier->nama}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-grup">
                                    <laber for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" class="form-control">
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
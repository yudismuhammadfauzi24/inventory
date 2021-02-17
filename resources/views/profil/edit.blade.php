@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_tinggal">tempat lahir</label>
                                <input type="text" name="tempat_tinggal" id="tempat_tinggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">tanggal lahir</label>
                                <input type="tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="usia">usia</label>
                                <input type="text" name="usia" id="usia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hobi">hobi</label>
                                <input type="text" name="hobi" id="hobi" class="form-control">
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
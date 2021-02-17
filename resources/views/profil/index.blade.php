@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                <a href="{{route('profil.create')}}" class="btn btn-info mr-2">Tambah data Baru</a>
            </div>
            <div class="d-flex">
                <input type="date" name="" id="" class="form-control mr-2">
                <input type="date" name="" id="" class="form-control">
                <button type="submit" class="btn btn-primary ml-2">Cari Data</button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>jenis kelamin</th>
                    <th>usia</th>
                    <th>hobi</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profil as $profill)
                <tr>
                    <td>{{$profill->nama}}</td>
                    <td>{{$profill->tempat_lahir}}</td>
                    <td>{{$profill->tanggal_lahir}}</td>
                    <td>{{$profill->jenis_kelamin}}</td>
                    <td>{{$profill->usia}}</td>
                    <td>{{$profill->hobi}}</td>
                    <td>
                        <form action="">
                        <a href="{{ route('profil.edit') }}" class="btn btn-outline-warning btn-sm">Edit</a>
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
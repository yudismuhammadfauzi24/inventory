@extends('layouts.cetak')

@section('content')
    <div class="row">
        <div class="cold-md-12">
            <div class="text-center">
                <P>
                    <b>
                        <h3>Inventori
                            <br>Jl Gading 34
                        </h3>
                    </b>
                </P>
            </div>

            @if (request('tgl_awal'))
                <small>Dari tanggal {{request('tgl_awal') }}
                        Sampai tanggal {{request('tgl_akhir') }}
                </small>
            @endif

            <u>
                <h4>Laporan Barang Masuk</h4>
            </u>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Suplier |</th>
                        <th>Kode Barang |</th>
                        <th>Nama Barang |</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barang as $get)
                        <tr>
                            <td>{{$get->suplier->nama}} |</td>
                            <td>{{$get->kode_barang}} |</td>
                            <td>{{$get->nama_barang}} |</td>
                            <td>{{$get->quantity}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data Tidak Ditemukan !</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
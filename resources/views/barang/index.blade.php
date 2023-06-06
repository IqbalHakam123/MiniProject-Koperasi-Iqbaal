@extends('layouts.app')

@section('content')
      <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barangs.create') }}" class="btn btn-success">Create Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <section class="content">
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-whiten rounded-3">
                    <thead>
                        <tr style="text-align: center; background-color:#864f9d; color:#FFF;">
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Satuan Barang</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- foreach digunakan untuk looping data, $barangs itu variabel sementara untuk menyimpan data dari  db--}}
                        @foreach($barangs as $barang)
                        <tr style="text-align: center;">
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi }}</td>
                            <td>{{ $barang->satuan->nama_satuan }}</td>
                            {{-- manggil file action untuk button CRUD --}}
                            <td>@include('barang.action')</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    @vite('resources/js/app.js')
@endsection


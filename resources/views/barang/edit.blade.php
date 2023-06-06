<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container-sm mt-5">
        <form action="{{route('barangs.update', ['barang' => $barang->id])}}" method="POST" class="needs-validation" novalidate="">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-warning rounded-3 border col-xl-6">
                    {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                    @endforeach
                    @endif --}}
                    <div class="mb-3 text-center">
                        <i class="bi bi-pencil-square fs-1"></i>
                        <h4>Edit Barang Masuk</h4>
                        <hr>
                        <br>
                    </div>
                    <article class="row">
                        <div class="col-12 mb-2">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control @error('kodeBarang') is-invalid @enderror" name="kodeBarang" id="kodeBarang" value="{{ $errors->any() ? old('kodeBarang') : $barang->kode_barang }}" placeholder="Masukan kode Barang">
                            @error('kodeBarang')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang') is-invalid @enderror" type="text" name="namaBarang" id="namaBarang" value="{{ $errors->any() ? old('namaBarang') : $barang->nama_barang }}" placeholder="Masukan nama barang">
                            @error('namaBarang')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text" name="hargaBarang" id="hargaBarang" value="{{ $errors->any() ? old('hargaBarang') : $barang->harga_barang }}" placeholder="Harga barang">
                            @error('hargaBarang')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label for="deskripsi" class="form-label">Deskripsi </label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" value="{{ $errors->any() ? old('deskripsi') : $barang->deskripsi }}"" placeholder="Deskripsi">
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label for="satuanBarang" class="form-label">Progam Studi</label>
                            <select name="satuanBarang" id="satuanBarang" class="form-select">
                                @php
                                    $selected = "";
                                        if ($errors->any())
                                        $selected = old('satuanBarang');
                                    else {
                                        $selected = $barang->satuan_id;
                                    }
                                @endphp
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuanBarang') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuanBarang')
                                <div class="text-danger">
                                    <small>
                                        {{$message}}
                                    </small>
                                </div>
                            @enderror
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                            </div>
                        </div>
                </article>
            </div>
        </form>
    </div>
    @endsection
@vite('resources/js/app.js')
</body>
</html>

@extends('admin-kendaraan.admin')

@section('title', 'Edit Kendaraan')

@section('heading', 'Edit Kendaraan')

@section('breadcrumb', 'Edit Kendaraan')

@section('content')
    <form method="post" action="<?= url("/kendaraans/{$kendaraan->id}") ?>">
    @method('put')
    @csrf
        <div class="form-group">
            <label for="plat">Nomor Plat</label>
            <input type="text" class="form-control @error('plat') is-invalid @endif" id="plat" placeholder="input here..." name="plat" value="{{ $kendaraan->noPlat }}">
            @error('plat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="merk">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @endif" id="merk" placeholder="input here..." name="merk" value="{{ $kendaraan->merkKendaraan }}">
            @error('merk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Nama Pemilik</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input here..." name="name" value="{{ $kendaraan->namaPemilik }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ url()->previous() }}" class="ml-2">Back</a>
    </form>
@endsection

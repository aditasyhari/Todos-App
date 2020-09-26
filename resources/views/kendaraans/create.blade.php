@extends('admin-kendaraan.admin')

@section('title', 'Kendaraan Create')

@section('heading', 'Kendaraan Create')

@section('breadcrumb', 'Kendaraan Create')

@section('content')
    <form method="post" action="{{ url('/kendaraans') }}">
    @csrf
        <div class="form-group">
            <label for="plat">Nomor Plat</label>
            <input type="text" class="form-control @error('plat') is-invalid @endif" id="plat" placeholder="input here..." name="plat" value="{{ old('plat') }}">
            @error('plat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="merk">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @endif" id="merk" placeholder="input here..." name="merk" value="{{ old('merk') }}">
            @error('merk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Nama Pemilik</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="input here..." name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

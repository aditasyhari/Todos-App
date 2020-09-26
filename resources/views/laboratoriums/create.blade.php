@extends('admin-laboratorium.admin')

@section('title', 'Laboratorium Create')

@section('heading', 'Laboratorium Create')

@section('breadcrumb', 'Laboratorium Create')

@section('content')
    <form method="post" action="{{ url('/laboratoriums') }}">
    @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="Masukkan nama" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ket">Keterangan</label>
            <textarea class="form-control @error('ket') is-invalid @endif" id="ket" rows="3" name="ket" placeholder="Masukkan keterangan" value="{{ old('ket') }}"></textarea>
            @error('ket')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

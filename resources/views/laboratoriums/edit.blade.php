@extends('admin-laboratorium.admin')

@section('title', 'Edit Laboratorium')

@section('heading', 'Edit Laboratorium')

@section('breadcrumb', 'Edit Laboratorium')

@section('content')
    <form method="post" action="<?= url("/laboratoriums/{$laboratorium->id}") ?>">
    @method('put')
    @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" name="name" value="{{ $laboratorium->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ket">Keterangan</label>
            <textarea class="form-control @error('ket') is-invalid @endif" id="ket" rows="3" name="ket">{{ $laboratorium->ket }}</textarea>
            @error('ket')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{ url()->previous() }}" class="ml-2">Back</a>
    </form>
@endsection

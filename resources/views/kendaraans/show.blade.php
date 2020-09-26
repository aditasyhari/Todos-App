@extends('admin-kendaraan.admin')

@section('title', 'Detail Kendaraan')

@section('heading', 'Detail Kendaraan')

@section('breadcrumb', 'Detail Kendaraan')

@section('content')      
    <div class="card">
        <div class="card-body">
            <div>
                <p>Nomor Plat :</p>
                <h3 class="text-uppercase">{{ $kendaraan->noPlat }}</h3>
            </div><hr>

            <div>
                <p>Merk Kendaraan :</p>
                <h3 class="text-uppercase">{{ $kendaraan->merkKendaraan }}</h3>
            </div><hr>

            <div>
                <p>Nama pemilik :</p>
                <h3 class="text-uppercase">{{ $kendaraan->namaPemilik }}</h3>
            </div><hr>
            
            <div class="mt-3">
                <a href="<?= url("/kendaraans/{$kendaraan->id}/edit") ?>" class="btn btn-primary">Edit</a>
                <form action="<?= url("/kendaraans/{$kendaraan->id}") ?>" method="post" class="d-inline">
                @method('delete')
                @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ url('/kendaraans') }}" class="card-link ml-2">Back</a>
            </div>
        </div>
    </div>
@endsection

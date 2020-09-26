@extends('admin-laboratorium.admin')

@section('title', 'Detail Laboratorium')

@section('heading', 'Detail Laboratorium')

@section('breadcrumb', 'Detail Laboratorium')

@section('content')      
    <div class="card">
        <div class="card-body">

            <div>
                <p><b>Name :</b></p>
                <h5 class="text-uppercase">{{ $laboratorium->name }}</h5>
            </div><hr>
            
            <div>
                <p><b>Keterangan :</b></p>
                <h5>{{ $laboratorium->ket }}</h5>
            </div><hr>

            <div class="mt-3">
                <a href="<?= url("/laboratoriums/{$laboratorium->id}/edit") ?>" class="btn btn-primary">Edit</a>
                <form action="<?= url("/laboratoriums/{$laboratorium->id}") ?>" method="post" class="d-inline">
                @method('delete')
                @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ url('/laboratoriums') }}" class="card-link ml-2">Back</a>
            </div>
        </div>
    </div>
@endsection

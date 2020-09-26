@extends('admin.admin')

@section('title', 'Detail Todo')

@section('heading', 'Detail Todo')

@section('breadcrumb', 'Detail Todo')

@section('content')      
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $todo->name }}</h5>
            
            <p class="card-text mt-5 mb-5">
                <b>Description :</b><br>
                {{ $todo->description }}
            </p>

            <a href="<?= url("/todos/{$todo->id}/edit") ?>" class="btn btn-primary">Edit</a>
            <form action="<?= url("/todos/{$todo->id}") ?>" method="post" class="d-inline">
            @method('delete')
            @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ url('/todos') }}" class="card-link ml-2">Back</a>
        </div>
    </div>
@endsection

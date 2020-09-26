@extends('admin.admin')

@section('title', 'Todo Create')

@section('heading', 'Todo Create')

@section('breadcrumb', 'Todo Create')

@section('content')
    <form method="post" action="{{ url('/todos') }}">
    @csrf
        <div class="form-group">
            <label for="name">Name Todo</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="Input name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @endif" id="description" rows="3" name="description" placeholder="Description your list" value="{{ old('description') }}"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="completed">Completed ? </label>
            <Input type="checkbox" id="completed"  name="completed"></input>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

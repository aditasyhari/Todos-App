@extends('admin.admin')

@section('title', 'Edit Todo')

@section('heading', 'Edit Todo')

@section('breadcrumb', 'Edit Todo')

@section('content')
    <form method="post" action="<?= url("/todos/{$todo->id}") ?>">
    @method('put')
    @csrf
        <div class="form-group">
            <label for="name">Name Todo List</label>
            <input type="text" class="form-control @error('name') is-invalid @endif" id="name" placeholder="Input name" name="name" value="{{ $todo->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @endif" id="description" rows="3" name="description" placeholder="Description your list">{{ $todo->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="completed">Completed ? </label>
            <Input type="checkbox" id="completed"  name="completed" value="{{ $todo->completed }}" @if ($todo->completed == 1) checked @endif></input>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/todos/{{ $todo->id }}" class="ml-2">Back</a>
    </form>
@endsection

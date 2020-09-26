@extends('admin.admin')

@section('title', 'Todo List')

@section('heading', 'Todo List')

@section('breadcrumb', 'Todo List')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul class="list-group">
        @foreach( $todos as $todo )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $todo->name }}
                <div>
                    <a href="<?= url("/todos/{$todo->id}") ?>" class="badge badge-info">View</a>
                    @if ($todo->completed == 1)
                        <span class="badge badge-success">Complete</span>
                        @else
                            <span class="badge badge-danger">Not Complete</span>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection

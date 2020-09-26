@extends('admin-laboratorium.admin')

@section('title', 'Laboratorium List')

@section('heading', 'Laboratorium List')

@section('breadcrumb', 'Laboratorium List')

@section('content')
    <h5 class="mt-5">UAS Tabel Laboratorium</h5>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul class="list-group">
        <?php $no = 1; ?>
        @foreach( $laboratoriums as $laboratorium )
            <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase">
                <?php echo $no."."; $no++ ?> {{ $laboratorium->name }}
                <div>
                    <a href="<?= url("/laboratoriums/{$laboratorium->id}") ?>" class="badge badge-info">View</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

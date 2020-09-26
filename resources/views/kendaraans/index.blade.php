@extends('admin-kendaraan.admin')

@section('title', 'Kendaraan List')

@section('heading', 'Kendaraan List')

@section('breadcrumb', 'Kendaraan List')

@section('content')
    <h5 class="mt-5">Tabel Kendaraan</h5>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul class="list-group">
        <?php $no = 1; ?>
        @foreach( $kendaraans as $kendaraan )
            <li class="list-group-item d-flex justify-content-between align-items-center text-uppercase">
                <?php echo $no."."; $no++ ?> {{ $kendaraan->noPlat }}
                <div>
                    <a href="<?= url("/kendaraans/{$kendaraan->id}") ?>" class="badge badge-info">View</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

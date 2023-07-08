@extends('layouts.dashboard')

@section('content')
<section id="aboutus" class="wrapper bg-light">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Daftar Buku Tamu</h3>
                <div class="d-flex">
                    <form class="mb-4" method="get">
                        <div class="d-flex gap-2">
                            <a href="{{ route('buku-tamu.create') }}" class="btn btn-success py-0 px-3"> <i class="uil uil-plus-square"></i> <span class="ps-2">Tambah Buku Tamu</span></a>
                            <div class="form-floating">
                                <input id="find" name="find" type="date" value="{{ Request::get('find') }}" class="form-control" placeholder="Cari buku_tamu" onchange="this.form.submit()">
                                <label for="find">Cari Buku Tamu</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th class="d-flex justify-content-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semua_buku_tamu as $index => $buku_tamu)
                    <tr>
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $buku_tamu->gb_date }}</th>
                        <th>{{ $buku_tamu->name }}</th>
                        <th>{{ $buku_tamu->age }}</th>
                        <th>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('buku-tamu.edit', $buku_tamu) }}" class="btn btn-primary py-0 px-3"><i class="uil uil-pen"></i></a>
                                <a class="btn btn-danger py-0 px-3" data-bs-toggle="modal" data-bs-target="#delete-promp-{{ $buku_tamu->id }}"><i class="uil uil-trash"></i></a>
                                @include('dashboard.buku-tamu._modal_delete', [
                                'buku_tamu' => $buku_tamu
                                ])
                            </div>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                @if($semua_buku_tamu->lastPage() > 1)                    
                    @include('components.pagination', [
                        'data' => $semua_buku_tamu
                    ])
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

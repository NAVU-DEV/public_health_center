@extends('layouts.dashboard')

@section('content')
<section id="aboutus" class="wrapper bg-light">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Daftar Kegiatan</h3>
                <div class="d-flex">
                    <form class="mb-4" method="get">
                        <div class="d-flex gap-2">
                            <a href="{{ route('kegiatan.create') }}" class="btn btn-success py-0 px-3"> <i class="uil uil-plus-square"></i> <span class="ps-2">Tambah Kegiatan</span></a>
                            <div class="form-floating">
                                <input id="find" name="find" type="text" class="form-control" placeholder="Cari Kegiatan">
                                <label for="find">Cari Kegiatan</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th class="d-flex justify-content-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semua_kegiatan as $index => $kegiatan)
                    <tr>
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $kegiatan->title }}</th>
                        <th>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('kegiatan.edit', $kegiatan) }}" class="btn btn-primary py-0 px-3"><i class="uil uil-pen"></i></a>
                                <a class="btn btn-danger py-0 px-3" data-bs-toggle="modal" data-bs-target="#delete-promp-{{ $kegiatan->id }}"><i class="uil uil-trash"></i></a>
                                @include('dashboard.kegiatan._modal_delete', [
                                'kegiatan' => $kegiatan
                                ])
                            </div>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                @if($semua_kegiatan->lastPage() > 1)  
                    @include('components.pagination', [
                        'data' => $semua_kegiatan
                    ])
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

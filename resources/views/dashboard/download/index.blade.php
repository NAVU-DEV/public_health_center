@extends('layouts.dashboard')

@section('content')
<section id="aboutus" class="wrapper bg-light">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Daftar Download</h3>
                <div class="d-flex">
                    <form class="mb-4" method="get">
                        <div class="d-flex gap-2">
                            <a class="btn btn-success py-0 px-3" data-bs-toggle="modal" data-bs-target="#create-promp"> <i class="uil uil-plus-square"></i> <span class="ps-2">Tambah File</span></a>
                            <div class="form-floating">
                                <input id="find" name="find" type="text" class="form-control" placeholder="Cari File">
                                <label for="find">Cari File</label>
                            </div>
                        </div>
                    </form>
                    @include('dashboard.download._modal_create')
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
                    @foreach ($semua_download as $index => $download)
                    <tr>
                        <th>{{ $index + 1 }}</th>
                        <th>{{ $download->title }}</th>
                        <th>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('download.download-file', $download) }}" class="btn btn-secondary py-0 px-3"><i class="uil uil-file-download"></i></a>
                                <a class="btn btn-primary py-0 px-3" data-bs-toggle="modal" data-bs-target="#update-promp-{{ $download->id }}"><i class="uil uil-pen"></i></a>
                                @include('dashboard.download._modal_update', [
                                    'download' => $download
                                ])
                                <a class="btn btn-danger py-0 px-3" data-bs-toggle="modal" data-bs-target="#delete-promp-{{ $download->id }}"><i class="uil uil-trash"></i></a>
                                @include('dashboard.download._modal_delete', [
                                    'download' => $download
                                ])
                            </div>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                @if($semua_download->lastPage() > 1)  
                    @include('components.pagination', [
                        'data' => $semua_download
                    ])
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

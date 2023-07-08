@extends('layouts.dashboard')

@section('content')
<section class="wrapper bg-light">
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h3>Tambah Kegiatan</h3>
                <form method="post" action="{{ url('/kegiatan') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-4">
                        <input id="thumbnail" type="file" name="thumbnail" value="{{ old('thumbnail') }}" class="form-control" placeholder="Thumbnail Input">
                        <label for="thumbnail">Thumbnail Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="title" type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title Input">
                        <label for="title">Title Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea id="description" class="form-control" name="description" placeholder="Description Input" style="height: 150px" required>{{ old('description') }}</textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.dashboard')

@section('content')
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                <figure class="rounded"><img src="{{ URL::asset('assets/img/kegiatan/' . $kegiatan->thumbnail) }}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-3">{{ $kegiatan->title }}</h2>

                <form method="post" action="{{ route('kegiatan.update', $kegiatan) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-floating mb-4">
                        <input id="thumbnail" type="file" name="thumbnail" value="{{ $kegiatan->title }}" class="form-control" placeholder="Thumbnail Input">
                        <label for="thumbnail">Thumbnail Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="title" type="text" name="title" value="{{ $kegiatan->title }}" class="form-control" placeholder="Title Input">
                        <label for="title">Title Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea id="description" name="description" class="form-control" placeholder="Content" style="height: 150px" required>{{ $kegiatan->description }}</textarea>
                        <label for="description">Description Input</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success mb-4">Update</button>
                    </div>
                </form>
                <p class="mb-6">Puskesmas Selalu Sehat.</p>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection

@extends('layouts.dashboard')

@section('content')
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-12">
                <h2 class="display-4 mb-3">{{ $buku_tamu->title }}</h2>

                <form method="post" action="{{ route('buku-tamu.update', $buku_tamu) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-floating mb-4">
                        <input id="gb_date" type="date" name="gb_date" value="{{ $buku_tamu->gb_date }}" class="form-control" placeholder="Date Input">
                        <label for="gb_date">Thumbnail Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="name" type="text" name="name" value="{{ $buku_tamu->name }}" class="form-control" placeholder="Name Input">
                        <label for="name">Name Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="age" type="text" name="age" value="{{ $buku_tamu->age }}" class="form-control" placeholder="Age Input">
                        <label for="age">Age Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea id="description" class="form-control" name="description" placeholder="Visit Requirements" style="height: 150px">{{ $buku_tamu->description }}</textarea>
                        <label for="description">Visit Requirements</label>
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

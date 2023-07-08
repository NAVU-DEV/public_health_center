@extends('layouts.dashboard')

@section('content')
<section class="wrapper bg-light">
    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h3>Tambah Buku Tamu</h3>
                <form method="post" action="{{ url('/buku-tamu') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-4">
                        <input id="date" type="date" name="date" value="{{ now() }}" class="form-control" placeholder="Date Input" readonly>
                        @push('scripts')
                            <script>
                                document.getElementById('date').value = new Date().toISOString().substr(0, 10);
                            </script>
                        @endpush
                        <label for="date">Date Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name Input">
                        <label for="name">Name Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input id="age" type="number" name="age" value="{{ old('age') }}" class="form-control" placeholder="Age Input">
                        <label for="age">Age Input</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea id="description" class="form-control" name="description" placeholder="Description Input" style="height: 150px">{{ old('description') }}</textarea>
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

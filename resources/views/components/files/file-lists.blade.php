<section class="wrapper bg-light">
    <div class="container pt-16 pb-8">
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12">
                    <div class="col-lg-8 order-lg-2">
                        <div class="blog grid grid-view">
                            <div class="row isotope gx-md-8 gy-8 mb-8 pt-10">
                                @foreach ($semua_file as $file)
                                <div class="col-12">
                                    <a href="{{ route('download.download-file', $file) }}" class="card shadow-lg lift h-100">
                                        <div class="card-body p-5 d-flex flex-row">
                                            <div>
                                                <span class="avatar bg-red text-white w-11 h-11 fs-20 me-4">PDF</span>
                                            </div>
                                            <div>
                                                <h4 class="mb-1">{{ $file->title }}</h4>
                                                <p class="mb-0 text-body">Puskesmas Selalu Sehat</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.blog -->
                        <nav class="d-flex" aria-label="pagination">
                            @if($semua_file->lastPage() > 1)
                            @include('components.pagination', [
                            'data' => $semua_file
                            ])
                            @endif
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                    @include('components.files.aside')
                    <!-- /column .sidebar -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
    </div>
</section>

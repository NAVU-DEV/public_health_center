<section class="wrapper bg-dark angled lower-start">
    <div class="container pt-19 pb-19 pt-md-21 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="{{ route('site.index') }}" class="hover" rel="category">Puskesmas Selalu Sehat</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4 text-white">{{ $berita->title }}</h1>
                    <ul class="post-meta mb-5">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $berita->created_at }}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Puskesmas Selalu Sehat</span></a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</section>

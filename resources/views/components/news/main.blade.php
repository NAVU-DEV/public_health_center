@include('components.news.hero', [
'berita' => $berita
])

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <figure class="card-img-top"><img src="{{ URL::asset('assets/img/news/' . $berita->thumbnail) }}" alt="" /></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <h2 class="h1 mb-4">{{ $berita->title }}</h2>
                                        <p>{{ $berita->content }}</p>
                                    </div>
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <!-- /.social -->
                            <hr />
                            <h3 class="mb-6">You Might Also Want To Read</h3>
                            <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($berita_lainnya as $berita)
                                        <div class="swiper-slide">
                                            <article>
                                                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="{{ URL::asset('assets/img/news/' . $berita->thumbnail) }}" alt="" /></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="post-header">
                                                    <div class="post-category text-line">
                                                        <a href="{{ route('site.index') }}" class="hover" rel="category">Puskesmas Selalu Sehat</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('site.baca-berita', $berita) }}">{{ $berita->title }}</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-footer">
                                                    <ul class="post-meta mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $berita->created_at }}</span></li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.post-footer -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        @endforeach
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.comment-form -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

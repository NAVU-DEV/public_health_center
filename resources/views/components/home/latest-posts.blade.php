<section id="latestposts" class="wrapper bg-light">
    <div class="overflow-hidden">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-xl-7 col-xxl-6 mx-auto text-center">
                    <i class="icn-flower text-leaf fs-30 opacity-25"></i>
                    <h2 class="display-5 text-center mt-2 mb-10">Here are the latest posts from Puskesmas Selalu Sehat blog that grabbed the most attention.</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
                <div class="swiper overflow-visible pb-2">
                    <div class="swiper-wrapper">
                        @foreach ($semua_berita as $berita)
                        <div class="swiper-slide">
                            <article>
                                <div class="card shadow-lg">
                                    <figure class="card-img-top overlay overlay-1"><a href="{{ route('site.baca-berita', $berita) }}"> <img src="{{ URL::asset('assets/img/news/' . $berita->thumbnail) }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('site.baca-berita', $berita) }}">{{ $berita->title }}</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $berita->created_at }}</span></li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!-- /.card -->
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
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.overflow-hidden -->
</section>

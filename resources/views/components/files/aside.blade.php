<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
    <div class="widget">
        <form method="get">
            <div class="form-floating mb-0">
                <input id="find" name="find" type="text" class="form-control" placeholder="Search">
                <label for="find">Search</label>
            </div>
        </form>
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h4 class="widget-title mb-3">Popular Posts</h4>
        <ul class="image-list">
            @foreach ($semua_berita as $berita)
            <li>
                <figure class="rounded"><a href="{{ route('site.baca-berita', $berita) }}"><img src="{{ URL::asset('assets/img/news/' . $berita->thumbnail) }}" alt="" /></a></figure>
                <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="{{ route('site.baca-berita', $berita) }}">{{ $berita->title }}</a> </h6>
                    <ul class="post-meta">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $berita->created_at }}</span></li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
        <!-- /.image-list -->
    </div>
    <!-- /.widget -->
</aside>
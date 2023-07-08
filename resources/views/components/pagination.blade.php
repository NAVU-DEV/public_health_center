<nav class="d-flex" aria-label="pagination">
    <ul class="pagination mb-0">
        <li class="page-item {{ $data->currentPage() === 1 ? 'disabled' : '' }}">
            <a class="page-link" href="{{ route('berita.index', ['page' => $data->currentPage() - 1]) }}" aria-label="Previous">
                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
            </a>
        </li>
        @for($i = 0; $i < $data->lastPage(); $i++)
            <li class="page-item {{ $index + 1 === $data->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ route('berita.index', ['page' => $i + 1]) }}">{{ $i + 1 }}</a></li>
        @endfor
        <li class="page-item {{ $data->currentPage() === $data->lastPage() ? 'disabled' : '' }}"">
            <a class="page-link" href="{{ route('berita.index', ['page' => $data->currentPage() + 1]) }}" aria-label="Next">
                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
            </a>
        </li>
    </ul>
    <!-- /.pagination -->
</nav>
<!-- /nav -->

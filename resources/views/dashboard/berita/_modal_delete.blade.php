<div class="modal fade" id="delete-promp-{{ $berita->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3>Anda yakin ingin menghapus berita ? </h3>
                <p class="mb-6">Menghapus berita akan menghapus semua informasi berita pada database.</p>
                <div class="newsletter-wrapper">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form method="POST" action="{{ route('berita.destroy', $berita) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success">Ya, Hapus</button>
                            </form>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->

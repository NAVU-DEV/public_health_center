<div class="modal fade" id="create-promp" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3>Tambah File</h3>
                <div class="newsletter-wrapper">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form method="post" action="{{ route('download.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input id="title" name="title" type="text" value="{{ old('title') }}" class="form-control {{ !$errors->has('title')?:'is-invalid' }}" placeholder="Title Input">
                                    <label for="title">Title Input</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="file" name="file" type="file" value="{{ old('file') }}" class="form-control {{ !$errors->has('file')?:'is-invalid' }}" placeholder="File Input">
                                    <label for="file">File Input</label>
                                </div>
                                <button class="btn btn-success w-100">tambah</button>
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

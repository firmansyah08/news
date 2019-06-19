<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data News <i class="fa fa-laptop"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" id="createData">
                            @csrf
                            <input type="text" name="author" value="{{ Auth::user()->id }}">

                            <div class="form-group">
                                <label class="control-label mb-1">Author</label>
                                <input id="author" name="author" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>

                            @include('news.form')

                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select class="form-control border-input" name="category_id" id="selectCategory" required>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i> Batal</button>
                <button type="submit" class="btn btn-primary"> 
                    <i class="fa fa-check"></i>
                    Simpan
                </button>
                    </form>
            </div>
        </div>
    </div>
</div>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Banners</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Uploading Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/banner_form_upload') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Select Position</label>
                            <select class="form-control" type="text" name="category" placeholder="Write Something....">
                                <option value="not-selected">--Not Selected--</option>
                                <option value="top">Top</option>
                                <option value="bottom">Bottom</option>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Insert Banner Poster</label>
                            <input class="form-control" name="image1" type="file">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Banner website link</label>
                            <input class="form-control" name="link">
                        </div>
                       
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="submit"><i
                                    class="bi bi-check-circle-fill me-2"></i>Upload</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</main>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Photos Collections</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Uploading Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/photos_form_upload') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input class="form-control" type="text" name="tags" placeholder="eg: #tag1 #tag2 #tag3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title-1 (sub-title 1 for set of paragraph)</label>
                            <input class="form-control" type="text" name="title1" placeholder="write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Description-1 (Description of sub-title 1 )</label>
                            <textarea class="form-control" rows="10" name="desc1"
                                placeholder="write Something...."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images 1 (Image of sub-title 1)</label>
                            <input class="form-control" name="image1" type="file">
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label">Images 2 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 3 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 4 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image4">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 5 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image5">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 6 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image6">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 7 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image7">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 8 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image8">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 9 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image9">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 10 (Image of sub-title 1)</label>
                            <input class="form-control" type="file" name="image10">
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
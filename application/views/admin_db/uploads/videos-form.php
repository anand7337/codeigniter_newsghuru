<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Videos Collections</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Uploading Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/videos_form_upload') ?>" method="post" enctype="multipart/form-data">
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
                            <label class="form-label">video 1 (video of sub-title 1)</label>
                            <input class="form-control" name="video1" type="file">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">video 2 (video of sub-title 1)</label>
                            <input class="form-control" name="video2" type="file" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 3 (video of sub-title 1)</label>
                            <input class="form-control" type="file" name="video3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 4 (video of sub-title 1)</label>
                            <input class="form-control" type="file" name="video4">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 5 (video of sub-title 1)</label>
                            <input class="form-control" type="file" name="video5">
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
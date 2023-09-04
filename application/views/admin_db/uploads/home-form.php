<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Home</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Uploading Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/home_form_upload') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Select Category</label>
                            <select class="form-control" type="text" name="category" placeholder="Write Something....">
                                <option value="not-selected">--Not Selected--</option>
                                <option value="Important">முக்கிய செய்திகள்</option>
                                <option value="Latest">அண்மைச் செய்திகள்</option>
                            </select>
                        </div>
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
                            <label class="form-label">Sub Title-2 (sub-title 2 for set of paragraph)</label>
                            <input class="form-control" type="text" name="title2" placeholder="write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Description-2 (Description of sub-title 2 )</label>
                            <textarea class="form-control" rows="10" name="desc2"
                                placeholder="write Something...."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images 2 (Image of sub-title 2)</label>
                            <input class="form-control" type="file" name="image2">
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
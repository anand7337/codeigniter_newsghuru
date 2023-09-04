<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Edit Banners</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Editing Form</h3>
                <?php
                if(isset($data1)){
                    ?>
                <div class="tile-body">
                    <form action="<?= base_url('admin/update_banner') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                            <input class="form-control" hidden name="id" value="<?=$data1[0]->id?>" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Position</label>
                            <select class="form-control" type="text" name="category" placeholder="Write Something....">
                                <option value="<?=$data1[0]->category?>"><?=$data1[0]->category?></option>
                                <option value="not-selected">--Not Selected--</option>
                                <option value="top">Top</option>
                                <option value="bottom">Bottom</option>
                                <option value="left">left</option>
                                <option value="right">right</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Insert Banner Poster</label>
                            <img src="<?=base_url('./upload/banners/').$data1[0]->image1?>" width="500">
                            <input class="form-control" value="<?=$data1[0]->image1?>" alt="" name="old_image1" type="hidden">
                            <input class="form-control"  alt="" name="new_image1" type="file">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Banner website link</label>
                            <input class="form-control" value="<?=$data1[0]->link?>" name="link">
                        </div>
                       
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit" name="submit"><i
                                    class="bi bi-check-circle-fill me-2"></i>Upload</button>
                        </div>

                    </form>
                </div>
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</main>
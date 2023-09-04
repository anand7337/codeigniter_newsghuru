<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-cricket"></i>Photos Collections</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Editing Form</h3>
                <?php
                if(isset($data1)) {
                ?>
                <div class="tile-body">
                    <form action="<?= base_url('admin/update_photos') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input class="form-control" type="text" hidden name="id" value="<?=$data1[0]->id?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" name="title" value="<?=$data1[0]->title?>" placeholder="Write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tags</label>
                            <input class="form-control" type="text" name="tags" value="<?=$data1[0]->tags?>" placeholder="eg: #tag1 #tag2 #tag3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Title-1 (sub-title 1 for set of paragraph)</label>
                            <input class="form-control" type="text" name="title1" value="<?=$data1[0]->sub_title1?>" placeholder="write Something....">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Description-1 (Description of sub-title 1 )</label>
                            <textarea class="form-control" rows="10" name="desc1"
                                placeholder="write Something...."><?=$data1[0]->sub_desc1?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images 1 (Image of sub-title 1)</label>
                            <input class="form-control" name="old_image1" value="<?=$data1[0]->image1?>" type="hidden">
                            <input class="form-control" name="new_image1"  type="file">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image1?>"
                                alt="" width="250">
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label">Images 2 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image2?>" name="old_image2">
                            <input class="form-control" type="file"  name="new_image2">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image2?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 3 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image3?>" name="old_image3">
                            <input class="form-control" type="file" name="new_image3">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image3?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 4 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image4?>" name="old_image4">
                            <input class="form-control" type="file"  name="new_image4">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image4?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 5 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image5?>" name="old_image5">
                            <input class="form-control" type="file" name="new_image5">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image5?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 6 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image6?>" name="old_image6">
                            <input class="form-control" type="file" name="new_image6">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image6?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 7 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image7?>" name="old_image7">
                            <input class="form-control" type="file" name="new_image7">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image7?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 8 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image8?>" name="old_mage8">
                            <input class="form-control" type="file"  name="new_image8">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image8?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3"> 
                            <label class="form-label">Images 9 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image9?>" name="old_image9">
                            <input class="form-control" type="file"  name="new_image9">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image9?>"
                                alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images 10 (Image of sub-title 1)</label>
                            <input class="form-control" type="hidden" value="<?=$data1[0]->image10?>" name="old_image10">
                            <input class="form-control" type="file"  name="new_image10">
                            <img src="<?=base_url('./upload/photos/').$data1[0]->image10?>"
                                alt="" width="250">
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
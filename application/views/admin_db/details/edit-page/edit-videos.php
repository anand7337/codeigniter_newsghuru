<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="bi bi-videos"></i>Videos Editing</h1>
        </div>
    </div>
    <div class="row form_upload_main">
        <div class="col-md-12 col-lg-8">
            <div class="tile">
                <h3 class="tile-title">Editing Form</h3>
                <div class="tile-body">
                    <form action="<?= base_url('admin/update_videos') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                           <input class="form-control" hidden type="text" name="id" value="<?=$data1[0]->id?>">
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
                            <label class="form-label">video 1 (video of sub-title 1)</label>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video1?>" controls
                                alt="" width="300"></video>
                            <input class="form-control" name="old_video1" type="hidden" value="<?=$data1[0]->video1?>">
                            <input class="form-control" name="new_video1" type="file">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">video 2 (video of sub-title 1)</label>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video2?>" controls
                                alt="" width="300"></video>
                            <input class="form-control" name="old_video2" type="hidden" value="<?=$data1[0]->video2?>" >
                            <input class="form-control" name="new_video2" type="file" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 3 (video of sub-title 1)</label>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video3?>" controls
                                alt="" width="300"></video>
                            <input class="form-control" type="hidden" name="old_video3" value="<?=$data1[0]->video3?>">
                            <input class="form-control" type="file" name="new_video3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 4 (video of sub-title 1)</label>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video4?>" controls
                                alt="" width="300"></video>
                            <input class="form-control" type="hidden" name="old_video4" value="<?=$data1[0]->video4?>">
                            <input class="form-control" type="file" name="new_video4">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">video 5 (video of sub-title 1)</label>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video5?>" controls
                                alt="" width="300"></video>
                            <input class="form-control" type="hidden" name="old_video5" value="<?=$data1[0]->video5?>">
                            <input class="form-control" type="file" name="new_video5">
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
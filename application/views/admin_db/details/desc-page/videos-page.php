<main class="app-content">
 <section class="description_section">
    <div class="container">
        <div class="row row_wrapper">
            <!-- left side column -->
            <?php
            if(isset($data1)){
            ?>
            <div class=""><a href="<?=base_url('admin/edit_videos/').$data1[0]->id ?>">Edit</a></div>
            <div class=""><a href="<?=base_url('admin/delete_videos/').$data1[0]->id ?>">Delete</a></div>
            <div class="col-lg-9 left_column" id="content">
                <div class="left_card">
                    <div class="side_bar">
                        <div class="desc_tit">
                            <h2><?=$data1[0]->title?></h2>
                            <p><?=$data1[0]->date?></p>
                        </div>
                    </div>
                    <div class="desc_main">
                        <h3><?=$data1[0]->sub_title1?></h3>
                        <p><?=$data1[0]->sub_desc1?></p>
                        <div class="desc_img mb-3 mt-3">
                            <?php
                               if($data1[0]->video1){
                            ?>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video1?>" controls
                                alt="" width="400"></video>
                                <?php
                               }else{
                                "style='display:none'";
                               }
                                ?>
                        </div>
                        <div class="desc_img mb-3 mt-3">
                            <?php
                               if($data1[0]->video2){
                            ?>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video2?>" controls
                                alt=""  width="400"></video>
                                <?php
                                  }else{
                                    "style:'display:none'";
                                  }
                                ?>
                        </div>
                        <div class="desc_img mb-3 mt-3">
                            <?php
                                  if($data1[0]->video3){
                            ?>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video3?>" controls
                                alt=""  width="400"></video>
                                <?php
                                      }else{
                                        "style='display:none'";
                                      }
                                ?>
                        </div>
                        <div class="desc_img mb-3 mt-3">
                            <?php
                               if($data1[0]->video4){
                            ?>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video4?>" controls
                                alt=""  width="400"></video>
                                <?php
                                  }else{
                                    "style='display:none'";
                                  }
                                ?>
                        </div>
                        <div class="desc_img mb-3 mt-3">
                            <?php
                               if($data1[0]->video5){
                            ?>
                            <video src="<?=base_url('./upload/videos/').$data1[0]->video5?>" controls
                                alt=""  width="400"></video>
                                <?php
                                      }else{
                                        "style='display:none'";
                                      }
                                ?>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div> 
</section>
</main>
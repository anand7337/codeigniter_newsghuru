<main class="app-content">
 <section class="description_section">
    <div class="container">
        <div class="row row_wrapper">
            <!-- left side column -->
            <?php
            if(isset($data1)){
            ?>
            <div class=""><a href="<?=base_url('admin/edit_hindi/').$data1[0]->id ?>">Edit</a></div>
            <div class=""><a href="<?=base_url('admin/delete_hindi/').$data1[0]->id ?>">Delete</a></div>
            <div class="col-lg-9 left_column">
                <div class="left_card">
                    <div class="side_bar">
                        <div class="desc_tit">
                            <h2><?=$data1[0]->title?></h2>
                            <p><?=$data1[0]->date?></p>
                        </div>
                    </div>
                    <div class="desc_design">
                        <div class="desc_inner">
                            <div class="desc_inner_content">

                            </div>
                        </div>
                    </div>
                    <div class="desc_main">
                        <h3><?=$data1[0]->sub_title1?></h3>
                        <p><?=$data1[0]->sub_desc1?></p>
                        <div class="desc_img mb-3 mt-3">
                            <img src="<?=base_url('./upload/hindi/').$data1[0]->image1?>"
                                alt="">
                        </div>
                        <p></p>
                    </div>
                    <div class="desc_main1">
                        <h3><?=$data1[0]->sub_title2?></h3>
                        <p><?=$data1[0]->sub_desc2?></p>

                        <div class="desc_img1 mb-3 mt-3">
                            <img src="<?=base_url('./upload/hindi/').$data1[0]->image2?>"
                                alt="">
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
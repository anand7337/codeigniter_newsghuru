<section class="content_section">
    <div class="container">
        <?php
        if(isset($BannerTop)) {
            foreach ($BannerTop as $row) {
        ?>
        <div class="banner">
           <a href="<?=$row->link?>" target="blank"><img src="<?=base_url('./upload/banners/').$row->image1?>" alt=""></a>
        </div>
        <?php
            }
        }
        ?>
        <div class="row row_wrapper">
            <!-- center column -->


            <div class="col-lg-12 left_column" id="content">
                <div class="left_card">
                    <div class="middle_bar">
                        <div class="middle_tit">
                            <a href="" class="go_back"><i class="bi bi-tv"></i></a>
                            <div class="breadcrumbs">
                                <h1 class="bc_head">Trending</h1>
                            </div>
                        </div>

                        <?php
                        if (isset($data1)) {
                            foreach ($data1 as $row) {
                                ?>
                                <div class="item">
                                <div class="middle_article">
                                    <a href="<?= base_url('main/trending_click_review/') . $row->id . "/" . $row->title?>" class="article_title">
                                        <?= $row->title ?>
                                    </a>
                                    <div class="article_item">
                                        <div class="article_time">
                                           <i class="far fa-clock"></i> <?= $row->date ?>  
                                        </div>                                  
                                    </div>
                                    <div class="middle_art_main">
                                        <div class="article_img">
                                        <a href="<?= base_url('main/trending_click_review/') . $row->id . "/" . $row->title?>" class="article_a">
                                        <img src="<?= base_url('./upload/trend/' . $row->image1) ?>" alt="">
                                        </a>
                                        </div>
                                        <div class="article_desc">
                                            <p><?= $row->sub_desc1 ?></p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                    <a href="#" id="loadMore" class="read_more"><b>மேலும் செய்திகள்</b></a>
                </div>
            </div>
        </div>
    </div>
</section>
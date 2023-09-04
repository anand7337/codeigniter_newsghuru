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
            <div class="col-lg-12 left_column mb-4">
                <div class="left_card">
                <div class="side_tit" id="important_title">
                            <h3>உள்ளூர் செய்திகள்</h3>
                        </div>
                    <div class="row" >
                    
                    <?php
                        if (isset($data1)) {
                            foreach ($data1 as $row) {
                                ?>
                        <div class="col-lg-4" id="main_col">
                                <div class="middle_article" id="home_flex">
                                    <a href="<?= base_url('main/news_click_review/') . $row->id . "/" . $row->title ?>" class="article_title">
                                        <?= $row->title ?>
                                    </a>
                                    <div class="article_item">
                                        <div class="article_time">
                                           <i class="far fa-clock"></i> <?= $row->date ?>  
                                        </div>                                  
                                    </div>
                                    <div class="middle_art_main">
                                        <div class="article_img">
                                        <a href="<?= base_url('main/news_click_review/') . $row->id . "/" . $row->title ?>" class="article_a">
                                        <img src="<?= base_url('./upload/news/' . $row->image1) ?>" alt="">
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
                </div>
            </div>

            <div class="col-lg-12 left_column mb-4">
                <div class="left_card">
                <div class="side_tit" id="important_title">
                            <h3>வானிலை செய்திகள்</h3>
                        </div>
                    <div class="row" >
                    
                    <?php
                        if (isset($data2)) {
                            foreach ($data2 as $row) {
                                ?>
                        <div class="col-lg-4" id="main_col">
                                <div class="middle_article" id="home_flex">
                                    <a href="<?= base_url('main/news_click_review/') . $row->id . "/" . $row->title ?>" class="article_title">
                                        <?= $row->title ?>
                                    </a>
                                    <div class="article_item">
                                        <div class="article_time">
                                           <i class="far fa-clock"></i> <?= $row->date ?>  
                                        </div>                                  
                                    </div>
                                    <div class="middle_art_main">
                                        <div class="article_img">
                                        <a href="<?= base_url('main/news_click_review/') . $row->id . "/" . $row->title ?>" class="article_a">
                                        <img src="<?= base_url('./upload/news/' . $row->image1) ?>" alt="">
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
                </div>
            </div>
            <!-- center column -->
            <div class="col-lg-7 left_column" id="content">
                <div class="left_card" id="flex_main">
                    <div class="middle_bar" id="flex_box1">
                        <div class="side_tit" id="home_tit">
                            <h3>உலக செய்திகள்</h3>
                        </div>
                        <?php
                        if (isset($data4)) {
                            foreach ($data4 as $row) {
                                ?>

                                <div class="middle_article" id="home_flex">
                                    <a href="<?= base_url('main/news_click_review/') . $row->id ?>" class="article_title">
                                        <?= $row->title ?>
                                    </a>
                                    <div class="article_item">
                                        <div class="article_time">
                                           <i class="far fa-clock"></i> <?= $row->date ?>  
                                        </div>                                  
                                    </div>
                                    <div class="middle_art_main">
                                        <div class="article_img">
                                        <a href="<?= base_url('main/news_click_review/') . $row->id ?>" class="article_a">
                                        <img src="<?= base_url('./upload/news/' . $row->image1) ?>" alt="">
                                        </a>
                                        </div>
                                        <div class="article_desc">
                                            <p><?= $row->sub_desc1 ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <!-- right side column -->
            <div class="col-lg-5 right_column" id="sidebar1">
                <div class="right_card">
                    <div class="side_bar">
                        <div class="side_tit">
                            <h3>பிரபலமான  செய்திகள்</h3>
                        </div>
                        <?php
                        if(isset($data3)) {
                            foreach($data3 as $row) {

                        
                        ?>

                        <div class="side_item">
                            <a href="<?= base_url('main/trending_click_review/') . $row->id ?>" class="item_right"><img
                                    src="<?= base_url('./upload/trend/' . $row->image1) ?>"
                                    alt=""></a>
                            <div class="item_left">
                                <a href="<?= base_url('main/trending_click_review/') . $row->id ?>" class="item_link">
                                 <?= $row->title?>
                                </a>
                            </div>
                        </div>
                        
                       <?php
                           }
                        }
                       ?>

                        <div class="side_tit mt-5">
                            <h3>சமூக இணைப்புகள்</h3>
                        </div>

                        <div class="social_links">
                            <div class="social_tab">
                                <a href="https://m.facebook.com/people/News-ghuru-Tamil/100080553647579/" class="social_a">Facebook <span class="social_icon"><i
                                            class="fab fa-facebook"></i></span></a>
                            </div>
                            <div class="social_tab">
                                <a href="https://twitter.com/news_ghuruTamil" class="social_a">Twitter <span class="social_icon"><i
                                            class="fab fa-twitter"></i></span></a>
                            </div>
                            <div class="social_tab">
                                <a href="https://www.instagram.com/newsghuru_tamil/" class="social_a">Instagram <span class="social_icon"><i
                                            class="fab fa-instagram"></i></span></a>
                            </div>
                            <div class="social_tab">
                                <a href="https://www.youtube.com/@newsghurutamil" class="social_a">Youtube <span class="social_icon"><i
                                            class="fab fa-youtube"></i></span></a>
                            </div>
                            <div class="social_tab">
                                <a href="https://www.linkedin.com/company/news-ghuru-tamil/" class="social_a">Linkedin <span class="social_icon"><i
                                            class="fab fa-linkedin"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
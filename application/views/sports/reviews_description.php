<section class="description_section">
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
            <!-- left side column -->
            <?php
            if(isset($data2)){
            ?>
            <div class="col-lg-8 left_column" id="content">
                <div class="left_card">
                    <div class="side_bar">
                        <div class="desc_tit">
                            <h2><?=$data2[0]->title?></h2>
                           
                        </div>
                    </div>
                    <div class="tags_stamp">
                        <h3><?=$data2[0]->tags?></h3>
                        <p><span><i class="bi bi-clock"></i></span> <?=$data2[0]->date?></p>
                    </div>
                    <div class="desc_design">
                        <em class="em">Share</em>
                        <div class="desc_inner">
                            <span>Share Post:<span>
                            <ul class="icon_share">
                                <li class="share_list"><a href="" class="share_link facebook"><i class="fab fa-facebook"></i></a></li>
                                <li class="share_list"><a href="" class="share_link instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="share_list"><a href="" class="share_link twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="share_list"><a href="https://api.whatsapp.com/send?text=<?php echo base_url() . $_SERVER['REQUEST_URI']; ?>" target="_blank" style="color:inherit;" class="share_link whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="google_click">
                            <a href="" class="follow_google"><img src="<?=base_url('assets/img/gnews.png')?>" alt=""></a>
                        </div>
                        <em class="em1">விளம்பரம்</em>
                    </div>
                    <div class="desc_main">
                        <h3><?=$data2[0]->sub_title1?></h3>
                        <p><?=$data2[0]->sub_desc1?></p>
                        <div class="desc_img mb-3 mt-3">
                            <img src="<?=base_url('./upload/sports/').$data2[0]->image1?>"
                                alt="">
                        </div>
                        <p></p>
                    </div>
                    <div class="desc_main1">
                        <h3><?=$data2[0]->sub_title2?></h3>
                        <p><?=$data2[0]->sub_desc2?></p>

                        <div class="desc_img1 mb-3 mt-3">
                            <img src="<?=base_url('./upload/sports/').$data2[0]->image2?>"
                                alt="">
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
            
            <?php
            }
            ?>



            <!-- right side column -->
            <div class="col-lg-4 right_column" id="sidebar1">
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
                            <a href="<?= base_url('main/trending_click_review/') . $row->id . "/" . $row->title?>" class="item_right"><img
                                    src="<?= base_url('./upload/trend/' . $row->image1) ?>"
                                    alt=""></a>
                            <div class="item_left">
                                <a href="<?= base_url('main/trending_click_review/') . $row->id . "/" . $row->title?>" class="item_link">
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
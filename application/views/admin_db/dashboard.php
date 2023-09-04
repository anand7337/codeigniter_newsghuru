<main class="app-content">

  <div class="app-title">
    <div>
      <?php
      $user = $this->session->userdata('user');
      extract($user);
      ?>
      <h1><i class="bi bi-emoji-smile"></i> Welcome
        <?= $username ?>
      </h1>
    </div>
  </div>
  <div class="row">

  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_trend/') ?>" class="admin_a">
        <div class="widget-small one coloured-icon"><i class="icon bi bi-fire fs-1"></i>
          <div class="info">
            <h4>Trending Today</h4>
            <!-- <p><b>5</b></p> -->
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_banners/') ?>" class="admin_a">
        <div class="widget-small one coloured-icon"><i class="icon bi bi-image fs-1"></i>
          <div class="info">
            <h4>Banners</h4>
            <!-- <p><b>5</b></p> -->
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_home/') ?>" class="admin_a">
        <div class="widget-small two coloured-icon"><i class="icon bi bi-house fs-1"></i>
          <div class="info">
            <h4>Home</h4>
            <!-- <p><b>5</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_news/') ?>" class="admin_a">
        <div class="widget-small three coloured-icon"><i class="icon bi bi-card-text fs-1"></i>
          <div class="info">
            <h4>News</h4>
            <!-- <p><b>25</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_sports/') ?>" class="admin_a">
        <div class="widget-small four coloured-icon"><i class="icon bi bi-bicycle fs-1"></i>
          <div class="info">
            <h4>Sports</h4>
            <!-- <p><b>10</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_tvserials/') ?>" class="admin_a">
        <div class="widget-small five coloured-icon"><i class="icon bi bi-tv fs-1"></i>
          <div class="info">
            <h4>Tv Serials</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_tvshows/') ?>" class="admin_a">
        <div class="widget-small five coloured-icon"><i class="icon bi bi-tv fs-1"></i>
          <div class="info">
            <h4>Tv Shows</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_tamil_reviews/') ?>" class="admin_a">
        <div class="widget-small six coloured-icon"><i class="icon bi bi-star fs-1"></i>
          <div class="info">
            <h4>Tamil Movie Reviews</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_hindi_reviews/') ?>" class="admin_a">
        <div class="widget-small six coloured-icon"><i class="icon bi bi-star fs-1"></i>
          <div class="info">
            <h4>Hindi Movie Reviews</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_english_reviews/') ?>" class="admin_a">
        <div class="widget-small six coloured-icon"><i class="icon bi bi-star fs-1"></i>
          <div class="info">
            <h4>English Movie</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_tamilweb_reviews/') ?>" class="admin_a">
        <div class="widget-small six coloured-icon"><i class="icon bi bi-star fs-1"></i>
          <div class="info">
            <h4>Tamil Web Series Reviews</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_kollywood/') ?>" class="admin_a">
        <div class="widget-small seven coloured-icon"><i class="icon bi bi-camera-video fs-1"></i>
          <div class="info">
            <h4>Kollywood Cinemas</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_bollywood/') ?>" class="admin_a">
        <div class="widget-small seven coloured-icon"><i class="icon bi bi-camera-video fs-1"></i>
          <div class="info">
            <h4>Bollywood Cinemas</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_hollywood/') ?>" class="admin_a">
        <div class="widget-small seven coloured-icon"><i class="icon bi bi-camera-video fs-1"></i>
          <div class="info">
            <h4>Hollywood Cinemas</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_celebrity/') ?>" class="admin_a">
        <div class="widget-small eight coloured-icon"><i class="icon bi bi-people fs-1"></i>
          <div class="info">
            <h4>Celebrity</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_interviews/') ?>" class="admin_a">
        <div class="widget-small nine coloured-icon"><i class="icon bi bi-mic fs-1"></i>
          <div class="info">
            <h4>Interviews</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_gossips/') ?>" class="admin_a">
        <div class="widget-small ten coloured-icon"><i class="icon bi bi-megaphone fs-1"></i>
          <div class="info">
            <h4>Gossips</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_videos/') ?>" class="admin_a">
        <div class="widget-small eleven coloured-icon"><i class="icon bi bi-play fs-1"></i>
          <div class="info">
            <h4>Videos</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_photos/') ?>" class="admin_a">
        <div class="widget-small twelve coloured-icon"><i class="icon bi bi-images fs-1"></i>
          <div class="info">
            <h4>Photos</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url('admin/view_events/') ?>" class="admin_a">
        <div class="widget-small thirteen coloured-icon"><i class="icon bi bi-book fs-1"></i>
          <div class="info">
            <h4>Events</h4>
            <!-- <p><b>500</b></p> -->
          </div>
        </div>
      </a>

    </div>
  </div>
</main>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>News Ghuru Tamil Admin - Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('admin_assets/css/main.css'); ?>">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="<?= base_url('admin/dashboard/') ?>"><img
        src="<?= base_url('admin_assets/images/logo/logo_main02.png'); ?>" width="100" height="45" alt=""></a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="bi bi-person fs-4"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Settings</a></li>
          <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
          <li><a class="dropdown-item" href="<?=base_url('admin/admin_logout/')?>"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="<?= base_url('admin/dashboard/') ?>"><i class="app-menu__icon bi bi-house"></i><span
            class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
            class="app-menu__icon bi bi-upload"></i><span class="app-menu__label">Uploading Form</span><i
            class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?= base_url('admin/upload_banners/') ?>"><i
                class="icon bi bi-arrow-right"></i>Banners</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_trend/') ?>"><i
                class="icon bi bi-arrow-right"></i> Trending</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_home/') ?>"><i class="icon bi bi-arrow-right"></i>
              Home</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_news/') ?>"><i class="icon bi bi-arrow-right"></i>
              News</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_sports/') ?>"><i
                class="icon bi bi-arrow-right"></i> Sports</a></li>
          <li><a class="treeview-item" href=""><i class="icon bi bi-arrow-right"></i> Television</a>
            <ul class="admin_tag">
              <li><a href="<?= base_url('admin/upload_tvserials/') ?>">TV Serials</a></li>
              <li><a href="<?= base_url('admin/upload_tvshows/') ?>">TV Shows</a></li>
            </ul>
          </li>
          <li><a class="treeview-item" href=""><i
                class="icon bi bi-arrow-right"></i> Reviews</a>
                <ul  class="admin_tag">
              <li><a href="<?= base_url('admin/upload_tamil_reviews/') ?>">Tamil Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/upload_hindi_reviews/') ?>">Hindi Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/upload_english_reviews/') ?>">English Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/upload_tamilweb_reviews/') ?>">Tamil Web Series</a></li>
            </ul>
          </li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_cinemanews/') ?>"><i
                class="icon bi bi-arrow-right"></i> Cinema News</a>
                <ul  class="admin_tag">
              <li><a href="<?= base_url('admin/upload_kollywood/') ?>">Kollywood Cinemas</a></li>
              <li><a href="<?= base_url('admin/upload_bollywood/') ?>">Bollywood Cinemas</a></li>
              <li><a href="<?= base_url('admin/upload_hollywood/') ?>">Hollywood Cinemas</a></li>
            </ul>
          </li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_celebrity/') ?>"><i
                class="icon bi bi-arrow-right"></i> Celebrity</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_interviews/') ?>"><i
                class="icon bi bi-arrow-right"></i> Interviews</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_gossips/') ?>"><i
                class="icon bi bi-arrow-right"></i> Gossips</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_videos/') ?>"><i
                class="icon bi bi-arrow-right"></i> Videos</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_photos/') ?>"><i
                class="icon bi bi-arrow-right"></i> Photos</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/upload_events/') ?>"><i
                class="icon bi bi-arrow-right"></i> Events</a></li>
        </ul>
      </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
            class="app-menu__icon bi bi-grid"></i><span class="app-menu__label">View Details</span><i
            class="treeview-indicator bi bi-chevron-right"></i></a>
        <ul class="treeview-menu">
        <li><a class="treeview-item" href="<?= base_url('admin/view_banners/') ?>"><i class="icon bi bi-arrow-right"></i>
              Banners</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_trend/') ?>"><i class="icon bi bi-arrow-right"></i>
              Trending</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_home/') ?>"><i class="icon bi bi-arrow-right"></i>
              Home</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_news/') ?>"><i class="icon bi bi-arrow-right"></i>
              News</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_sports/') ?>"><i class="icon bi bi-arrow-right"></i>
              Sports</a></li>
          <li><a class="treeview-item" href=""><i class="icon bi bi-arrow-right"></i> Television</a>
            <ul  class="admin_tag">
              <li><a href="<?= base_url('admin/view_tvserials/') ?>">TV Serials</a></li>
              <li><a href="<?= base_url('admin/view_tvshows/') ?>">TV Shows</a></li>
            </ul>
          </li>
          <li><a class="treeview-item" href=""><i class="icon bi bi-arrow-right"></i> Reviews</a>
            <ul  class="admin_tag">
              <li><a href="<?= base_url('admin/view_tamil_reviews/') ?>">Tamil Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/view_hindi_reviews/') ?>">Hindi Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/view_english_reviews/') ?>">English Movie Reviews</a></li>
              <li><a href="<?= base_url('admin/view_tamilweb_reviews/') ?>">Tamil Web Series</a></li>
            </ul>
          </li>
          <li><a class="treeview-item" href=""><i
                class="icon bi bi-arrow-right"></i> Cinema News</a>
                <ul  class="admin_tag">
              <li><a href="<?= base_url('admin/view_kollywood/') ?>">Kollywood Cinemas</a></li>
              <li><a href="<?= base_url('admin/view_bollywood/') ?>">Bollywood Cinemas</a></li>
              <li><a href="<?= base_url('admin/view_hollywood/') ?>">Hollywood Cinemas</a></li>
            </ul></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_celebrity/') ?>"><i
                class="icon bi bi-arrow-right"></i> Celebrity</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_interviews/') ?>"><i
                class="icon bi bi-arrow-right"></i> Interviews</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_gossips/') ?>"><i
                class="icon bi bi-arrow-right"></i> Gossips</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_videos/') ?>"><i class="icon bi bi-arrow-right"></i>
              Videos</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_photos/') ?>"><i class="icon bi bi-arrow-right"></i>
              Photos</a></li>
          <li><a class="treeview-item" href="<?= base_url('admin/view_events/') ?>"><i class="icon bi bi-arrow-right"></i>
              Events</a></li>
        </ul>
      </li>
      <li><a class="app-menu__item" href="docs.html"><i class="bi bi-gear me-2 fs-5"></i><span
            class="app-menu__label">Settings</span></a></li>
      <li><a class="app-menu__item" href="<?=base_url('admin/admin_logout/')?>"><i class="bi bi-box-arrow-right me-2 fs-5"></i><span
            class="app-menu__label">Logout</span></a></li>
    </ul>
  </aside>
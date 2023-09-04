<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Admin_Model');

    }
    public function index()
    {
        $this->load->view('admin_db/login');
    }
    public function login_form()
    {
        extract($_POST);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->check_admin($username, $password);
        if ($result) {
            $this->session->set_userdata('user', $result);
            redirect(base_url('admin/dashboard/'));
        } else {
            echo 'invalid username password.. Please check your username and password.';
        }
    }
    public function admin_logout()
    {
        $this->session->unset_userdata('user');
        redirect(base_url('/'));
    }

    public function upload_banners()
    {
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/banner-form');
        $this->load->view('admin_db/footer');
    }
    public function dashboard()
    {
        if(  $this->session->userdata('user')){
            $this->load->view('admin_db/header');
            $this->load->view('admin_db/dashboard');
            $this->load->view('admin_db/footer');
        }else{
            redirect('/');
        }
  
    }
    // uploading page paths
    public function upload_trend()
    {
        if( $this->session->userdata('user')){
            $this->load->view('admin_db/header');
            $this->load->view('admin_db/uploads/trending-form');
            $this->load->view('admin_db/footer');
        }else{
            redirect('/');
        }
       
    }
    public function upload_home()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/home-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_news()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/news-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_sports()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/sports-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_tvshows()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/tv-shows-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_tvserials()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/tv-serials-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_tamil_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/tamil-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_hindi_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/hindi-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_english_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/english-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_tamilweb_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/tamil-web-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_kollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/kollywood-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_bollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/bollywood-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_hollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/hollywood-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_celebrity()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/celebrity-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_interviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/interviews-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_gossips()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/gossips-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_videos()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/videos-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_photos()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/photos-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function upload_events()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/uploads/events-form');
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }


    // insert database
    public function trend_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/trend/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->trend_table($data);
        if ($result) {
            redirect(base_url('admin/upload_trend'));
        } else {
            echo 'not successfully';
        }
    }
    // 
    public function home_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/home/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') == $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') == $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'category' => $category,
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->home_table($data);
        if ($result) {
            redirect(base_url('admin/upload_home'));
        } else {
            echo 'not successfully';
        }
    }

    public function news_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/news/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') == $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') == $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'category' => $category,
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->news_table($data);
        if ($result) {
            redirect(base_url('admin/upload_news'));
        } else {
            echo 'not successfully';
        }
    }

    public function sports_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/sports/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->sports_table($data);
        if ($result) {
            redirect(base_url('admin/upload_sports'));
        } else {
            echo 'not successfully';
        }
    }
    public function tvshows_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/tvshows/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->tvshows_table($data);
        if ($result) {
            redirect(base_url('admin/upload_tvshows'));
        } else {
            echo 'not successfully';
        }
    }

    public function tvserials_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/tvserials/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->tvserials_table($data);
        if ($result) {
            redirect(base_url('admin/upload_tvserials'));
        } else {
            echo 'not successfully';
        }
    }

    public function tamil_review_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/tamil/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->tamil_reviews_table($data);
        if ($result) {
            redirect(base_url('admin/upload_tamil_reviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function hindi_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/hindi/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->hindi_reviews_table($data);
        if ($result) {
            redirect(base_url('admin/upload_hindi_reviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function english_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/english/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->english_reviews_table($data);
        if ($result) {
            redirect(base_url('admin/upload_english_reviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function tamilweb_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/tamilweb/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->tamil_web_table($data);
        if ($result) {
            redirect(base_url('admin/upload_tamilweb_reviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function kollywood_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/kollywood/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->kollywood_table($data);
        if ($result) {
            redirect(base_url('admin/upload_kollywood'));
        } else {
            echo 'not successfully';
        }
    }

    public function bollywood_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/bollywood/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->bollywood_table($data);
        if ($result) {
            redirect(base_url('admin/upload_bollywood'));
        } else {
            echo 'not successfully';
        }
    }

    public function hollywood_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/hollywood/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->hollywood_table($data);
        if ($result) {
            redirect(base_url('admin/upload_hollywood'));
        } else {
            echo 'not successfully';
        }
    }

    public function celebrity_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/celebrity/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->celebrity_table($data);
        if ($result) {
            redirect(base_url('admin/upload_celebrity'));
        } else {
            echo 'not successfully';
        }
    }

    public function interviews_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/interviews/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->interviews_table($data);
        if ($result) {
            redirect(base_url('admin/upload_interviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function gossips_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/gossips/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->gossips_table($data);
        if ($result) {
            redirect(base_url('admin/upload_tvshows'));
        } else {
            echo 'not successfully';
        }
    }
    public function banner_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $config = [
            'upload_path' => './upload/banners/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1') ) {
        }

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'category' => $category,
            'image1' => $file_name,
            'link' => $link,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->banners_table($data);
        if ($result) {
            redirect(base_url('admin/upload_banners'));
        } else {
            echo 'not successfully';
        }
    }
    public function photos_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];
        $file_name2 = $_FILES['image3']['name'];
        $file_name3 = $_FILES['image4']['name'];
        $file_name4 = $_FILES['image5']['name'];
        $file_name5 = $_FILES['image6']['name'];
        $file_name6 = $_FILES['image7']['name'];
        $file_name7 = $_FILES['image8']['name'];
        $file_name8 = $_FILES['image9']['name'];
        $file_name9 = $_FILES['image10']['name'];


        $config = [
            'upload_path' => './upload/photos/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        } elseif (!$this->upload->do_upload('image3') && $this->upload->do_upload('image3')) {
        } elseif (!$this->upload->do_upload('image4') && $this->upload->do_upload('image4')) {
        } elseif (!$this->upload->do_upload('image5') && $this->upload->do_upload('image5')) {
        } elseif (!$this->upload->do_upload('image6') && $this->upload->do_upload('image6')) {
        } elseif (!$this->upload->do_upload('image7') && $this->upload->do_upload('image7')) {
        } elseif (!$this->upload->do_upload('image8') && $this->upload->do_upload('image8')) {
        } elseif (!$this->upload->do_upload('image9') && $this->upload->do_upload('image9')) {
        } elseif (!$this->upload->do_upload('image10') && $this->upload->do_upload('image10')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'image1' => $file_name,
            'image2' => $file_name1,
            'image3' => $file_name2,
            'image4' => $file_name3,
            'image5' => $file_name4,
            'image6' => $file_name5,
            'image7' => $file_name6,
            'image8' => $file_name7,
            'image9' => $file_name8,
            'image10' => $file_name9,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->photos_table($data);
        if ($result) {
            redirect(base_url('admin/upload_photos'));
        } else {
            echo 'not successfully';
        }
    }

    public function videos_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['video1']['name'];
        $file_name1 = $_FILES['video2']['name'];
        $file_name2 = $_FILES['video3']['name'];
        $file_name3 = $_FILES['video4']['name'];
        $file_name4 = $_FILES['video5']['name'];

        $config = [
            'upload_path' => './upload/videos/',
            'allowed_types' => 'wmv|mp4|avi|mov|gifs',
        ];
        $this->load->library('upload', $config);
        if($result['video']=!$this->upload->do_upload('video1') && $this->upload->do_upload('video1')) {
            $this->load->view('videos/reviews_description',$result);
        } elseif (!$this->upload->do_upload('video2') && $this->upload->do_upload('video2')) {
        } elseif (!$this->upload->do_upload('video3') && $this->upload->do_upload('video3')) {
        } elseif (!$this->upload->do_upload('video4') && $this->upload->do_upload('video4')) {
        } elseif (!$this->upload->do_upload('video5') && $this->upload->do_upload('video5')) {
        }
           
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'video1' => $file_name,
            'video2' => $file_name1,
            'video3' => $file_name2,
            'video4' => $file_name3,
            'video5' => $file_name4,
            'date' => $date,
        ];
        // echo "<pre>";
        // print_r($data);
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->video_table($data);
        if ($result) {
            redirect(base_url('admin/upload_videos'));
        } else {
            echo 'not successfully';
        }
    }

    public function events_form_upload()
    {
        extract($_POST);
        extract($_FILES);
        $file_name = $_FILES['image1']['name'];
        $file_name1 = $_FILES['image2']['name'];

        $config = [
            'upload_path' => './upload/events/',
            'allowed_types' => 'png|jpg|jpeg|gif|webp',
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);

        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $file_name,
            'image2' => $file_name1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->events_table($data);
        if ($result) {
            redirect(base_url('admin/upload_events'));
        } else {
            echo 'not successfully';
        }
    }

    // view details page path

    public function view_trend()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_trend();
        $this->load->view('admin_db/details/trending-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function trend_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->trending_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/trending-page', $result);
        $this->load->view('admin_db/footer');
        
    }
    public function edit_trend($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_trend($id);
        $this->load->view('admin_db/details/edit-page/edit-trend', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_trending()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/trend/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_trend', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_trend', $error);
        // }


        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/trend/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/trend/'.$old_image1)){
                    unlink('./upload/trend/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/trend/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/trend/'.$old_image2)){
                    unlink('./upload/trend/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       

            

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_trend_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_trend'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_trend($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->trend_get($id)){
            $data=$this->Admin_Model->trend_get($id);
            if(file_exists('./upload/trend/'.$data->image1)){
                unlink('./upload/trend/'.$data->image1);
              }
              if(file_exists('./upload/trend/'.$data->image2)){
                unlink('./upload/trend/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_trend_id($id);
              if ($result) {
                  redirect(base_url('admin/view_trend/'));
              } else {
                  echo 'error in deleting';
              }
            }

       
    }



    // 
    public function view_home()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_home();
        $this->load->view('admin_db/details/home-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function home_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->home_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/home-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_home($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_home($id);
        $this->load->view('admin_db/details/edit-page/edit-home', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_home()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        $old_img=$this->input->post('old_image1');
        $new_img=$_FILES['new_image1']['name'];
        
        
        $old_img1=$this->input->post('old_image2');
        $new_img1=$_FILES['new_image2']['name'];

 if($new_img == TRUE){
    $config = [
        'upload_path' => './upload/home/',
        'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // 'file_name' => $new_img,
    ];
    $this->load->library('upload', $config);
     if ($this->upload->do_upload('new_image1')) {
          if(file_exists('./upload/home/'.$old_img)){
            unlink('./upload/home/'.$old_img);
          }
        } 
 }
 else{
    $new_img  = $old_img;
 }


 if($new_img1 == TRUE){
    $config = [
        'upload_path' => './upload/home/',
        'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // 'file_name' => $new_img1,
    ];
    $this->load->library('upload', $config);
     if ($this->upload->do_upload('new_image2')) {
          if(file_exists('./upload/home/'.$old_img1)){
            unlink('./upload/home/'.$old_img1);
          }
        } 
 }
 else{
    $new_img1  = $old_img1;
 }



        // $config = [
        //     'upload_path' => './upload/home/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1') && $this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_home', $error);
        // } elseif (!$this->upload->do_upload('image2') && $this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_home', $error);
        // }
        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [
            'category' => $category,
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_img,
            'image2' => $new_img1,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_home($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_home'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_home($id)
    {
        $this->load->model('Admin_Model');

           if($this->Admin_Model->home_get($id)){
            $data=$this->Admin_Model->home_get($id);
            if(file_exists('./upload/home/'.$data->image1)){
                unlink('./upload/home/'.$data->image1);
              }
              if(file_exists('./upload/home/'.$data->image2)){
                unlink('./upload/home/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_home($id);
              if ($result) {
                  redirect(base_url('admin/view_home/'));
              } else {
                  echo 'error in deleting';
              }
           }


       
    }


    // 
    public function view_news()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_news();
        $this->load->view('admin_db/details/news-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function news_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->news_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/news-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_news($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_news($id);
        $this->load->view('admin_db/details/edit-page/edit-news', $return);
        $this->load->view('admin_db/footer');
    }
    public function up_date_news()
    {
        extract($_POST);
        extract($_FILES);
       
        $old_image1=$this->input->post('old_image1');
        $old_image2=$this->input->post('old_image2');

         $new_image1=$_FILES['new_image1']['name'];
         $new_image2=$_FILES['new_image2']['name'];

        
         if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/news/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/news/'.$old_image1)){
                    unlink('./upload/news/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }
        
         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/news',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/news/'.$old_image2)){
                    unlink('./upload/news/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [
            'category' => $category,
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_news($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_news'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_news($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->news_get($id)){
            $data=$this->Admin_Model->news_get($id);
            if(file_exists('./upload/news/'.$data->image1)){
                unlink('./upload/news/'.$data->image1);
            }
            if(file_exists('./upload/news/'.$data->image2)){
                unlink('./upload/news/'.$data->image2);
            }
            $result = $this->Admin_Model->delete_news($id);
            if ($result) {
                redirect(base_url('admin/view_news'));
            } else {
                echo 'error in deleting';
            }
        }
       
    }


    // 
    public function view_sports()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_sports();
        $this->load->view('admin_db/details/sports-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function sports_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->sports_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/sports-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_sports($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_sports($id);
        $this->load->view('admin_db/details/edit-page/edit-sports', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_sports()
    {
        extract($_POST);
        extract($_FILES);
        
         $old_image1=$this->input->post('old_image1');
         $old_image2=$this->input->post('old_image2');

         $new_image1=$_FILES['new_image1']['name'];
         $new_image2=$_FILES['new_image2']['name'];
         
          
         
         if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/sports/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/sports/'.$old_image1)){
                    unlink('./upload/sports/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }
        
         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/sports/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/sports/'.$old_image2)){
                    unlink('./upload/sports/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }






        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_sports_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_sports'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_sports($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->sports_get($id)){
            $data=$this->Admin_Model->sports_get($id);
            if(file_exists('./upload/sports/'.$data->image1)){
                unlink('./upload/sports/'.$data->image1);
              }
              if(file_exists('./upload/sports/'.$data->image2)){
                unlink('./upload/sports/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_sports_file($id);
              if ($result) {
                  redirect(base_url('admin/view_sports/'));
              } else {
                  echo 'error in deleting';
              }
            }
       
    }


    // 
    public function view_tvshows()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_tvshows();
        $this->load->view('admin_db/details/tvshows-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function tvshows_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->tvshows_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/tvshows-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_tvshows($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_tvshows($id);
        $this->load->view('admin_db/details/edit-page/edit-tvshows', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_tvshows()
    {
        extract($_POST);
        extract($_FILES);
       
        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        
        $old_image1=$this->input->post('old_image1');
        $old_image2=$this->input->post('old_image2');


        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/tvshows/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/tvshows/'.$old_image1)){
                    unlink('./upload/tvshows/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }
        
         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/tvshows/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/tvshows/'.$old_image2)){
                    unlink('./upload/tvshows/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }




        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_tvshows_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_tvshows'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_tvshows($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->tvshows_get($id)){
            $data=$this->Admin_Model->tvshows_get($id);
            if(file_exists('./upload/tvshows/'.$data->image1)){
                unlink('./upload/tvshows/'.$data->image1);
              }
              if(file_exists('./upload/tvshows/'.$data->image2)){
                unlink('./upload/tvshows/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_tvshows_form($id);
              if ($result) {
                  redirect(base_url('admin/view_tvshows/'));
              } else {
                  echo 'error in deleting';
              }
            }
       
    }


    // 
    public function view_tvserials()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_tvserials();
        $this->load->view('admin_db/details/tvserials-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function tvserials_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->tvserials_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/tvserials-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_tvserials($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_tvserials($id);
        $this->load->view('admin_db/details/edit-page/edit-tvserials', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_tvserials()
    {
        extract($_POST);
        extract($_FILES);
      

       
        $new_image1=$_FILES['new_image1']['name'];
        $new_image2=$_FILES['new_image2']['name'];
        
        $old_image1=$this->input->post('old_image1');
        $old_image2=$this->input->post('old_image2');
      
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/tvserials/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/tvserials/'.$old_image1)){
                    unlink('./upload/tvserials/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }
        
         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/tvserials',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/tvserials/'.$old_image2)){
                    unlink('./upload/tvserials/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_tvserials_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_tvserials'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_tvserials($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->tvserial_get($id)){
            $data=$this->Admin_Model->tvserial_get($id);
            if(file_exists('./upload/tvserials/'.$data->image1)){
                unlink('./upload/tvserials/'.$data->image1);
              }
              if(file_exists('./upload/tvserials/'.$data->image2)){
                unlink('./upload/tvserials/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_tvserials($id);
              if ($result) {
                  redirect(base_url('admin/view_tvserials/'));
              } else {
                  echo 'error in deleting';
              }
            }
      
    }

    // 
    public function view_tamil_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_tamil();
        $this->load->view('admin_db/details/tamil-reviews-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function tamil_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->tamil_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/tamil-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_tamil($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_tamil($id);
        $this->load->view('admin_db/details/edit-page/edit-tamil', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_tamil()
    {
        extract($_POST);
        extract($_FILES);
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/tamil/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/tamil/'.$old_image1)){
                    unlink('./upload/tamil/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/tamil/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/tamil/'.$old_image2)){
                    unlink('./upload/tamil/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_tamil_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_tamil_reviews'));
        } else {
            echo 'not successfully';
        }
    }

    public function delete_tamil($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->tamil_get($id)){
            $data=$this->Admin_Model->tamil_get($id);
            if(file_exists('./upload/tamil/'.$data->image1)){
                unlink('./upload/tamil/'.$data->image1);
              }
              if(file_exists('./upload/tamil/'.$data->image2)){
                unlink('./upload/tamil/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_tamil_id($id);
              if ($result) {
                  redirect(base_url('admin/view_tamil_reviews/'));
              } else {
                  echo 'error in deleting';
              }
            }

    }

    // 
    public function view_hindi_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_hindi();
        $this->load->view('admin_db/details/hindi-reviews-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function hindi_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->hindi_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/hindi-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_hindi($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_hindi($id);
        $this->load->view('admin_db/details/edit-page/edit-hindi', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_hindi()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/hindi/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_interviews', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_hindi_reviews', $error);
        // }

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/hindi/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
               
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/hindi/'.$old_image1)){
                    unlink('./upload/hindi/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/hindi/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/hindi/'.$old_image2)){
                    unlink('./upload/hindi/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_hindi($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_hindi_reviews'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_hindi($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->hindi_get($id)){
            $data=$this->Admin_Model->hindi_get($id);
            if(file_exists('./upload/hindi/'.$data->image1)){
                unlink('./upload/hindi/'.$data->image1);
              }
              if(file_exists('./upload/hindi/'.$data->image2)){
                unlink('./upload/hindi/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_hindi_id($id);
              if ($result) {
                  redirect(base_url('admin/view_hindi_reviews/'));
              } else {
                  echo 'error in deleting';
              }
            }




       
    }

    // 
    public function view_english_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_english();
        $this->load->view('admin_db/details/english-reviews-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function english_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->english_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/english-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_english($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_english($id);
        $this->load->view('admin_db/details/edit-page/edit-english', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_english()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/english/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_english_reviews', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_english_reviews', $error);
        // }
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/english/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/english/'.$old_image1)){
                    unlink('./upload/english/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/english/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/english/'.$old_image2)){
                    unlink('./upload/english/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_english($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_english_reviews/'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_english($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->english_get($id)){
            $data=$this->Admin_Model->english_get($id);
            if(file_exists('./upload/english/'.$data->image1)){
                unlink('./upload/english/'.$data->image1);
              }
              if(file_exists('./upload/english/'.$data->image2)){
                unlink('./upload/english/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_english_id($id);
              if ($result) {
                  redirect(base_url('admin/view_english_reviews/'));
              } else {
                  echo 'error in deleting';
              }
            }


       
    }


    // 
    public function view_tamilweb_reviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_tamilweb();
        $this->load->view('admin_db/details/tamilweb-reviews-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function tamilwebseries_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->tamilwebseries_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/tamilwebseries-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_tamilwebseries($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_tamilwebseries($id);
        $this->load->view('admin_db/details/edit-page/edit-tamilwebseries', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_tamilwebseries()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/tamilweb/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_tamilweb_reviews', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_tamilweb_reviews', $error);
        // }

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/tamilweb/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/tamilweb/'.$old_image1)){
                    unlink('./upload/tamilweb/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/tamilweb/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/tamilweb/'.$old_image2)){
                    unlink('./upload/tamilweb/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_tamilwebseries($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_tamilweb_reviews'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_tamilwebseries($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->tamilweb_get($id)){
            $data=$this->Admin_Model->tamilweb_get($id);
            if(file_exists('./upload/tamilweb/'.$data->image1)){
                unlink('./upload/tamilweb/'.$data->image1);
              }
              if(file_exists('./upload/tamilweb/'.$data->image2)){
                unlink('./upload/tamilweb/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_tamilwebseries_id($id);
           if ($result) {
            redirect(base_url('admin/view_tamilweb_reviews/'));
                } else {
            echo 'error in deleting';
               }
            }


        
    }



    // 
    public function view_kollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_kollywood();
        $this->load->view('admin_db/details/kollywood-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function kollywood_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->kollywood_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/kollywood-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_kollywood($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_kollywood($id);
        $this->load->view('admin_db/details/edit-page/edit-kollywood', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_kollywood()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/kollywood/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_kollywood', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_kollywood', $error);
        // }

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/kollywood/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
         
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/kollywood/'.$old_image1)){
                    unlink('./upload/kollywood/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/kollywood/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/kollywood/'.$old_image2)){
                    unlink('./upload/kollywood/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_kollywood($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_kollywood'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_kollywood($id)
    {
        $this->load->model('Admin_Model');

          
        if($this->Admin_Model->kollywood_get($id)){
            $data=$this->Admin_Model->kollywood_get($id);
            if(file_exists('./upload/kollywood/'.$data->image1)){
                unlink('./upload/kollywood/'.$data->image1);
              }
              if(file_exists('./upload/kollywood/'.$data->image2)){
                unlink('./upload/kollywood/'.$data->image2);
              }
              
        $result = $this->Admin_Model->delete_kollywood_id($id);
        if ($result) {
            redirect(base_url('admin/view_kollywood/'));
        } else {
            echo 'error in deleting';
        }
            }


    }
    //  
    public function view_bollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_bollywood();
        $this->load->view('admin_db/details/bollywood-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function bollywood_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->bollywood_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/bollywood-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_bollywood($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_bollywood($id);
        $this->load->view('admin_db/details/edit-page/edit-bollywood', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_bollywood()
    {
        extract($_POST);
        extract($_FILES);
     
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/bollywood/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/bollywood/'.$old_image1)){
                    unlink('./upload/bollywood/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/bollywood/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/bollywood/'.$old_image2)){
                    unlink('./upload/bollywood/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       



        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_bollywood_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_bollywood'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_bollywood($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->bollywood_get($id)){
            $data=$this->Admin_Model->bollywood_get($id);
            if(file_exists('./upload/bollywood/'.$data->image1)){
                unlink('./upload/bollywood/'.$data->image1);
              }
              if(file_exists('./upload/bollywood/'.$data->image2)){
                unlink('./upload/bollywood/'.$data->image2);
              }
              
        $result = $this->Admin_Model->delete_bollywood_id($id);
        if ($result) {
            redirect(base_url('admin/view_bollywood/'));
        } else {
            echo 'error in deleting';
        }
            }


    }

    // 
    public function view_hollywood()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_hollywood();
        $this->load->view('admin_db/details/hollywood-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function hollywood_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->hollywood_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/hollywood-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_hollywood($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_hollywood($id);
        $this->load->view('admin_db/details/edit-page/edit-hollywood', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_hollywood()
    {
        extract($_POST);
        extract($_FILES);
      
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/hollywood/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/hollywood/'.$old_image1)){
                    unlink('./upload/hollywood/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/hollywood/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/hollywood/'.$old_image2)){
                    unlink('./upload/hollywood/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       



        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_hollywood_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_hollywood'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_hollywood($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->hollywood_get($id)){
            $data=$this->Admin_Model->hollywood_get($id);
            if(file_exists('./upload/hollywood/'.$data->image1)){
                unlink('./upload/hollywood/'.$data->image1);
              }
              if(file_exists('./upload/hollywood/'.$data->image2)){
                unlink('./upload/hollywood/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_hollywood_id($id);
              if ($result) {
                  redirect(base_url('admin/view_hollywood/'));
              } else {
                  echo 'error in deleting';
              }
            }

      
    }

    // 
    public function view_celebrity()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_celebrity();
        $this->load->view('admin_db/details/celebrity-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function celebrity_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->celebrity_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/celebrity-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_celebrity($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_celebrity($id);
        $this->load->view('admin_db/details/edit-page/edit-celebrity', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_celebrity()
    {
        extract($_POST);
        extract($_FILES);
       

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/celebrity/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/celebrity/'.$old_image1)){
                    unlink('./upload/celebrity/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/celebrity/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/celebrity/'.$old_image2)){
                    unlink('./upload/celebrity/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       




        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_celebrity_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_celebrity'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_celebrity($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->celebrity_get($id)){
            $data=$this->Admin_Model->celebrity_get($id);
            if(file_exists('./upload/celebrity/'.$data->image1)){
                unlink('./upload/celebrity/'.$data->image1);
              }
              if(file_exists('./upload/celebrity/'.$data->image2)){
                unlink('./upload/celebrity/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_celebrity_id($id);
        if ($result) {
            redirect(base_url('admin/view_celebrity/'));
        } else {
            echo 'error in deleting';
        }
            }

        
    }


    // 
    public function view_interviews()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_interviews();
        $this->load->view('admin_db/details/interviews-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function interviews_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->interviews_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/interview-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_interviews($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_interviews($id);
        $this->load->view('admin_db/details/edit-page/edit-interview', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_interviews()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/interviews/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_interviews', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_interviews', $error);
        // }

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/interviews/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/interviews/'.$old_image1)){
                    unlink('./upload/interviews/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/interviews/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/interviews/'.$old_image2)){
                    unlink('./upload/interviews/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_interviews_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_interviews'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_interviews($id)
    {
        $this->load->model('Admin_Model');

        if($this->Admin_Model->interview_get($id)){
            $data=$this->Admin_Model->interview_get($id);
            if(file_exists('./upload/interviews/'.$data->image1)){
                unlink('./upload/interviews/'.$data->image1);
              }
              if(file_exists('./upload/interviews/'.$data->image2)){
                unlink('./upload/interviews/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_interviews_id($id);
              if ($result) {
                  redirect(base_url('admin/view_interviews/'));
              } else {
                  echo 'error in deleting';
              }
            }

       
    }


    // 
    public function view_gossips()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_gossips();
        $this->load->view('admin_db/details/gossips-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function gossips_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->gossips_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/gossips-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_gossips($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_gossips($id);
        $this->load->view('admin_db/details/edit-page/edit-gossips', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_gossips()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/gossips/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_gossips', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_gossips', $error);
        // }

         
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/gossips/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/gossips/'.$old_image1)){
                    unlink('./upload/gossips/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/gossips/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/gossips/'.$old_image2)){
                    unlink('./upload/gossips/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [

            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_gossips_form($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_trend'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_gossips($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->gossips_get($id)){
            $data=$this->Admin_Model->gossips_get($id);
            if(file_exists('./upload/gossips/'.$data->image1)){
                unlink('./upload/gossips/'.$data->image1);
              }
              if(file_exists('./upload/gossips/'.$data->image2)){
                unlink('./upload/gossips/'.$data->image2);
              }
              
        $result = $this->Admin_Model->delete_gossips_id($id);
        if ($result) {
            redirect(base_url('admin/view_gossips/'));
        } else {
            echo 'error in deleting';
        }
            }

    }


    // 
    public function view_videos()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_video();
        $this->load->view('admin_db/details/videos-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function videos_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->video_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/videos-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_videos($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_video($id);
        $this->load->view('admin_db/details/edit-page/edit-videos', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_videos()
    {
        extract($_POST);
        extract($_FILES);
     
            $old_video1=$this->input->post('old_video1');
            $new_video1=$_FILES['new_video1']['name'];
            
            $old_video2=$this->input->post('old_video2');
            $new_video2=$_FILES['new_video2']['name'];
          
            $old_video3=$this->input->post('old_video3');
            $new_video3=$_FILES['new_video3']['name'];

            $old_video4=$this->input->post('old_video4');
            $new_video4=$_FILES['new_video4']['name'];

            $old_video5=$this->input->post('old_video5');
            $new_video5=$_FILES['new_video5']['name'];


            if($new_video1 == TRUE){
                $config = [
                    'upload_path' => './upload/videos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                    // 'file_name' => $new_video1,
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_video1')) {
                      if(file_exists('./upload/videos/'.$old_video1)){
                        unlink('./upload/videos/'.$old_video1);
                      }
                    } 
             }
             else{
                $new_video1  = $old_video1;
             }
            

             if($new_video2 == TRUE){
                $config = [
                    'upload_path' => './upload/videos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                    // 'file_name' => $new_video2,
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_video2')) {
                      if(file_exists('./upload/videos/'.$old_video2)){
                        unlink('./upload/videos/'.$old_video2);
                      }
                    } 
             }
             else{
                $new_video2  = $old_video2;
             }
            
             if($new_video3 == TRUE){
                $config = [
                    'upload_path' => './upload/videos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                    // 'file_name' => $new_video3,
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_video3')) {
                      if(file_exists('./upload/videos/'.$old_video3)){
                        unlink('./upload/videos/'.$old_video3);
                      }
                    } 
             }
             else{
                $new_video3  = $old_video3;
             }
            

             if($new_video4 == TRUE){
                $config = [
                    'upload_path' => './upload/videos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                    // 'file_name' => $new_video4,
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_video4')) {
                      if(file_exists('./upload/videos/'.$old_video4)){
                        unlink('./upload/videos/'.$old_video4);
                      }
                    } 
             }
             else{
                $new_video4  = $old_video4;
             }
            
             if($new_video5 == TRUE){
                $config = [
                    'upload_path' => './upload/videos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                    // 'file_name' => $new_video5,
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_video1')) {
                      if(file_exists('./upload/videos/'.$old_video5)){
                        unlink('./upload/videos/'.$old_video5);
                      }
                    } 
             }
             else{
                $new_video5  = $old_video5;
             }
            


        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id=$id;
        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'video1' => $new_video1,
            'video2' => $new_video2,
            'video3' => $new_video3,
            'video4' => $new_video4,
            'video5' => $new_video5,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_video($data,$edit_id);
        if ($result) {
            redirect(base_url('admin/view_videos'));
        } else {
            echo 'not successfully';
        }

    }
    public function delete_videos($id)
    {
        $this->load->model('Admin_Model');
       if( $this->Admin_Model->delete_video_get($id)){
         $data =  $this->Admin_Model->delete_video_get($id);
           if(file_exists('./upload/videos/'.$data->video1)){
            unlink('./upload/videos/'.$data->video1);
          }
          if(file_exists('./upload/videos/'.$data->video2)){
            unlink('./upload/videos/'.$data->video2);
          }
          if(file_exists('./upload/videos/'.$data->video3)){
            unlink('./upload/videos/'.$data->video3);
          }
          if(file_exists('./upload/videos/'.$data->video4)){
            unlink('./upload/videos/'.$data->video4);
          }
          if(file_exists('./upload/videos/'.$data->video5)){
            unlink('./upload/videos/'.$data->video5);
          }
         $result = $this->Admin_Model->delete_vedio_id($id);
        if ($result) {
            redirect(base_url('admin/view_videos/'));
        } else {
            echo 'error in deleting';
        }
       }
        
        // if(file_exists('./upload/videos/'.$video1)){
        //     unlink('./upload/videos/'.$video1);
        //   }
        // $result = $this->Admin_Model->delete_vedio($id);
        // if ($result) {
        //     redirect(base_url('admin/view_videos/'));
        // } else {
        //     echo 'error in deleting';
        // }
    }




    // 
    public function view_photos()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_photos();
        $this->load->view('admin_db/details/photos-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function photos_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->photos_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/photos-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_photos($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_photos($id);
        // echo '<pre>';
        // print_r($return);
        $this->load->view('admin_db/details/edit-page/edit-photos', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_photos()
    { {
            extract($_POST);
            extract($_FILES);
           

           //old_image 
            $old_image1=$this->input->post('old_image1');
            $old_image2=$this->input->post('old_image2');
            $old_image3=$this->input->post('old_image3');
            $old_image4=$this->input->post('old_image4');
            $old_image5=$this->input->post('old_image5');
            $old_image6=$this->input->post('old_image6');
            $old_image7=$this->input->post('old_image7');
            $old_image8=$this->input->post('old_image8');
            $old_image9=$this->input->post('old_image9');
            $old_image10=$this->input->post('old_image10');

            //new_image
            $new_image1=$_FILES['new_image1']['name'];
            $new_image2=$_FILES['new_image2']['name'];
            $new_image3=$_FILES['new_image3']['name'];
            $new_image4=$_FILES['new_image4']['name'];
            $new_image5=$_FILES['new_image5']['name'];
            $new_image6=$_FILES['new_image6']['name'];
            $new_image7=$_FILES['new_image7']['name'];
            $new_image8=$_FILES['new_image8']['name'];
            $new_image9=$_FILES['new_image9']['name'];
            $new_image10=$_FILES['new_image10']['name'];


            if($new_image1 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image1')) {
                      if(file_exists('./upload/photos/'.$old_image1)){
                        unlink('./upload/photos/'.$old_image1);
                      }
                    } 
             }
             else{
                $new_image1  = $old_image1;
             }

             if($new_image2 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
         
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image2')) {
                      if(file_exists('./upload/photos/'.$old_image2)){
                        unlink('./upload/photos/'.$old_image2);
                      }
                    } 
             }
             else{
                $new_image2  = $old_image2;
             }

             if($new_image3 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                  
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image3')) {
                      if(file_exists('./upload/photos/'.$old_image3)){
                        unlink('./upload/photos/'.$old_image3);
                      }
                    } 
             }
             else{
                $new_image3  = $old_image3;
             }


             if($new_image4 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                 
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image4')) {
                      if(file_exists('./upload/photos/'.$old_image4)){
                        unlink('./upload/photos/'.$old_image4);
                      }
                    } 
             }
             else{
                $new_image4  = $old_image4;
             }


             if($new_image5 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                 
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image5')) {
                      if(file_exists('./upload/photos/'.$old_image5)){
                        unlink('./upload/photos/'.$old_image5);
                      }
                    } 
             }
             else{
                $new_image5  = $old_image5;
             }


              
             if($new_image6 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
           
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image6')) {
                      if(file_exists('./upload/photos/'.$old_image6)){
                        unlink('./upload/photos/'.$old_image6);
                      }
                    } 
             }
             else{
                $new_image6  = $old_image6;
             }


             if($new_image7 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
               
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image7')) {
                      if(file_exists('./upload/photos/'.$old_image7)){
                        unlink('./upload/photos/'.$old_image7);
                      }
                    } 
             }
             else{
                $new_image7  = $old_image7;
             }



             if($new_image8 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
               
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image8')) {
                      if(file_exists('./upload/photos/'.$old_image8)){
                        unlink('./upload/photos/'.$old_image8);
                      }
                    } 
             }
             else{
                $new_image8  = $old_image8;
             }


             if($new_image9 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
                 
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image1')) {
                      if(file_exists('./upload/photos/'.$old_image9)){
                        unlink('./upload/photos/'.$old_image9);
                      }
                    } 
             }
             else{
                $new_image9  = $old_image9;
             }
             
               
             if($new_image10 == TRUE){
                $config = [
                    'upload_path' => './upload/photos/',
                    'allowed_types' => 'png|jpg|jpeg|gif|webp',
       
                ];
                $this->load->library('upload', $config);
                 if ($this->upload->do_upload('new_image10')) {
                      if(file_exists('./upload/photos/'.$old_image10)){
                        unlink('./upload/photos/'.$old_image10);
                      }
                    } 
             }
             else{
                $new_image10  = $old_image10;
             }




            $this->load->helper('date'); //load date helper
            $datestring = ' %d / %m / %y';
            $time = time();
            $date = mdate($datestring, $time);
            $edit_id = $id;
            $data = [
                'title' => $title,
                'tags' => $tags,
                'sub_title1' => $title1,
                'sub_desc1' => $desc1,
                'image1' => $new_image1,
                'image2' => $new_image2,
                'image3' => $new_image3,
                'image4' => $new_image4,
                'image5' => $new_image5,
                'image6' => $new_image6,
                'image7' => $new_image7,
                'image8' => $new_image8,
                'image9' => $new_image9,
                'image10' => $new_image10,
                'date' => $date,
            ];
            $this->load->model('Admin_Model');
            $result = $this->Admin_Model->update_photos($data, $edit_id);
            if ($result) {
                redirect(base_url('admin/view_photos'));
            } else {
                echo 'not successfully';
            }
        }
    }
    public function delete_photos($id)
    {
        $this->load->model('Admin_Model');
        if($this->Admin_Model->photos_get($id)){
            $data=$this->Admin_Model->photos_get($id);
            if(file_exists('./upload/photos/'.$data->image1)){
                unlink('./upload/photos/'.$data->image1);
              }
              if(file_exists('./upload/photos/'.$data->image2)){
                unlink('./upload/photos/'.$data->image2);
              }
              if(file_exists('./upload/photos/'.$data->image3)){
                unlink('./upload/photos/'.$data->image3);
              }
              if(file_exists('./upload/photos/'.$data->image4)){
                unlink('./upload/photos/'.$data->image4);
              }
              if(file_exists('./upload/photos/'.$data->image5)){
                unlink('./upload/photos/'.$data->image5);
              }
              if(file_exists('./upload/photos/'.$data->image6)){
                unlink('./upload/photos/'.$data->image6);
              }
              if(file_exists('./upload/photos/'.$data->image7)){
                unlink('./upload/photos/'.$data->image7);
              }
              if(file_exists('./upload/photos/'.$data->image8)){
                unlink('./upload/photos/'.$data->image8);
              }
              if(file_exists('./upload/photos/'.$data->image9)){
                unlink('./upload/photos/'.$data->image9);
              }
              if(file_exists('./upload/photos/'.$data->image10)){
                unlink('./upload/photos/'.$data->image10);
              }

              $result = $this->Admin_Model->delete_photos_id($id);
              if ($result) {
                  redirect(base_url('admin/view_photos'));
              } else {
                  echo 'error in deleting';
              }
        }
     
    }

    //
    public function view_banners()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_banner();
        $this->load->view('admin_db/details/banner-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }

    public function edit_banner($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_banner($id);
        $this->load->view('admin_db/details/edit-page/edit-banner', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_banner()
    {
        extract($_POST);
        extract($_FILES);
        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/banners/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/banners/'.$old_image1)){
                    unlink('./upload/banners/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }

        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [
            'category' => $category,
            'image1' => $new_image1,
            'link' => $link,
            'date' => $date,
        ];
        // echo "<pre>";
        // print_r($data);
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_banner_form($data,$edit_id);
        if ($result) {
            redirect(base_url('admin/view_banners'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_banner($id)
    {
        $this->load->model('Admin_Model');      
        if($this->Admin_Model->banner_get($id)){
            $data=$this->Admin_Model->banner_get($id);
            if(file_exists('./upload/banners/'.$data->image1)){
                unlink('./upload/banners/'.$data->image1);
              }
              $result = $this->Admin_Model->delete_banner_id($id);
              if ($result) {
                  redirect(base_url('admin/view_banners/'));
              } else {
                  echo 'error in deleting';
              }
            }
       
    }


    // 
    public function view_events()
    {
        if( $this->session->userdata('user')){
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->get_events();
        $this->load->view('admin_db/details/events-view', $return);
        $this->load->view('admin_db/footer');
    }else{
        redirect('/');
    }
    }
    public function events_desc($id)
    {
        $this->load->model('Admin_Model');
        $result['data1'] = $this->Admin_Model->events_desc($id);
        $this->load->view('admin_db/header');
        $this->load->view('admin_db/details/desc-page/events-page', $result);
        $this->load->view('admin_db/footer');
    }
    public function edit_events($id)
    {
        $this->load->view('admin_db/header');
        $this->load->model('Admin_Model');
        $return['data1'] = $this->Admin_Model->editing_events($id);
        $this->load->view('admin_db/details/edit-page/edit-events', $return);
        $this->load->view('admin_db/footer');
    }
    public function update_events()
    {
        extract($_POST);
        extract($_FILES);
        // $file_name = $_FILES['image1']['name'];
        // $file_name1 = $_FILES['image2']['name'];

        // $config = [
        //     'upload_path' => './upload/events/',
        //     'allowed_types' => 'png|jpg|jpeg|gif|webp',
        // ];
        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('image1')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_events', $error);
        // } elseif (!$this->upload->do_upload('image2')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('admin/upload_events', $error);
        // }

        $old_image1=$this->input->post('old_image1');
        $new_image1=$_FILES['new_image1']['name'];
      
        $new_image2=$_FILES['new_image2']['name'];
        $old_image2=$this->input->post('old_image2');
      
        if($new_image1 == TRUE){
            $config = [
                'upload_path' => './upload/events/',
                'allowed_types' => 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image1,
            ];
            $this->load->library('upload', $config);
             if ($this->upload->do_upload('new_image1')) {
                  if(file_exists('./upload/events/'.$old_image1)){
                    unlink('./upload/events/'.$old_image1);
                  }
                } 
         }
         else{
            $new_image1  = $old_image1;
         }


         if($new_image2 == TRUE){
            $config =[
                'upload_path' => './upload/events/',
                'allowed_types'=> 'png|jpg|jpeg|gif|webp',
                // 'file_name' => $new_image2,
            ];
            $this->load->library('upload',$config);
            if($this->upload->do_upload('new_image2')){
                if(file_exists('./upload/events/'.$old_image2)){
                    unlink('./upload/events/'.$old_image2);
                }
            }
         }else{
            $new_image2 = $old_image2;
         }
       




        $this->load->helper('date'); //load date helper
        $datestring = ' %d / %m / %y';
        $time = time();
        $date = mdate($datestring, $time);
        $edit_id = $id;
        $data = [
            'title' => $title,
            'tags' => $tags,
            'sub_title1' => $title1,
            'sub_desc1' => $desc1,
            'sub_title2' => $title2,
            'sub_desc2' => $desc2,
            'image1' => $new_image1,
            'image2' => $new_image2,
            'date' => $date,
        ];
        $this->load->model('Admin_Model');
        $result = $this->Admin_Model->update_events($data, $edit_id);
        if ($result) {
            redirect(base_url('admin/upload_events'));
        } else {
            echo 'not successfully';
        }
    }
    public function delete_events($id)
    {
        $this->load->model('Admin_Model');

         
        if($this->Admin_Model->events_get($id)){
            $data=$this->Admin_Model->events_get($id);
            if(file_exists('./upload/events/'.$data->image1)){
                unlink('./upload/events/'.$data->image1);
              }
              if(file_exists('./upload/events/'.$data->image2)){
                unlink('./upload/events/'.$data->image2);
              }
              $result = $this->Admin_Model->delete_events_id($id);
              if ($result) {
                  redirect(base_url('admin/view_events/'));
              } else {
                  echo 'error in deleting';
              }
            }       
    }


    // 
    public function time()
    {
        $this->load->helper('date'); //load date helper
        $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
        $time = time();
        $date = mdate($datestring, $time);
        print_r($date);
    }
}
?>
<?php
class Main extends CI_Controller
{
    public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Main_Model');
		
	}
    public function index()
    {
        $this->load->view('header');
        
        $this->load->model('Main_Model');
        $return['data5']=$this->Main_Model->home_fetch_impo();
        $return['data6']=$this->Main_Model->home_fetch_latest();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        
        $this->load->view('home/all_reviews',$return);
        $this->load->view('footer');
    }
    public function home_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->home_fetch_click_impo($id);
        $return['data2']=$this->Main_Model->home_fetch_click_latest($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('home/reviews_description',$return);
        $this->load->view('footer');
    }
    public function trending()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('trending/all_reviews',$return);
        $this->load->view('footer');
    }
    public function trending_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->trending_fetch_click($id);
        $return['data02']=$this->Main_Model->trending_fetch_review1();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('trending/reviews_description',$return);
        $this->load->view('footer');
    }
    public function news()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->news_fetch_local();
        $return['data2']=$this->Main_Model->news_fetch_weather();
        $return['data4']=$this->Main_Model->news_fetch_world();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('news/all_reviews',$return);
        $this->load->view('footer');
    }
    public function news_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->news_click_local($id);
        $return['data2']=$this->Main_Model->news_click_weather($id);
        $return['data2']=$this->Main_Model->news_click_world($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('news/reviews_description',$return);
        $this->load->view('footer');
    }

    public function sports()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->sports_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('sports/all_reviews',$return);
        $this->load->view('footer');
    }
    public function sports_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->sports_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('sports/reviews_description',$return);
        $this->load->view('footer');
    }
    public function tv_serials()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->tvserials_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tv-serials/all_reviews',$return);
        $this->load->view('footer');
    }
    public function tvserials_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->tvserials_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tv-serials/reviews_description',$return);
        $this->load->view('footer');
    }

    public function tv_shows()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->tvshows_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tv-shows/all_reviews',$return);
        $this->load->view('footer');
    }
    public function tvshows_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->tvshows_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tv-shows/reviews_description',$return);
        $this->load->view('footer');
    }
   

    
    public function tamil_movie_reviews()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->tamil_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tamil-movie-reviews/all_reviews',$return);
        $this->load->view('footer');
    }
    public function tamil_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->tamil_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tamil-movie-reviews/reviews_description',$return);
        $this->load->view('footer');
    }

    public function hindi_movie_reviews()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->hindi_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('hindi-movie-reviews/all_reviews',$return);
        $this->load->view('footer');
    }
    public function hindi_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->hindi_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('hindi-movie-reviews/reviews_description',$return);
        $this->load->view('footer');
    }

    public function english_movie_reviews()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->english_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('english-movie-reviews/all_reviews',$return);
        $this->load->view('footer');
    }
    public function english_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->english_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('english-movie-reviews/reviews_description',$return);
        $this->load->view('footer');
    }

    public function tamilwebseries_movie_reviews()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->tamilweb_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tamil-webseries-reviews/all_reviews',$return);
        $this->load->view('footer');
    }
    public function tamilwebseries_click_review($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->tamilweb_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('tamil-webserie-reviews/reviews_description',$return);
        $this->load->view('footer');
    }

    public function kollywood_cinemas()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->kollywood_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('kollywood-cinemas/all_reviews',$return);
        $this->load->view('footer');
    }
    public function kollywood_cinemas_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->kollywood_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('kollywood-cinemas/reviews_description',$return);
        $this->load->view('footer');
    }
    public function bollywood_cinemas()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->bollywood_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('bollywood-cinemas/all_reviews',$return);
        $this->load->view('footer');
    }
    public function bollywood_cinemas_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->bollywood_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('bollywood-cinemas/reviews_description',$return);
        $this->load->view('footer');
    }
    public function hollywood_cinemas()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->hollywood_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('hollywood-cinemas/all_reviews',$return);
        $this->load->view('footer');
    }
    public function hollywood_cinemas_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->hollywood_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('hollywood-cinemas/reviews_description',$return);
        $this->load->view('footer');
    }

    public function celebrity()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->celebrity_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('celebrity/all_reviews',$return);
        $this->load->view('footer');
    }
    public function celebrity_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->celebrity_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('celebrity/reviews_description',$return);
        $this->load->view('footer');
    }

    public function interviews()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->interviews_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('interviews/all_reviews',$return);
        $this->load->view('footer');
    }
    public function interviews_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->interviews_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('interviews/reviews_description',$return);
        $this->load->view('footer');
    }

    public function gossips()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->gossips_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('gossips/all_reviews',$return);
        $this->load->view('footer');
    }
    public function gossips_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->gossips_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('gossips/reviews_description',$return);
        $this->load->view('footer');
    }

    public function videos()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->videos_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('videos/all_reviews',$return);
        $this->load->view('footer');
    }
    public function videos_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->videos_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('videos/reviews_description',$return);
        // echo '<pre>';
        // print_r($return);
        $this->load->view('footer');
    }

    public function photos()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->photos_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('photos/all_reviews',$return);
        $this->load->view('footer');
    }
    public function photos_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->photos_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('photos/reviews_description',$return);
        $this->load->view('footer');
    }

    public function events()
    {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data1']=$this->Main_Model->events_fetch_review();
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('events/all_reviews',$return);
        $this->load->view('footer');
    }
    public function events_click($id) {
        $this->load->view('header');
        $this->load->model('Main_Model');
        $return['data2']=$this->Main_Model->events_fetch_click($id);
        $return['data3']=$this->Main_Model->trending_fetch_review();
        $return['BannerTop']=$this->Main_Model->get_top_banner();
        $return['BannerLeft']=$this->Main_Model->get_left_banner();
        $return['BannerRight']=$this->Main_Model->get_right_banner();
        $return['BannerBottom']=$this->Main_Model->get_bottom_banner();
        $this->load->view('events/reviews_description',$return);
        $this->load->view('footer');
    }
}
?>
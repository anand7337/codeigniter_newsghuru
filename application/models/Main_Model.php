<?php
class Main_Model extends CI_Model {
    public function trending_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
        $this->db->limit('15');
		return $this->db->get('trending_table')->result();
    }
    public function trending_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('trending_table')->result();
    }
    public function trending_fetch_review1() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
        $this->db->limit('15');
		return $this->db->get('trending_table')->result();
    }
    public function home_fetch_impo() {
        $this->load->database();
        $this->db->where('category','important');
        $this->db->order_by('id', "DESC");
		return $this->db->get('home_table')->result();
    }
    public function home_fetch_click_impo($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('home_table')->result();
    }
    public function home_fetch_latest() {
        $this->load->database();
        $this->db->where('category','latest');
        $this->db->order_by('id', "DESC");
		return $this->db->get('home_table')->result();
    }
    public function home_fetch_click_latest($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('home_table')->result();
    }


    public function news_fetch_local() {
        $this->load->database();
        $this->db->where('category','local-news');
        $this->db->order_by('id', "DESC");
		return $this->db->get('news_table')->result();
    }
    public function news_fetch_weather() {
        $this->load->database();
        $this->db->where('category','weather-news');
        $this->db->order_by('id', "DESC");
		return $this->db->get('news_table')->result();
    }
    public function news_fetch_world() {
        $this->load->database();
        $this->db->where('category','world-news');
        $this->db->order_by('id', "DESC");
		return $this->db->get('news_table')->result();
    }
    public function news_click_local($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('news_table')->result();
    }
    public function news_click_weather($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('news_table')->result();
    }
    public function news_click_world($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('news_table')->result();
    }

    public function sports_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('sports_table')->result();
    }
    public function sports_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('sports_table')->result();
    }

    public function tvserials_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('tvserials_table')->result();
    }
    public function tvserials_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('tvserials_table')->result();
    }

    public function tvshows_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('tvshows_table')->result();
    }
    public function tvshows_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('tvshows_table')->result();
    }

    public function tamil_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('tamil_table')->result();
    }
    public function tamil_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('tamil_table')->result();
    }

    public function hindi_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('hindi_table')->result();
    }
    public function hindi_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('hindi_table')->result();
    }

    public function english_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('english_table')->result();
    }
    public function english_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('english_table')->result();
    }

    public function tamilweb_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('tamil_web_table')->result();
    }
    public function tamilweb_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('tamil_web_table')->result();
    }

    public function kollywood_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('kollywood_table')->result();
    }
    public function kollywood_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('kollywood_table')->result();
    }

    public function bollywood_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('bollywood_table')->result();
    }
    public function bollywood_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('bollywood_table')->result();
    }

    public function hollywood_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('hollywood_table')->result();
    }
    public function hollywood_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('hollywood_table')->result();
    }
    
    public function celebrity_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('celebrity_table')->result();
    }
    public function celebrity_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('celebrity_table')->result();
    }

    public function interviews_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('interviews_table')->result();
    }
    public function interviews_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('interviews_table')->result();
    }

    public function gossips_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('gossips_table')->result();
    }
    public function gossips_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('gossips_table')->result();
    }

    public function videos_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('video_table')->result();
    }
    public function videos_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('video_table')->result();
    }
    public function get_top_banner() {
        $this->load->database();
        $this->db->where('category','top');
        $this->db->limit('1');
        return $this->db->get('banners_table')->result();
    }
    public function get_bottom_banner() {
        $this->load->database();
        $this->db->where('category','bottom');
        $this->db->limit('1');
        return $this->db->get('banners_table')->result();
    }
    public function get_left_banner() {
        $this->load->database();
        $this->db->where('category','left');
        $this->db->limit('1');
        return $this->db->get('banners_table')->result();
    }
    public function get_right_banner() {
        $this->load->database();
        $this->db->where('category','right');
        $this->db->limit('1');
        return $this->db->get('banners_table')->result();
    }
    public function photos_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('photos_table')->result();
    }
    public function photos_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('photos_table')->result();
    }

    public function events_fetch_review() {
        $this->load->database();
        $this->db->order_by('id', "DESC");
		return $this->db->get('events_table')->result();
    }
    public function events_fetch_click($id) {
        $this->load->database();
        $this->db->where('id',$id);
		return $this->db->get('events_table')->result();
    }


}?>
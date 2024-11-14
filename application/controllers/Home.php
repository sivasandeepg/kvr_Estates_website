<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index() {
        $this->data['home_slides'] = $this->common_model->get_multi_images('home_slides', ['status' => 1]);
        $this->data['home_client_logos'] = $this->common_model->get_multi_rows('about_us_logos', ['status' => 1]);
        $this->data['about_us'] = $this->common_model->get_single_row('about_us');
        $this->data['about_us_logos'] = $this->common_model->get_multi_rows('about_us_logos', ['status' => 1]);
        $this->data['testimonials'] = $this->common_model->get_multi_rows('testimonials', ['status' => 1]);
        //$this->data['blog_view'] = $this->common_model->get_multi_rows('blog_view');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');

        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');

        $this->data['upcome_blog_view'] = $this->common_model->get_data_pagination_blog_join([], "created_at", 'DESC', 3, $start);

        $this->db->where('is_featured_property', "Yes");
        $this->data['upcome_projects_view'] = $this->common_model->get_data_pagination_status_join($search_arrr, 'DESC', $limit, $start);

        $this->data['aminities'] = $this->common_model->get_multi_rows('features_and_amenities');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => home]);

        $this->db->where("status", 1);
        $this->data['properties'] = $this->common_model->get_multi_rows('property_type');

        $this->db->select('*');
        $this->db->from('state');
        $this->db->join('city', 'city.state_id = state.id');
        $this->db->where('state.status', 1);
        $this->db->where('city.status', 1);
        $this->data["city_home"] = $this->db->get()->result();

        //--------------------------------------------------------

        $this->db->select('*');
        $this->db->from('state');
        $this->db->join('city', 'city.state_id = state.id');
        $this->db->where('state.status', 1);
        $this->db->where('city.status', 1);
        $this->db->limit(5);
        $this->data["city_home_limit"] = $this->db->get()->result();

        $this->load->view('includes/header', $this->data);
        $this->load->view('index', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}

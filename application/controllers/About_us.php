<?php

class About_us extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index() {
        $this->data['about_us'] = $this->common_model->get_single_row('about_us');
        $this->data['about_us_logos'] = $this->common_model->get_multi_rows('about_us_logos', ['status' => 1]);
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => about_us]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('about', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}

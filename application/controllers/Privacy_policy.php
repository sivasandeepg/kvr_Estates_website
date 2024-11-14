<?php

class Privacy_policy extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index() {

        $this->data['privacy_policy'] = $this->common_model->get_single_row('privacy_policy');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => privacy_policy]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('privacy_policy', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}

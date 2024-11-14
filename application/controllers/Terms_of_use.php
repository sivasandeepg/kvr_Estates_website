<?php

class Terms_of_use extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index() {

        $this->data['terms_of_use'] = $this->common_model->get_single_row('terms_of_use');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => terms_of_use]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('terms_of_use', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}

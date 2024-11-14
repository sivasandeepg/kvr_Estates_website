<?php

class Dashboard extends CI_Controller {

    private $data;

    function __construct() {
        parent::__construct();
        if ($this->site_model->check_for_user_logged() == false) {
            redirect("admin/login");
        }
    }

    function admin_view($design = null) {

        $this->load->view("admin/includes/header", $this->data);
        $this->load->view("admin/" . $design);
        $this->load->view("admin/includes/footer", $this->data);
    }

    function index() {
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->admin_view("dashboard");
    }

}

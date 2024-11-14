<?php

class Resale_corner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('contact_form_model');
        $this->load->library('simple_captcha');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index() {

        if ($this->input->post()) {

            $data = array(
                'name' => trim($this->input->get_post('name')),
                'phone' => trim($this->input->get_post('phone')),
                'project_name' => trim($this->input->get_post('project_name')),
                'phase' => trim($this->input->get_post('phase')),
                'plot_no' => trim($this->input->get_post('plot_no')),
                'location' => trim($this->input->get_post('location')),
                'created_at' => time(),
            );

            $captcha_input = $this->input->post('captcha');
            $captcha_text = $this->simple_captcha->get_captcha_text('resale_corner');

            if ($captcha_input !== $captcha_text) {

                $this->session->set_flashdata('captcha_err', 'Invalid captcha');
                // return redirect($this->agent->referrer());
            } else {

                //$this->load->model('contact_form_model');
                $this->common_model->ins_row('project_enquiry', $data);

                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
                return redirect($this->agent->referrer());
            }
        }


        $this->data['project_name'] = $this->common_model->get_multi_rows('projects');
        $this->data['project_phase'] = $this->common_model->get_multi_rows('project_phase');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => resale_corner]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('resale_corner', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    function captcha_get() {
        $this->simple_captcha->draw_captcha('resale_corner');
        die;
    }

}

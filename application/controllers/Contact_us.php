<?php

class Contact_us extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('simple_captcha');
        $this->load->library('session');
    }

    function index() {


        if (!empty($_POST)) {
            $data = array();
            $data['name'] = trim($this->input->get_post('name'));
            $data['email'] = trim($this->input->get_post('email'));
            $data['phone'] = trim($this->input->get_post('phone'));
            $data['city'] = trim($this->input->get_post('city'));
            $data['type'] = trim($this->input->get_post('type'));
            $data['message'] = trim($this->input->get_post('message'));
            $data['created_at'] = time();

            $captcha_input = $this->input->post('captcha');
            $captcha_text = $this->simple_captcha->get_captcha_text('contact_us');

            if ($captcha_input !== $captcha_text) {
                $this->session->set_flashdata('captcha_err', 'Invalid captcha');
//                return redirect($this->agent->referrer());
            } else {


                $this->load->model('contact_form_model');
                $result = $this->contact_form_model->add($data, 'enquiries');

                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
                return redirect($this->agent->referrer());
            }
        }
        $this->data['contact_us'] = $this->common_model->get_single_row('enquiries');
        $this->data['type'] = $this->common_model->get_multi_rows('property_type');
        $this->data['city'] = $this->common_model->get_multi_rows('city');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => contact_us]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('contact', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    function captcha_get() {
        $this->simple_captcha->draw_captcha('contact_us');
        die;
    }

    function contact_form() {


        if (!empty($_POST)) {
            $data = array();
            $data['name'] = trim($this->input->get_post('name'));
            $data['email'] = trim($this->input->get_post('email'));
            $data['phone'] = trim($this->input->get_post('phone'));
            $data['message'] = trim($this->input->get_post('message'));
            $data['created_at'] = time();

            $captcha_input = $this->input->post('captcha');
            $captcha_text = $this->simple_captcha->get_captcha_text('contact_us');

            if ($captcha_input !== $captcha_text) {
                $this->session->set_flashdata('captcha_err', 'Invalid captcha');
                return redirect($this->agent->referrer());
            } else {


                $this->load->model('contact_form_model');
                $result = $this->contact_form_model->add($data, 'enquiries');

                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
                return redirect($this->agent->referrer());
            }
        } else {

            $this->session->set_flashdata('error', 'Please enter valid details');
            return redirect($this->agent->referrer());
        }
    }

    function subscription_form() {


        if (!empty($_POST)) {
            $data = array();
            $data['email'] = $this->input->get_post('email');
            $email = $this->input->get_post('email');
            $data['created_at'] = time();
            $check_email = $this->email_exists($email);
            if ($check_email) {
                $this->session->set_flashdata('exists', 'You are already subscribed');
                return redirect($this->agent->referrer() . '#newsletter');
            } else {
                $this->load->model('contact_form_model');
                $result = $this->contact_form_model->add($data, 'subscriptions');
                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
                return redirect($this->agent->referrer() . '#newsletter');
            }
        }
    }

    function email_exists($email) {
        $this->db->where('email', $email);
        $data = $this->db->get('subscriptions')->row();
        return $data;
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

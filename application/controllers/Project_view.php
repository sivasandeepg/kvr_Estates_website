<?php

class Project_view extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('simple_captcha');
    }

    function index($slug) {


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
//                return redirect($this->agent->referrer());
            } else {


                $this->load->model('contact_form_model');
                $result = $this->contact_form_model->add($data, 'enquiries');

                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
                return redirect($this->agent->referrer());
            }
        }


        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['project'] = $this->common_model->get_multi_rows('projects', ['slug' => $slug]);

        $this->db->where('p.slug !=', $this->uri->segment(2));
        $this->data['latest_projects'] = $this->common_model->get_data_pagination_status_join([], 'DESC', 4, $start);

        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');

        $this->data['project_view_multy'] = $this->common_model->get_multi_rows('projects', ['slug' => $slug]);
        $this->data['project_view'] = $this->common_model->get_single_row('projects', ['slug' => $slug]);
        $this->db->where('id', $project_id = $this->data['project_view']->id);

        $this->db->set('view_count', $this->data['project_view']->view_count + 1)->where('id', $this->data['project_view']->id)->update('projects');
        if (!empty($this->data['project_view']->aminities)) {
            $this->data['project_view']->features_and_amenities = $this->db->where("id IN (" . $this->data['project_view']->aminities . ")")->get('features_and_amenities')->result();
        }


        $project_id = $this->data['project_view']->id;
        $this->db->where('project_id', $project_id);
        $this->data['project_images'] = $this->db->get('project_images')->result();

        $project_id = $this->data['project_view']->id;
        $this->db->where('project_id', $project_id);
        $this->data['floor_plans'] = $this->db->get('floor_plans')->result();

        $project_id = $this->data['project_view']->id;
        $this->db->where('project_id', $project_id);
        $this->data['floor_plans_single'] = $this->db->get('floor_plans')->row();

        $chage = $this->data['project_view']->property_type_id;
        $this->db->where('id', $chage);
        $latest = $this->db->get('property_type')->row()->id;

        $this->data['latest_projects_list'] = $this->common_model->get_data_pagination_status_join(['property_type_id' => $latest], 'DESC', 3, $start);

        $this->data['project_view']->created_at = ago_timing($this->data['project_view']->created_at) . ' agos';
        $this->load->view('includes/header', $this->data);
        $this->load->view('project_view', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    function get_count($table) {
        if (!empty($table)) {

            $data = $this->db->get($table);
            if ($data->num_rows() > 0) {
                $result = $data->num_rows();
                return $result;
            }
        }
    }

    function captcha_get() {
        $this->simple_captcha->draw_captcha('project_view');
        die;
    }

//    function contact_form() {
//
//
//        if (!empty($_POST)) {
//            $data = array();
//            $data['name'] = $this->input->get_post('name');
//            $data['email'] = $this->input->get_post('email');
//            $data['phone'] = $this->input->get_post('phone');
//            $data['message'] = $this->input->get_post('message');
//            $data['created_at'] = time();
//
//            $captcha_input = $this->input->post('captcha');
//            $captcha_text = $this->simple_captcha->get_captcha_text('project_view');
//
//            if ($captcha_input !== $captcha_text) {
//                $this->session->set_flashdata('captcha_err', 'Invalid captcha');
//                return redirect($this->agent->referrer());
//            } else {
//
//
//                $this->load->model('contact_form_model');
//                $result = $this->contact_form_model->add($data, 'enquiries');
//
//                $this->session->set_flashdata('success', 'Thank you for contacting us.Our team will get back to you shortly');
//                return redirect($this->agent->referrer());
//            }
//        } else {
//
//            $this->session->set_flashdata('error', 'Please enter valid details');
//            return redirect($this->agent->referrer());
//        }
//    }
}

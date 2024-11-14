<?php

class Projects extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index($project_status) {

        if ($project_status !== 'search') {
            $search_arrr = ['p.property_status' => $project_status, 'p.status' => 1];
        } else {
            $search_arrr = ['p.status' => 1];
        }



        $total_results = $this->common_model->get_data_pagination_status_join($search_arrr, 'DESC', $limit, $start, true);
        $limit = $this->input->get_post("limit") ? $this->input->get_post("limit") : 9;
        $_GET['page'] = $this->input->get_post("page");
        $start = $this->input->get_post("page") > 1 ? ($this->input->get_post("page") - 1) * $limit : 0;
        $pagination = my_pagination("projects/" . $project_status, $limit, $total_results, true);
        $pagination['pagination'] = str_replace("&amp;", "&", $pagination['pagination']);
        $cur_page = ($pagination['pagination_helper']->cur_page != 0) ? ($pagination['pagination_helper']->cur_page - 1) : $pagination['pagination_helper']->cur_page;
        $pagination['initial_id'] = (($cur_page) * $pagination['pagination_helper']->per_page) + 1;

        $this->data["pagination"] = $pagination;

        $this->db->select('*');
        $this->db->from('state');
        $this->db->join('city', 'city.state_id = state.id');
        $this->db->where('state.status', 1);
        $this->db->where('city.status', 1);
        $this->data["cities"] = $this->db->get()->result();

        $this->data['projects'] = $this->common_model->get_data_pagination_status_join($search_arrr, 'DESC', $limit, $start);

        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['aminities'] = $this->common_model->get_multi_rows('features_and_amenities');
        $this->db->where("status", 1);
        $this->data['properties'] = $this->common_model->get_multi_rows('property_type');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content');
        $this->data['project_name'] = $project_status;

        $this->load->view('includes/header', $this->data);
        $this->load->view('projects', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    function get_count($table, $status) {
        if (!empty($table)) {
            $this->db->where('property_status', $status);
            $data = $this->db->get($table);
            if ($data->num_rows() > 0) {
                $result = $data->num_rows();
                return $result;
            }
        }
    }

}

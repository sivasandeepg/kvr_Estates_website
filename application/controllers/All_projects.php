<?php

class All_projects extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('pagination');
    }

    function index($project_status) {

        print_r($project_status);
        die;

        $config = array();
        //. peramersValue
        $config["base_url"] = base_url() . "all_projects";
        $config["total_rows"] = $this->get_count('projects', ['property_status' => $project_status, 'status' => 1]);
        $config["per_page"] = 1;
        $config['enable_query_strings'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = $this->input->get('page', 0);
        $this->data["pagination"] = $this->pagination->create_links();

        if (!empty($_GET)) {
            $city = $this->input->get_post('city');
            $property = $this->input->get_post('property');
            if (!empty($property)) {
                $this->db->where("property_type_id", $property);
            }

            if (!empty($city)) {
                $city_str = "";
                foreach ($city as $actor) {
                    $city_str .= $actor . ', ';
                }
                $city_str = rtrim($city_str, ", ");

                $this->db->where('city_id IN (' . $city_str . ')');
            }
        }

//        $project_city_type

        $this->data['projects'] = $this->db->limit($config["per_page"], $page)->get('projects')->result();

        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content');
        $this->data['cities'] = $this->common_model->get_multi_rows('city');

        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['aminities'] = $this->common_model->get_multi_rows('features_and_amenities');
        $this->data['properties'] = $this->common_model->get_multi_rows('property_type');

        $this->load->view('includes/header', $this->data);
        $this->load->view('all_projects', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    function get_count($table, $where = false) {
        if (!empty($table)) {
            if ($where) {
                $this->db->where($where);
            }
            $data = $this->db->get($table);
            if ($data->num_rows() > 0) {
                $result = $data->num_rows();
                return $result;
            }
        }
    }

}

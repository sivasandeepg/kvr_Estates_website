<?php

class Photos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->library('pagination');
    }

    function index() {



        $this->db->where("status", 1);
        $total_results = $this->get_count('gallery_photos');
        $limit = $this->input->get_post("limit") ? $this->input->get_post("limit") : 8;
        $_GET['page'] = $this->input->get_post("page");
        $start = $this->input->get_post("page") > 1 ? ($this->input->get_post("page") - 1) * $limit : 0;
        $pagination = my_pagination("photos", $limit, $total_results, true);
        $pagination['pagination'] = str_replace("&amp;", "&", $pagination['pagination']);
        $cur_page = ($pagination['pagination_helper']->cur_page != 0) ? ($pagination['pagination_helper']->cur_page - 1) : $pagination['pagination_helper']->cur_page;
        $pagination['initial_id'] = (($cur_page) * $pagination['pagination_helper']->per_page) + 1;
        $this->data["pagination"] = $pagination;
        // pagination end
//        $this->db->order_by('id', 'DESC');
//        $this->data['photos'] = $this->db->limit($config["per_page"], $page)->get('gallery_photos')->result();


        $this->db->where("status", 1);
        $this->data['photos'] = $this->common_model->get_data_pagination('gallery_photos', 'id', 'desc', $limit, $start);
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        // $this->data['photos'] = $this->common_model->get_latest('gallery_photos', 'id', 'desc', '1000');

        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => photos]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('photos', $this->data);
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

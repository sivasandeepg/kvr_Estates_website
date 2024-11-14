<?php

class Blog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index() {

        $blog_data = $this->common_model->get_data_pagination_blog_join([], "created_at", 'DESC', $limit, $start, true);
        $total_results = $blog_data;
        // $total_results = $this->get_count('blog_view');
        $limit = $this->input->get_post("limit") ? $this->input->get_post("limit") : 6;
        $_GET['page'] = $this->input->get_post("page");
        $start = $this->input->get_post("page") > 1 ? ($this->input->get_post("page") - 1) * $limit : 0;
        $pagination = my_pagination("blog", $limit, $total_results, true);
        $pagination['pagination'] = str_replace("&amp;", "&", $pagination['pagination']);
        $cur_page = ($pagination['pagination_helper']->cur_page != 0) ? ($pagination['pagination_helper']->cur_page - 1) : $pagination['pagination_helper']->cur_page;
        $pagination['initial_id'] = (($cur_page) * $pagination['pagination_helper']->per_page) + 1;
        $this->data["pagination"] = $pagination;

        // $this->db->order_by("created_at", "DESC");
        $this->data['blog'] = $this->common_model->get_data_pagination_blog_join([], "created_at", 'DESC', $limit, $start);

        $this->data['blog_images'] = $this->common_model->get_multi_rows('blog_images', ['status' => 1]);
        $this->data['property_type'] = $this->common_model->get_multi_rows('property_type');
        $this->data['blog_categories'] = $this->common_model->get_multi_rows('blog_categories', ['status' => 1]);

        $this->data['latest_blogs'] = $this->common_model->get_data_pagination_status_join([], 'DESC', 3, $start);

        // $this->data['blog'] = $this->common_model->get_data_pagination_blog_join([], 'DESC', $limit, $start);

        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['meta_content'] = $this->common_model->get_single_row('meta_content', ['page' => blog]);

        $this->load->view('includes/header', $this->data);
        $this->load->view('blog', $this->data);
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

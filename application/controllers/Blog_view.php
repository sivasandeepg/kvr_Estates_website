<?php

class Blog_view extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    function index($slug) {




        $this->data['blog_view'] = $this->common_model->get_single_row('blog_view', ['slug' => $slug]);
        $this->data['blog_categories'] = $this->common_model->get_multi_rows('blog_categories', ['status' => 1]);
        $this->data['blog_images'] = $this->common_model->get_multi_rows('blog_images');
        $this->data['property_type'] = $this->common_model->get_multi_rows('property_type');
        $this->data['projects'] = $this->common_model->get_multi_rows('projects');
        $this->data['latest_blogs'] = $this->common_model->get_data_pagination_status_join([], 'DESC', 3, $start);

        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');
        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');

        $this->db->select('name');
        $this->db->where('id IN (' . $this->data['blog_view']->property_type . ')');
        $this->data['property'] = $this->db->get('property_type')->result();

        $actor_str = "";
        foreach ($this->data['property'] as $actor) {
            $actor_str .= $actor->name . ', ';
        }
        $actor_str = rtrim($actor_str, ", ");
        $this->data['categories'] = $actor_str;

        $this->data['instagram_images'] = $this->common_model->get_multi_rows('instagram_images');
        $this->data['social_media'] = $this->common_model->get_single_row('social_media');
        $this->data['home_other'] = $this->common_model->get_single_row('home_other');

        $this->load->view('includes/header', $this->data);
        $this->load->view('blog_view', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}

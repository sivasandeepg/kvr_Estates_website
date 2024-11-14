<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Project_status extends CI_Controller {

    private $data;

    function __construct() {
        parent::__construct();
        if ($this->site_model->check_for_user_logged() == false) {
            redirect("admin/login");
        }

        $this->data['add_subject'] = "Add Project";
        $this->data['subject'] = plural($this->data['add_subject']);
        $this->data['primary_table_name'] = "projects";
        $this->data['current_page_link'] = base_url() . "admin/" . strtolower(__CLASS__);
        $this->data['site_settings'] = $this->common_model->get_single_row('site_settings');

        $this->data['primary_uri_segment_name'] = $this->data['primary_table_name'];

        $this->data['column_name_display_as'] = array(
            'city_name' => 'City Name',
            'role_id' => 'Role',
            'time' => 'Date and Time',
            'property_type' => 'Property Type',
            'State_id' => 'pRO',
            'map_location' => 'Google Map Url',
            'property_id' => "Property Id",
        );
        $this->data['hide_columns_in_list_view'] = array("updated_at", 'password', 'salt', 'password',
            'salt', "price",
            'forgot_password_verfication_code',
            'activation_key', 'total_bed_rooms', 'total_baths_rooms', '	total_taps', 'is_parking_available', 'is_garage_available',
            'token', 'email_verified', 'slug', 'total_taps', "view_count", "seo_title", "latitude", "longitude");

        $this->data['hide_columns_in_edit_view'] = array("updated_at", "slug", "view_count", 'total_bed_rooms', 'total_baths_rooms', 'total_taps', 'is_parking_available', 'is_garage_available', "seo_title", "latitude", "price", "longitude");
        $this->data['hide_columns_in_add_view'] = array("slug", "view_count", "seo_title", 'total_bed_rooms', 'total_baths_rooms', 'total_taps', 'is_parking_available', 'is_garage_available', "latitude", "longitude", "price");
        $this->data['image_fields'] = array('image', 'know_more_image', 'project_youtube_thumb');
        $this->data['email_fields'] = array('username', 'email');

        $this->data['action_buttons'] = array(
            "delete_action" => true,
            "edit_action" => true,
            "add_action" => true,
            "view_action" => false
        );

        $this->data['button_size'] = "xs";
        $this->data['editor_type'] = "full";

        $this->data['unset_all_actions'] = false;

        $this->data['password_fields'] = array("password");
        $this->data['readonly_fields'] = array();

        $this->data['relation_fields'] = array(
            'property_type_id' => array('table_name' => 'property_type', 'display_column_name' => 'name', "condition" => array("")),
            'aminities' => array('table_name' => 'features_and_amenities', 'display_column_name' => 'name', "condition" => array("")),
            'phase' => array('table_name' => 'project_phase', 'display_column_name' => 'phase', "condition" => array("")),
        );
        $this->data['multiple_selection_of_options'] = array("aminities");

        $this->data['column_name_display_as'] = array('role_id' => 'User Role', 'time' => 'Date and Time', 'State_id' => 'pro', 'property_type' => 'Property Type', 'property_id' => 'Property Id', 'map_location' => 'Google Map Url');

        $this->data['unique_fileds'] = array("title", "property_id");

        $this->data['signle_file_browse_fileds'] = array('brocher_file');

        $this->data["image_columns_properties"] = array(
            "image" => array("max_size" => "10000", //in kb format only
                "accepted_file_formats" => array("png", "jpeg", "jpg", "gif", "pdf"))
        );

        $this->data["extra_jquery_validation"] = array(
            "name" => array(
                array("rule" => "lettersOnly", "rule_value" => "true")
            ),
            "city_id" => array(
                array("rule" => "lettersOnly", "rule_value" => "true")
            )
        );

        $this->data['add_action_buttons'] = array();

        $this->data["generate_random_key_fields"] = array();
        $this->data["fileds_info"] = $this->curd_model->get_fields($this->data['primary_table_name']);

        foreach ($this->data["fileds_info"] as $item) {
            if (strpos($item->Field, "_id")) {
                $db_table_name = substr($item->Field, 0, -3);

                $this->data['column_name_display_as'][$item->Field] = ucfirst(singular($db_table_name));

                if (!$this->db->table_exists($db_table_name)) {
                    continue;
                }
                $db_columns = $this->db->query("DESCRIBE $db_table_name")->result();
                $display_column_name = [];
                foreach ($db_columns as $db_filed) {
                    if ($db_filed->Field == "name") {
                        $display_column_name[] = $db_filed->Field;
                    }
                }

                $this->data['relation_fields'][$item->Field] = array('table_name' => $db_table_name, 'display_column_name' => implode(",", $display_column_name), "condition" => array(""));
            }
        }


        $this->data['ajax_base_relation_result'] = array(
            'city_id' => array("parent_field_name" => 'state_id', "filter_from_table" => "city", "parent_table_name" => "state", 'display_column_name' => 'name'),
        );
        if ($this->input->is_ajax_request()) {
            if ($this->input->get_post("type") == "child_data") {
                $this->db->where($this->input->get_post("field_name"), $this->input->get_post($this->input->get_post("field_name")));
                $this->db->where("status", 1);

                $json_result = $this->db->get($this->input->get_post("db_table_name"))->result();
                //echo $this->db->last_query();
                foreach ($json_result as $item) {
                    $this->db->select($this->input->get_post("db_table_name") . "_id");
                    if ($item->id == $this->db->get_where($this->data["primary_table_name"], ["id" => $this->input->get_post("selected_id")])->row()->{$this->input->get_post("db_table_name") . "_id"}) {
                        $item->is_selected = true;
                    }
                }
                echo json_encode($json_result);
            } else if (isset($_POST['existed_value'])) {
                $keys = array_keys($_POST);
                if ($this->db->get_where($this->data['primary_table_name'], [$keys[0] => $_REQUEST[$keys[0]], $keys[0] . "!=" => $_REQUEST['existed_value']])->num_rows()) {
                    echo "false";
                } else {
                    echo "true";
                }
            } else {
                $keys = array_keys($_POST);
                if ($this->db->get_where($this->data['primary_table_name'], [$keys[0] => $_REQUEST[$keys[0]]])->num_rows()) {
                    echo "false";
                } else {
                    echo "true";
                }
            }
            exit;
        }



        if (!empty($_POST)) {


            if (isset($_POST['submit'])) {

                if ($_POST['submit'] == "insert") {
                    unset($_POST['submit']);
                    //print_r($_POST);

                    foreach ($this->data['generate_random_key_fields'] as $key_item) {
                        echo $_POST[$key_item] = $this->curd_model->generate_random_string_code($this->data['primary_table_name'], $key_item);
                    }


                    $keys = array_keys($_POST);

                    $obj = new Requests();
                    $obj->is_password_update_required = FALSE;
                    $obj->tableName = $this->data['primary_table_name'];
                    $obj->fillable = $keys;

                    foreach ($this->data['image_fields'] as $item) {
                        if (isset($_FILES[$item . '__i']['name'])) {
                            if ($_FILES[$item . '__i']['name'] != '') {
                                array_push($obj->fillable, $item . '__i');
                            }
                        }
                    }
                    foreach ($this->data['signle_file_browse_fileds'] as $item) {
                        if (isset($FILES[$item . '__p']['name'])) {
                            if ($FILES[$item . '__p']['name'] != '') {
                                array_push($obj->fillable, $item . '__p');
                            }
                        }
                    }

                    array_push($obj->fillable, 'slug');                       // step1  array push to slug  input field
                    $_POST['slug'] = make_seo_name($_POST['title']);
                    if ($obj->posted_values_dynamic_save()) {
                        redirect($this->data['current_page_link'] . "?msg=add");
                        //any extra code such as email, sms functionality code
                        //js_redirect($back_button_nav."?msg=add");
                    }
                } else if ($_POST['submit'] == "update") {

                    unset($_POST['submit']);

                    $obj = new Requests();

                    $id = $_POST['id'];
                    if (isset($_POST['password'])) {
                        if ($_POST['password'] != '') {
                            $password = $_POST['password'];
                            unset($_POST['password']);
                            $obj->is_password_update_required = FALSE;
                        }
                    }

                    $keys = array_keys($_POST);

                    $obj->tableName = $this->data['primary_table_name'];
                    $obj->whereCnd = array("id" => $id);
                    $obj->fillable = $keys;
                    foreach ($this->data['image_fields'] as $item) {
                        if (isset($_FILES[$item . '__i']['name'])) {
                            if ($_FILES[$item . '__i']['name'] != '') {
                                array_push($obj->fillable, $item . '__i');
                            }
                        }
                    }
                    foreach ($this->data['signle_file_browse_fileds'] as $item) {
                        if (isset($_FILES[$item . '__p']['name'])) {
                            if ($_FILES[$item . '__p']['name'] != '') {
                                array_push($obj->fillable, $item . '__p');
                            }
                        }
                    }

                    if (isset($password)) {
                        $_POST['password'] = $password;
                        array_push($obj->fillable, 'password');
                    }

                    array_push($obj->fillable, 'slug');
                    $_POST['slug'] = make_seo_name($_POST['title']);

                    if ($obj->posted_values_dynamic_update()) {
                        //any extra code such as email, sms functionality code
                        redirect($this->data['current_page_link'] . "?msg=update");
                    }
                }
            }
        }
    }

    function admin_view($design = null) {
        $this->load->view("admin/includes/header", $this->data);
        $this->load->view("admin/curd_files/" . $design);
        $this->load->view("admin/includes/footer", $this->data);
    }

    function index() {
        $this->db->order_by('id', 'DESC');
        $this->data["list_items"] = $this->curd_model->get_all_data_from_table($this->data['primary_table_name']);
        foreach ($this->data["list_items"] as $row) {
            $row->description = substr($row->description, 0, 60) . '......';
        }
        $this->admin_view("list_view_kvr");
    }

    function add() {
        if ($this->data["action_buttons"]['add_action'] == false) {
            die("Access Deined for add operation");
        }
        $this->admin_view("add_view");
    }

    function edit($item_primary_key) {
        if ($this->data["action_buttons"]['edit_action'] == false) {
            die("Access Deined for edit operation");
        }
        $this->data['edit_item_row'] = $this->curd_model->get_row_from_pk($this->data['primary_table_name'], $item_primary_key);
        $this->admin_view("edit_view");
    }

    function delete($item_primary_key) {
        if ($this->data["action_buttons"]['delete_action'] == true) {
            $this->db->where("id", $item_primary_key);
            $this->db->delete($this->data['primary_table_name']);

            redirect($this->data['current_page_link'] . "?msg=delete");
        } else {
            redirect($this->data['current_page_link']);
        }
    }

    function toggle_status($item_primary_key) {
        $current_status = $this->curd_model->get_status($this->data['primary_table_name'], $item_primary_key);
        if ($current_status != FALSE) {
            $this->curd_model->toggle_status($this->data['primary_table_name'], $item_primary_key, $current_status);
        }
        redirect($this->data['current_page_link'] . "?msg=update");
    }

}

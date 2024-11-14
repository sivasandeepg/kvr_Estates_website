<?php

header('Content-type: application/json');

class LanguagesApi extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->customers_login_model->get_logged_customer_id();
    }

    function index() {

        $this->db->select("id,name,symbol,prefix");
        $this->db->where("status", 1);
        $data = $this->db->get("languages")->result();

        $arr = array('err_code' => "valid", "message" => "All Languages", "data" => $data);

        echo json_encode($arr);
    }

    // User langeuage update here
    function update_language() {
        $user_id = $this->customers_login_model->get_logged_customer_id();
        $language_id = $this->input->get_post('language_id');
        $this->db->set(['language_id' => $language_id]);
        $data = $this->db->where('id', $user_id)->update("customers");
        if ($this->db->affected_rows() > 0) {
            $arr = array('err_code' => "valid", "message" => "Language Change Successfully");
        } else {
            $arr = array('err_code' => "invalid", "message" => "Language Not Updated ", "data" => $data);
        }

        echo json_encode($arr);
    }

    // Adding New languae 
    function add_language_to_db() {
        $lang_prefix = $this->input->get_post('lang_prefix');
        $action_type = $this->input->get_post('action_type');
        $language_name = $this->input->get_post('language_name');
//        validation
        if (empty($lang_prefix)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Language Prefix Required."]);
            die;
        }
        if (empty($action_type)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Action Type Required."]);
            die;
        }
        if ($action_type == 'add') {
            $type_of_action = ' ADD ';
        } else if ($action_type == 'drop') {
            $type_of_action = ' DROP ';
        } else {
            echo json_encode(['error_code' => "invalid", 'message' => "Sorry..! Not Allowed"]);
            die;
        }
//        Table data require to add fields
        $table_data = array(
            array(
                "table" => "test",
                "fields" => array(
                    array('field_name' => 'name', 'type' => 'varchar(100)'),
                    array('field_name' => 'short_description', 'type' => 'TEXT'),
                    array('field_name' => 'long_description', 'type' => 'TEXT'),
                    array('field_name' => 'seo_title', 'type' => 'varchar(100)'),
                    array('field_name' => 'seo_description', 'type' => 'TEXT'),
                    array('field_name' => 'seo_keywords', 'type' => 'TEXT'),
                )
        );
        foreach ($table_data as $item) {
//            print_r($item['table']);
            $table = $item['table'];
            $add_string = "";
            for ($i = 0; $i < count($item['fields']); $i++) {
//                echo($item['fields'][$i]['field_name'] . ' - ');
                if ($action_type == 'add') {
                    $add_string .= $type_of_action . $item['fields'][$i]['field_name'] . $lang_prefix . ' ' . $item['fields'][$i]['type'] . ' CHARACTER SET utf8 COLLATE utf8_unicode_ci  NULL  COMMENT "New ' . $language_name . ' Language Field" AFTER  ' . $item['fields'][$i]['field_name'] . ' , ';
                } else {
                    $add_string .= $type_of_action . $item['fields'][$i]['field_name'] . $lang_prefix . ' , ';
                }
            }
            $add_string = rtrim($add_string, ', ');
//            echo ' ALTER TABLE ' . $table . ' ' . $add_string . '; ';
            $this->db->query(' ALTER TABLE ' . $table . ' ' . $add_string . '; ');
        }
        echo json_encode(['error_code' => "Success", 'message' => ucwords($action_type) . " Successfully "]);
    }

    function add_single_table_lang() {
        $lang_prefix = $this->input->get_post('lang_prefix');
        $action_type = $this->input->get_post('action_type');
        $table_name = $this->input->get_post('table_name');
        $language_name = $this->input->get_post('language_name');
        $fields_array = $this->input->get_post('fields_array');
//        validation
        if (empty($lang_prefix)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Language Prefix Required."]);
            die;
        }
        if (empty($action_type)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Action Type Required."]);
            die;
        }
        if (empty($table_name)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Table Name Required."]);
            die;
        }
        if (empty($fields_array)) {
            echo json_encode(['error_code' => "invalid", 'message' => "Fields Array Required.", 'example' => array(
                    array('field_name' => 'name', 'type' => 'varchar(100)'),
                    array('field_name' => 'description', 'type' => 'TEXT'),
            )]);
            die;
        }

        if ($action_type == 'add') {
            $type_of_action = ' ADD ';
        } else {
            $type_of_action = ' DROP ';
        }

//        Table data require to add fields
        $table_data = array(
            array(
                "table" => $table_name,
                "fields" => json_decode($fields_array),
            ),
        );
//        print_r($table_data);
//        die;
        foreach ($table_data as $item) {
//            print_r($item['table']);
            $table = $item['table'];
            $add_string = "";
            for ($i = 0; $i < count($item['fields']); $i++) {
//                print_r($item['fields'][$i]->field_name);
//                echo $i . '- ' . $item['fields'][$i] . '-';
//                echo($item['fields'][$i]['field_name'] . ' - ');
                if ($action_type == 'add') {
                    $add_string .= $type_of_action . $item['fields'][$i]->field_name . $lang_prefix . ' ' . $item['fields'][$i]->type . ' CHARACTER SET utf8 COLLATE utf8_unicode_ci  NULL  COMMENT "New ' . $language_name . ' Language Field" AFTER  ' . $item['fields'][$i]->field_name . ' , ';
                } else {
                    $add_string .= $type_of_action . $item['fields'][$i]->field_name . $lang_prefix . ' , ';
                }
            }
            $add_string = rtrim($add_string, ', ');
//            echo ' ALTER TABLE ' . $table . ' ' . $add_string . '; ';
            $this->db->query(' ALTER TABLE ' . $table . ' ' . $add_string . '; ');
        }
        echo json_encode(['error_code' => "Success", 'message' => ucwords($action_type) . " Successfully "]);
    }

}

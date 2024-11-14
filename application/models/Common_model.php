<?php

class Common_model extends CI_Model {

    function get_single_row($table, $where = false, $selected_fields = "*") {
        if ($where) {
            $this->db->where($where);
        }
        $row = $this->db->select($selected_fields)->get($table)->row();
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function get_multi_rows($table, $where = false, $selected_fields = "*") {
        if ($where) {
            $this->db->where($where);
        }
        $row = $this->db->select($selected_fields)->get($table)->result();
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function get_multi_rows_sum($table, $where = false, $selected_fields = "*") {
        if ($where) {
            $this->db->where($where);
        }
        $row = $this->db->select_sum($selected_fields)->get($table)->result();
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function ins_row($table, $data) {
        if ($data) {
            $this->db->set($data);
        }
        $row = $this->db->insert($table);
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    function update_row($table, $data, $where = false) {
        // function update_row($table,$data){
        if ($where) {
            $this->db->where($where);
        }
        $row = $this->db->set($data)->update($table);
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function delete_row($table, $where) {
        $this->db->where($where);
        $row = $this->db->delete($table);
        // echo $this->db->last_query();
        // die;
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function get_data_pagination($table, $column_name = false, $order_by = false, $limit = false, $start = false) {

        if (!empty($table)) {
            $this->db->limit($limit, $start);
            $this->db->order_by($column_name, $order_by);
            $data = $this->db->get($table)->result();
            return $data;
        }
    }

    function get_data_pagination_status($table, $where = false, $column_name = false, $order_by = false, $limit = false, $start = false) {
        if ($where) {
            $this->db->where($where);
        }

        if (!empty($table)) {
//            $this->db->where($where);
            $this->db->limit($limit, $start);
            $this->db->order_by($column_name, $order_by);
            $data = $this->db->get($table)->result();
            return $data;
        }
    }

    function get_data_pagination_status_join($where = false, $order_by = false, $limit = false, $start = false, $is_total_count = false) {
        $table = 'projects';
        if ($where) {
            $this->db->where($where);
        }

        if (!empty($table)) {

            if (!empty($_GET)) {
                $city = $this->input->get_post('city');
                $property = $this->input->get_post('property');
                if (!empty($property)) {
                    $this->db->where("p.property_type_id", $property);
                }
                if (!empty($city)) {
                    $city_str = implode(',', $city);
                    $this->db->where('p.city_id IN (' . $city_str . ')');
                }
            }
            $this->db->select('c.status as city_status,s.status as state_status,p.*');
            $this->db->from('projects p');
            $this->db->join('state s', 'p.state_id=s.id', 'left');
            $this->db->join('city c', 'p.city_id=c.id', 'left');
            $this->db->where(['s.status' => 1, 'c.status' => 1]);
            if ($limit) {
                $this->db->limit($limit, $start);
            }

            $this->db->order_by('p.id', $order_by);
            if ($is_total_count) {
                $data = $this->db->get()->num_rows();
            } else {
                $data = $this->db->get()->result();
            }

//            echo $this->db->last_query();
//            die;
            return $data;
        }
    }

    function get_data_pagination_blog_join($where = false, $column_name = false, $order_by = false, $limit = false, $start = false, $is_total_count = false) {
        $table = 'blog_view';
        if ($where) {
            $this->db->where($where);
        }

        if (!empty($_GET)) {
            $blog_category = $this->input->get_post('blog_category');
            if (!empty($blog_category)) {
                $this->db->where("b.blog_categories_id", $blog_category);
            }
        }

        if (!empty($table)) {

            $this->db->select('b.*');
            $this->db->from('blog_view b');
            $this->db->join('blog_categories bc', ' bc.id = b.blog_categories_id ');
            $this->db->where(['b.status' => 1, 'bc.status' => 1]);

            if ($limit) {
                $this->db->limit($limit, $start);
            }

            $this->db->order_by("created_at", "DESC");
            $this->db->order_by('b.blog_categories_id', $order_by);
            if ($is_total_count) {
                $data = $this->db->get()->num_rows();
            } else {
                $data = $this->db->get()->result();
            }

//            echo $this->db->last_query();
//            die;
            return $data;
        }
    }

    function get_latest($table, $column_name = false, $order_by = false, $limit = false) {
        if (!empty($table)) {
            $this->db->limit($limit);
            $this->db->order_by($column_name, $order_by);
            $data = $this->db->get($table)->result();
            return $data;
        }
    }

    function get_latest_view($table, $where = false, $column_name = false, $order_by = false, $limit = false) {
        if ($where) {
            $this->db->where($where);
        }
        if (!empty($table)) {
            $this->db->limit($limit);
            $this->db->order_by($column_name, $order_by);
            $data = $this->db->get($table)->result();
            return $data;
        }
    }

    function get_multi_images($table, $where = false, $selected_fields = "*", $order_by = "desc") {
        if ($where) {
            $this->db->where($where);
        }
        if ($order_by) {
            $this->db->order_by('id', $order_by);
        }
        $row = $this->db->select($selected_fields)->get($table)->result();

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    function get_latest_projects($table, $where = false, $column_name = false, $order_by = false, $limit = false) {
        if ($where) {
            $this->db->where($where);
        }

        if (!empty($table)) {
            $this->db->limit($limit);
            $this->db->order_by($column_name, $order_by);
            $data = $this->db->get($table)->result();
            return $data;
        }
    }

//    public function projects($project_status, $limit, $offset) {
//
//        //  return $this->db->get('projects')->result();
//        $this->db->select('*');
//        $this->db->from('projects');
//        $this->db->where('property_status', $project_status);
//        $this->db->limit($limit, $offset);
//        $info = $this->db->get();
//        return $info->result();
//    }
}

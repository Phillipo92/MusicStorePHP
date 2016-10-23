<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class REST_Model extends CI_Model {

    public $table_name = '';
    public $view_name = '';
    public $primary_key = '';

    function __construct() {
        parent::__construct();
    }

    public function get($data = false) {
        $this->db->where($data);
        return $this->db->get($this->view_name)->result_array();
    }

    public function save($data, $id = FALSE) {
        if ($id == FALSE) {
            $this->db->set($data)->insert($this->table_name);
        } else {
            $this->db->set($data)->where($this->primary_key, $id)->update($this->table_name);
        }
    }

    public function delete($id) {
        $this->db->where($this->primary_key, $id)->limit(1)->delete($this->table_name);
    }

}

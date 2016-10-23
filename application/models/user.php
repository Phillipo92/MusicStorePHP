<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class user extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'user';
        $this->view_name = 'view_user';
        $this->primary_key = 'iduser';
    }

}

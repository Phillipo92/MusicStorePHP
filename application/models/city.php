<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class city extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'city';
        $this->view_name = 'view_city';
        $this->primary_key = 'idcity';
    }

}

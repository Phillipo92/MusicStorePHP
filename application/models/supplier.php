<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class supplier extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'supplier';
        $this->view_name = 'view_supplier';
        $this->primary_key = 'idsupplier';
    }

}

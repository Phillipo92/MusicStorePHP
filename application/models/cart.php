<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class cart extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'cart';
        $this->view_name = 'view_cart';
        $this->primary_key = 'idcart';
    }

}

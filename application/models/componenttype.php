<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class componenttype extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'componenttype';
        $this->view_name = 'view_componenttype';
        $this->primary_key = 'idcomponenttype';
    }

}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Model.php';

class component extends REST_Model {

    function __construct() {
        parent::__construct();
        $this->table_name = 'component';
        $this->view_name = 'view_component';
        $this->primary_key = 'idcomponent';
    }

}

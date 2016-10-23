<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('curl');
    }

    function index() {
        $this->componentOpenList();
    }

    function load_page($name, $data_for_view = false) {
        $data_for_view['content'] = $name;
        $this->load->view('layout/page', $data_for_view);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function login() {
        $this->load_page('login');
    }

    function loginExecute() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->curl->create(base_url() . "server/rest/model/user/email/$email/password/$password");
        $user_list = json_decode($this->curl->execute(), true);
        if ($user_list) {
            $this->session->set_userdata($user_list[0]);
            redirect(base_url());
        } else {
            $this->load_page('login', $data_for_view);
        }
    }

    function componenttypeOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/componenttype/idcomponenttype/$id");
        $componenttype_list = json_decode($this->curl->execute(), true);
        $data_for_view['componenttype'] = $componenttype_list[0];
        $this->load_page('componenttype_view', $data_for_view);
    }

    function componenttypeLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/componenttype/idcomponenttype/$id/");
            $componenttype_list = json_decode($this->curl->execute(), true);
            $data_for_view['componenttype'] = $componenttype_list[0];
        }
        $this->load_page('componenttype_edit', $data_for_view);
    }

    function componenttypeSaveModel($id = false) {
        $data_for_send['model'] = 'componenttype';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/componenttypeOpenTable");
    }

    function componenttypeDeleteModel($id) {
        $data_for_send['model'] = 'componenttype';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/componenttypeOpenTable");
    }

    function componenttypeOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/componenttype");
        $data_for_view['componenttype_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('componenttype_table', $data_for_view);
    }

    function componenttypeRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/componenttype");
        $data_for_view['componenttype_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('componenttype_table', $data_for_view);
    }

    function componenttypeOpenList() {
        $this->curl->create(base_url() . "server/rest/model/componenttype");
        $data_for_view['componenttype_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('componenttype_list', $data_for_view);
    }
    
    function cityOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/city/idcity/$id");
        $city_list = json_decode($this->curl->execute(), true);
        $data_for_view['city'] = $city_list[0];
        $this->load_page('city_view', $data_for_view);
    }

    function cityLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/city/idcity/$id/");
            $city_list = json_decode($this->curl->execute(), true);
            $data_for_view['city'] = $city_list[0];
        }
        $this->load_page('city_edit', $data_for_view);
    }

    function citySaveModel($id = false) {
        $data_for_send['model'] = 'city';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/cityOpenTable");
    }

    function cityDeleteModel($id) {
        $data_for_send['model'] = 'city';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/cityOpenTable");
    }

    function cityOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/city");
        $data_for_view['city_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('city_table', $data_for_view);
    }

    function cityRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/city");
        $data_for_view['city_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('city_table', $data_for_view);
    }

    function cityOpenList() {
        $this->curl->create(base_url() . "server/rest/model/city");
        $data_for_view['city_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('city_list', $data_for_view);
    }

    function supplierOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/supplier/idsupplier/$id");
        $supplier_list = json_decode($this->curl->execute(), true);
        $data_for_view['supplier'] = $supplier_list[0];
        $this->load_page('supplier_view', $data_for_view);
    }

    function supplierLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/supplier/idsupplier/$id/");
            $supplier_list = json_decode($this->curl->execute(), true);
            $data_for_view['supplier'] = $supplier_list[0];
        }
        $this->load_page('supplier_edit', $data_for_view);
    }

    function supplierSaveModel($id = false) {
        $data_for_send['model'] = 'supplier';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/supplierOpenTable");
    }

    function supplierDeleteModel($id) {
        $data_for_send['model'] = 'supplier';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/supplierOpenTable");
    }

    function supplierOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/supplier");
        $data_for_view['supplier_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('supplier_table', $data_for_view);
    }

    function supplierRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/supplier");
        $data_for_view['supplier_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('supplier_table', $data_for_view);
    }

    function supplierOpenList() {
        $this->curl->create(base_url() . "server/rest/model/supplier");
        $data_for_view['supplier_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('supplier_list', $data_for_view);
    }

    function componentOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/component/idcomponent/$id");
        $component_list = json_decode($this->curl->execute(), true);
        $data_for_view['component'] = $component_list[0];
        $this->load_page('component_view', $data_for_view);
    }

    function componentLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/component/idcomponent/$id/");
            $component_list = json_decode($this->curl->execute(), true);
            $data_for_view['component'] = $component_list[0];
        }
        $this->curl->create(base_url() . "server/rest/model/componenttype");
        $data_for_view['componenttype_list'] = json_decode($this->curl->execute(), true);
        $this->curl->create(base_url() . "server/rest/model/supplier");
        $data_for_view['supplier_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('component_edit', $data_for_view);
    }

    function componentSaveModel($id = false) {
        $data_for_send['model'] = 'component';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/componentOpenTable");
    }

    function componentDeleteModel($id) {
        $data_for_send['model'] = 'component';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/componentOpenTable");
    }

    function componentOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/component");
        $data_for_view['component_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('component_table', $data_for_view);
    }

    function componentRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/component");
        $data_for_view['component_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('component_table', $data_for_view);
    }

    function componentOpenList($id = 0) {
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/component/idcomponenttype/$id");
        } else {
            $this->curl->create(base_url() . "server/rest/model/component");
        }
        $data_for_view['component_list'] = json_decode($this->curl->execute(), true);
        $this->curl->create(base_url() . "server/rest/model/componenttype");
        $data_for_view['componenttype_list'] = json_decode($this->curl->execute(), true);
        $data_for_view['idcomponenttype'] = $id;
        $this->load_page('component_list', $data_for_view);
    }

    function cartOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/cart/idcart/$id");
        $cart_list = json_decode($this->curl->execute(), true);
        $data_for_view['cart'] = $cart_list[0];
        $this->load_page('cart_view', $data_for_view);
    }

    function cartLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/cart/idcart/$id/");
            $cart_list = json_decode($this->curl->execute(), true);
            $data_for_view['cart'] = $cart_list[0];
        }
        $this->curl->create(base_url() . "server/rest/model/user");
        $data_for_view['user_list'] = json_decode($this->curl->execute(), true);
        $this->curl->create(base_url() . "server/rest/model/component");
        $data_for_view['component_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('cart_edit', $data_for_view);
    }

    function cartSaveModel($id = false) {
        $data_for_send['model'] = 'cart';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        $iduser = $this->session->userdata('iduser');
        redirect(base_url() . "client/userOpenModel/$iduser");
    }

    function cartDeleteModel($id) {
        $data_for_send['model'] = 'cart';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        $iduser = $this->session->userdata('iduser');
        redirect(base_url() . "client/userOpenModel/$iduser");
    }

    function cartOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/cart");
        $data_for_view['cart_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('cart_table', $data_for_view);
    }

    function cartRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/cart");
        $data_for_view['cart_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('cart_table', $data_for_view);
    }

    function cartOpenList() {
        $this->curl->create(base_url() . "server/rest/model/cart");
        $data_for_view['cart_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('cart_list', $data_for_view);
    }

    function userOpenModel($id) {
        $this->curl->create(base_url() . "server/rest/model/user/iduser/$id");
        $user_list = json_decode($this->curl->execute(), true);
        $data_for_view['user'] = $user_list[0];
        $this->curl->create(base_url() . "server/rest/model/cart/iduser/$id");
        $data_for_view['cart_list'] = json_decode($this->curl->execute(), true);
        $this->curl->create(base_url() . "server/rest/model/city");
        $data_for_view['city_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('user_view', $data_for_view);
    }

    function userLoadModel($id = false) {
        $data_for_view = array();
        if ($id) {
            $this->curl->create(base_url() . "server/rest/model/user/iduser/$id/");
            $user_list = json_decode($this->curl->execute(), true);
            $data_for_view['user'] = $user_list[0];
        }
        $this->curl->create(base_url() . "server/rest/model/city");
        $data_for_view['city_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('user_edit', $data_for_view);
    }

    function userSaveModel($id = false) {
        $data_for_send['model'] = 'user';
        $data_for_send['method'] = 'save';
        $data_for_send['data'] = $this->input->post();
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        
        $data = $this->session->userdata('iduser');
        
        if ($data) {
            redirect(base_url() . "client/userOpenModel/$data");
        }
        
        redirect(base_url());
    }

    function userDeleteModel($id) {
        $data_for_send['model'] = 'user';
        $data_for_send['method'] = 'delete';
        $data_for_send['id'] = $id;
        $this->curl->create(base_url() . "server/rest");
        $this->curl->post($data_for_send);
        $received_data = json_decode($this->curl->execute(), true);
        redirect(base_url() . "client/userOpenTable");
    }

    function userOpenTable() {
        $this->curl->create(base_url() . "server/rest/model/user");
        $data_for_view['user_table'] = json_decode($this->curl->execute(), true);
        $this->load_page('user_table', $data_for_view);
    }

    function userRefreshTable() {
        $this->curl->create(base_url() . "server/rest/model/user");
        $data_for_view['user_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('user_table', $data_for_view);
    }
    
    function component_list_refresh() {
        $this->curl->create(base_url() . "server/rest/model/component");
        $data_for_view['component_table'] = json_decode($this->curl->execute(), true);
        $this->load->view('component_table', $data_for_view);
    }

    function userOpenList() {
        $this->curl->create(base_url() . "server/rest/model/user");
        $data_for_view['user_list'] = json_decode($this->curl->execute(), true);
        $this->load_page('user_list', $data_for_view);
    }

}

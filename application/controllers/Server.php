<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Server extends REST_Controller {

    function rest_get() { 
        $request = $this->get();
        $model = $request['model'];
        unset($request['model'], $request['format']);
        $this->load->model($model);
        $response = $this->$model->get($request);
        if ($response) {
            $this->response($response, 200);
        } else {
            $this->response('error', 404);
        }
    }

    function rest_post() {
        $request = $this->post();
        $model = $request['model'];
        $method = $request['method'];
        $data = $request['data'];
        $id = $request['id'];
        $this->load->model($model);
        if ($method == 'save') {
            $response = $this->$model->save($data, $id);
        } else if ($method == 'delete') {
            $response = $this->$model->delete($id);
        }
        if ($response) {
            $this->response($response, 200);
        } else {
            $this->response('error', 404);
        }
    }

}

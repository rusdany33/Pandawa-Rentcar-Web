<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Test_model $test_model
 */
class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('test_model');
    }

    public function index() {
        $data = $this->test_model->get_data();
        print_r($data);
    }
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_data() {
        $query = $this->db->query("SELECT * FROM KARYAWAN");
        return $query->result_array();
    }
}

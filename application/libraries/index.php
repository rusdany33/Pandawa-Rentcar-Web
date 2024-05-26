class Test_model extends CI_Model {

public function __construct() {
    $this->load->database();
}

public function get_data() {
    $query = $this->db->query("SELECT * FROM your_table");
    return $query->result_array();
}
}
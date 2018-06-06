<?php
class News_model extends CI_Model {
	public function __construct() {
$this->load->database();
}
}
public function get_reviews($id) {
if($id != FALSE) {
$query = $this->db->get_where('reviews', array('id' => $id));
return $query->row_array();
}
else {
return FALSE;
}
}
?>
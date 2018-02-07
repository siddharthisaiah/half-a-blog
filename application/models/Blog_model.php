<?php
date_default_timezone_set('Asia/Kolkata');


class Blog_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_titles() {
		// get all articles from blogs not just titles
		$query = $this->db->get('blog');
		return $query->result_array();
	}

	public function insert_article() {
		$this->load->helper('url');

		$current_date = date("Y-m-d");

		$data = array('title' => $this->input->post('title'), 
					  'text' => $this->input->post('content'),
					   'date' => $current_date);

		return $this->db->insert('blog', $data);
	}

}

?>
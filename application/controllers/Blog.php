<?php

class Blog extends CI_Controller {

	public function __construct() {
		parent ::__construct();
		$this->load->model('blog_model');
		$this->load->helper('url_helper');
	}
	
	public function index() {

		// get a chuck norris joke from "https://api.icndb.com/jokes/random"
		$joke_json = file_get_contents("https://api.icndb.com/jokes/random");
		$joke_obj = json_decode($joke_json);
		$data['joke'] = $joke_obj->value->joke;

		$this->load->view('blog/header');
		$this->load->view('blog/index', $data);
		$this->load->view('blog/footer');
	}

	public function articles() {

		// get a list of all articles from db
		$data['blog'] = $this->blog_model->get_titles();

		$this->load->view('blog/header');
		$this->load->view('blog/articles', $data);
		$this->load->view('blog/footer');
	}

	public function newarticle() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('blog/header');
			$this->load->view('blog/newarticle');
			$this->load->view('blog/footer');
		} else {
			$this->blog_model->insert_article();
			$this->articles();
		}
		
	}

}

?>
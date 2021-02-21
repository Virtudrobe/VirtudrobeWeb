<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('products_model');
			$this->load->helper('url_helper');
	}

    public function index()
	{
		$data['products'] = $this->products_model->get_products_random(4);
		$data['trends'] = $this->products_model->get_products_random(3);
		$data['recommends'] = $this->products_model->get_products_random(4);

		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}
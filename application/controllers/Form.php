<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model('user_model');
		//show data
		$data['query'] = $this->user_model->get_users();
		$this->load->view('accueil', $data);

	}

	public function add_user()
	{
		//Insert
		$this->load->model('user_model');
		$this->user_model->insert_users();

	}

	public function del_user()
	{
		//delete data
		$this->load->model('user_model');
		$this->user_model->delete_users();

	}

}

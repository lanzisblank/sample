<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	
public function __construct() {
	parent::__construct();
	
	
}
	public function index()
	{
		
		$data = array('ahhh'=>'ehhh');
		$data2 = array('ahhh2'=>'ehhh2');
		$data3 = array('ahhh2'=>'ehhh2');
		$this->load->view('Movie_review');
}
	


		public function stitch()
	{
		if($this->input->post('btnSave')){
		$this->load->model('Review_model');
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');

		$data = array(

			'id' => $id,
			'name' => $name,
			'age' => $age,
			'gender' => $gender,
		);
		$this->Review_model->add($data);
	$this->load->view('Movie_review');
		}

		else if($this->input->post('btnUpdate')){

		$this->load->model('Review_model');
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');

		$data2 = array(

			'id' => $id,
			'name' => $name,
			'age' => $age,
			'gender' => $gender,
		);
		$this->Review_model->update($id, $data2);
$this->load->view('Movie_review');




		}
		else if($this->input->post('btnDelete'))
		{

		$this->load->model('Review_model');
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');

		$data3 = array(

			'id' => $id,
			'name' => $name,
			'age' => $age,
			'gender' => $gender,
		);
		$this->Review_model->delete($id, $data3);
$this->load->view('Movie_review');








		}
		function index()
		{
			$this->load->database();
			$this->load->model('Review_model');
			$data['row']=$this->Review_model->Review_model();
			$this->load->view('Movie_review',$data);
		}
	
	}
}?> 
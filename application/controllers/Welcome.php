<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	public function index()
	{
		$result['image'] = $this->db->get("fileupload")->result_array();
		$this->load->view('welcome_message',$result);
	}
	public function upload(){
		$postValue = $this->input->post('add');
	
		if($postValue == 'add'){
		// print_r($_FILES);
		$config['upload_path'] = 'uploads/'; 
		//$config['allowed_types'] = 'html|exe|txt|php';
		$config["allowed_types"] ="*";
		$this->upload->initialize($config);
		if ($this->upload->do_upload('userfile'))
		{
			$data =  $this->upload->data();

			$image['image'] = $data['file_name'];
			$this->db->insert("fileupload",$image);
			redirect(URL."/welcome");


			// $this->load->view('upload_success', $data);
		}else{
			print_r($this->upload->display_errors());
		}
		}elseif($postValue == 'edit'){
           $id = $this->input->post("id");
		   $config['upload_path'] = 'uploads/';
		   $config['allowed_types'] = "*";
		   $this->upload->initialize($config);
		   if($this->upload->do_upload('userfile')){
				$data =$this->upload->data();
				$image['image'] = $data['file_name'];
				$this->db->where("id",$id);
				$this->db->update("fileupload",$image);
				redirect(URL."/welcome");
		   }else{
			print_r($this->upload->display_errors());
		   }
		}
		
		
	}
	public function edit($id){
		$result['image'] = $this->db->get_where("fileupload",array("id"=>$id))->row_array();
	
		$this->load->view('edit_image',$result);
	}
}
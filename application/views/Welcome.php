<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$data['propertyId'] = "34";
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        $this->form_validation->set_rules('email','Email','required');
        // $this->form_validation->set_rules('location','Location','required');
        //  $this->form_validation->set_rules('budget','Budget','required');
        if($this->form_validation->run() == FALSE){
            $html = $this->load->view('header',$data,true);
            $html .= $this->load->view('property',$data,true);
            $html .= $this->load->view('footer',$data,true);
            echo $html;
        }else{
				$postData = $this->input->post();
				$this->addData($postData);
         $this->session->set_flashdata('status', 'Thank you for the enquiry. We will get back to you soon!');
         redirect(base_url('/'));

        }
	}

	public function ajaxData(){
		$postData = $this->input->post();
		$name = $postData['name'];
		$email = $postData['email'];
		$mobile = $postData['phone'];
		$country_code = $postData['countrycode'];
		$propertyId = $postData['propertyId'];

		$check = $this->db->get_where("property_data", array("mobile_no" => $mobile, "property_id" => $propertyId));
		if($check->num_rows() == 0){
			$userData['name'] = $name;
			$userData['email'] = $country_code.'--'.$email;
			$userData['mobile_no'] = $mobile;
			$userData['property_id'] = $propertyId;
			$this->db->insert('property_data',$userData);
			$query = $this->db->get_where("property_master",array("id" => $propertyId));
			$propertyData = $query->row_array();

			$users = explode(",", $propertyData['users']);
			foreach($users as $contact){
				//$message = "Dear User, Received a lead ".$name."-".$mobile." regarding ".$propertyData['name'].". Kindly check ----MPPWD";
				$message = "Dear User, Received a lead ".$name."-".$mobile." regarding ".$propertyData['name'].". Kindly check Digiwhiff";
				$this->sendSMS($contact, $message);
			}
		}
		echo "success"; exit;
	}


	public function addData($postData){
      $name = $postData['name'];
      $email = $postData['email'];
      $mobile = $postData['phone'];
			$country_code = $postData['countrycode'];
      $propertyId = $postData['propertyId'];

      $check = $this->db->get_where("property_data", array("mobile_no" => $mobile, "property_id" => $propertyId));
      if($check->num_rows() == 0){
        $userData['name'] = $name;
        $userData['email'] = $country_code.'--'.$email;
        $userData['mobile_no'] = $mobile;
        $userData['property_id'] = $propertyId;
        $this->db->insert('property_data',$userData);
        $query = $this->db->get_where("property_master",array("id" => $propertyId));
        $propertyData = $query->row_array();

        $users = explode(",", $propertyData['users']);
        foreach($users as $contact){
          $message = "Dear User, Received a lead ".$name."-".$mobile." regarding ".$propertyData['name'].". Kindly check Digiwhiff";
          $this->sendSMS($contact, $message);
        }
			}
}




	public function sendSMS($mobile, $message){
	  $message = urlencode($message);
	  $curl = curl_init();
		curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://smsdigiwhiff.com/SMSApi/send?userid=MobAvenueAPI&password=SMS@123&sendMethod=quick&mobile=$mobile&msg=$message&senderid=PLYCPT&msgType=text&duplicatecheck=true&output=json",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "cache-control: no-cache"
			  ),
			));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  //echo "cURL Error #:" . $err;
	} else {
	  //echo $response;
	}
}


}

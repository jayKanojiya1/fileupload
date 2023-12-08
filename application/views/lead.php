<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$params= array(
           "name" => $name,
           "email" => $email,
           "mobile" => $mobile,
           "property_name" => "33"
        );
		$url = 'https://mobatone.com/api/item/property';

postCURL($url, $params);
echo "success";


	function postCURL($_url, $_param){

        $postData = '';
        //create name value pairs seperated by &
        foreach($_param as $k => $v)
        {
          $postData .= $k . '='.$v.'&';
        }
        rtrim($postData, '&');


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($postData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $output=curl_exec($ch);

        curl_close($ch);

        return $output;
    }




?>

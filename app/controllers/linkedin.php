<?php

class linkedin extends framework{

public function hello(){
  $auth_code = $_GET['code'];
require '/var/www/html/phpassignment1/advancephp/vendor/autoload.php'; 

$client = new GuzzleHttp\Client;

$response = $client->request("GET","https://www.linkedin.com/oauth/v2/accessToken?grant_type=authorization_code&code=$auth_code&redirect_uri=http://resumemvc.com/app/controllers/linkedin.php&client_id=86i7q1357wnlxd&client_secret=fklUdiGM2qCpeatA");

$res = $response->getBody();
// var_dump($res);
$res = json_decode($res);
$data = $res->access_token;
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.linkedin.com/v2/me",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer $data",
    "content-type: application/json"
  ],
]);

$responsefinal = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $responsefinal=json_decode($responsefinal);
//   var_dump($responsefinal);

  $lastname = $responsefinal->lastName->localized->en_US;
  $firstname =$responsefinal->firstName->localized->en_US;
  // echo $firstname;
//   echo $lastname;  
  // session_start();
  $_SESSION['user'] = "$firstname";
    $_SESSION['pass'] = "$lastname";
}
header("Location:../view/home.php");

}
 
}

?>
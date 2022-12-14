<?php
include_once "config.php";

function getBrands(){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://crud.jonathansoto.mx/api/brands',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['token']
    ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $response = json_decode($response);
    return $response->data;
}
?>
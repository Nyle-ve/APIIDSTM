<?php
session_start();
if(isset($_POST['action'])){
  switch($_POST['action']){
      case 'create':

          $name = strip_tags($_POST['name']);
          $slug = strip_tags($_POST['slug']);
          $description = strip_tags($_POST['description']);
          $features = strip_tags($_POST['features']);
          $brand_id = strip_tags($_POST['brand_id']);
          
          $productC->createProduct($name, $slug, $description, $features, $brand_id);

      break;
  }
}

  function getProducts(){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://crud.jonathansoto.mx/api/login',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('name' => $name,'slug' => $slug,'description' => $description,'features' => $features,'brand_id' => $brand_id),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['token']
      ),
      ));

    $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {
            session_start();
            
            header("Location: index.php?success=true");
            
        }else{
            header("Location: index.php?error=true");
        }
  }

 ?>
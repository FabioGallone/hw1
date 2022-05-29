<?php


$app_key= "8f07006bd33f180475fc6f1d285b6df9";
$app_id= "b9e0d120";
//$value= $_GET["cibo"];
$data = http_build_query(array("app_id" => $app_id, "app_key" => $app_key, "ingr" => $_GET["cibo"], "nutrition-type" => "cooking" ));
$curl= curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.edamam.com/api/food-database/v2/parser?".$data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);



$result = curl_exec($curl);
echo $result;
curl_close($curl);


?>
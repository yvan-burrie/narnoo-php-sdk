<?php
include "vendor/autoload.php";
use Narnoo\Product\Product;

$token 		= "";
$request 	= new Product();
$request->setToken($token);
$productId 	= 90696290;
$operatorId = 73
$data 		= $request->getProductDetails( $productId,$operatorId );


echo "<pre>";
print_r($data);
echo "</pre>";
?>
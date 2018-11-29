<?php
include "vendor/autoload.php";
use Narnoo\Product\Product;

$token 		= "";
$request 	= new Product();
$request->setToken($token);
$param['operator']		= 73;
$data 		= $request->getProducts($param);


echo "<pre>";
print_r($data);
echo "</pre>";
?>
<?php
include "vendor/autoload.php";
use Narnoo\Media\Media;

$token 		= "";
$request 	= new Media();
$request->setToken($token);
$operatorId	= 39;
$data 		= $request->getImages( $operatorId );


echo "<pre>";
print_r($data);
echo "</pre>";
?>
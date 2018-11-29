<?php
include "vendor/autoload.php";
use Narnoo\Operator\Operator;

$token = "";

$list 	= new Operator();
$list->setToken( $token );

//$lists 	= $list->getToken($key,$secret);
//$value['name']		= "Narnoo";
$id 		= 73;
$operator	= NULL;
$lists 		= $list->getImages( $id );


echo "<pre>";
print_r($lists);
echo "</pre>";
?>
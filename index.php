<?php

include "vendor/autoload.php";

use Narnoo\Authenticate\Authenticate;

// Narnoo developer keys
$access = "";
$secret = "";

$token = Authenticate::getToken($access, $secret);
if (!empty($token) && is_string($token))
{
    $data = $token;
}
else
{
    $data = "No token returned";
}

echo "<pre>";
print_r($data);
echo "</pre>";

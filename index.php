<?php
include "vendor/autoload.php";
//https://github.com/ahmedkhan847/twittersearchphpsdk/tree/master/Twitter
use Narnoo\Media\Media;

$list = new Media();
$list->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpcy5uYXJub28uY29tXC8iLCJpYXQiOjE1Mjg4NTA2MDksImV4cCI6MTU2MDM4NjYwOSwiaWQiOiIzOSIsInR5cGUiOjF9.5pyCHk9UjEu2n0ncbjFbMSJvpAbIto-7wlny3wLcw0o");
$value = [];
$lists = $list->getImages($value);
echo "<pre>";
print_r($lists);
echo "</pre>";
?>
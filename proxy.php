<?php
$url=preg_replace("/^.*?url=/","",$_SERVER['REQUEST_URI']);
preg_match("/^https:\/\/.example.com/",$url,$matches);
if($matches)readfile($url);
?>
<?php
if(preg_match("{^(https?://)?(www\.)?(example\.com|example\.net)/}",$url=preg_replace("{^.*?url=}","",$_SERVER['REQUEST_URI'])))readfile($url);
else die("Bad URL");
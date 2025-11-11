<?php
header("Content-Type: audio/mpeg");
header("Access-Control-Allow-Origin: *");
readfile("http://upanna.on-air.fm/free");
?>

<?php

require 'Crawler.php';

$url = "http://www.example.com";
$urls = Crawler::url($url)->getUrl();

//var_dump($urls);

foreach ($urls as $url){
    echo "<a href='$url'>$url</a></br>";
}

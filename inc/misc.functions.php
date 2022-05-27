<?php 
    function echoImg($fileName) {
        $url = get_stylesheet_directory_uri().'/assets/images/'.$fileName;
        echo $url;
    }
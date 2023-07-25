<?php

function redirect ($path, $query = "") {
    $base = "http://localhost/crud";
    $url = $base . $path;
    if($path) $url .= "?$query";
    header("location: $url");
    exit();
} 
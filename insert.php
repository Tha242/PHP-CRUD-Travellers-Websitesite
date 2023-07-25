<?php
 
include("http.php");    //connect http.php for change direcctory
include("mysql.php");   //connect mysql.php for connect to Database

//Select value from new.php

$name = $_POST ['name'];    
$place = $_POST ['place'];
$img_name = $_FILES['image'] ['name'];
$error = $_FILES['image'] ['error'];
$tmp = $_FILES['image']['tmp_name'];
$type = $_FILES['image']['type'];
$img = $img_name;

// Filter error from image
if($error) {
    redirect("/index.php", "error=file");
}

if($type === "image/jpeg" or $type === "image/png") {
    
    move_uploaded_file($tmp, "images/$img_name");
    
} else {
    redirect("/index.php", "error=type");
}

//Insert Data into Database

$db = connect ();     // connect to Database
$sql = "INSERT INTO travellers (name, place, image) VALUES (:name, :place, :image)";
$result = $db->prepare($sql);
$result->execute([
    "name" => $name,
    "place" => $place,
    "image" => $img,
]); 

redirect ("/index.php");     //change directory to index.php

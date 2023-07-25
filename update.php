<?php

include('mysql.php');
include('http.php');

$db = connect();

$id = $_POST['id'];
$name = $_POST['name'];
$place = $_POST['place'];
$img = $_FILES['image']['name'];

$db->query("UPDATE travellers SET name = '$name', place = '$place', image = '$img' WHERE id = $id ");
redirect('/index.php');
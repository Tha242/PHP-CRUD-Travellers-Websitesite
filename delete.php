<?php

include('mysql.php');
include('http.php');

$id = $_GET['id'];

$db = connect();
$db->query("DELETE FROM travellers WHERE id = $id");

redirect("/index.php");
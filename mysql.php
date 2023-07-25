<?php

function connect () {
    return new PDO ('mysql:dbhost=localhost; dbname=crud', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
}
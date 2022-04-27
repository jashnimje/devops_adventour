<?php

// Connect to the database
$conn = mysqli_connect('db', 'root', 'MYSQL_ROOT_PASSWORD', 'adventour');

// Check connection
if (!$conn) {
    echo 'Connection Error: ' . mysqli_connect_error();
}
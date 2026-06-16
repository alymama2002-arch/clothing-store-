<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "clothing_store_db"
);

if(!$conn){
    die("Connection Failed");
}

?>
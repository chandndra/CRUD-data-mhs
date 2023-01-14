<?php

$con = new mysqli('localhost', 'root', '', 'cobacoba');

if(!$con){
    die(mysqli_error($con));
}
?>
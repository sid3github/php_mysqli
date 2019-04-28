<?php

// create connection
$conn = mysqli_connect('localhost','root','my_password','test_one');

// check connection
if(mysqli_connect_errno()){
    //connection failed
    echo 'Failed connection to mySql '. mysqli_connect_errno();
}
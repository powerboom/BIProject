<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once ('../script/connection.php');
//add some filtering function -- later
$username = $_POST['username'];
$passwd = $_POST['password'];
$email = $_POST['email'];
$qry = "insert into usertable values ('$username','$email','$passwd',1)";
////$qry = "insert into usertable values('avik','avik2gmail.com','1234',1)";
$result = mysql_query($qry);
if($result) {
    header("location:loginsuccess.php");
}else {
    die("Query failed");
}


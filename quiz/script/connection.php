<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mysql_hostname = "localhost";
$mysql_username = "biquiz";
$mysql_password="1234";
$mysql_database="biquiz";
$prefix="";
$bd= mysql_connect($mysql_hostname,$mysql_username,$mysql_password) or die("couldn't connect to database");
mysql_select_db($mysql_database) or die("database does not exist");
        
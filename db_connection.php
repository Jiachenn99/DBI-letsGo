<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "hfyjc3_user1";
 $dbpass = "z7g&HF8jC-3Y";
 $db = "hfyjc3_world";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
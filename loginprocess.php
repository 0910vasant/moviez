<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
if(filter_input(INPUT_POST, 'Lusername')){
session_start();
$_SESSION["username"] = filter_input(INPUT_POST, 'Lusername');
$_SESSION["password"] = filter_input(INPUT_POST, 'Lpassword');
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$sql = "select * from cloudregister where UserName='$username' && Password='$password'";
$result = mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
$Lalert="<script>alert('Incorrect Password');</script>";
if($num == 1){            
    header("Location: homepages.php");
}else{

    echo $Lalert;
}
$conn->close(); 
}
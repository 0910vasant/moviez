<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}


$sql = "INSERT INTO cloudregister VALUES ('', 'adsf', 'asdf', 'adsf','asdf')";
if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 * 
}$conn->close();
 */
/*$Username=  $_SESSION["username"];
//$Name = $_SESSION["Name"];
//$Email = $_SESSION["email"];
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "test";
$conn = new mysqli($servername, $dbusername, $dbpassword, $db);

$sql = "SELECT Name, email FROM MyGuests WHERE UserName='".$Username."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Name"]. "<br>". " email: " . $row["email"]. "<br>";
    //$Name = $row["Name"];
    //$Email = $row["email"];
  }
} else {
  echo "0 results";
}
$conn->close();
*/

?>




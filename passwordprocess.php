<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
?>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
if(filter_input(INPUT_POST, 'old-password')){
    $oldPassword= filter_input(INPUT_POST, 'old-password');
    $newPassword= filter_input(INPUT_POST, 'new-password');
    $confirmPassword = filter_input(INPUT_POST, 'confirm-password');
    $username1 = $_SESSION["username"];
    $sql = "select * from cloudregister where UserName='$username1' && Password='$oldPassword'";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    $Lalert="<script>alert('Old Password is Incorrect');</script>";
    $alert="<script>alert('mismatch Password');</script>";
    $alert_failed = "<script>alert('ERROR')</script>";
    $alert_success = "<script>alert('Password Changed Successfully')</script>";
    if($newPassword != $confirmPassword){
        echo $alert; 
    }else{
        if($num == 1){

            $chg="UPDATE cloudregister SET Password='$newPassword'  WHERE UserName='$username1'";
            //$result = mysqli_query($conn, $chg);
            if ($conn->query($chg) === false) {
                echo $alert_failed;
                //header("Location: index.php");
            }else{
                echo $alert_success;
            }
            
            //if(mysqli_num_rows($result)){}
        }else{

            echo $Lalert;
        }
    }
    $conn->close(); 
}

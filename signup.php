<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
            *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: "Poppins", sans-serif;
            }
            body{
              margin: 0;
              padding: 0;
              background: black;
              height: 100vh;
              overflow: hidden;
            }
            .title{
                color: #ffffff;                
                font-size: 80px;
                text-align: center;
                font-style: oblique;
                font-weight: bold;
            }
            .center{
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              width: 400px;
              background: white;
              border-radius: 10px;
              box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
            }
            .center h1{
              text-align: center;
              padding: 20px 0;
              border-bottom: 1px solid silver;
            }
            .center form{
              padding: 0 40px;
              box-sizing: border-box;
            }
            form .txt_field{
              position: relative;
              border-bottom: 2px solid #adadad;
              margin: 30px 0;
            }
            .txt_field input{
              width: 100%;
              padding: 0 5px;
              height: 40px;
              font-size: 16px;
              border: none;
              background: none;
              outline: none;
            }
            .txt_field label{
              position: absolute;
              top: 50%;
              left: 5px;
              color: #adadad;
              transform: translateY(-50%);
              font-size: 16px;
              pointer-events: none;
              transition: .5s;
            }
            .txt_field span::before{
              content: '';
              position: absolute;
              top: 40px;
              left: 0;
              width: 0%;
              height: 2px;
              background: #2691d9;
              transition: .5s;
            }
            .txt_field input:focus ~ label,
            .txt_field input:valid ~ label{
              top: -5px;
              color: #2691d9;
            }
            .txt_field input:focus ~ span::before,
            .txt_field input:valid ~ span::before{
              width: 100%;
            }
            .pass{
              margin: -5px 0 20px 5px;
              color: #a6a6a6;
              cursor: pointer;
            }
            .pass:hover{
              text-decoration: underline;
            }
            input[type="submit"]{
              width: 100%;
              height: 50px;
              border: 1px solid;
              background: #2691d9;
              border-radius: 25px;
              font-size: 18px;
              color: #e9f4fb;
              font-weight: 700;
              cursor: pointer;
              outline: none;
            }
            input[type="submit"]:hover{
              border-color: #2691d9;
              transition: .5s;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
            session_start();
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $db = "test";

            // Create connection
            $conn = new mysqli($servername, $dbusername, $dbpassword, $db);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);}
            if(filter_input(INPUT_POST, 'name')){
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $sql = "select * from cloudregister where UserName='$username'";
            $result = mysqli_query($conn, $sql);
            $num= mysqli_num_rows($result);
            $alert = "<script>alert('Signup success');</script>";
            $alert2 = "<script>alert('username already exist');</script>";
            if($num>0){
                echo $alert2;
            }else{
                $reg="insert into cloudregister values ('$name', '$email', '$username', '$password')";
                mysqli_query($conn, $reg);
                echo $alert;
                header("Location: index.php");
            }
            $conn->close(); 
            }
        ?>
        <div class="title">MovieWorld</div>
        <div class="center">
            <h1>Sign Up</h1>
            <form action="signup.php" method="post">
                <div class="txt_field">
                  <input type="text" name="name" required>
                  <span></span>
                  <label>Name</label>
                </div>
                <div class="txt_field">
                  <input type="text" name="email" required>
                  <span></span>
                  <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="text"name="username" required>
                    <span></span>
                    <label>UserName</label>
                 </div>
                <div class="txt_field">
                    <input type="text" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" name="Signup">
            </form>
        </div>
    </body>
</html>

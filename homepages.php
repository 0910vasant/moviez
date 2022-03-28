<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

?>

 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "400px";
        document.getElementById("main").style.marginLeft = "400px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }

    function search() {
        var x = document.getElementById("searchbar").value;
        if (x === "manadu") {
          window.location.href = "manadu.html";
        }
        else if(x === "pushpa"){
          window.location.href = "pushpa.html";
        }else {
          alert('Search Not Found');
        }
    }
</script>

<html>
    <head>
        <title>MovieWorld.com</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                background: black;
                font-family: Verdana;
            }
            .title{
                color: #ffffff;
                background-color: #233142;
                font-size: 40px;
                text-align: center;
                font-style: oblique;
                font-weight: bold;
                font-family: system-ui;
                width: 1340px;
            }
            
            .navbar{
                position: relative;
                width: 100%;
                height: 5rem;
                background: #233142;
                
            }
            
            nav{
                width: 100%;
                height: 100%;
                display: flex;
                /*justify-content: center;
                align-items: center;*/
                
            }
            
            .nav-items{
                position: relative;
                display: flex;
                flex-direction: row;  
            }
            
            .nav-items a{
                color: #fff;
                text-decoration: none;
                font-size: 18px;
            }
            
            .nav-tab{
                display: flex;
                margin: 25px;
            }
            
            .dropdown{
                position: relative;
            }
            
            .dropdown-content{
                display: flex;
                flex-direction: column;
                position: absolute;
                background-color: #233142;
                min-width: 200px;
                z-index: 1;
                top: 3.7res;
                margin: 10px;
                opacity: 0;
                transition: .3s;
            }
            
            .dropdown-content a{
                border-radius: 3px;
                font-size: 20px;
                padding: 12px 16px;
                display: block;
                color: #ffffff;
                transition: .3s;
            }
            
            .dropdown-content a:hover{
                background-color: #385170;
                margin-left: 6px;
            }
            
            .dropdown:hover .dropdown-content{
                opacity: 1;
            }
            
            /*slideshow*/
            /* {
                border-radius: 10px;
                width: 30%;
                height: 100%;
                margin: 10px;
            }*/
            /*.landing-page{
                min-height: 100vh;
            }
            .landing-page .masthead-area{
                min-height: calc(100vw * .5625);
                background-color: transparent;
                margin-bottom: 0;
            }
            .landing-page .masthead-overlay .left{
                left: 50px;
            }
            .landing-page .masthead-container{
                width: 96%;
            }*/
            
            .title-1 {
                color: #ffffff;
                background-color: #233142;
                font-size: 30px;
                text-align: center;
                width: 1340px;
                
            }
            .slide-1{
                position: relative;
                width: 100%;
                height: 20rem;
                background: #233142;
            }
            .items{
                position: relative;
                display: flex;
                flex-direction: row; 
            }
            
            .button{
                background-color: red;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 10px;
                height: 50px;
                margin-top: 10px;
            }
            
            img:hover{
                margin-right: 6px;
                margin-left: 6px;
            }
            
            .empty{
                display: none;
            }
            
            .search-button{
                background-color: lightblue;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 10px;
                height: 50px;
                margin-top: 10px;
            }
            .account-button{
                background-color: lightgreen;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 10px;
                height: 50px;
                margin-top: 10px;
            }
            img{
                border-radius: 10px;
                width: 30%;
                height: 100%;
                margin: 10px; 
            }
             img:hover {
                box-shadow: 0px 4px 5px #FFD700;
            }
            .mysidebar{
                width:25%; 
                right : 0;
                display:none;
                z-index:5
            }
            
            input {
                width: 400px; 
                margin: 20px;
                height: 40px;
                border-color: lightblue;
                border-radius: 10px;
                background: #ffffff;
                color: black;
                text-align: center;

            }

            .menu{
                display: none;
            }
            
            
            /* sidebar navigation*/
            .sidebar {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                right: 0;
                /*background-color: #111;*/
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

          .sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

          .sidebar a:hover {
                color: #f1f1f1;
            }   

          .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

          .openbtn {
                font-size: 20px;
                cursor: pointer;
                background-color: #111;
                color: white;
                padding: 10px 15px;
                border: none;
            }

          .openbtn:hover {
                background-color: #444;
            }

          #main {
                transition: margin-left .5s;
                padding: 16px;
            }

          /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidebar {padding-top: 15px;}
                .sidebar a {font-size: 18px;}
            }
            
            .sidebar input{
                width: 200px; 
                margin: 20px;
                height: 40px;
                border-color: lightblue;
                border-radius: 10px;
                background: #ffffff;
                color: black;   
            }
            
            .sidebar input[type="submit"]{
                width: 200px;
                margin: 20px;
                height: 40px;
                color: #ffffff;
                background: blue;
            }
        </style>
    </head>
    <body>
        
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
   
            <a><?php echo "Hello! ". $_SESSION["username"];?></a>

            <form action="passwordprocess.php" method="post">
                <a style="color: #fff;">Change Password</a>
                <input type="text"  placeholder="Old Password.." name="old-password" required>
                <input type="text"  placeholder="New Password.." name="new-password" required>
                <input type="text"  placeholder="Confirm Password.." name="confirm-password" required>
                <!--<a href="#">Clients</a>
                <a href="#">Contact</a>-->
                <input type="submit" value="submit">
            </form>>
        </div>
        <div class="title">MovieWorld</div>
        <div class="navbar">
            <nav>
                <ul class="nav-items">
                    <div class="dropdown">
                        <a href="#" class="nav-tab dropdown-tab">Movies</a>
                        <div class="dropdown-content">
                            <a href="tamilmovie.html">Tamil</a>
                            <a href="englishmovies.html">English</a>
                            <a href="hindimovie.html">Hindi</a>
                            <a href="telugumovies.html">Telugu</a>
                        </div>  
                    </div>
                    
                    <div class="dropdown">
                    <a href="#" class="nav-tab dropdown-tab">TV Show</a>
                        <div class="dropdown-content">
                            <a href="#">Channel</a>
                            <a href="#">Channel-2</a>
                            <a href="#">Channel-3</a>
                            <a href="#">Channel-4</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                    <a href="sports.html" class="nav-tab dropdown-tab">Sports</a>
                        <div class="dropdown-content">
                            <a href="#">Cricket</a>
                            <a href="#">Kabbadi</a>
                            <a href="#">Hockey</a>
                            <a href="#">Football</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                    <a href="#" class="nav-tab dropdown-tab">Web Series</a>
                    </div>                   
                    <input  type="text" id="searchbar" placeholder="Search.." name="search" required>
                    <button type="submit" onclick="search()" class="search-button">search</button>                    
                    <button class="account-button" id="sidebar" onclick="openNav()">About</button>
                    <button class="button" onclick="logout">
                        <a href="index.php" style="background-color: red; ">Logout</a>
                    </button>
                    
                </ul>
            </nav>
        </div>
        
        

        
        <!--<div class="slide">
                <img class="mySlides" src="images/venom2.jpg">
                <img class="mySlides" src="images/pushpa.jpg">
                <img class="mySlides" src="images/83.jpg">

                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>-->
        <!--<div class="landing-page">
            <div class="masthead-area">
                <div class="masthead-overlay left"></div>
                <div>
                    <div class="masthead-container>">
                        
                    </div>
                </div>
            </div>
        </div>-->
        
        <div href="#"  class="title-1">latest Movies</div>
        <div class="slide-1">
            <nav>
                <ul class="items">
                    <a href="playmanadu.html">
                       <img "class="mySlides" src="images/m.jpg" style="width: 200px; height: 300px;" alt=""> 
                    </a>
    
                    <a href="#">
                    <img "class="mySlides" src="images/p.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img "class="mySlides" src="images/8.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img "class="mySlides" src="images/v2.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img "class="mySlides" src="images/d.jpeg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img "class="mySlides" src="images/h.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    
                </ul>
            </nav>
        </div>
        
        <div class="title-1">
            <a style="background-color: #233142; color: #fff">Tamil Movies</a>
        </div>
        <div class="slide-1">
            <nav>
                <ul class="items">
                    <a href="playmanadu.html">
                    <img src="images/m.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/d.jpeg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/jaybhim.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/master.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/k.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/bhoomi.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    
                </ul>
            </nav>  
         </div>
        
        <div class="title-1">
            <a style="background-color: #233142; color: #fff">English Movies</a>
        </div>
        <div class="slide-1">
            <nav>
                <ul class="items">
                    <a href="#">
                    <img src="images/spider.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/v2.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/stratton.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/The Protege.gif" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/residentevil.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/apex.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    
                </ul>
            </nav>  
         </div>
        
        <div class="title-1">
            <a style="background-color: #233142; color: #fff">Hindi Movies</a>
        </div>
        <div class="slide-1">
            <nav>
                <ul class="items">
                    <a href="#">
                    <img src="images/gold.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/radhe.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/tadap.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/mumbaisaga.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/sooryavanshi.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/8.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    
                </ul>
            </nav>  
         </div>
        
        <div class="title-1">
            <a  style="background-color: #233142; color: #fff">Telugu Movies</a>
        </div>
        <div class="slide-1">
            <nav>
                <ul class="items">
                    <a href="#">
                    <img src="images/p.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/Tuck.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/bachelor.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/vakil.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/Republic.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    <a href="#">
                    <img src="images/Varudu.jpg" style="width: 200px; height: 300px;" alt="">
                    </a>
                    
                </ul>
            </nav>  
         </div>
    </body>
</html>




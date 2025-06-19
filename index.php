<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include "include/head-links.php"
    ?>
    <link href="css/index.css" rel="stylesheet" />
    
</head>
<body>
   <?php 
   include "include/header.php"
   ?>
<div class="banner-container">
     <h2 class="white-pb-3">HAPPINESS PER SQUARE ROOT</h2>
    <form id="search-form" method="GET" action="property_list.php?">
        <div class="input-group city-search">
    <input type="text"class="form-control input-city"  name="city" value=""  placeholder="Enter your footer-city to search for PGs" id="city">
<div class="input-group-append"id="sr">
    <button type="submit" class="btn btn-secondary" style="background-color: rgb(104, 101, 101);"  >
       <i class="fa fa-search"></i>
    </button>

</div>
</div>
</form></div>
<div class="page-container">
    <h1 class="city-heading"> MAJOR CITIES</h1>
<div class=" row">
    <div class="city-card-container-col-md">
        <a href="property_list.php?city=delhi">
            <div class="city-card-rounded-circle"><img src="img/delhi.png" class="city-image" alt="image" ></div></a></div>
    <div class="city-card-container-col-md">
        <a href="property_list.php?city=Mumbai">
            <div class="city-card-rounded-circle"><img src="img/mumbai.png"class="city-image"  alt="image"></div></a></div> 
    <div class="city-card-container-col-md">
        <a href="property_list.php?city=Bangalore">
            <div class="city-card-rounded-circle"><img src="img/bangalore.png"class="city-image"  alt="image"></div></a></div> 
   
    <div class="city-card-container-col-md">
        <a href="property_list.php?city=Hyderabad">
            <div class="city-card-rounded-circle"><img src="img/hyderabad.png"class="city-image" alt="image">
        </div></a></div> 
    </div>
</div>

<?php
include "include/signup-modal.php";
include "include/login-modal.php";
include "include/footer.php";
?>
   
    


</body>
</html>
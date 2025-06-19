
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
    include "include/head-links.php"?>
    <link href="css/dashboard.css" rel="stylesheet" />

</head>

<body>
<div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <?php
                    if(!isset($_SESSION["user_id"])){
?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
<?php
                    }else {
?>
<div class="nav-name">
<?php  
session_start();

  echo Hi, $_SESSION["full_name"]?>
                    </div>
                    <li>
                    <div class="nav-item">
                        <a class="nav-link" href="dashboard.php">
<i  class="fas fa user"></i>Dashboard</a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            <?php
                             }
                            ?>
                </ul>
            </div>
        </nav>
    </div>
    <div id="Loading">
 </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php?">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>

        </ol>
    </nav>
    <div class="my-profile page-container">
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img rounded-circle"></i>
            </div>
            <div class="col-md-9 profile-details">
                <div class="row no-gutter">
                    <div class="col-12 col-md-6">
                        <strong>Username:</strong> <span id="username">John Doe</span>
                    </div>
                    <div class="col-12 col-md-6">
                        <strong>Password:</strong> <span id="password">********</span>
                    </div>
                </div>
                <div class="row no-gutter">
                    <div class="col-12 col-md-6">
                        <strong>Email:</strong> <span id="email">john.doe@example.com</span>
                    </div>
                    <div class="col-12 col-md-6">
                        <strong>Phone:</strong> <span id="phone">123-456-7890</span>
                    </div>
                </div>
                <div class="row no-gutter">
                    <div class="col-12 col-md-6">
                        <strong>College:</strong> <span id="college">Example University</span>
                    </div>
                    <div class="col-12 col-md-6">
                        <strong>Gender:</strong> <span id="gender">Male</span>
                    </div>

                </div>
            </div>

        </div>
        <div>
<a href="#">Editprofile</a>
                </div>
    </div>
    
            
      <div class="my-interested-properties">
                <div class="page-container">
                    <h1>My interested properties</h1>
                    <div class="property-card property-id-1 row">
                        <div class="image-container col-md-4">
                            <img src="img/properties/1/eace7b9114fd6046.jpg" />
                        </div>
                        <div class="content-container col-md-8">
                            <div class="row no-gutters justify-content-between">
                                <div class="star-container" title="4.8">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="interested-container">
                                    <i class="far fa-heart"></i>
                                    <div class="interested-text">6 interested</div>
                                </div>
                            </div>
                            <div class="detail-container">
                                <div class="property-name">Ganpati Paying Guest</div>
                                <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat
                                    Nagar, Borivali East, Mumbai - 400066</div>
                                <div class="property-gender">
                                    <img src="img/unisex.png" />
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="rent-container col-6">
                                    <div class="rent">Rs 8,500/-</div>
                                    <div class="rent-unit">per month</div>
                                </div>
                                <div class="button-container col-6">
                                    <a href="property_detail.php?" class="btn btn-primary">View</a>
                                </div>                        
                            </div></div></div>
                            <div class="property-card property-id-1 row">
                                <div class="image-container col-md-4">
                                    <img src="img/properties/1/46ebbb537aa9fb0a.jpg" />
                                </div>
                                <div class="content-container col-md-8">
                                    <div class="row no-gutters justify-content-between">
                                        <div class="star-container" title="3.5">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="interested-container">
                                            <i class="far fa-heart"></i>
                                            <div class="interested-text">2 interested</div>
                                        </div>
                                    </div>
                                    <div class="detail-container">
                                        <div class="property-name">PG for Girls Borivali West</div>
                                        <div class="property-address">Plot no.258/D4, Gorai no.2, Borivali West, Mumbai, Maharashtra -400092</div>
                                        <div class="property-gender">
                                            <img src="img/female.png" />
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="rent-container col-6">
                                            <div class="rent">Rs 8,000/-</div>
                                            <div class="rent-unit">per month</div>
                                        </div>
                                        <div class="button-container col-6">
                                            <a href="property_detail.php?" class="btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>


             
                           
                           <?php
                            include "include/footer.php";
                             ?>

</body>

</html>
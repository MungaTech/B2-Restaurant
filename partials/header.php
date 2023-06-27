<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>B2 Restaurant</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B2 Restaurant</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<!--custom css file link-->
<link rel="stylesheet" href="style.css">


</head>
<body>
    <!--header section start-->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>B2 Restaurant</a>

        <nav class="navbar">
        <a class="active" href="index.php">Home</a>
            <a href="restaurants.php">Dishes</a>
            <a href="about.php">About</a>
            <a href="checkout.php">Checkout</a>
                
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<a href="login.php">Login</a>
							  <a href="registration.php">Register</a>';
							}
						else
							{

									
									echo  '<a href="your_orders.php" >My Orders</a>';
									echo  '<a href="logout.php" >Logout</a>';
							}

						?>
							 
						 
                    </div>
                        </nav>
    </header>

    <!-- header section ends -->
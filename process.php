<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    // Do something with the email address, such as save it to a database or send an email
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-----Author--------->
    <meta name="author" content="Shubham shubham">

    <!------Description--------->
    <meta name="description" content="Discover a world of wonder and imagination with our collection of toys! From classic favorites to the latest trends, find the perfect playtime companion for kids of all ages. Shop now and bring joy to your little ones with our range of fun and educational toys.">

    <!---------Title------------>
    <title>Cara toys</title>

    <!-----font------>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-----Favicon--------->
    <link rel="icon" type="" href="img\favicon2.png">

    <!------CSS------>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!------------------------HEADER------------------------------>
    <section id="header" >
        <a href="index.html"><img src="img/logo.png" class="logo" alt="Banner-image"></a>

        <!-------------------NAVBAR------------------------->
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <section class="success" id="newsletter-success">
    <div class="success-container">

        <div class="icon-container">

         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="success-icon">

        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>

        </svg> 
    </div>

    <span class="subheading">Done!</span>

    <div class="container--3">

    <h2 class="heading-secondary">

       <?php echo("$email  Welcome to our Family!")?>

    </h2>

    </div>

    <a href="index.html" class="Home-link More--intro">Return to home...</a>

    </div>

   </section>

   <script src="script.js"></script>

</body>

</html>
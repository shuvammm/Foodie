<?php
// Foodie recipe page: chickenwing. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select {
            display: block;
            padding: 5px 10px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;

        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background: orangered;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> <!--py means padding-->
        <div class="container">
            <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="../assets/images/logo.jpg"
                alt=""><span style="margin-left: 7px;">Foodie </span><!--logo-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span <i id="bar" class="fa fa-bars" aria-hidden="true"></i>></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"> <!--ml means margin from left auto-->

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../shop.php">Recipies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../blog.php">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../contacts.php">Contact Us</a>
                    </li>




            </div>
        </div>
    </nav>

    <section class="container sproduct my-5 pt-5"><!--container is used to remove the slider-->
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="../assets/images/chicken wing.jpg" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../assets/images/chicken wing.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/chicken wing.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/chicken wing.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/chicken wing.jpg" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Chicken Wing</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>
                    <mark><b>Classic Baked Wings:
                        </b></mark> <br>
                    <b>Chicken Wings:</b> 1-2 pounds, depending on how many you want. Choose whole wings or pre-cut into
                    drumettes, flats, and wingtips. <br>
                    <b>Baking Powder:</b> 1-2 tablespoons, aluminum-free preferred. <br>
                    <b>Salt:</b> 1/2 - 1 teaspoon, to taste. <br>
                    <mark><b>Spices:</b></mark> <br>
                    <b>Paprika:</b> 1-2 teaspoons. <br>
                    <b>Garlic powder:</b> 1/2 - 1 teaspoon. <br>
                    <b>Black pepper:</b> 1/2 - 1 teaspoon. <br>
                    (Optional) Other spices like cayenne pepper, onion powder, or oregano for a different flavor twist.
                    ther Options: <br>

                    <b>Oil:</b> For frying wings, use vegetable oil or another high smoke point oil (enough to fill your
                    pot or fryer).
                    <mark><b>Coating (Optional):</b></mark> <br>
                    <b>Flour:</b> 1-2 cups, for a crispy crust (use with baked or fried wings). <br>
                    Wet Batter (Optional): Made with ingredients like flour, eggs, and milk, for an extra crispy
                    exterior. <br>
                    Remember, these are just basic ingredients. You can find tons of recipe variations online or in
                    cookbooks that feature different flavors and cooking methods (baking, frying, grilling).



                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/nbIwmixBIxk?si=Hj7m9QMTlK7qZLEv">Chicken Wing</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    <mark><b>Baking Chicken Wings:</b></mark><br><br>

                    <mark><b>Prep the Wings: </b></mark><br>Pat the chicken wings dry with paper towels. This helps
                    achieve crispy skin. <br>
                    <mark><b>Season the Wings:</b></mark> <br>In a large bowl, toss the wings with baking powder, salt,
                    and your chosen spices (paprika, garlic powder, black pepper). Make sure they're evenly coated.
                    Preheat the Oven: Aim for a high temperature, around 400°F (200°C). <br>
                    <mark><b>Arrange the Wings:</b></mark><br> Place the wings on a baking sheet in a single layer,
                    leaving space between them for air circulation and even cooking. <br>
                    <mark><b>Bake the Wings:</b></mark> <br>Bake for 20-25 minutes, then flip them over and bake for
                    another 10-15 minutes, or until golden brown and cooked through (165°F internal temperature).
                </p>





            </div>
        </div>
    </section>





    <footer class="mt-5 py-5"> <!--footer------->
        <div class="row container mx-auto pt-5" style="display: flex;
        justify-content: space-between;">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="../assets/images/logo.jpg" alt=""
                    style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;">
                <p class="pt-3">
                    Welcome , Namaste!!</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="../paneer.php">Panner</a></li>
                    <li><a href="../chicken.php">Chicken</a></li>
                    <li><a href="../fish.php">Fish</a></li>
                    <li><a href="../shop.php">Exlpore More</a></li>

                </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>Jessore Road, Kolkata</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123)2339-874700</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>abc@gmail.com</p>
                </div>
            </div>
            <!--<div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog_img1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog_img2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog_img3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog_img4.jpg" alt="">
                </div>
            </div>-->
        </div>

        <div class="copyright mt-5"> <!--copyright---------------->
            <div class="row container mx-auto" style="display: flex;
            justify-content: space-between;">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="../assets/images/payment.png" alt="">

                </div>
                <div class="col-lg-3 col-md-6 col-12 text-nowrap mb-2">
                    <p>@2024, All Rights Reserved</p>

                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                </div>

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script>   /*---------------------java script-------------------*/
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-image');

        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>

</html>
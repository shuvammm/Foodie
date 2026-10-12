<?php
// Foodie recipe page: grilledchicken. PHP wrapper preserves the original recipe markup.
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
            <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="../assets/images/branding/logo.jpg"
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
                <img class="img-fluid w-100 pb-1" src="../Fish/grilled ../assets/images/banners/chicken.jpg" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../kid1_2.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../kid1_3.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../kid1_4.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../kid1_5.webp" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Grilled Chicken</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>
                    Grilled chicken is a versatile and healthy dish. Here are the basic ingredients you'll need: <br>

                    <mark><b>Main Ingredient:</b></mark> <br>

                    <b>Chicken:</b> You can use various cuts for grilling, depending on your preference. Here are some
                    popular options:
                    Bone-in, Skin-on Chicken Breasts or Thighs: These are classic choices that provide juicy and
                    flavorful meat.
                    Boneless, Skinless Chicken Breasts or Thighs: These cook faster and are easier to handle on the
                    grill, but may require marinating for extra flavor.
                    <b>Chicken Wings or Drumsticks:</b> Great for grilling and perfect with finger foods or dipping
                    sauces. <br>
                    <mark><b>For Seasoning:</b></mark> <br>

                    <b>Olive Oil: </b>1-2 tablespoons for brushing or marinating the chicken. <br>
                    <b>Salt & Pepper:</b> To taste. <br>
                    <mark><b>Optional Seasonings and Marinades:</b></mark> <br>

                    There are endless possibilities for grilling chicken flavors. Here are some popular options:
                    </b></mark> <br>
                    <b>Marinades:</b> You can marinate the chicken in a mixture of your favorite ingredients like herbs
                    (rosemary, thyme, oregano), spices (paprika, garlic powder, cumin, chili powder), acidic ingredients
                    (lemon juice, yogurt), and even honey or soy sauce for added sweetness or umami. <br>
                    <b>Dry Rubs:</b> A simple rub made with salt, pepper, and your favorite spices can add great flavor
                    to the chicken.


                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/oWXlmAeqoUE?si=NyzNwicmyvazCxbv">Grilled Chicken</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    Grilling chicken is a great way to prepare a healthy and flavorful meal. Here's a basic breakdown of
                    the process: <br>

                    <mark><b>Preparation:</b></mark> <br>

                    <b>Choose Your Chicken:</b> Select your preferred cut of chicken (bone-in, boneless, wings,
                    drumsticks). <br>
                    <b>Marinate (Optional):</b> Marinating tenderizes and flavors the chicken. If using a marinade,
                    place the chicken in a bowl or zip-lock bag with your chosen marinade for at least 30 minutes, or
                    ideally 2-4 hours for deeper flavor.
                    Pat Dry: Whether marinated or not, pat the chicken dry with paper towels before grilling. This helps
                    achieve nice grill marks and crispy skin. <br>

                    <mark><b>Prepping the Grill:</b></mark> <br>

                    <b>Preheat the Grill:</b> Aim for medium-high heat, around 400-450°F (200-230°C). If using a gas
                    grill, preheat with the lid closed for 10-15 minutes. For charcoal grills, let the coals get hot and
                    ashy. <br>

                    <b>Oil the Grates:</b> Lightly brush the hot grill grates with oil to prevent sticking. <br>

                    <mark><b>Grilling the Chicken:</b></mark> <br>

                    <b>Place the Chicken:</b> Carefully place the chicken pieces on the preheated grill. <br>

                    <b>Searing:</b> Sear the chicken for a few minutes per side to develop grill marks and crispy skin.
                    The exact time will depend on the thickness of the chicken pieces. <br>

                    <b>Indirect Heat (Optional): </b> For thicker cuts like bone-in chicken breasts or thighs, you can
                    move them to an indirect heat zone on the grill after searing. This helps cook them through without
                    burning the outside. <br>

                    <b>Turning and Cooking:</b> Use tongs to turn the chicken occasionally for even cooking. <br>

                    <mark><b>Checking for Doneness:</b></mark> <br>

                    <b>Internal Temperature:</b> The most reliable way to check for doneness is to use a meat
                    thermometer. The internal temperature of the thickest part of the chicken should reach 165°F (74°C)
                    for safe consumption. <br>
                    <mark><b>Resting:
                        </b></mark> <br>
                    Transfer the Chicken: Once cooked through, transfer the chicken to a plate and tent it loosely with
                    foil for 5-10 minutes. This allows the juices to redistribute for a more tender and flavorful
                    result. <br>
                    <mark><b>Serving:</b></mark> <br>


                    <b>Serve:</b> Serve your grilled chicken hot with your favorite sides and enjoy!
                </p>





            </div>
        </div>
    </section>





    <footer class="mt-5 py-5"> <!--footer------->
        <div class="row container mx-auto pt-5" style="display: flex;
        justify-content: space-between;">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="../assets/images/branding/logo.jpg" alt=""
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
                    <img class="img-fluid w-25 h-100 m-2" src="../insta/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../insta/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../insta/5.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../insta/4.jpg" alt="">
                </div>
            </div>-->
        </div>

        <div class="copyright mt-5"> <!--copyright---------------->
            <div class="row container mx-auto" style="display: flex;
            justify-content: space-between;">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="../assets/images/ui/payment.png" alt="">

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
<?php
// Foodie recipe page: poachedchicken. PHP wrapper preserves the original recipe markup.
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
                <img class="img-fluid w-100 pb-1" src="../assets/images/poached_chicken.webp" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../assets/images/poached_chicken.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/poached_chicken.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/poached_chicken.webp" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/poached_chicken.webp" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Poached Chicken</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>
                    Poached chicken is a simple and versatile way to cook chicken that results in moist and tender meat.
                    Here are the ingredients you'll need: <br>

                    <mark><b>Ingredient:</b></mark> <br>

                    <b>Chicken:</b> You can use various cuts for poaching, but boneless, skinless chicken breasts or
                    thighs are most common. Around 1-2 pounds will do, depending on how much chicken you need. <br>
                    <mark><b>Poaching Liquid:
                        </b></mark>
                    <br>
                    <b>Water:</b> This is the simplest poaching liquid, but you can use other options for extra flavor.
                    <br>
                    <b>Broth or Stock (Optional):</b> Chicken broth, vegetable broth, or even court bouillon (a
                    flavorful broth made with vegetables and herbs) can add richness and depth of flavor. Use about 4-6
                    cups of broth or water, depending on the size of your pot and the amount of chicken. <br>
                    <mark><b>Optional Flavorings (for the poaching liquid):
                        </b></mark> <br>
                    <b>Aromatics:</b> Whole vegetables like onions (peeled and quartered), carrots (peeled and chopped),
                    celery stalks (chopped) add subtle flavor. <br>
                    <b>Herbs:</b> Fresh herbs like thyme, bay leaves, or parsley sprigs can infuse the poaching liquid
                    with their aroma. <br>
                    <b>Seasonings:</b> Whole black peppercorns, a few cloves, or a sprinkle of salt can enhance the
                    flavor (be mindful of adding salt if you're using salted broth). <br>
                    <b>Lemon or Lime (Optional):</b> A squeeze of citrus juice adds a touch of brightness and acidity.



                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/pt5ehsROFac?si=iuk8V5VSUGPfdK_u">Poached Chicken</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>
                    Here's a breakdown of the process for poaching chicken: <br>

                    <mark><b>Preparation:</b></mark> <br>

                    <b>Prep the Chicken:</b> Rinse the chicken breasts or thighs under cold water and pat them dry with
                    paper towels. <br>
                    <mark><b>Poaching Liquid:
                        </b></mark> <br>
                    <b>Choose Your Liquid:</b> Decide if you're using plain water or broth for the poaching liquid. <br>
                    <b>Flavor Boosters (Optional):</b> If using water, add your desired aromatics (onion, carrot,
                    celery), herbs (thyme, bay leaf, parsley), seasonings (peppercorns, cloves), or a squeeze of lemon
                    juice to the pot. <br>
                    <b>Bring to a Simmer:</b> Pour your chosen poaching liquid (water or broth) into a pot or Dutch oven
                    large enough to hold the chicken comfortably. Bring the liquid to a simmer over medium heat. <br>
                    <mark><b>Cooking the Chicken:</b></mark> <br>

                    <b>Add the Chicken:</b> Carefully add the chicken pieces to the simmering poaching liquid. <br>

                    <b>Maintain a Simmer:</b> It's important to maintain a gentle simmer, not a rolling boil. This
                    ensures the chicken cooks evenly and stays moist. <br>

                    <b>Poaching Time:</b> The poaching time will depend on the thickness of the chicken pieces. Here's a
                    general guideline: <br>

                    Bone-in, Skin-on Chicken Breasts or Thighs: 25-30 minutes <br>
                    Boneless, Skinless Chicken Breasts: 15-20 minutes <br>
                    Boneless, Skinless Chicken Thighs: 20-25 minutes <br>
                    <b>Checking for Doneness:</b> Use a meat thermometer to check the internal temperature of the
                    thickest part of the chicken. It should reach 165°F (74°C) for safe consumption. <br>

                    <mark><b>Resting and Serving:
                        </b></mark> <br>
                    <b>Remove the Chicken:</b> Once cooked through, take the chicken out of the poaching liquid with a
                    slotted spoon and transfer it to a plate. <br>

                    <b>Resting:</b> Tent the chicken loosely with foil and let it rest for 5-10 minutes. This allows the
                    juices to redistribute for a more tender and flavorful result. <br>

                    <b>Serving:</b> You can shred or slice the poached chicken and use it in various dishes like salads,
                    sandwiches, soups, or enjoy it on its own with your favorite dipping sauce or drizzled with some of
                    the poaching liquid.


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
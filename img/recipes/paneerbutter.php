<?php
// Foodie recipe page: paneerbutter. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paneer</title>

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
                <img class="img-fluid w-100 pb-1" src="../assets/images/panner_butter_masala.jpg" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../assets/images/panner_butter_masala.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/panner_butter_masala.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/panner_butter_masala.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/panner_butter_masala.jpg" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Paneer Butter Masala</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>
                    <b><u>Main Ingredients:</u></b> <br>

                    <b>Paneer:</b> 200-250 grams, cut into cubes or squares (about 1 to 1.5 inches) <br>
                    <b>Gravy Base:</b> <br>

                    <b>Tomatoes:</b> 3-4 medium tomatoes, roughly chopped <br>
                    <b>Onions:</b> 1 medium onion, roughly chopped <br>
                    <b>Cashews or Almonds:</b> ½ cup, soaked for 30 minutes (cashews work better for a richer texture)
                    <br>
                    <b>Ginger-Garlic Paste:</b> 1 tablespoon <br>
                    <B>Spices:</B> <br>

                    <b>Butter:</b> 2-3 tablespoons <br>
                    <b>Cumin Seeds:</b> 1 teaspoon <br>
                    <b>Garam Masala:</b> 1 teaspoon <br>
                    <b>Red Chili Powder:</b> ½ - 1 teaspoon (adjust for spice preference) <br>
                    <b>Turmeric Powder:</b> ½ teaspoon (optional) <br>
                    <b>Salt: </b>to taste <br>
                    <b><u>Other Ingredients:</u></b> <br>

                    <b>Water:</b> 1-2 cups (adjust for gravy consistency) <br>
                    <b>Heavy Cream (optional):</b> ¼ - ½ cup (for an extra rich and creamy texture) <br>
                    <b>Fresh Cilantro:</b> Chopped, for garnish <br>
                    <b><u>Optional Ingredients:</u></b> <br>

                    <b>Kasoori Methi (dried fenugreek leaves):</b> ½ teaspoon, crushed (for extra flavor) <br>
                    <b>Sugar:</b> 1 teaspoon (to balance the tomato acidity, optional) <br>
                    <b>Oil:</b> 1 tablespoon (if not using enough butter) <br>



                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/ts5aJn4cHmI?si=KSXs3Mck6zHwfIbN">Paneer Butter Masala</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>


                    Paneer butter masala involves making a creamy tomato gravy with fragrant spices and then adding
                    pan-fried paneer cubes for a delicious and rich main course. Here's a breakdown of the process: <br>

                    <b><u>Make the Gravy Base:</u></b> <br>

                    Prepare the Aromatics: Grind together the soaked cashews or almonds, chopped tomatoes, ginger-garlic
                    paste, and a little water into a smooth paste. <br>
                    <b><u>Sauté the Spices:
                        </u></b> <br>
                    Heat butter (or butter and oil) in a pan over medium heat. Add cumin seeds and let them sizzle for a
                    few seconds.
                    Cook the Onion-Tomato Base: <br>

                    <b><u>Add the chopped onions and saute until translucent.</u></b> <br>
                    Pour in the prepared cashew/almond paste and cook until the oil separates from the masala. <br>
                    <b><u>Add the Spices:</u></b>
                    <br>
                    Stir in red chili powder, turmeric powder (if using), and garam masala. Cook for a minute, releasing
                    the fragrance of the spices. <br>
                    <b><u>Simmer the Gravy:</u></b> <br>

                    Add water (start with 1 cup) and bring to a boil. Reduce heat, simmer, and let the gravy thicken to
                    your desired consistency. You can add more water if it gets too thick. <br>
                    <b><u>Pan-fry the Paneer (optional):</u></b> <br>

                    While the gravy simmers, heat some oil in a separate pan and pan-fry the cubed paneer until golden
                    brown on all sides. This step adds a nice texture contrast. <br>
                    <b><u>Finishing Touches: <br>
                        </u></b>
                    Once the gravy reaches your desired consistency, add the pan-fried paneer (or directly add paneer if
                    not pan-frying) and simmer for a couple of minutes to allow the flavors to meld. <br>
                    Turn off the heat. Stir in heavy cream (optional) for extra richness. <br>
                    Season with salt to taste. <br>
                    Add crushed kasuri methi (optional) for a touch of fenugreek flavor. <br>
                    Sprinkle with sugar (optional) to balance the tomato acidity. <br>
                    <b><u>Serve:</u></b> <br>

                    Garnish with chopped fresh cilantro and serve hot with rice, naan, or roti.
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
<?php
// Foodie recipe page: kheer. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kheer</title>

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
            <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="../logo.jpg"
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
                <img class="img-fluid w-100 pb-1" src="../kheer.jpg" id="MainImg"
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
                <h6>Kheer</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>

                    ▢1/4 cup rice 50 grams, I used basmati rice or use 1/3 cup for a thicker kheerbr<br>
                    ▢1 teaspoon ghee also known as clarified butter<br>
                    ▢3-4 green cardamom pods slightly crushed<br>
                    ▢1 liter whole milk<br>
                    ▢4-5 tablespoons sugar 50-62.5 grams, adjust to taste<br>
                    ▢3 tablespoons chopped nuts I used chopped cashews & almonds<br>
                    ▢1.5 teaspoons rose water optional
                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/x4QofoAjMyE?si=dZR1qDfZolHIiQm0">Kheer making</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    <span style="font-weight: bolder;"> 1.</span> Rinse the rice until water turns clear. Then soak the
                    rice in enough water for 20
                    to 30
                    minutes.Once 30 minutes are up, drain the rice using a colander and set aside.<br>
                    <span style="font-weight: bolder;"> 2.</span> Heat a heavy bottom pan on medium heat. Then add 1
                    teaspoon of ghee to it and then add the soaked
                    &drained rice. Also add 3-4 crushed green cardamom pods.<br>
                    <span style="font-weight: bolder;"> 3.</span> Toss the rice with the ghee and cardamom for 1 to 2
                    minutes, stirring constantly until
                    aromatic.<br>
                    <span style="font-weight: bolder;"> 4.</span>Then add the milk to the pan and stir well. Set heat to
                    medium-high.<br>
                    <span style="font-weight: bolder;"> 5.</span> Let the milk come to a boil, this will take around
                    10-12
                    minutes. Stir in between so that milk
                    doesn't stuck to the bottom of the pan.<br>
                    <span style="font-weight: bolder;"> 6.</span> Once the milk has come to a boil, lower the heat to
                    low
                    and let the kheer cook for around 25
                    minutes on low heat. Stir every 2 minutes or so. The milk will reduce considerably after 25 minutes
                    and the kheer would look thick and the rice will be completely cooked. If you want super thick
                    kheer, cook for 15 more minutes at this point.<br>
                    <span style="font-weight: bolder;"> 7.</span> Add in the sugar and mix. Also add in the nuts.<br>
                    <span style="font-weight: bolder;"> 8.</span> Cook the kheer for 5 more minutes after adding the
                    sugar
                    and nuts. The sugar should dissolve
                    completely. Don't worry if your kheer doesn't look very thick at this point. It will continue to
                    thicken as it cools down.<br>
                    <span style="font-weight: bolder;"> 9.</span> Remove pan from heat. Stir in rose water (if using).
                    Garnish with more nuts and serve kheer warm
                    or chilled. I love mine chilled and serve it after chilling it in the refrigerator for 4 to 5 hours.
                </p>





            </div>
        </div>
    </section>





    <footer class="mt-5 py-5"> <!--footer------->
        <div class="row container mx-auto pt-5" style="display: flex;
        justify-content: space-between;">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="../logo.jpg" alt=""
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
                    <img src="../payment.png" alt="">

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
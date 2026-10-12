<?php
// Foodie recipe page: fishbiryani. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish</title>

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
                <img class="img-fluid w-100 pb-1" src="../assets/images/recipes/fish_biryani.jpg" id="MainImg"
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
                <h6>Fish Biryani</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>

                    <b>1.Fish:</b> Use any firm-fleshed fish for fish biryani. <br>
                    <b>2.Sella Basmati Rice:</b> Sella Basmati rice is a variety of Basmati rice that is parboiled and
                    tends to be more fluffy and separate when cooked. If unavailable, you can use regular Basmati rice.
                    Adjust cooking time accordingly. <br>
                    <b>3.Onions: </b>I am using thinly sliced yellow onions to create the base and garnish for
                    biryani.Non-coated fried onion can be a great substitute and it cuts down the prep time. For the
                    best taste, fry your onions at home, Sis. 😉 <br>
                    <b>4.Tomatoes:</b> No canned tomatoes in biryani, Sis. If you don't have them in your fridge, make a
                    trip to your local grocery store or grow your own lol. Only use fresh tomatoes or no biryani.
                    <b>5.Plain Yogurt:</b> Full-fat plain yogurt. No Greek or other substitute. I have never cooked
                    biryani with lactose-free yogurt. You do whatever fits your dietary needs. <br>
                    <b>6.Green Chilies:</b> I am using serrano peppers for this recipe. Jalapenos or any other milder
                    chili would work great. Adding none works as well. <br>
                    <b>7.Cilantro and Mint Leaves:</b> Cilantro also known as coriander leaves and mint are key herbs
                    for traditional biryani. Use both, or one but don't make it none. <br>
                    <b>8.Ginger-Garlic Paste:</b> Use grated equal parts of fresh ginger and garlic cloves if you do not
                    have the paste. Granulated ginger and garlic do not belong in this recipe. <br>
                    <b>9.Saffron Strands:</b> Saffron adds color and aroma. If unavailable, use a pinch of powder in
                    warm water and a splash of rose water. <br>
                    <b>10.Ghee or Oil:</b> I am using olive oil to fry the onion and cook the curry. Ghee is a good
                    substitute.
                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/zXTJNbMfQwI?si=OpPE1yp-HQgyUily">Fish Biryani</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    <b>Fish Biryani Masala</b><br>
                    Dry roast cumin seeds, coriander seeds, cinnamon stick, cloves, green cardamom pods, black cardamom
                    pod, fennel seeds, black peppercorns, in a pan until fragrant. Allow it to cool.
                    Grind the cooled roasted spices into a fine powder using a spice grinder. Mix in Kashmiri chili
                    powder, turmeric powder, and salt. Adjust seasoning to taste. This spice blend is now ready to be
                    used for marinating the fish for biryani. <br>
                    <b>Marinate the fish</b> <br>
                    Mix the fish pieces with yogurt, Biryani spice blend, half of the chopped mint and cilantro leaves.
                    Let it marinate for 30 minutes. <br>
                    <b>Parboil the rice</b> <br>
                    In a large pot, bring 6 cups water to a boil along with some salt. Add the soaked rice and cook
                    until it's 70% done. It takes about 6-8 minutes on medium-high heat. Drain the water and set the
                    rice aside. <br>
                    <b>Fry the onions</b> <br>
                    In a separate pan, heat oil and fry the sliced onions until golden brown. Remove half for later use
                    and leave the rest in the pan. <br>
                    <b>Cook the fish curry</b> <br>
                    <b>1.</b>In the same pan with the fried onions, add ginger garlic paste. Sautee for about a minute
                    on medium heat. Add chopped tomatoes and green chilies. Cook until tomatoes soften. <br>
                    <b>2.</b>Add marinated fish and let it cook for a few minutes on each side until it's cooked.
                    Transfer the fish gently to a plate from the curry and set it aside. If the curry is too runny, cook
                    on medium heat until slightly thicker consistency. <br>
                    <b>Layering</b> <br>
                    <b>1.</b>In a heavy-bottomed pot, start layering. Begin with a thin layer of rice, then add some
                    cooked curry, half fish pieces, fried onions, remaining chopped coriander and mint leaves, and a few
                    saffron-infused water drops. Repeat the layer. <br>
                    <b>2.</b>Top the layer with slices of tomatoes and lemon. Drizzle one to two tablespoons of ghee if
                    your heart desires. Seal the pot with a tight lid or aluminum foil. <br>
                    <b>Cover and cook</b> <br>
                    <b>1. </b> Heat a large Cast Iron Skillet or Tava on medium heat. Place the pot on Tava or Skillet
                    to diffuse the heat. Turn the heat down to low. Steam(Dum) on low heat for 20 minutes. Remove the
                    pot from the heat and let it rest for 5 minutes. <br>
                    <b>2. </b>To Bake in the oven (Dum), layer curry, fish, and rice in an oven-safe pot like a Dutch
                    oven or disposable aluminum tray. Cover the pot and Bake the Biryani at 365 F for 25 minutes. <br>
                    <b>3. </b>To serve, gently slide the spatula on one side of the pot and gently bring the rice and
                    fish to the top. Remove the biryani gently on a platter. Serve hot with Raita (yogurt sauce) or
                    salad.
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
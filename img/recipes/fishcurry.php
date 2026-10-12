<?php
// Foodie recipe page: fishcurry. PHP wrapper preserves the original recipe markup.
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
                <img class="img-fluid w-100 pb-1" src="../assets/images/recipes/fish_curry.jpg" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_curry.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_curry.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_curry.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_curry.jpg" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Fish Curry</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>

                    <b>Fish –</b> I have used cod but almost any fish like haddock, tilapia, seabass will work for this
                    dish. I like using white fish. <br>
                    <b>Curry powder – </b>Always pick a good brand of curry powder. You can find these at most
                    supermarkets these days in the spice aisle. You can also make your own curry powder, in fact, you
                    probably already have the spices you need in your pantry. I like my curries red so I use fewer
                    teaspoons turmeric in my curry powder more chili powder. <br>
                    <b>Coconut milk –</b> Milk will keep it light while coconut cream will be too thick for fish. And if
                    coconut cream is all you have used only 1/4 cup and add some water. <br>
                    <b>Cilantro –</b> Is the herb of choice with most Indian dishes but you can also use parsley.

                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/Pu6ki9y9Nug?si=tRwmCNkfskPiH1g_">Fish Curry</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    • Wash, remove scale and clean the fish under clean running water. Then cut the fish into 4 pieces.
                    Pat dry with paper towel. <br>
                    <b>Pro tip –</b> Depending on the type of fish you use, you may have different size pieces of fish.
                    My fish pieces were each approximately 5 to 6-inches which serves 4 as we are four in the family.
                    <br>
                    • In a pan or skillet, over medium to low heat, add the oil and garlic. Saute for 30 sec. Then, add
                    the curry powder, cayenne, or paprika – saute for another 30 seconds. <br>
                    <b>Pro tip –</b> Keep the heat low as necessary to prevent the garlic and spices from burning.
                    • Next, add the coconut milk – and bring to a boil. Season with salt and pepper. Followed by
                    cilantro or parsley. <br>
                    <b>Pro tip –</b> If the heat is high the water will evaporate quickly. So, you can add 1/4 to 1/2
                    cup water if necessary. <br>
                    • Cover and cook on medium heat for 5 minutes. Open, and gently lay the fish pieces in the gravy.
                    Pro tip – We partially cook the gravy first to prevent the fish from overcooking. <br>
                    Cover and cook for 4 minutes on one side. Flip the pieces and cook for another 3 to 4 minutes on the
                    other side or until the fish is cooked. Turn the heat off. <br>
                    Garnish with more fresh cilantro. Serve over steamed rice. <br>
                    <b>• Variations</b> <br>
                    You can deep fry the fish pieces before you add them to the curry. <br>
                    If you don’t have these spices you can make a quick fresh masala with green chillies or red
                    chillies, garlic cloves, coriander, cumin, and turmeric in a mortar and pestle to make a spicier
                    curry. Stir fry the paste in oil, then add the fish fillets and simmer with a cup of water until
                    done.



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
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog/blog_img1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog/blog_img2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog/blog_img3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="../assets/images/blog/blog_img4.jpg" alt="">
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
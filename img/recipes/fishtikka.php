<?php
// Foodie recipe page: fishtikka. PHP wrapper preserves the original recipe markup.
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
                <img class="img-fluid w-100 pb-1" src="../assets/images/recipes/fish_tikka.jpg" id="MainImg"
                    alt=""><!--image -fluid is used for responsive-->
                <div class="small-img-group"> <!--MainImg is used for javasc-->
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_tikka.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_tikka.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_tikka.jpg" width="100%" class="small-image" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/images/recipes/fish_tikka.jpg" width="100%" class="small-image" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Fish Tikka</h6>

                <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
                    <br>
                    <b>▢ Fish:</b> <br> Cut fish fillets into roughly 1.5 inch chunks. You can use any of these fish for
                    this ▢ recipe- Mahi-Mahi, Cod, Tilapia, Salmon, Swordfish etc. If using frozen fish, read
                    instructions in 'Tips' section. <br>
                    <b>▢ Onions and Peppers:</b> <br>Cut bell peppers or rainbow peppers into 1-1.5 inch chunks, about
                    the same size as the fish. Cut onion into large chunks and separate the layers. You can switch the
                    onions and peppers for squash, zucchini, cherry tomatoes or mushrooms if you like. <br>
                    <b>▢ Tandoori Marinade:</b> <br> Yogurt, oil, crushed ginger and garlic (or grated), lime, salt,
                    turmeric, garam masala, ground coriander, cumin, kashmiri red chili powder (or paprika + cayenne)
                    and Kasoori methi (dried fenugreek leaves).



                </p><br>
                <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
                <i class="fa-solid fa-utensils"></i>
                <a href="https://youtu.be/rYsXPTfJ614?si=1ppSNjduIP3mV0Vd">Fish Tikka</a><br>
                <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

                    <b>Step 1: Marinate Fish</b> <br>
                    In a mixing bowl combine oil, crushed ginger and garlic, spices, lime juice to make a quick
                    marinade.Mix well. Toss fish pieces, onions and pepper chunks in the marinade till everything gets
                    coated well.The best part about this recipe is that the fish absorbs the flavors of the marinade
                    quickly so you can cook it right-away. <br>
                    <b>Step 2: Cook Fish in an AirFryer, Crisplid or Broiler</b> <br>
                    You can cook Fish Tikka using an Airfryer, Oven broiler or the new Mealthy Crisplid. Checkout the
                    step by step directions for all three methods below: <br>
                    <b>Options 1: How to Cook Fish in an Airfryer</b> <br>
                    Line the drip pan with aluminum foil for easy clean-up. This is optional though. Place the fry
                    basket in the drip pan.Arrange the fish, onions and peppers in the basket in a single layer. Don't
                    overcrowd them otherwise they won't crisp up while cooking. <br>

                    Insert the basket back. Using the temperature button set 360°F. Set the timer for for 8-10 mins,
                    depending on thickness of fish. (1 inch= 8 mins; 1.5 inch=10mins)
                    As an optional step, half-way through cooking after 4 minutes, you can baste the tikka pieces with
                    oil, or spray lightly with cooking oil . This makes the exterior texture extra-crisp. Push the
                    basket back in and cook for another 4 minutes. <br>
                    <b>Option 2: Fish Tikka Using Mealthy Crisplid</b> <br>
                    Place the trivet in the cooking pot in your pressure cooker pot. Place the mesh basket on top of the
                    trivet.
                    Layer the fish, onion and capsicum evenly. Avoid overcrowding them to get that golden crisp
                    exterior. Place the crisplid on the cooker and cook for 8 minutes at 200°C (400°F ).
                    As an optional step, half-way through cooking after 4 minutes, you can baste the tikka pieces with
                    oil, or spray lightly with cooking oil. This makes the exterior texture extra-crisp. Place the lid
                    back on and cook for another 4 minutes.Follow the same process for the 2nd batch. It takes me two
                    batches for a pound of fish, but since I don't have to wait for any pre-heating, it all gets done in
                    30 minutes.
                    <b>Option 3: Oven Recipe</b> <br>
                    Turn on the oven broiler. Place the marinated fish, onions and peppers on an aluminum or parchment
                    lined baking sheet. <br>

                    Place the baking sheet on the top rack and cook for 7-8 minutes, or until the fish cooks through and
                    turns opaque. <br>
                    <b>Serving Suggestion: Appetizer and Low-Carb Meal</b> <br>
                    <b>▢</b> Fish Tikka is most commonly served as an appetizer with a popular Indian herbal dip called
                    Cilantro Chutney. <br>

                    <b>▢</b> The chutney's fresh and zesty flavors provide a delicious contrast to the earthy and spicy
                    flavors in the fish, onions and peppers. Check out the easy blender recipe for making Cilantro
                    Chutney!
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
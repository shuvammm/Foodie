<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css">

   
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>

    <!--------------------------------Nav Bar---------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> <!--py means padding-->
        <div class="container">
            <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="assets/images/branding/logo.jpg"
                alt=""><span style="margin-left: 7px; font-weight: bold;">Foodie </span><!--logo-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span <i id="bar" class="fa fa-bars" aria-hidden="true"></i>></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"> <!--ml means margin from left auto-->

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Recipies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    
                    <li><div onclick="window.location.href='home_login.php';" ><i class="fa-solid fa-user"></i></div></li>
                    




            </div>
        </div>
    </nav>
    <section id="home"> <!--Home-------------------->
        <div class="container">
            <h5 style="color: white;">Stress less &</h5>
            <h1><span style="color: #00ff00;">Enjoy</span></h1>
            <p style="color: white;">Our Best Recipies made for everyday life</p>
            <button onclick="window.location.href='shop.php';">Explore Now</button>
        </div>
    </section>
    <br>
    <section id="brand" class="container">

    </section>
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-12 p-0" onclick="window.location.href='fish.php';">
                <img class="img-fluid" src="assets/images/banners/fish.jpg" alt="">
                <div class="details">
                    <h2 style="color: white;text-align: center;margin-left: 30%;">Fish Dishes</h2>
                    <button style="color: white; margin-left: 30%;" class="text-uppercase">Learn to cook</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0" onclick="window.location.href='paneer.php';">
                <img class="img-fluid" src="assets/images/banners/panner.jpg" alt="">
                <div class="details">
                    <h2 style="color: white; text-align: center;margin-left: 30px;">Paneer Dishes</h2>
                    <button style="color: white;" class="text-uppercase">Learn to cook</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0" onclick="window.location.href='chicken.php';">
                <img class="img-fluid" src="assets/images/banners/chicken.jpg" alt="">
                <div class="details">
                    <h2 style="color: white; text-align: center; margin-right: 25%;">Chicken Dishes</h2>
                    <button style="color: white; margin-right: 35%;" class="text-uppercase">Learn to cook</button>
                </div>
            </div>
        </div>
    </section>
    <section id="featured" class="my-5 py-5">
        <div class="container text-center mt-5 py-5">
            <h3>Popular Recipies</h3>
            <hr class="mx-auto">
            <p>Here you can check out our popular recipies !! Eat healthy, stay healthy..</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div onclick="window.location.href='recipes/biryani.php';" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/chicken_biryani.jpg" alt=""
                    style="height: 400px;width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                <h5 class="p-name" style="font-family: 'Times New Roman', Times, serif;font-size:22px">Chicken Biryani </h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/momo.php';" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/momo.jpg" alt=""
                    style="height: 400px;width: 400px;  border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Momo</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/sushi.php';" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/sushi.jpg" alt=""
                    style="height: 400px;width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Sushi</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/lobster.php';" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/lobster.jpg" alt=""
                    style="height: 400px;width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Lobster</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
        </div>


    </section>
    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>Don't waste your time</h4>
            <h1>Browse My Easy, Healthy Recipes</h1>
            <button class="text-uppercase" onclick="window.location.href='fish.php';">Find Recipies</button>
        </div>
    </section>


    <section id="clothes" class="my-5"> <!--couple watchess----------------------------------->
        <div class="container text-center mt-5 py-5">
            <h3>Veg Recipies</h3>
            <hr class="mx-auto">
            <p>Here you can check out our popular veg items !!</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div onclick="window.location.href='recipes/idle.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/idle.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Idli</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/pasta.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/pasta.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Pasta</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/dhosha.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/dhosha.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Dosa</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/mixed_salad.php'"
                class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/mixed salad.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Mixed Salad</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
        </div>


    </section>

    <section id="watches" class="my-5"> <!--   smart   watches----------------------------------->
        <div class="container text-center mt-5 py-5">
            <h3>Sweet Recipies</h3>
            <hr class="mx-auto">
            <p>Here you can check out our sweet recipies !!</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div onclick="window.location.href='recipes/modak.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/modak.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Modak</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/gajar_ka_halwa.php'"
                class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/gajar ka halwa.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Gajar ka Halwa</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/kheer.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/kheer.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif;font-size:22px">Kheer</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/pancake.php'" class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="assets/images/recipes/pan cake.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                <h5 class="p-name"style="font-family: 'Times New Roman', Times, serif; font-size:22px">Pan Cake</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
        </div>


    </section>




    <footer class="mt-5 py-5"> <!--footer------->
        <div class="row container mx-auto pt-5" style="display: flex;
        justify-content: space-between;">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="assets/images/branding/logo.jpg" alt=""
                    style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;">
                <p class="pt-3">
                    Welcome , Namaste!!</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="paneer.php">Panner</a></li>
                    <li><a href="chicken.php">Chicken</a></li>
                    <li><a href="fish.php">Fish</a></li>
                    <li><a href="shop.php">Exlpore More</a></li>

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
                    <img class="img-fluid w-25 h-100 m-2" src="insta/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="insta/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="insta/5.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="insta/4.jpg" alt="">
                </div>
            </div>-->
        </div>

        <div class="copyright mt-5"> <!--copyright---------------->
            <div class="row container mx-auto" style="display: flex;
            justify-content: space-between;">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="assets/images/ui/payment.png" alt="">

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
</body>

</html>
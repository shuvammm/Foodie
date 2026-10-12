<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paneer Items</title>
    <script src="script_api.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-control {
            height: 50px;
            padding: 7px;
            text-align: center;
            font-weight: 900;
            margin-left: 500px;
        }
    </style>
</head>

<body>

    <!--------------------------------Nav Bar---------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> <!--py means padding-->
        <div class="container">
            <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="logo.jpg"
                alt=""><span style="margin-left: 7px;">Foodie </span><!--logo-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span <i id="bar" class="fa fa-bars" aria-hidden="true"></i>></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"> <!--ml means margin from left auto-->

                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="shop.php">Recipies</a>
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




            </div>
        </div>
    </nav>

    <div class="container2" style="margin-top: 25px;">


        <div class="row">
            <div class="col-sm-4 mb-4" style="color: rebeccapurple; margin-top: 70px; ">
                <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()"
                    placeholder="Paneer Items...">
            </div>
        </div>


    </div>


    <section id="clothes" class="my-5 "> <!--couple watchess----------------------------------->

        <div id="myProducts" class="row mx-auto container-fluid row">
            <div onclick="window.location.href='recipes/paneerkorma.php'"
                class="product text-center col-lg-3 col-md-4 col-12 card">
                <img class="img-fluid mb-3" src="panner.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name card-title">Paneer Korma</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/paneertikka.php'"
                class="product text-center col-lg-3 col-md-4 col-12 card ">
                <img class="img-fluid mb-3" src="Fish/panner_tikka.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name card-title">Paneer Tikka</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/paneerbutter.php'"
                class="product text-center col-lg-3 col-md-4 col-12 card">
                <img class="img-fluid mb-3" src="Fish/panner_butter_masala.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name card-title">Paneer Butter Masala</h5>

                <button class="buy-btn">View Recipie</button>
            </div>
            <div onclick="window.location.href='recipes/paneerpasanda.php'"
                class="product text-center col-lg-3 col-md-4 col-12 card ">
                <img class="img-fluid mb-3" src="paneerpasanda.jpg" alt=""
                    style="height: 400px; width: 400px; border-radius: 20px;">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                <h5 class="p-name card-title ">Paneer Pasanda</h5>

                <button class="buy-btn">View Recipie</button>
            </div>



        </div>


    </section>



    </div>
    </div>





    <footer class="mt-5 py-5"> <!--footer------->
        <div class="row container mx-auto pt-5" style="display: flex;
        justify-content: space-between;">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="logo.jpg" alt=""
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
                    <img src="payment.png" alt="">

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
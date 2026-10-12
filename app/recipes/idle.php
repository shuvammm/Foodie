<?php
// Foodie recipe page: idle. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Idli</title>

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
      <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="../assets/images/logo.jpg" alt=""><span
        style="margin-left: 7px;">Foodie </span><!--logo-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <img class="img-fluid w-100 pb-1" src="../assets/images/idle.jpg" id="MainImg" alt=""><!--image -fluid is used for responsive-->
        <div class="small-img-group"> <!--MainImg is used for javasc-->
          <div class="small-img-col">
            <img src="../assets/images/idle.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/idle.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/idle.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/idle.jpg" width="100%" class="small-image" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-12">
        <h6>Idli</h6>

        <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
          <br>



          ▢1/2 cup and 2 tablespoon basmati rice<br>
          ▢1/4 tablespoon fenugreek seeds<br>
          ▢1 and 1/4 tablespoon sesame oil<br>
          ▢1/3 cup and 2 teaspoon urad dal<br>
          ▢salt As required<br>
          ▢water As required<br>


        </p><br>
        <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
        <i class="fa-solid fa-utensils"></i>
        <a href="https://youtu.be/nIoIzarlQ1k?si=P_sdecvhWRGVxVDm">Idli</a><br>
        <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

        <p>
          <span style="font-weight: bold; font-size: 16px;"> 1.</span> Soak the rice & dal and grind into a paste &
          combine
          To prepare this popular South Indian recipe, wash rice and urad dal separately until the water runs clean and
          add fenugreek seeds to the rice. Soak it in water for 4-6 hours. Soak the urad dal too for the same amount of
          time. Drain all the water from the urad dal and grind it to a fine paste. Add water accordingly. Grind the
          rice to a coarse paste (add water as needed) and then mix both the pastes together in a large bowl and whisk
          them well. Make sure that the consistency is thick. <br><br>

          <span style="font-weight: bold; font-size: 16px;"> 2.</span>Let the batter ferment, then add salt
          Now, the idli batter needs to be well-fermented. This step is very important to get soft and fluffy idlis.
          Keep the batter in a warm place to ferment. Once the batter has risen, add salt to it and whisk to mix it
          well.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 3.</span>Transfer the idli batter in the idli stand
          Grease the idli stand with oil and take a ladleful of batter and fill the idli mould. Add ½ cup of water in
          the idli steamer and let it boil. Put the idli stand inside and close the lid. Let the steam build for 8-10
          minutes before switching off the gas.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 4.</span>Wait for the utensil to cool a bit before scooping
          the idlis out
          If you are using a cooker, use it without a vent and steam it for 10 minutes and then switch the gas off. In
          both cases, wait till the steam is released before you take the idli stand out. Wait for another 5 minutes and
          then use a sharp knife to scoop the idlis out. Serve warm with coconut chutney and sambhar.<br><br>

        </p>
        </p>





      </div>
    </div>
  </section>





  <footer class="mt-5 py-5"> <!--footer------->
    <div class="row container mx-auto pt-5" style="display: flex;
    justify-content: space-between;">
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <img src="../assets/images/logo.jpg" alt="" style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;">
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
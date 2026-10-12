<?php
// Foodie recipe page: dhosha. PHP wrapper preserves the original recipe markup.
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dosa</title>

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
      <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="../assets/images/branding/logo.jpg" alt=""><span
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
        <img class="img-fluid w-100 pb-1" src="../assets/images/recipes/dhosha.jpg" id="MainImg"
          alt=""><!--image -fluid is used for responsive-->
        <div class="small-img-group"> <!--MainImg is used for javasc-->
          <div class="small-img-col">
            <img src="../assets/images/recipes/dhosha.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/recipes/dhosha.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/recipes/dhosha.jpg" width="100%" class="small-image" alt="">
          </div>
          <div class="small-img-col">
            <img src="../assets/images/recipes/dhosha.jpg" width="100%" class="small-image" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-12">
        <h6>Dosa</h6>

        <p><span style="font-size: 30px; font-weight: bold;">Ingredients</span>
          <br>





          ▢ 3/4 cup Parboiled Rice (idli-dosa rice) <br>
          ▢ 3/4 cup Regular Rice <br>

          ▢ 1/2 cup Whole Urad Dal (without skin) or Split Urad Dal (black lentils)<br>



          ▢ 1/4 teaspoon Fenugreek Seeds (methi dana)<br>

          ▢ 1/2 tablespoon Chana Dal (gram lentils), optional <br>

          ▢ Water, as needed<br>

          ▢ Salt to taste<br>

          ▢ Oil, for shallow frying<br>






        </p><br>
        <span style="font-size: 20px; font-weight: bold;">Watch Video</span><br>
        <i class="fa-solid fa-utensils"></i>
        <a href="https://youtu.be/80a6dSq0aOA?si=npAo9EavUs6dk235">Dosa</a><br>
        <p><span style="font-size: 30px; font-weight: bold;">Instructions</span><br>

        <p>
          <span style="font-weight: bold; font-size: 16px;"> 1.</span> Take all the ingredients to prepare the dosa
          batter. Rice, urad dal and fenugreek seeds are the main ingredients. Chana dal is used for getting a golden
          color for Dosa.<br><br>

          <span style="font-weight: bold; font-size: 16px;"> 2.</span>Rinse both types of rice (regular rice and
          parboiled rice) together in water for 3-4 times and soak them in 2 cups of water for 4-5 hours – (Place both
          types of rice in a medium-size bowl and fill it with water till 3/4th height. Rinse the rice by rubbing them
          between your fingertips; the water will turn cloudy. Drain the water and repeat the process 3-4
          times).<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 3.</span>Rinse urad dal and chana dal together in water,
          add fenugreek seeds and soak in 1 cup water for 4-5 hours.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 4.</span>Drain water from urad dal in a small bowl and
          reserve it (it will be used in the next step while grinding the dal). Add drained urad dal, chana dal and
          fenugreek seeds mixture in the medium jar of a mixer grinder<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 5.</span>Add water as needed and grind until smooth and
          fluffy batter (use water reserved in previous step, approx. 1½ cups water will required to grind 1/2 cup dry
          urad dal).<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 6.</span>The batter should be fluffy and not very thick.
          Transfer it to a large container.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 7.</span>Drain water from rice and add them to the same
          mixer grinder jar. Depending on the size of the jar, you can ground the rice in multiple batches.<br><br>

          <span style="font-weight: bold; font-size: 16px;"> 8.</span>Add water as needed and grind until smooth
          texture. Don’t add too much water in a single go; add 1-2 tablespoons water at a time (approx. 1/2 cup water
          will required). Rice requires less water compared to urad dal while grinding. Rice batter will be little
          grainy and will not be as smooth as urad dal batter. Transfer it to the same container having urad dal batter
          in it.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 9.</span>Add salt and mix both batters well using spoon.
          The final batter should not be too thick or too watery. Cover it with plate and leave it at room temperature
          for 8-10 hours or overnight for fermentation. During cold weather, keep the batter in warm place (or inside
          the oven with oven light on) for fermentation.
          <br><br>
          <span style="font-weight: bold; font-size: 16px;"> 10.</span>During fermentation, the batter volume would
          increase and the tiny bubbles would appear on the surface when you stir it with a spoon. Stir the batter with
          a spoon. If it looks too thick, add few tablespoons water and mix well until it has attained pouring
          consistency (little watery than idli batter).<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 11.</span>Heat non-stick tava or iron tava (skillet or
          griddle) over medium flame. Sprinkle few drops of water on the surface. If water drops sizzle and evaporate
          within few seconds, tava is hot enough to cook. Apply 1/2-teaspoon oil on the griddle and spread it evenly
          with a spatula or a clean wet cloth. Take a ladle full of batter, pour it over the surface of tawa, swirl it
          as thin as possible in a spiral motion by rotating ladle and make it into round shape of approx. 7-8 inch
          diameter circle.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 12.</span>Apply 1-teaspoon oil (or ghee / butter for crispy
          dosa) around the edges of dosa (or spread oil/ghee/butter evenly with brush for crispy dosa).<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 13.</span>Cook until the bottom surface turns light brown
          and the edges start to come upward, it will take around 2-minutes.<br><br>
          <span style="font-weight: bold; font-size: 16px;"> 14.</span>Flip it and cook for a minute. If you are making
          thin dosa (as shown in the photo), you do not need to cook the other side. Transfer it to a plate. Wipe tava
          with clean wet cloth before making next dosa (this is to prevent dosa from sticking to Pan) and repeat the
          process from step-11 to step-13 for remaining batter. Hot and crispy plain dosa is ready.<br><br>


        </p>
        </p>





      </div>
    </div>
  </section>





  <footer class="mt-5 py-5"> <!--footer------->
    <div class="row container mx-auto pt-5" style="display: flex;
    justify-content: space-between;">
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <img src="../assets/images/branding/logo.jpg" alt="" style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;">
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="about.css">
  <script src="blog.js"></script>
  <style>
    html {
  background: #f5f7f8;
  font-family: system-ui;
  -webkit-font-smoothing: antialiased;
  padding: 20px 0;
}

header {
  width: 90%;
  max-width: 1240px;
  margin: 0 auto;
}
.band {
  width: 90%;
  max-width: 1240px;
  margin: 0 auto;
  
  display: grid;
  
  grid-template-columns: 1fr;
  grid-template-rows: auto;
  grid-gap: 20px;
  
  @media (min-width: 30em) {
    grid-template-columns: 1fr 1fr;
  }
  
  @media (min-width: 60em) {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  background: white;
  text-decoration: none;
  color: #444;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  min-height: 100%;
  
  // sets up hover state
  position: relative;
  top: 0;
  transition: all .1s ease-in;
    
  &:hover {
    top: -2px;
    box-shadow: 0 4px 5px rgba(0,0,0,0.2);
  }
  
  article {
    padding: 20px;
    flex: 1;
    
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  h1 {
    font-size: 20px;
    margin: 0;
    color: #333;
  }
  
  p {
    flex: 1;
    line-height: 1.4;
  }
  
  span {
    font-size: 12px;
    font-weight: bold;
    color: #999;
    text-transform: uppercase;
    letter-spacing: .05em;
    margin: 2em 0 0 0;
  }
  
  .thumb {
    padding-bottom: 60%;
    background-size: cover;
    background-position: center center;
  }
}

.item-1 {
  @media (min-width: 60em) {
    grid-column: 1 / span 2;
    
    h1 {
      font-size: 24px;
    }
  }
}
    

  </style>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> <!--py means padding-->
    <div class="container">
      <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="logo.jpg" alt=""><span
        style="margin-left: 7px ;font-weight: bold;">Foodie </span><!--logo-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span <i id="bar" class="fa fa-bars" aria-hidden="true"></i>></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto"> <!--ml means margin from left auto-->

          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.php">Recipies</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog.php">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contacts.php">Contact Us</a>
          </li>
          <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
           </li>

          <li>
                        <div onclick="window.location.href='home_login.php';"><i class="fa-solid fa-user"></i></div>
           </li>




      </div>
    </div>
  </nav>
  
  <!--ratings-->
  <div class="container_rating" >
    <div class="row" >
        <div class="col-lg-1"  >
            <div class="card_rating" style="margin-top: 100px;" >
                <div class="face front-face" >
                    <img src="logo.jpg"
                        alt="" class="profile">
                    <div class="pt-3 text-uppercase name">
                        Foodie
                    </div>
                    <div class="designation" ><mark style="border-radius: 4px">Who Are we </mark></div>
                </div>
                <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <div class="testimonial">
                    Foodie is here to help you cook delicious meals with less stress and more joy. We offer recipes and cooking advice for home cooks, by home cooks. Helping create “kitchen wins” is what we’re all about.
    
      Foodie was founded in 2024 by our team as a home cooking blog to record her favorite family recipes. Today, Foodie  has grown into a trusted resource for home cooks with more than 100 tested recipes, guides, and meal plans, drawing over a huge amount readers each month from around the world. <br><br>
     <mark mark style="border-radius: 4px"> Team members:</mark> &nbsp; Shuvam Golder | Pritam Golder | Arpan Debnath |<br>Arpita Paul | Anuvab Bhowmick
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
<br>
<div class="container_rating">
  <div class="row"  >
      <div class="col-lg-1" >
          <div class="card_rating">
              <div class="face front-face">
                  <img src="logo.jpg"
                      alt="" class="profile">
                  <div class="pt-3 text-uppercase name">
                      Foodie
                  </div>
                  <div class="designation"><mark style="border-radius: 4px">Recipe Development & Testing</mark></div>
              </div>
              <div class="face back-face">
                  <span class="fas fa-quote-left"></span>
                  <div class="testimonial">
             
    
                        There are three things we think about when deciding if a recipe is good enough to go on Simply Recipes:<br>
    
                        <b>▢ First, does it work?</b> Recipes need to be easy to follow and provide reliable results, every time.<br><br>
    
                         <b>▢ Second, is it delicious? </b>Does the dish make us smile inside and out? Do we want to eat the whole batch by ourselves? <br><br>
    
                           <b>▢ Third, is it worth the effort?</b> Do we want to make it again (and again and again)?<br>
    
    
    
    
                  </div>
                  <span class="fas fa-quote-right"></span>
              </div>
          </div>
      </div>
      
      
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
                    <li><a href="paneer.html">Panner</a></li>
                    <li><a href="chicken.html">Chicken</a></li>
                    <li><a href="fish.html">Fish</a></li>
                    <li><a href="shop.html">Exlpore More</a></li>

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

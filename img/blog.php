<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>

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
  <link rel="stylesheet" href="blog.css">
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
/* ribbon*/
/* HTML: <div class="ribbon">Your text content</div> */
/* HTML: <div class="ribbon">Your text content</div> */
.ribbon {
  font-size: 28px;
  font-weight: bold;
  color: #fff;
}
.ribbon {
  --s: 1.8em; /* the ribbon size */
  --d: .6em;  /* the depth */
  --c: .8em;  /* the cutout part */
  
  padding: 0 calc(var(--s) + 2*var(--d) + .5em) var(--d);
  line-height: 1.8;
  background: 
    linear-gradient(90deg,#0004 var(--d),#0000 0 calc(100% - var(--d)),#0004 0) 
     50% 0/calc(100% - 2*(var(--s) + var(--d))) calc(100% - var(--d)),
    conic-gradient(from 135deg at 50% -50%,#0004 25%,#0008 0)
     var(--s)              100%/calc(3*var(--d)) var(--d),
    conic-gradient(from 135deg at 50% -50%,#0004 25%,#0008 0)
     calc(100% - var(--s)) 100%/calc(3*var(--d)) var(--d);
  background-repeat: no-repeat;
  background-color: #CC333F; /* the main color */
  clip-path: polygon(0 0,calc(var(--s) + var(--d)) 0,calc(var(--s) + var(--d)) var(--d),calc(var(--s) + 2*var(--d)) var(--d),calc(var(--s) + 2*var(--d)) 0,calc(100% - var(--s) - 2*var(--d)) 0,calc(100% - var(--s) - 2*var(--d)) var(--d),calc(100% - var(--s) - var(--d)) var(--d),calc(100% - var(--s) - var(--d)) 0,100% 0,calc(100% - var(--c)) calc(50% - var(--d)/2),100% calc(100% - var(--d)),calc(100% - var(--s)) calc(100% - var(--d)),calc(100% - var(--s)) 100%,calc(100% - var(--s) - 3*var(--d)) 100%,calc(100% - var(--s) - 3*var(--d)) calc(100% - var(--d)),calc(var(--s) + 3*var(--d)) calc(100% - var(--d)),calc(var(--s) + 3*var(--d)) 100%,var(--s) 100%,var(--s) calc(100% - var(--d)),0 calc(100% - var(--d)),var(--c) calc(50% - var(--d)/2));
  width: fit-content;
}
    

  </style>
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top"> <!--py means padding-->
    <div class="container">
      <img style="height: 40px; width: 40px; border: 2px solid red; border-radius: 50%;" src="assets/images/branding/logo.jpg" alt=""><span
        style="margin-left: 7px; font-weight: bold; ">Foodie </span><!--logo-->
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
            <a class="nav-link active" href="#">Blog</a>
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

          <li>
                        <div onclick="window.location.href='home_login.php';"><i class="fa-solid fa-user"></i></div>
           </li>




      </div>
    </div>
  </nav>
  <!--cards-->
  <header>
    <h1>Cool Articles</h1>
  </header>
  <div class="band">
    <div class="item-1">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/banners/food_day.jpg);"></div>
        <article>
          <h1>International Food Day : 14th october</h1>
          <span>Observed by :All Un Member States</span>
        </article>
      </div>
    </div>
    <div class="item-2">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/banners/healthy_food.jpg);"></div>
        <article>
          <h1>Why Are Healthy Eating Habits Important?</h1>
          <p>A Healthy Diet Can Help Prevent Disease</p>
          <p>Food Choices Affect Your Mental Health</p>
          <p>Eat a Healthy Diet and You May Lose Weight</p>
          <span>By WHO (world health organization)</span>
       </article>
      </div>
    </div>
    <div class="item-3">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/recipes/salad.jpg);"></div>
        <article>
          <h1>Crispy Rice Salad with Cucumbers and Herbs</h1>
          <p>"This was insanely delicious. Full of flavor, texture, color. The crunchy cool cucumbers complement the red curry spice perfectly. Hubs and I LOVE rice already, so had to try this dish and it was a hit!" </p>
          <span>Melody Nieves</span>
        </article>
      </div>
    </div>
    <div class="item-4">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/blog/blog_img2.jpg);"></div>
        <article>
          <h1>Healthy Diet</h1>
          <p>A healthy routine incorporates habits that benefit your physical and mental well-being. Here are some key elements to consider: <br>

<b>Diet:</b><br>

Eat plenty of fruits, vegetables, and whole grains: These foods are packed with essential vitamins, minerals, and fiber that your body needs to thrive. <br>
Choose lean protein sources: Include lean meats, fish, poultry, beans, and lentils in your diet for essential nutrients and feeling satisfied. <br>
Stay hydrated: Drink plenty of water throughout the day to keep your body functioning optimally.
</p>
          <span>Kezz Bracey</span>
        </article>
      </div>
    </div>
    <div class="item-5">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/blog/blog_img1.jpg);"></div>
        <article>
          <h1>Major Benefits of Cooking at Home</h1><br><br>
          <p>1.    Homemade food is hygienic<br><br>
          2.    Homemade food is healthier<br><br>
          3.    Homemade food is low in calories<br><br>
          4.    Homemade food provides a balanced diet<br><br>
          5.    Homemade food is economical<br><br>
          6.    Easier to avoid allergic reactions<br><br>
          </p>
          <span>Rose</span>
        </article>
      </div>
    </div>
    <div class="item-6">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/blog/blog_img3.jpg);"></div>
        <article>
          <h1>Is homemade food hygienic?</h1><br><br><br>
          <p>When you cook at home, you can better control cleanliness, food safety and hygiene. You can use paper towels, for example, to prevent cross-contamination and to reduce the risk of salmonella. In addition, you can check your food with a food thermometer to ensure your meat is cooked to a safe temperature</p>
  
          <span>Marie Gardiner</span>
        </article>
      </div>
    </div>
    <div class="item-7">
      <div class="card">
        <div class="thumb" style="background-image: url(assets/images/blog/blog_img4.jpg);"></div>
        <article>
          <h1>Easy recipes</h1><br><br>
          <p>Quick & Easy Recipes: Is your to-do list getting in the middle of your food dreams? Well, we've always believed that good food is not about long hours in the kitchen. Our quick and easy recipes are perfect for days when you are in no mood of elaborate cooking or to soothe away those untimely hunger pangs. Indulge your senses with these terribly easy recipes and surprise everyone. From rich dips to crisp bites and sinful sweets, our collection of quick & easy appetizers have you covered for any occasion.</p>
          <span>Kendra Schaefer</span>
        </article>
      </div>
    </div>
  </div><br>
  <div class="ribbon"style="font-family: 'Times New Roman', Times, serif;margin-left:38%">&nbsp;&nbsp;&nbsp;&nbsp;Ratings&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <!--ratings-->
  <div class="container_rating">
    <div class="row">
        <div class="col-lg-4">
            <div class="card_rating">
                <div class="face front-face">
                    <img src="assets/images/profiles/profile1.jpg"
                        alt="" class="profile">
                    <div class="pt-3 text-uppercase name">
                        Mike
                    </div>
                    <div class="designation">Indonesia</div>
                    <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                </div>
                <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <div class="testimonial">
                    Love it!  This recipe was a lifesaver!  I made it exactly as written and it was delicious. My family devoured it.  5 stars! -  Sarah B.
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card_rating">
                <div class="face front-face">
                    <img src="https://images.unsplash.com/photo-1614574762522-6ac2fbba2208?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjY2fHxtYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="" class="profile">
                    <div class="pt-3 text-uppercase name">
                        Jeffery Kennan
                    </div>
                    <div class="designation">Canada</div>
                    <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
                </div>
                <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <div class="testimonial">
                    Delicious with a twist!  I added a handful of cherry tomatoes to the pan with the garlic and cooked them until they started to burst.  It gave the sauce a nice sweetness and extra depth of flavor.  Definitely recommend! 
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4">
            <div class="card_rating">
                <div class="face front-face">
                    <img src="assets/images/profiles/profile2.jpg"
                        alt="" class="profile">
                    <div class="pt-3 text-uppercase name">
                        Issac Maxwell
                    </div>
                    <div class="designation">London</div>
                    <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
                </div>
                <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <div class="testimonial">
                    Easy to follow and came together quickly.  The shrimp were cooked perfectly, but the pasta was a bit bland.  Maybe a sprinkle of parmesan cheese on top would do the trick.
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container_rating">
  <div class="row">
      <div class="col-lg-4">
          <div class="card_rating">
              <div class="face front-face">
                  <img src="assets/images/profiles/profile3.jpg"
                      alt="" class="profile">
                  <div class="pt-3 text-uppercase name">
                      Robert Garrison
                  </div>
                  <div class="designation">Germany</div>
                  <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>

                </div>
              </div>
              <div class="face back-face">
                  <span class="fas fa-quote-left"></span>
                  <div class="testimonial">
                  "I followed the recipe exactly, and it turned out amazing. The [cooking technique] really makes a difference in achieving the restaurant's texture."
                  </div>
                  <span class="fas fa-quote-right"></span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="card_rating">
              <div class="face front-face">
                  <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                      alt="" class="profile">
                  <div class="pt-3 text-uppercase name">
                     George
                  </div>
                  <div class="designation">chef, Austria</div>
                  <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
              </div>
              <div class="face back-face">
                  <span class="fas fa-quote-left"></span>
                  <div class="testimonial">
                  "Here's a tip: I [personal tip, e.g., prepped ingredients beforehand, broiled for a crispier finish] and it saved me time/made the dish even better."
                  </div>
                  <span class="fas fa-quote-right"></span>
              </div>
          </div>
          
      </div>
      <div class="col-lg-4">
          <div class="card_rating">
              <div class="face front-face">
                  <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                      alt="" class="profile">
                  <div class="pt-3 text-uppercase name">
                      Antonio Gerg
                  </div>
                  <div class="designation">Africa</div>
                  <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>

                </div>
              </div>
              <div class="face back-face">
                  <span class="fas fa-quote-left"></span>
                  <div class="testimonial">
                  This recipe is a lifesaver for busy weeknights. It was so easy to make and tasted delicious. Perfect for [mention dietary needs it caters to, e.g., vegetarians, gluten-free]
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
                <img src="assets/images/branding/logo.jpg" alt=""
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
                    <img class="img-fluid w-25 h-100 m-2" src="assets/images/blog/blog_img1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="assets/images/blog/blog_img2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="assets/images/blog/blog_img3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="assets/images/blog/blog_img4.jpg" alt="">
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

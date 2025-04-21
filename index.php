<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelZone</title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>HotelZone</span></a>
        <nav class="navbar">
             <a href="#home">home</a>
             <a href="#packages">packages</a>
             <a href="#services">services</a>
             <a href="#gallery">gallery</a>
             <a href="#review">review</a>
             <a href="#contact">contact</a>
             <a href="#book">book</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>





<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="connect.php" method="post">
         <h3>login</h3>
         <input type="email" class="box" placeholder="Enter your email" name="Email">
         <input type="password" class="box" placeholder="Enter your password" name="Password">
         <input type="submit" value="login now" class="btn" name="Login">
         <input type="checkbox" id="remember" name="remember">
         <label for="remember">Remember me</label>
         <p>forgrt password? <a href="#"> click here</a></p>
         <p>don't have and account? <a href="http://127.0.0.1:5500/register.php">register now</a></p>
         <!-- <a href="http://127.0.0.1:5500/register.html"></a> -->
    </form>
</div>



<section class="home" id="home">
    <div class="content">
        <h3>Welcome to A global icon of luxury</h3>
        <p>Dicover new places with us, luxury awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
     <span class="vid-btn active" data-src="vdo4.mp4"></span>
        <span class="vid-btn" data-src="vdo2.mp4"></span>
        <span class="vid-btn" data-src="vdo1.mp4"></span>
        <span class="vid-btn" data-src="vdo3.mp4"></span>
        <span class="vid-btn" data-src="vdo5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="vdo4.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>








<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>

    </h1>

    <div class="box-container">
        <div class="box">
            <img decoding="async" src="kathmandu.jpg" alt="" id="btnKTM">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Kathmandu </h3>
                <p>Kathmandu, the capital of Nepal.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
               
                <a href="kathmandupg .php" class="btn"></a>
                    
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="pokhara.jpg" alt="" id="btnPKR" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Pokhara </h3>
                <p>Pokhara,the great place not to miss.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
               
               <a href="pokharapg.php" class="btn"></a>  
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="hawai.jpg" alt="" id="btnHawai">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Beautiful state of USA.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="hawai.html" class="btn"></a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="paris.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>Capital of France.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="#" class="btn"></a>
                </h1>

            </div>
        </div>

        <div class="box">
            <img decoding="async" src="tokyo.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> tokyo </h3>
                <p>Capital of Japan.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="#" class="btn"></a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="mumbai.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Mumbai </h3>
                <p>Dream city of India.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="#" class="btn"></a>
            </div>
        </div>
    </div>
</section>






<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>We provide the best quality, luxurious hotels at affordable cost.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>get any drinks and food you wish.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Follow the safety guides to avoid bad consequences.</p>
        </div>x x1
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Explore the best destination on Earth.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Provision of best packages for fastest travel.</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Explore the every adventurous places on the Earth.
                </p>
        </div>
    </div>
</section>






<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img decoding="async" src="pho1.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="gallery.php" class="btn">See more</a>
            
        </div>
        
    </div>
    <div class="box">
        <img decoding="async" src="pho2.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p> Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho3.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho4.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho5.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho6.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho7.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho8.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="pho9.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Explore the world..</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
</div>
</section>





<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="rev1.jpg" alt="">
                    <h3>Theresa May</h3>
                    <p>"My stay at your hotel was absolutely fantastic! The staff was incredibly welcoming
                         and accommodating, ensuring that all my needs were met. The room was spacious, clean,
                          and beautifully decorated. I especially enjoyed the breathtaking view from the balcony.
                           I highly recommend your hotel to anyone visiting the area!".</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="rev2.jpg" alt="">
                    <h3>Maily Cyrrus</h3>
                    <p>"I had a wonderful experience at your hotel during my recent business trip. The location 
                        was perfect, with easy access to major attractions and transportation. The rooms were well-appointed
                         and provided a comfortable and relaxing atmosphere. The complimentary breakfast was a great start to
                          my day, with a wide variety of delicious options. I will definitely be returning on my next visit!".</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="rev3.jpg" alt="">
                    <h3>Anjella Mercel</h3>
                    <p>"My stay at your hotel exceeded all expectations. The modern and stylish design of the rooms created a
                         luxurious ambiance, and the attention to detail was evident throughout. The on-site restaurant served
                          delectable dishes with a diverse menu to cater to different tastes. The location was also ideal, with
                           easy access to shopping and entertainment options. I would highly recommend your hotel to anyone seeking
                            a memorable experience".</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="rev4.jpg" alt="">
                    <h3>Edward Bay</h3>
                    <p>"I cannot say enough positive things about my stay at your hotel. The level of service I
                         received was exceptional, from the friendly and attentive staff to the prompt room 
                         service. The facilities were top-notch, including the fitness center and pool area. 
                         The attention to detail and the commitment to guest satisfaction really stood out. 
                         Thank you for making my stay memorable!".</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>






<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img decoding="async" src="_con.jpg" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number">
                <input type="text" placeholder="Subject">
            </div>
            <textarea placeholder="Message" name="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>





<section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide"><img decoding="async" src="img/1.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/2.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/3.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/5.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="img/6.jpg" alt=""></div>
        </div>
    </div>
</section>



<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img decoding="async" src="https://www.nicepng.com/png/detail/172-1725045_book-now-book.png" alt="">
        </div>

        <form action="">
              <div class="inputBox">
                  <h3>where to</h3>
                  <input type="text" placeholder="Place name">
              </div>
              <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="Number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>
</section>




<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>We aim to create a compelling narrative that conveys the hotel's unique identity, values, 
                and commitment to providing an exceptional guest experience.
</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">USA</a>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">philippines</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">package</a>
            <a href="#">service</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">book</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">likedin</a>
        </div>
    </div>
</section> <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js" defer data-deferred="1"></script> 
 <script src="main.js" defer data-deferred="1"></script> 
</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<script>

$('#btnKTM').on('click',function(){
    window.location.href = " http://127.0.0.1:5500/kathmandupg%20.html";
})

</script>

<script>

    $('#btnPKR').on('click',function(){
        window.location.href = " http://127.0.0.1:5500/pokharapg.html";
    })
    
    </script>
    
    <script>

        $('#btnHawai').on('click',function(){
            window.location.href = "http://127.0.0.1:5500/hawai.html";
        })
        
        </script>

<script>





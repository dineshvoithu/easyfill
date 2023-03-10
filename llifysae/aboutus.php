<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
  
        <nav class="nav">
          <div class="container">
            <h1 class="logo"><a href="/index.html">Easy<span>Fill</span></a></h1>
            <ul>
              <li><a href="http://localhost/llifysae/web.php" class="current">Home</a></li>
              <li><a href="http://localhost/llifysae/aboutus.php">About</a></li>
              <li><a href="http://localhost/llifysae/contactus.php">Contact Us</a></li>
              <li><a href="">Order Now </a></li>
              <li><a href="http://localhost/llifysae/login.php">Login</a></li>
            </ul>
          </div>
        </nav>
      <br>
      </header>

      <div class="cursor"></div>
      <div class="cursor2"></div>
      
      <script>
        var cursor = document.querySelector(".cursor");
        var cursor2 = document.querySelector(".cursor2");
        document.addEventListener("mousemove",function(e){
          cursor.style.cssText = cursor2.style.cssText = "left: " 
          + e.clientX + "px; top: " + e.clientY + "px;";
        });
      </script>



<!-- banner -->


    <div class="bann">
       
<img src="assets/homeimages/About-Us.jpg" alt="" width="100%">
       
    </div>



<!-- about us content -->
    <section class="aboutuscont">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="aboutushead">About Us</h2>
                </div>
    
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div class="aboutimg">
                        <img src="assets/homeimages/aboutusimg.png" alt="" width="100%">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="aboutustxt">
                        <p>
                        Diesel is an everyday essential for many businesses alike. The gap in the electricity supply and demand results in power cuts and some areas suffer from a no electricity situation even today.
                        As a result,  industries, corporate parks, buildings, hospitals, hotels, schools,
                         other businesses, etc. are dependent on power generators which constantly consume a heavy amount of diesel.</p>
                        <p>
    
    Fuel is classi???ed as a Grade B petroleum product by the Petroleum Ministry and there
     are prescribed guidelines for handling transport and storage of
      Diesel; still, fuel procurement is done in a hazardous manner. Fuel 
      for personal and professional use is carried in plastic containers, barrels, and canisters that are risky. </p>
    <p>
    
    This is where The Fuel Delivery steps in, which puts an end to all your fuel requirement problems.</p>
    <p>
    <p>

    The Fuel Delivery is a team of young & experienced professionals with varied
     experience in different business verticals. EasyFill is an ethical and compliant organization with customer
     satisfaction as the top priority, and the best utilization of technology is the success mantra for EasyFill.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- truckvideo -->

<video width="100%" height="400" autoplay="" muted="" loop="">
    <source src="assets/homeimages/tfd-truck-2b.mp4" type="video/mp4">
    
  </video>




       <!-- Site footer -->
  



<div>
  
    <footer class="footer">
      <div class="footer__addr">
        <h1 class="footer__logo">Something</h1>
            
        <h2 style="color:  #1DBF73;;">Contact</h2>
        
        <address>
         4/689 Gandhiji Street Anna Nagar Madurai-20<br>
              
          <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
        </address>
      </div>
      
      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title">Company</h2>
    
          <ul class="nav__ul">
            <li>
              <a href="#">Home</a>
            </li>
    
            <li>
              <a href="#contact">Contact us</a>
            </li>
                
            <li>
              <a href="#">About us</a>
            </li>
          </ul>
        </li>
        
        <li class="nav__item nav__item--extra">
          <h2 class="nav__title">Useful Links</h2>
          
          <ul class="nav__ul nav__ul--extra">
            <li>
              <a href="#">Order Now</a>
            </li>
            
            <li>
              <a href="#">Register</a>
            </li>
            
            <li>
              <a href="#">Payment</a>
            </li>
            
            <li>
              <a href="#">Locations</a>
            </li>
            
            <li>
              <a href="#">Contact Us</a>
            </li>
            
            <li>
              <a href="#">FAQs</a>
            </li>
          </ul>
        </li>
        
        <li class="nav__item">
          <h2 class="nav__title">Legal</h2>
          
          <ul class="nav__ul">
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            
            <li>
              <a href="#">Terms and Conditions</a>
            </li>
            
            <li>
              <a href="#">Sitemap</a>
            </li>
          </ul>
        </li>
      </ul>
      
      <div class="legal">
        <p>&copy; All rights reserved.</p>
        
        <div class="legal__links">
          <span>Made with Voithu Web Creation</span>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
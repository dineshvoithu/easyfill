<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
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
       
<img src="assets/homeimages/Enquire-Now.jpg" alt="" width="100%">
       
    </div>



<!-- contact us content -->
<div id="contactt">
   
      
        <div class="rightt">
       
           <h2 class="middlee">Contact Us</h2>
          <h3 class="fieldd">Name: V R DINESH KUMAR</h3>
          <h3 class="fieldd">Email: voithuwebcreation@gmail.com</h3>
          <h3 class="fieldd">PhoneNumber: 9629823089</h3>
          <h3 class="fieldd">Branch1: Anna Nagar Madurai</h3>
          <h3 class="fieldd">Branch2: Palanganatham Madurai</h3>
         
         
      </div>
    <!-- Google Map  -->
    <div class="mappp">
     
      <iframe src=
      "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477.2929077345193!2d78.15164711417297!3d9.914856903357206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5aa0e0e2e03%3A0xd9334313888a8325!2zOcKwNTQnNTMuMSJOIDc4wrAwOScwNi40IkU!5e0!3m2!1sen!2sin!4v1659448774435!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              height="300"
              frameborder="0"
              style="border:0;"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0">
      </iframe>
  </div>
    </div>
    </div>

    
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
        <p>&copy;  All rights reserved.</p>
        
        <div class="legal__links">
          <span>Made with Voithu Web Creation</span>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
<?php
  $connection = mysqli_connect("localhost","root","","hotelms");

  if (isset($_POST['save'])) {
    $name     =$_POST['name'];
    $email     =$_POST['email'];
    $number   =$_POST['number'];
    $message  =$_POST['message'];

    $sql_query = "INSERT INTO contact(customer_name, email, phone, customer_message)
    VALUES ('$name','$email','$number','$message')";

if(mysqli_query($connection, $sql_query))
{
  //echo "1 Record added";
}
else
{
  //echo "Database query failed" .$sql. "" .mysqli_error($connection);
}
  
  }  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- adding style css -->
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="navfooter.css">
  <link rel="stylesheet" href="map.css">
  <link rel="stylesheet" href="footer.css">
  <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
  <title>Contact Us</title>
</head>
<body>
  
  <header>
    <a class="navbar-brand" href="#"><img src=""></a>
    <a href="#" class="logo">LAWRENCE HILL PARADISE<span>.</span></a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navigation">
      <li><a href="index1.php" onclick="toggleMenu();">Home</a></li>
      <li><a href="Aboutus.php" onclick="toggleMenu();">About</a></li>
      <li><a href="reservation1.php" onclick="toggleMenu();">Reservation</a></li>
      <li><a href="gallery.php" onclick="toggleMenu();">Gallery</a></li>
      <li><a href="testimonial.php" onclick="toggleMenu();">Testimonial</a></li>
      <li><a href="contact.php" onclick="toggleMenu();">Contact</a></li>
    </ul>
 </header>

  <section class="banner" id="banner">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h1><span>G</span>et  <span>I</span>n  <span>T</span>ouch</h1><br>
        <div class="line"></div> <!--border-bottom line-->
        <p>We have a dedicated team of Customer Services agents who will be able to answer any questions that you may have. </p><br><br>
         
        <!--first Heading -->
        <h4>ADDRESS</h4>
         <span>Lawrence Hill Paradise, 47, Waulagoda Middle Road, Hikkaduwa, Sri Lanka</span>
         <hr><br><br>

         <!--second Heading -->
        <h4>PHONE</h4>
         <span>0914 38 32 99</span>
         <hr><br><br>

       <!--third Heading -->
        <h4>EMAIL</h4>
         <span>ayurvedakurlaub@gmx.de</span>
         <hr> <br>

         
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h1><span>C</span>ontact  <span>U</span>s</h1><br>
        <div class="line"></div>
        <!-- form -->
        <form action="Contact.php" method="post">
          <label for="name"><h5>NAME</h5></label>
          <input type="text" name="name" id="name"><br><br>
          <label for="email"><h5>EMAIL</h5></label>
          <input type="email" name="email" id="email"><br><br>
          <label for="number"><h5>PHONE</h5></label>
          <input type="number" name="number" id="number"><br><br>
          <label for="message"><h5>YOUR MESSAGE</h5></label>
          <textarea name="message" id="message" cols="50" rows="7"></textarea><br>
          <input class="button" type="submit" name="save" id="submit" value="submit">
        </form>
      </div>
    </div>
    </div>
  </section>
<section>
                <div class="col501">
                    <h2 class="titleText1"><span>LAWRENCE HILL PARADISE LOCATION</span></h2>
                </div>
                <div class="map">
                <div class="mapBox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.970239647!2d80.10127541414894!3d6.134701029264376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177e356a87203%3A0xb847eefc96b09cb7!2sLawrence%20Hill%20Paradise!5e0!3m2!1sen!2slk!4v1646105512182!5m2!1sen!2slk"  allowfullscreen="" loading="lazy"></iframe></div>  
                </div>   
</section>
                  
  
  
  

  <footer>
            <div class="row">
                <div class="col">
                    <img src="logo.png" class="logo">
                    <p>Our space has been designed to blend the Sri Lankan hospitality with nature of our surrounding with luxury rooms, Authentic Sri Lankan food and beverages and ocean atmosphere. We will always welcome you with open arms to make you feel at home.</p>
                </div>
                <div class="col">
                    <h3>Office<div class="underline"><span></span></div></h3>
                    <p>LAWRENCE HILL PARADISE</p>
                    <p>Galle Road</p>
                    <p>Hikkaduwa</p>
                    <p class="email-id">123@gmail.com</p>
                    <h4>0911234567</h4>
                </div>
                <div class="col">
                    <h3>Links<div class="underline"><span></span></div></h3>
                    <ul>
                        <li><a href="index1.php">Home</a></li>
                        <li><a href="Aboutus.php">About</a></li>
                        <li><a href="reservation1.php">Reservation</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="testimonial.php">Testimonial</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Social Media<div class="underline"><span></span></div></h3>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">LAWRENCE HILL PARADISE 2021 - All Rights Reserved</p>
  </footer>

  <script type="text/javascript">
      window.addEventListener('scroll',function(){
          const header = document.querySelector('header');
          header.classList.toggle("sticky", window.scrollY > 0);
      });

      function toggleMenu(){
          const menuToggle = document.querySelector('.menuToggle');
          const navigation = document.querySelector('.navigation');
          menuToggle.classList.toggle('active');
          navigation.classList.toggle('active');
      }

  </script>
  

</body>
</html>
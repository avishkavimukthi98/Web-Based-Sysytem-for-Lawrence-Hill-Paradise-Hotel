<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <link rel="stylesheet" href="navfooter.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <title>About Us</title>
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
        <div class="content">
            <h3><span>A</span>bout <span>U</span>s</h3><br>
            <p style="color:white"> <p style="font-size:18px"><b>Lawrence Hill Paradise Hotel is a certified hotel in Hikkaduwa, Sri Lanka. Established in 2001.<br> we promise you are in good hands, we are delighted to welcome you into our home found on the Hikkaduwa coastline. Our space has been designed to blend the Sri Lankan hospitality with nature of our surrounding with luxury rooms, Authentic Sri Lankan  food and beverages and ocean atmosphere.<br> Whether you prefer a wellness holiday or a more immersive healing experience; we have got it all.</b></p>
        </div>
    </section>

    <section>
        <div class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>V</span>ision</h2>
                    <p>  Proudly opening doors to the true spirit of a destination.</p>
                </div>
                <div class="col50">
                    <div class="imgBx">
                        <img src="images/img3.jpg" alt="one">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mission" id="mission">
            <div class="row1">
                <div class="col501">
                    <h2 class="titleText1"><span>M</span>ission</h2>
                    <p> We are a luxury brand whose incredible family of associates puts the soul in hospitality every day. The needs of our guests, associates and owners are in the forefront of everything we do. Through authenticity and innovation, we create unique memorable experiences.</p>
                </div>
                <div class="col501">
                    <div class="imgBx1">
                        <img src="images/img15.jpg" alt="one">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    
       
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
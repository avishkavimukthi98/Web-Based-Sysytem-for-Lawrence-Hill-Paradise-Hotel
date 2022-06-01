 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <link rel="stylesheet" href="navfooter.css">
    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Reservation</title>
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
    <section class="reservation" id="reservation">
        <h1 class="heading"></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/duluxe.jpg" alt="">
                <h3>Deluxe Room</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$400</div>
                <a href="index.php?reservation"><button class="btn">Book Now</button></a>
            </div>

            <div class="box">
                <img src="images/luxury.jpg" alt="">
                <h3>Luxury Room</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$300</div>
                <a href="index.php?reservation"><button class="btn">Book Now</button></a>
            </div>

            <div class="box">
                <img src="images/guest.jpg" alt="">
                <h3>Guest House</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$200</div>
                <a href="index.php?reservation"><button class="btn">Book Now</button></a>
            </div>

            <div class="box">
                <img src="images/single.jpg" alt="">
                <h3>Single Room</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$100</div>
                <a href="index.php?reservation"><button class="btn">Book Now</button></a>
            </div>



        </div>
    </section>

    
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

    

</body>
</html>       
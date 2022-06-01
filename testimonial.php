<html>
    <head>
        <title>Testimonial</title>
        <link rel="stylesheet" href="testimonial.css">
        <link rel="stylesheet" href="footer.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
    </head>
    <body>
        <header>
            <a class="navbar-brand" href="#"></a>
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
        
        <div class="hero">
            <h1>Customers Review</h1>
            <div class="container">
                <div class="indicator">
                    <span class="btn active"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
                </div>
                <div class="testimonial">
                    <div class="slide-row" id="slide">
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"The rooms were clean, very comfortable, and the staff was amazing.
                                     They went over and beyond to help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown"
                                    </p>
                                    <h3>Riley Olie</h3>
                                    <p>Fashion Designer - Mexico </p>
                            </div>
                            <div class="user-img">
                                <img src="images/testi1.png" >
                            </div>
                        </div>
                    
                        <div class="slide-col">
                            <div class="user-text">
                                <p>"Overall, I had a great experience with the Lawrence Hill Paradise Hotel; staff was incredibly helpful,
                                     and the amenities were great. The room was wonderful, clean, and perfect to celebrate a birthday weekend."
                                    </p>
                                    <h3>Steve McCoy</h3>
                                    <p>Web Developer - England</p>
                            </div>
                            <div class="user-img">
                                <img src="images/testi2.jpg" >
                            </div>
                        </div>
        
                        <div class="slide-col">
                            <div class="user-text">
                                <p> "I had a wonderful experience at the Lawrence Hill Paradise Hotel. Every staff member I encountered,
                                    from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you! Will recommend to my colleagues!"
                                </p>
                                    <h3>Sara Smith</h3>
                                    <p>Taveler - Australia</p>
                            </div>
                            <div class="user-img">
                                <img src="images/testi3.jpg" >
                            </div>
                        </div>
                    </div>
                </div>   
            </div>

            
        </div>

<script>
    var btn = document.getElementsByClassName("btn");
    var slide = document.getElementById("slide");

    btn[0].onclick = function(){
        slide.style.transform = "translateX(0px)";
        for(i=0;i<3;i++){
            btn[i].classList.remove("active");
        }
        this.classList.add("active");
    }
    btn[1].onclick = function(){
        slide.style.transform = "translateX(-800px)";
        for(i=0;i<3;i++){
            btn[i].classList.remove("active");
        }
        this.classList.add("active");
    }
    btn[2].onclick = function(){
        slide.style.transform = "translateX(-1600px)";
        for(i=0;i<3;i++){
            btn[i].classList.remove("active");
        }
        this.classList.add("active");
    }
</script>   



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
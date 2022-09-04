<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Support</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/contact style.css">
    <link rel="icon" href="../pic/favicon.ico">
    <link rel="stylesheet" href="../css/search.css">
</head>
<body>
    <header>
        <input type="checkbox" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="../index.php" class="logo"><img src="../pic/logo.png" alt="Kid Market"></a>
        <nav class="navbar">
            <a href="../index.php">Home</a>
            <a href="products.php">Product</a>
            <a href="#" class="active">Contact Us</a>
            <a href="about.php">About us</a>
        </nav>
        <div class="icon">
            <a href="signin.php" class="fas fa-user"></a>
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">
                  <form >
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <a href="#" class="openBtn fa fa-search" onclick="openSearch()"></a>
              
        </div>
    </header>
    <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tenetur quibusdam numquam aspernatur? Quae, quos!</p>
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="box">
                    <div class="icon"><i class="fa fa-address-book" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Address</h2>
                        <p>Cheel Chok <br> lyari <br>Karachi</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Phone</h2>
                        <p>0312 1234567</p>
                       
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Email</h2>
                        <p class="Emailbreak">Yousuf2110e@aptechgdn.net</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="Email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                      <textarea required="required"></textarea>
                        <span>Type Your Message</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="Submit" class="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
<section class="footer">
    <div class="footer-content">
        <h3>Y J</h3>
        <p> WE ARE PROVIDING THE BEST QUALITY OF TOYS FOR (BABA/BABY) UNDER HIGH AND STRICK QUALITY CONTROL</p>
        <ul class="socials">
            <li><a target="blank" href="https://web.facebook.com/AptechGardenCenter/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
            <li><a target="blank" href="https://twitter.com/aptechgdn1"><i class="fa fa-twitter"></i></a></li>
            <li><a  href="mailto:Yousuf2110e@aptechgdn.net"><i class="fa fa-google-plus"></i></a></li>
            <li><a target="blank" href="https://www.youtube.com/channel/UCIAra-J-GSzuvZeflJA7rtw"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>Copyright &copy; <a href="mailto:Yousuf2110e@aptechgdn.net">Y J</a>  </p>
                <div class="footer-menu">
                  <ul class="f-menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="products.php">Product</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                  </ul>
                </div>
    </div>
</section>
    <script src="../js/search.js"></script>
</body>
</html>
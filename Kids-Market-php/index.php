<?php 
     session_start();
     require '../kids-market/php/connect.inc.php';
     if (!isset($_SESSION['userid'])) {
        header('location:../kids-market/php/signin.php');
        }
     if (isset($_REQUEST['btnLogout'])) {
        session_destroy();
        header('location: ../kids-market/php/signin.php');
    }
    if (isset($_REQUEST['btnadmin'])) {
        header('location:../kids-market/php/admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Market</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel="icon" href="pic/favicon.ico">
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
<header>
    <input type="checkbox" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    <a href="#" class="logo"><img src="pic/logo.png" alt="Kid Market"></a>
    <nav class="navbar">
        <a href="#" class="active">Home</a>
        <a href="Php/products.php">Product</a>
        <a href="Php/contact.php">Contact Us</a>
        <a href="Php/about.php">About us</a>
    </nav>
    <div class="row">
        <div class="col-lg-6">
    <div class="icon  d-flex align-items-center">
        <a href="Php/signin.php" class="fas fa-user"></a><a href="Php/cart.php" class="fas fa-shopping-cart"></a>
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
    </div>
        <div class="col-lg-6">
          <p>Welcome: <?php echo $_SESSION['yrName'];   ?></p>
            <form id="frm1" action="">
                <button name="btnLogout">Logout</button>
                <button name="btnadmin">Admin Panel</button>

            </form>
            </div>
            </div>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>Toy World</h3>
        <span>Make Your Ones Feel Better!</span>
        <p> MAKE Your children Surpise with our toys</p>
        <a href="#product" class="btn">Shop Now</a>
    </div>
</section>    
<section class="icon-container">
    <div class="icon">
        <img src="pic/images/icon-1.png" alt="">
        <div class="info">
            <h3>Free Delivery</h3>
            <span>On All Orders</span>
        </div>
    </div>
    <div class="icon">
        <img src="pic/images/icon-2.png" alt="">
        <div class="info">
            <h3>7 Days Returns</h3>
            <span>Moneyback Guarantee</span>
        </div>
    </div>
    <div class="icon">
        <img src="pic/images/icon-3.png" alt="">
        <div class="info">
            <h3>Offer & Gifts</h3>
            <span>On All Orders</span>
        </div>
    </div>
    </div>
    <div class="icon">
        <img src="pic/images/icon-4.png" alt="">
        <div class="info">
            <h3>Secure Payments</h3>
            <span>Protected By Me</span>
        </div>
    </div>
</section>
<section class="product" id="product">
    <h1 class="heading">Latest<span>Products</span></h1>
    <div class="box-container">
    <?php 
                 $qry = "select * from item order by itemid desc";
                 $sno = 1;
                 $result = $db->query($qry);
                foreach ($result as $row) {               
      ?>
      
    <div class="box">
        <div class="image">
            
            <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['Pic']); ?>"alt="<?php echo $row['Picname']; ?>">
            <div class="icon">
                <a href="#" class="fas fa-heart"></a>
                <a href="Php/products.php" class="shopping-cart">SEE MORE</a>
                <a href="#" class="fas fa-share"></a>
            </div>
        </div>
        <div class="content">
            <h2><?php echo $row['Itemname']; ?></h2>
            <div class="price">Rs:<?php echo $row['Itemrate']; ?></div>
        </div>
    </div>
    <?php 
                }
            ?>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="Php/products.php">Product</a></li>
                    <li><a href="Php/about.php">About us</a></li>
                    <li><a href="Php/contact.php">Contact us</a></li>
                  </ul>
                </div>
    </div>
</section>
<script src="js/search.js"></script>
</body>
</html>
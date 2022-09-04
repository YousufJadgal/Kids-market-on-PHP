<?php 
     session_start();
     require 'connect.inc.php';
     if (!isset($_SESSION['userid'])) {
         
         header('location: signin.php');
 
     }
    
?>
<!doctype html>
<html lang="en">
<head>
  <title>Product Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../pic/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../css/product.css">
</head>
<body>
  <header>
    <input type="checkbox" id="toggler">
    <label for="#toggler" class="fas fa-bars"></label>
    <a href="../index.php" class="logo"><img src="../pic/logo.png" alt="Kid Market"></a>
    <nav class="navbar">
        <a href="../index.php">Home</a>
        <a href="#" class="active">Product</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About us</a>
    </nav>  
</header>
  <!-- <section>
    <div class="container my-5">
     <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action " onclick="showall()">
          ALL
        </button>
        <button type="button" class="list-group-item list-group-item-action " onclick="barbie()">Barbie</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="jeep()">Jeep</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="helicopter()">Helicopter</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="cycle()">Cycle</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="Spinner()">Spinner</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="mobile()">Mobile</button>
        <button type="button" class="list-group-item list-group-item-action " onclick="yoyo()">Yoyo</button>
      </div>
    </div>
  </section> -->
  <section class="product" id="product">
    <div class="box-container">
    <?php 
                 $qry = "select * from item order by itemid desc";
                 $sno = 1;
                 $result = $db->query($qry);
                foreach ($result as $row) {               
      ?>
      
    <div class="box">
        <div class="image">
            
            <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['Pic']); ?>" width="100" height="100" alt="<?php echo $row['Picname']; ?>">
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
  

  <!-- <main>
    <section>
      <div class="container mxy-3 ">
        <div class="row g-2" >
          <div class="col-md-4 jeep">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/jeep1.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">JEEP</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                        <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                          value="Medium" checked> <span>blue</span>
                      </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                      </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 sneakers jeep">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/jeep2.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">JEEP</h6> <span class="text-danger font-weight-bold">$1.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 jeep">
            
              <div class="card">
                <div class="img-container ">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/jeep4.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">JEEP</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 helicopter pt-3" >
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between  align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/hel1.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"> HELICOPTER</h6> <span class="text-danger font-weight-bold">$4.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 helicopter pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/hel2.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">HELICOPTER</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 helicopter pt-3">

            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/hel3.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">HELICOPTER</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>




  <main>
    <section>
      <div class="container mxy-3 pt-3">
        <div class="row g-2">
          <div class="col-md-4 watch">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/w2.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BEN 10 WATCH</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 sneakers watch">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/w3.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BEN 10 WATCH</h6> <span class="text-danger font-weight-bold">$1.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 watch">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/w1.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BEN 10 WATCH</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 sneakers mobile laptop pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar2.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE laptop</h6> <span class="text-danger font-weight-bold">$4.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 barbie pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar3.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE </h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 barbie pt-3">

            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar4.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>




  <main>
    <section>
      <div class="container mxy-3">
        <div class="row g-2">
          <div class="col-md-4 barbie watch pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar5.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE WATCH</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 watch barbie pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar6.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE WATCH</h6> <span class="text-danger font-weight-bold">$1.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 watch barbie pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar7.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE WATCH</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 Poppet pt-3 ">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar8.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Poppet</h6> <span class="text-danger font-weight-bold">$4.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 barbie Doctor set pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar11.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">BARBIE Doctor set</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 barbie Doctor set pt-3">

            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/bar22.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"> BARBIE Doctor set</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>



  <main>
    <section>
      <div class="container mxy-3 pt-3">
        <div class="row g-2">
          <div class="col-md-4 cycle">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/1.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Cycle </H6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 sneakers cycle">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/2.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Cycles</h6> <span class="text-danger font-weight-bold">$1.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 cycle">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/3.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Cycle</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 yoyo pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/4.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Yoyo </h6> <span class="text-danger font-weight-bold">$4.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 yoyo pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/5.webp" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Yoyo</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 yoyo pt-3">

            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/6.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Yoyo</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>



  <main>
    <section>
      <div class="container mt-3 mb-3 ">
        <div class="row g-2">
          <div class="col-md-4 Spinner">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/7.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Spinner </H6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 Spinner">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/8.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Spinner</h6> <span class="text-danger font-weight-bold">$1.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 Spinner">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/9.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Spinner</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mobile pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/11.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">MOBILE</h6> <span class="text-danger font-weight-bold">$4.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mobile pt-3">
            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/22.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"> MOBILE</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 mobile pt-3">

            
              <div class="card">
                <div class="img-container">
                  <div class="d-flex justify-content-between align-items-center p-2 first"> <span
                      class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img
                    src="../pic/newpic/33.jpg" class="img-fluid px-5">
                </div>
                <div class="product-detail-container">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">MOBILE</h6> <span class="text-danger font-weight-bold">$3.99</span>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>
                    <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small">
                      <span>green</span> </label> <label class="radio"> <input type="radio" name="size1"
                        value="Medium" checked> <span>blue</span>
                    </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>red</span>
                    </label> </div>
                  </div>
                  <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>




</section> -->
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
                    <li><a href="#">Product</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                  </ul>
                </div>
    </div>
</section>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    function jeep() {
      $('.col-md-4').hide()
      $('.jeep').show()
    }
    function cycle() {
      $('.col-md-4').hide()
      $('.cycle').show()
    }
    function Spinner() {
      $('.col-md-4').hide()
      $('.Spinner').show()
    }
    function helicopter() {
      $('.col-md-4').hide()
      $('.helicopter').show()
    }
    function barbie() {
      $('.col-md-4').hide()
      $('.barbie').show()
    }
    function yoyo() {
      $('.col-md-4').hide()
      $('.yoyo').show()
    }

    function mobile() {
      $('.col-md-4').hide()
      $('.mobile').show()
    }
    function showall(){
      $('.col-md-4').show()
    }



  </script>
 -->


</body>

</html>
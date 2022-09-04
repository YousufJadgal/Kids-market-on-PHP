<?php
session_start();
require 'connect.inc.php';
if (!isset($_SESSION['userid'])) {
header('location: signin.php');
}
if($_SESSION['type'] != 1){
    header('location: ../index.php');
}
if (isset($_REQUEST['btnLogout'])) {
    session_destroy();
    header('location: signin.php');
}
if (isset($_REQUEST['btnUpload'])) {
   $itemname = $_POST['txtname'];
   $itemrate = $_POST['txtrate'];
  $image_file = $_FILES['txtpic']["name"];
  $type = $_FILES['txtpic']['type'];
  $size = $_FILES['txtpic']['size'];
  $temp = $_FILES['txtpic']['tmp_name'];
//   echo "Request Object Name is {$image_file} of type {$type} of size {$size} with name {$temp}";
  $path = "upload/".$image_file;
//   echo $path;
   if (!empty($temp)) {
       if ($type=="image/jpg" || $type=="image/jpeg") {
           if (!file_exists($path)) {          
               $img = fopen($temp,'rb');
               move_uploaded_file($temp,$path);
           }
           else{
               $error_msg = "File Already Exists";
               echo "<script>alert('$error_msg')</script>";
           }
       }
       else{
               echo '<script>alert("Wrong type selected")</script>';
       }
   }else{
       $error_msg = "please select image";
       echo $error_msg;
   }
  
   if (!isset($error_msg)) {
      $qry = "insert into item (Itemname,Itemrate,Picname,Pic) values (:iname,:irate,:ipic,:ibpic)";
        // $qry = "insert into item ('Itemname,Itemrate,Picname,Pic') values ('{$itemname}',$itemrate,'{$image_file}')";
    //   echo $qry;
       $stmt = $db->prepare($qry);

       $stmt -> bindParam(':iname',$itemname);
       $stmt -> bindParam(':irate',$itemrate);
       $stmt -> bindParam(':ipic',$image_file);
      $stmt -> bindParam(':ibpic',$img,PDO::PARAM_LOB);

       if ($stmt->execute()) {
           $sucMsg = "File is uploaded";
           echo "<script>alert('$sucMsg')</script>";
       }
   }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN PANEL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
   <h2><a href="../index.php" class="text-decoration-none text text-light"><b>PHP</b></a></h2>
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <div class="d-flex align-items-center ms-auto">
        <button type="button" class="btn btn-info  px-3 me-2">
<a href="signin.php" class="text-decoration-none text text-light"> Login</a>
      </button>
      <button type="button" class="btn btn-primary me-3"><a href="signup.php" class="text-decoration-none text text-light">
      Sign up </a>
       </button>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div class="container">
        <div class="row">
            <div class="col-md-4"  style="width:100%;">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txtname">Item Name</label>
                        <input type="text" class="form-control" name="txtname" placeholder="Item Name" required>
                    </div>
                    <div class="form-group">
                        <label for="txtrate">Item Rate</label>
                        <input type="number" class="form-control" name="txtrate" placeholder="Item Rate" required>
                    </div>
                    <div class="form-group">
                        <label for="txtpic">Select Picture</label>
                        <input type="file" class="form-control" accept="img/*" name="txtpic" placeholder="Item Pic">
                    </div><br>
                    <button name="btnUpload" class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-8" style="width:100%;">
              <?php 
                    $qry = "select * from item order by Itemid desc";
                    $sno = 1;
                ?>
                <div class =  "table-responsive">
                    <table class="table table-hover">
                        
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Path Pic</th>
                            <th>Save Pic</th>
                            <th>Rate</th>
                        </thead>
                        <tbody>
                            <?php 
                                $result = $db->query($qry);
                                foreach ($result as $row) {
                                    echo "<tr>";
                               
                            ?>
                                <td><?php echo $sno; ?></td>
                                <td><?php echo $row['Itemname']; ?></td>
                                <td><img src="<?php echo 'upload/'.$row['Picname']; ?>" width="100" height="100" alt=""></td>
                                <td><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['Pic']); ?>" width="100" height="100" alt="<?php echo $row['Picname']; ?>"></td>
                                <td><?php echo $row['Itemrate']; ?></td>
                            <?php
                                    echo"</tr>";
                                    $sno++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
   </div>   
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
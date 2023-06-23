<?php require_once('../config.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>

         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.php">About</a></li>
                              <li><a href="testimonial.php">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">SHOPBY <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <?php  
                              $fetch = "SELECT * FROM `tbl_catogary`"; 
                              $execute = mysqli_query($conn,$fetch);
                              $check = mysqli_num_rows($execute);
                              if($check > 0){
                                 while($d = mysqli_fetch_array($execute)){
                                  echo  "<li><a href='collection.php?n=$d[0]'>$d[1]</a></li>";

                                 }


                              }
                              else{
                                 echo "kuch bhi nh hai";
                              }
                              
                              ?>
                             
                             
                           </ul>
                        </li>


                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Products</a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php
                        if(isset( $_SESSION["username"])){?>
                        <a href="#" class="btn btn-danger" ><?php echo $_SESSION["username"];?></a>

                           
                         <?php }
 



                        ?>

                     <!-- 5 -->
                        <li class="nav-item">
                           <a class="nav-link" href="viewcart.php">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                           <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                           <?php if (isset($_SESSION["mycart"])) {
                              echo count($_SESSION["mycart"]); 
                           }
                           else{
                              echo 0;
                           } 
                           ?>
                           
                        </span>
                         </a>
                        </li>
                        <li class="nav-item">
                           <a href="../UserRegistration/index.php" class="nav-link">
                           <i class="fa fa-user" aria-hidden="true"></i>
                           </a>
                        </li>
                    
              
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
    
</body>
</html>
<?php

// 1
session_start();
error_reporting(0);
   if (!isset($_SESSION["mycart"])) {
      $_SESSION["mycart"] = array();

      unset($_SESSION["quan"]);
   } 
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
<div class="hero_area">
        
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">

     
         <div class="container">
        
            <?php
            //2
               if (isset($_SESSION["msg"])) {?>
                  <div class="alert alert-success" role="alert">
                     <?php echo $_SESSION["msg"]; ?>
                  </div>
               <?php
                  unset($_SESSION["msg"]);
               }
               
            ?>
        
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="container">
            <form action="" method="get">
               <div class="row">
                 
                     <div class="col-4">
                        <input type="text" class="form-control" name="search">
                     </div>
                     <div class="col-4">
                        <select name="filter" class="form-control">
                        <option value="n">NAME</option>
                        <option value="c">CATEGORY</option>
                        <option value="l">LOW TO HIGH</option>
                        <option value="h">HIGH TO LOW</option>

                        </select>

                     </div>
                     <div class="col-4">
                        <button type="submit" name="btn" class="btn btn-danger">
                           <i class="fa fa-search" aria-hidden="true"></i></button>

                     </div>

                 
               </div>
               </form>
             
            </div>
            <div class="row">
            <?php
               if(isset($_GET["btn"])){
                  $search = $_GET["search"];
                  $filter = $_GET["filter"];

                  if($filter =="n"){
                     $fetch_product = "SELECT * FROM `table_products` where product_name  like '%".$search."%'";
                     
                  }
                  elseif($filter == "c"){
                     $fetch_prd = "SELECT * FROM `tbl_catogary` WHERE `name` = '$search'";
                     $runcat = mysqli_query($conn,$fetch_prd);
                     $c = mysqli_fetch_array($runcat);

                     $cat_id = $c[0];
                     $fetch_product =  "SELECT * FROM `table_products` where product_catogary = '$cat_id'";

                  }
                  elseif($filter == "l"){
                     $fetch_product = "SELECT * FROM `table_products` order by product_price asc";

                  }
                  elseif($filter =="h" ){
                     $fetch_product= "SELECT * FROM `table_products` order by product_price desc";
                  }

               }
               else{
                  $fetch_product = "SELECT * FROM `table_products`";
                 
               }
               
               
               ?>


               <?php
              
               $execute = mysqli_query($conn,$fetch_product);
               $check_product = mysqli_num_rows($execute); 

               if($check_product > 0){
                  while($convert = mysqli_fetch_array($execute)){?>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="" class="option1">
                              <?php echo $convert[1];  ?>
                              </a>
                              <!-- 3 -->
                              <a href="AddtoCart.php?Pro_ID=<?php echo $convert[0]; ?>" class="option2">
                              Add to Cart
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="<?php echo $convert[5]; ?>">
                        </div>
                        <div class="detail-box">
                           <h5>
                           <?php echo $convert[2]; ?>
                           </h5>
                           <h6>
                              rs
                              
                           </h6>
                        </div>
                     </div>
                  </div>




               <?php   }
               }

               else{
                  echo "kuch bhi nh hai";
               }

                    
             

              ?>
             
              
               
              
             
            </div>
            <div class="btn-box">
               <form action="" method="get">
               <button class="btn btn-danger" type="submit" name="prd">
             
                View All products</button>
               </form>
            </div>
            <?php
            if(isset($_GET["prd"])){
               $fetch = "SELECT * FROM `table_products`";
               $run = mysqli_query($conn,$fetch);
            }
         

            ?>

         </div>
      </section>
      <!-- end product section -->
      <?php
       include('footer.php');
      ?>
    
</body>
</html>
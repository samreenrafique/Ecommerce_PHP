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
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <?php
                $cat = $_GET["n"];
               $fetch_product = "SELECT * FROM `table_products` WHERE `product_catogary` = $cat";
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
                              <a href="" class="option2">
                              Buy Now
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
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <?php
       include('footer.php');
      ?>
    
</body>
</html>
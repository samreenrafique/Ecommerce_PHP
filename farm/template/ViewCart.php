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

<?php
            //2
               if (isset($_SESSION["msg"])) {?>
                  <div class="alert alert-danger" role="alert">
                     <?php echo $_SESSION["msg"]; ?>
                  </div>
               <?php
                  unset($_SESSION["msg"]);
               }
               
            ?>
     <form action="updatecart.php" method="get">
      <table class="table table-border">
        <tr>
            <th>Delete</th>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr>
     
<?php
    $total_price  = 0;
    if (!empty($_SESSION["mycart"])) {
        $i = 0;
        if (!isset($_SESSION["quan"])) {
            $_SESSION["quan"] = array_fill(0,count($_SESSION["mycart"]),1);
        }
        $convert_string = implode(",",$_SESSION["mycart"]);
        $execute_query = mysqli_query($conn,"SELECT * FROM `table_products` WHERE `product_id`IN ($convert_string)");
        if (mysqli_num_rows($execute_query) > 0) {
           while($data = mysqli_fetch_array($execute_query)){
            echo "<tr>
                <td><a href='deletesingleitem.php?id=$data[0]&quantindex=$i' class='text-danger'><i class='fa fa-trash'></i></a></td>
                <td>$data[0]</td>
                <td>$data[1]</td>
                <td><img src='$data[5]' width=100 height=100/></td>
                <td>Rs $data[2]</td>
                <input type ='hidden' name='quan_index[]' value='$i'/>
                <td><input type='number' value='".$_SESSION["quan"][$i]."' name='q".$i."' class='form-control'/></td>
                <td>Rs ".number_format($data[2] * $_SESSION["quan"][$i])."</td>
               
            </tr>";
            $total_price =  ($data[2] * $_SESSION["quan"][$i]) + $total_price;
            $i++;

           
           }
          echo "<tr>
          <td><a href='clearcart.php' class='btn btn-danger'>Clear Cart</a></td>
          <td><a href='checkout.php' class='btn btn-success'>Checkout</a></td>
          <td><button type='submit' class='btn btn-warning' name='btn'>Update</button></td>
           <td colspan='4' style='text-align:right'>Rs. ".number_format($total_price,0)."</td>
       </tr>";
        } 
        
    }
    else { ?>
        <tr>
          <td colspan="7" class="text-center text-danger">Cart is Empty</td>
        </tr>
     <?php }

?>
 </table>
 </form>
<?php
      include('footer.php');
      ?>
</body>
</html>
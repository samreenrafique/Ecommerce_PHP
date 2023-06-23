<?php
require_once("../../config.php");

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
    <?php include("header.php") ?>

    <?php
 $id = $_GET["idhogi"];
$goemp = mysqli_query($conn,"SELECT * FROM `tbl_employee` WHERE emp_id = $id");
$emparray = mysqli_fetch_array($goemp); 


?>

<center>

    
<form action="" method="post" enctype="multipart/form-data">
    <p>EMPLOYEE NAME</p>
<input type="text" name="ename" value="<?php echo $emparray[1] ?>">
 <p>EMPLOYEE EMAIL</p>
 <input type="email" name="eemail" value="<?php echo $emparray[2] ?>" disabled>
 <p>EMPLOYEE ADDRESS</p>
 <input type="text" name="eadd" value="<?php echo $emparray[3] ?>">
 <p>EMPLOYEE PHNUMBER</p>
 <input type="text" name="enm" value="<?php echo $emparray[4] ?>">
 <p>EMPLOYEE GENDER</p>
 <input type="radio" name="egender" value="FEMALE" 
 <?php
 if($emparray[5]=="FEMALE"){
    echo "checked";
 }
 ?>
 disabled>FEMALE
 <input type="radio" name="egender" value="MALE" <?php
 if($emparray[5]=="MALE"){
    echo "checked";
 }
 ?> disabled>MALE
 <input type="radio" name="egender" value="OTHERS" <?php
 if($emparray[5]=="OTHERS"){
    echo "checked";
 }
 ?> disabled >OTHERS

 <p>EMPLOYEE SALARY</p>
 <input type="number" name="esalary" value="<?php echo $emparray[6] ?>" disabled>
 <p>EMPLOYEE DEPARTMENT</p>
 <input type="text" name="edep" value="<?php echo $emparray[7] ?>" disabled>
 <p>EMPLOYEE IMAGE</p>
 <input type="file" name="eimage"  accept="image/*"
 onchange="document.getElementById('empimg').src=window.URL.createObjectURL(this.Files[0])">
 <img src="<?php echo $emparray[10]?>" width="120" height="120"  id="empimg">
 
 <br><br>
 <button type="submit" class="btn btn-primary" name="edtemp">EDIT EMPLOYEE</button>

</form>
</center>
<?php  
if(isset($_POST["edtemp"])){
     
   $em_name = $_POST["ename"];
   $em_mail = $_POST["eemail"];
   $em_address = $_POST["eadd"];
   $em_ph = $_POST["enm"];
   $em_gender = $_POST["egender"];
   $em_salary = $_POST["esalary"];
   $em_dep = $_POST["edep"];
   
  
   
  //imgvalue
  if(isset($_FILES["eimage"]["name"])){
    $img_name = $_FILES["eimage"]["name"];
    $img_size = $_FILES["eimage"]["size"];
    $img_temp = $_FILES["eimage"]["tmp_name"];

    $_loc_img = "../../employeeimages/" . $img_name;
    //sizeimg
    if($img_size <=1000000){
      error_reporting(0);  
        $update_empimg="UPDATE `tbl_employee` SET `emp_name`=' $em_name',
        `emp_add`=' $em_address',
        `emp_num`=' $em_ph',
        `emp_img`='$_loc_img'
        WHERE `emp_name` ='".$_SESSION["ename"]."' and `emp_email` = '".$_SESSION["eemail"]."'";
    
         $run_upd = mysqli_query($conn,$update_empimg);
         if($run_upd==true){
            error_reporting(0);  
            move_uploaded_file($img_temp,$_loc_img);
            echo "<script>
            alert('EMPLOYEE UPDATED SUCCESSFULLY')
           window.location.href='dashboard.php'
            </script>";
         }
    
         else{
            echo "<script>
            alert('".mysqli_error($conn)."')
            window.location.href='dashboard.php'
            </script>";
    
         }



    }
    else{?>
    <script>
        alert("INVALID IMAGE")
        window.location.href='showempidentity.php'
    </script>

    <?php }



  }
//binavaluek
  else{
   error_reporting(0);
    $prev_image = $emparray[10];
    $update_emp="UPDATE `tbl_employee` SET `emp_name`=' $em_name',
    `emp_add`=' $em_address',
    `emp_num`=' $em_ph',
    `emp_img`=' $prev_image'
    WHERE `emp_name` ='".$_SESSION["ename"]."' and `emp_email` = '".$_SESSION["eemail"]."'";

     $run_upd = mysqli_query($conn,$update_emp);
     if($run_upd==true){
      
        echo "<script>
        alert('EMPLOYEE UPDATED SUCCESSFULLY')
       window.location.href='showempidentity.php'
        </script>";
     }

     else{
        echo "<script>
        alert('".mysqli_error($conn)."')
       window.location.href='showempidentity.php'
        </script>";

     }



  }
  //binavalue
    






}
//end









?>




      
<?php
include('footer.php');

?>



















    
</body>
</html>
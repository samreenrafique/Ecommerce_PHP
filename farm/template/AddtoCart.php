<?php
// 4
    $id = $_GET["Pro_ID"];
    session_start();
    if (in_array($id,$_SESSION["mycart"] )) {
        $_SESSION["msg"] = "Product Already Added";
    } else {
        array_push($_SESSION["mycart"] , $id);
        $_SESSION["msg"] = "Product Added";
    }
  
    header("location: product.php");    
?>
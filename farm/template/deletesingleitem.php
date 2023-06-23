<?php
    session_start();
    $prod_id = $_GET["id"];
    $index = $_GET["quantindex"];

    $find = array_search($prod_id,$_SESSION["mycart"]);
    unset($_SESSION["mycart"][$find]);
    unset($_SESSION["quan"][$index]);

    $_SESSION["quan"] = array_values($_SESSION["quan"]);
    $_SESSION["msg"] = "Product Delete Successfully";
    header("location: viewcart.php");

?>
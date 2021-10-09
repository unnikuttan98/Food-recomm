<?php
include("dbcon.php");
if (isset($_POST['delete'])) {
   $id= $_POST['id'];
       $delete=$link->query("DELETE FROM cart WHERE cart_id=$id");
       header("Location:cart.php");
   }
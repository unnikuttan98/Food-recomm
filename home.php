<?php
session_start();
include("header.html");
if (empty($_SESSION['name'])) {
   echo("<script>alert('please login');</script>");
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:login.php");
}
?>
<h3>welcome<?php echo($_SESSION['name']); ?></h3>
<?php include("slider.php"); 
if (isset($_POST['search_product'])) {
    if(empty($_POST['search'])){
        header("Location:home.php");
    }
    else {
        $item=$_POST['search'];
        $fh= fopen("product.txt","w");
        fwrite($fh,$item);
        fclose($fh);
        header("Location:product.php");
    }
}
?>
<form action="cart.php" method="post">
    <?php
    include("dbcon.php");
    $view=$link->query("SELECT * FROM food");
    while ($row=$view->fetch_object()) {
        echo("<div class='carder'>
             <h3>$row->name</h3>
             <img src='$row->image'>
             <p>$row->details</p>
             <p>$row->catagory</p>
             <p>$row->price Rs</p>
             <input type='submit' name='cart$row->food_id' value='Add to cart'></div>
            ");
    }
    ?></form>


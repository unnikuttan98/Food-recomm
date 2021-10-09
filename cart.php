
<?php session_start();
include("header.html");
echo("<link rel='stylesheet' href='style.css'>");
include("dbcon.php");
$select=$link->query("SELECT * FROM food");
while ($row=$select->fetch_object()) {
    $cartname='cart'.$row->food_id;
    if (isset($_POST[$cartname])) {
        $name=$row->name;
        $details=$row->details;
        $catagory=$row->catagory;
        $image=$row->image;
        $price=$row->price;
        $insert =$link->query("INSERT INTO cart values
                               ('','$name','$details',
                               '$image','$catagory','$price')");
         if ($insert==false) {
            echo($link->error);
                            }
    }
}
$view=$link->query("SELECT * FROM cart");
while ($node=$view->fetch_object()) {
    $cname=$node->name;
    $cdetails=$node->details;
    $cimage=$node->image;
    $ccatagory=$node->catogory;
    $cprice=$node->price;
    echo("<div class='carder'>
    <h3>$cname</h3>
    <img src='$cimage'>
    <p>$cdetails</p>
    <p>$ccatagory</p>
    <p>$cprice Rs</p>
    <form action='delete_cart.php' method='post'>
    <input type='hidden' name='id' value='$node->cart_id'>
    <input type='submit' name='delete'value='Delete Cart'>
    </form>
    </div>
   ");

}
?>
<form action="buy.php" method="post">
<input type="submit" value="Buy now" name="buy" id='sub'>
</form>
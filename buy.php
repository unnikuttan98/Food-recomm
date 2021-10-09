<?php
session_start();
include("header.html");
?>
<link rel="stylesheet" href="style.css">
<form action="payment.php" method="post">
<?php
include("dbcon.php");
$f2=fopen("check.txt","r");
$sr2=fread($f2,filesize("check.txt"));
fclose($f2);
echo("<script>
alert('$sr2');
      </script>");
    $take=$link->query("SELECT * FROM users");
    echo("<center><h1>My Orders</h1>");
    echo("<table>");
    while ($cell=$take->fetch_object()) {
        $name=$cell->name;
        if ($name==$_SESSION['name']) {
            echo("<tr><td>Name:</td><td>".$_SESSION['name']."</td></tr>");
            echo("<tr><td>Phone</td><td>$cell->phone</td></tr>");
            echo("<tr><td>Address</td><td>$cell->address</td></tr>");
            echo("<input type='hidden' name='b_name' value='$cell->name'>");
            echo("<input type='hidden' name='b_phone' value='$cell->phone'>");
            echo("<input type='hidden' name='b_address' value='$cell->address'>");
        }
    }
    $food=$link->query("SELECT * FROM cart");
    while ($node=$food->fetch_object()) {
        $food_name=$node->name;
        $price=$node->price; 
        $total=$link->query("SELECT SUM(price) AS 'got' FROM cart;");
        if ($row=$total->fetch_object()) {
            $tot=$row->got;
            echo("<tr><td>Item:</td><td>$food_name</td></tr>");
            echo("<tr><td>Price</td><td>$price Rs</td></tr>");
        }
 
    }
        echo("<tr><td>Total</td><td>$tot Rs</td></tr>");
        echo("<input type='hidden' name='f_name' value='$food_name'>");
        echo("<input type='hidden' name='f_price' value='$price'>");
        echo("<input type='hidden' name='f_tot' value='$tot'>");
   
?>
<tr><td>Payment</td><td><select name="payment" id="">
    <option value="">select Payment</option>
    <option value="online_payment">online_payment</option>
    <option value="cash_on_delivery">cash on delivery</option>
</select></td></tr>
<tr><td></td><td><input type="submit" value="Make Payment" name="payed"></td></tr>
</table>
</center>
</form>
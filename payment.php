<?php
include("dbcon.php");
if (isset($_POST['payed'])) {
    if (empty($_POST['payment'])) {
        $fail="select mode of payment";
        $fh= fopen("check.txt","w");
        fwrite($fh,$fail);
        fclose($fh);
        header("Location:buy.php");
    }
    else {
        $name=$_POST['b_name'];
        $phone=$_POST['b_phone'];
        $address=$_POST['b_address'];
        $foodname=$_POST['f_name'];
        $price=$_POST['f_price'];
        $payment=$_POST['payment'];
        $total=$_POST['f_tot'];

        $pay=$link->query("INSERT INTO orders values('','$foodname','$price','$name',
                          '$phone','$address','$payment','$total')");
        if ($pay==true) {
            $suc="success";
            $fh= fopen("check.txt","w");
            fwrite($fh,$suc);
            fclose($fh);
           header("Location:home.php");
        }
    }
}
?>
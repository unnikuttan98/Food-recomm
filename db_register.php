<?php
include("dbcon.php");
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])||empty($_POST['email'])||
        empty($_POST['phone'])||empty($_POST['address'])||
        empty($_POST['gender'])||empty($_POST['password'])) {
        header("Location:register.php");
    }
    else {
        $name=$_POST['name'];$email=$_POST['email'];
        $phone=$_POST['phone'];$address=$_POST['address'];
        $gender=$_POST['gender'];$password=$_POST['password'];

        $select=$link->query("SELECT * FROM users");

while ($row=$select->fetch_object()) {
    if ($name==$row->name) {
        $fail="name already registered please try another";
        $fh= fopen("name.txt","w");
        fwrite($fh,$fail);
        fclose($fh);
        header("Location:register.php");
    }
    else {
        $insert=$link->query("INSERT INTO users values
        ('','$name','$email','$phone','$address',
         '$gender','$password')"); 
    }
}

        if ($insert==true) {
            header("Location:login.php");
        }
    }
}
?>
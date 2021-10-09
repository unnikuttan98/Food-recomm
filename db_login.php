<?php
include("dbcon.php");
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])||empty($_POST['password'])) {
        header("Location:login.php");
    }
    else{
        $name=$_POST['name'];
        $password=$_POST['password'];
        $select=$link->query("SELECT * FROM users");
        if ($select==false) {
            echo($link->error);
        }
        while ($row=$select->fetch_object()) {
            if ($name==$row->name) {
                if ($password==$row->password) {
                    session_start();
                    $_SESSION['name']=$row->name;
                    header("Location:home.php");
                }
            }
            else {
                header("Location:login.php");
            }
        }
    }
}
?>
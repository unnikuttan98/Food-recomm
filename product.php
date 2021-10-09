<?php
session_start();
include("header.html");
include("dbcon.php");
$f2=fopen("product.txt","r");
$prod=fread($f2,filesize("product.txt"));
fclose($f2);
$show=$link->query("SELECT * FROM food");
echo("<div class='carder'>");
while ($row=$show->fetch_object()) {
  if (strtolower($row->catagory)==strtolower($prod)) {
    echo"<h3>$row->name</h3>
    <img src='$row->image'>
    <p>$row->details</p>
    <p>$row->catagory</p>
    <p>$row->price Rs</p>";
  }
  elseif (strtolower($row->name)==strtolower($prod)) {
    echo"<h3>$row->name</h3>
    <img src='$row->image'>
    <p>$row->details</p>
    <p>$row->catagory</p>
    <p>$row->price Rs</p>";
  }
}
  
?></div>
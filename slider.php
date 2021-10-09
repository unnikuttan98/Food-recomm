<?php
include("dbcon.php");
$select=$link->query("SELECT * FROM food");

while ($row=$select->fetch_object()) {
if ($row->food_id==1) {
    $src1=$row->name;
   $fh= fopen("src1.txt","w");
    fwrite($fh,$src1);
    fclose($fh);
}
if ($row->food_id==2) {
    $src2=$row->name;
    $fh= fopen("src2.txt","w");
    fwrite($fh,$src2);
    fclose($fh);
}
if ($row->food_id==5) {
    $src5=$row->image;
    $fh= fopen("src5.txt","w");
    fwrite($fh,$src5);
    fclose($fh);
}
}
$f1=fopen("src1.txt","r");
$sr1=fread($f1,filesize("src1.txt"));
fclose($f1);
$f2=fopen("src2.txt","r");
$sr2=fread($f2,filesize("src2.txt"));
fclose($f2);
$f5=fopen("src5.txt","r");
$sr5=fread($f5,filesize("src5.txt"));
fclose($f5);
    echo("
    <div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
    <div class='carousel-inner'>
      <div class='carousel-item active'>
          <img src='$sr1.jpg' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='$sr2.jpg' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='$sr5' class='d-block w-100' alt='...'>
      </div>
    </div>
  </div>
        ");
?>

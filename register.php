<?php
include("header.html");
?><hr>
<div class="content">
    <div class="header">
        <h1>Register Form</h1>
    </div>
    <?php
    $f2=fopen("name.txt","r");
$sr2=fread($f2,filesize("name.txt"));
fclose($f2);
echo("<script>
alert('$sr2');
      </script>");?>
    <div id="message_error">
        <center><h2>Some fields are empty</h2></center>
    </div>
    <form action="db_register.php" method="post" name="form">
        <div class="name">
            <label>Name</label><strong>*</strong>
            <input type="text" name="name" id="name">
        </div><hr>
        <div class="email">
            <label>Email</label><strong>*</strong>
            <input type="email" name="email" id="email">
        </div><hr>
        <div class="phone">
            <label>Phone</label><strong>*</strong>
            <input type="number" name="phone" id="phone">
        </div><hr>
        <div class="address">
            <label>Address</label><strong>*</strong>
            <input type="text" name="address" id="sddress">
        </div><hr>
        <div class="gender">
            <label>Gender</label><strong>*</strong>
            <select name="gender" id="gender">
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div><hr>
        <div class="password">
            <label>Password</label><strong>*</strong>
            <input type="password" name="password" id="password">
        </div><hr>
        <div class="submit">
            <input type="submit" name="submit" value="Register" id="sub" onclick="validation()">
        </div>
    </form>
    <script src="valid.js"></script>
</div>
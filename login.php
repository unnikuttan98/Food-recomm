<?php
include("header.html");
?><hr>
<div class="content">
    <div class="header">
        <h1>Login Form</h1>
    </div>
    <div id="message_error">
        <center><h2>Some fields are empty</h2></center>
    </div>
    <form action="db_login.php" method="post" name="form">
        <div class="name">
            <label>Name</label><strong>*</strong>
            <input type="text" name="name" id="name">
        </div><hr>
        <div class="password">
            <label>Password</label><strong>*</strong>
            <input type="password" name="password" id="password">
        </div><hr>
        <div class="submit">
            <input type="submit" name="submit" value="Login" id="sub" onclick="valid()">
        </div>
    </form>
    <script src="valid.js"></script>
</div>
<?php
    require('essentials.php');
    require('connection.php');
?>


<html>

<head>
    <meta charset = 'utf8'>
    <title>Log In to NUK Website</title>
    <style>
        body {
            font-family: monospace;
            background-color: #92a8d1;
            color: #0f172a;
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>

<body>
<br/><br/><br/>
<center>
    <font size = "8px">Please log in to continue...</font>
</center>

<form action = "loginmail.php" method = "post">
    Email<br/><input type = "email" name = "to" required><br/><br/>
    Student ID<br/><input type = "text" name = "sId" required><br/><br/>
    Name<br/><input type = "text" name = "sName" required><br/><br/>
    Password<br/><input type = "password" name = "sPass" required><br/><br/>
    Department<br/><input type = "text" name = "sDept" required><br/><br/>
    <input type = "submit" value = "Sign In"><br/><br/><br/><br/>
</form>

<p><a href="indexadmin.php">If you're an admin, click here</a></p>

<center>
    <font color = "red">We'll send email verification to confirm your registration.</font>
    </br>
    <font color = "red">Please do not enter any sensitive information.</font>
</center></br></br></br></br><br/><br/><br/><br/><br/>

    <hr width = "100%"></hr>
    <center>© 2024 NUK MERCHANDISE WEBSITE ALL RIGHT RESERVED</center>
    <br/>
</body>

</html>
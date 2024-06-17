<?php
    require('essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title> Admin Panel - Dashboard </title>
    <link rel="stylesheet" href = "style2.css">
</head>

<body>
    <header>
        <h1> ADMIN PANEL </h2>
        <div class = 'user'>
            <a href='logout.php'>LOGOUT</a>
        </div>
    </header>

    <div class = 'input1'>
    <a href='account.php'> Accounts </a>
    </div>
    <div class = 'input2'>
    <a href='chart.php'> Stats </a>
    </div>
    <div class = 'input3'>
    <a href='feedback.php'> Feedbacks </a>
    </div>

</body>
</html>
<?php
    require('essentials.php');
    require('connection.php');
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href = "style2.css">
</head>

<body>

<div class = "popup-container" id ="login-popup">
    <div class = "popup">
        <form method = "POST">
            <h2 class="login-panel">
                <span>ADMIN LOGIN</span>
            </h2>

            <input type = "text" placeholder = "Admin Name" name="admin_name" required>
            <input type = "password" placeholder = "Password" name="admin_pass" required>
            <button type = "submit" class = "login-btn" name="login">LOGIN</button>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $res = select($query,$values,"ss");
        if($res->num_rows==1)
        {
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');

        }
        else
        {
            echo"
            <script>
            alert('login failed - invalid credentials!');
            window.location.href='index.php';
            </script>
            ";
        }
    }
?>

</body>
</html>
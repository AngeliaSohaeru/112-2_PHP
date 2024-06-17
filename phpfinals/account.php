<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title> Accounts </title>
    <link rel="stylesheet" href = "style2.css">
</head>

<body>
    <header>
        <h1> ADMIN PANEL </h2>
        <div class = 'button1'>
        <a href='dashboard.php'>GO BACK</a>
        </div>
        <div class = 'button2'>
        <a href='logoutadmin.php'>LOGOUT</a>
        </div>
    </header>

<?php
$link = @mysqli_connect( 
            'localhost', 
            'root',    
            '', 
            'nukshop'); 
    
    if (!$link)
    {
        die("Failed to connect to Databa<br/>");
    }

echo "
    <table>
    <caption> LIST OF ACCOUNTS </caption>
    <thead>
    <tr>
        <th> Student ID </th> <th> Name </th> <th> Department </th>
    </tr>
    </thead>
    ";

$SQL="SELECT * FROM nukshop";

$result = mysqli_query($link, $SQL);
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
    echo "<td>".$row['StudentID']."</td><td>".$row['Name']."</td><td>".$row['Department']."</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>

</body>
</html>
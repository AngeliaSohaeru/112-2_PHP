<html>

<head>
<meta charset="utf-8">
    <title>Your Cart</title>
    <style>
        body {
            font-family: monospace;
            color: #0f172a;
            background-color: #92a8d1;
            margin: 0;
            padding-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #0f172a;
        }

        .logout-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0f172a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
        }

        .logout-button:hover {
            background-color: #1e293b;
        }
    </style>
</head>

<body bgcolor="#92a8d1">
    <div class="container">
    <h1>Thank you for purchasing at NUK Online Website!<br/></h1>

    <button class="logout-button" onclick="logout()">Log Out</button>
    </div>

    <script>
        function logout() {
            // Placeholder for actual logout functionality
            alert('Logged out successfully');
            window.location.href = 'login.php'; // Redirect to login page or homepage
        }
    </script>
</body>

</html>
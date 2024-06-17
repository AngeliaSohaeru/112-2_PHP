<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
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

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        input,
        textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        .submit-button {
            padding: 10px 20px;
            background-color: #0f172a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: #1e293b;
        }
    </style>
</head>

<body bgcolor="#92a8d1">
    <div class="container">
        <h1>Feedback Page</h1>
        <?php
        // Connect to the database
        $link = @mysqli_connect(
            'localhost',
            'root',
            '',
            'nukshop'
        );

        if (!$link) {
            die("Failed to connect to Database<br/>");
        }

        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the form data
            $name = mysqli_real_escape_string($link, $_POST['userame']);
            $email = mysqli_real_escape_string($link, $_POST['email']);
            $message = mysqli_real_escape_string($link, $_POST['comment']);

            // Insert the data into the feedback table
            $query = "INSERT INTO feedback (username, email, comment) VALUES ('$name', '$email', '$message')";

            if (mysqli_query($link, $query)) {
                // Redirect to login.php after successful submission
                header('Location: login.php');
                exit();
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($link);
            }
        }

        // Close the database connection
        mysqli_close($link);
        ?>
        <form action="" method="post">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Feedback:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" class="submit-button">Submit Feedback</button>
        </form>
    </div>
</body>

</html>

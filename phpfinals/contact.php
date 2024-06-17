<html>

<head>
<meta charset="utf-8">
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

        input, textarea {
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
        <form action="submit_feedback.php" method="post">
            <label for="name">Userame:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Feedback:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" class="submit-button">Submit Feedback</button>
        </form>
    </div>

    <script>
        function redirectToLogin() {
            // Prevent form submission to the server
            event.preventDefault();

            // Perform form submission using AJAX or any other method
            // For demonstration, just showing an alert
            alert('Feedback submitted successfully! Redirecting to login page...');

            // Redirect to login.php
            window.location.href = 'login.php';
        }
    </script>
</body>

</html>
<?php
session_start();
?>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f0f0f0;
        }

        .total {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .quantity-input {
            width: 40px;
            padding: 5px;
            text-align: center;
        }

        .update-btn {
            padding: 5px 10px;
            background-color: #7789AB;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .update-btn:hover {
            background-color: gray;
        }

        .remove-btn {
            padding: 5px 10px;
            background-color: #FF6347;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: #d9534f;
        }

        .checkout-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .checkout-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body bgcolor="#92a8d1">
    <div class="container">
        <h1>Your Cart</h1>

        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];

            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Item</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price per Item</th>';
            echo '<th>Total Price</th>';
            echo '<th>Action</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            $totalPrice = 0;

            foreach ($cart as $itemId => $item) {
                $itemTotal = (float) str_replace('NT$', '', $item['price']) * $item['quantity'];
                $totalPrice += $itemTotal;

                echo '<tr>';
                echo '<td>' . htmlspecialchars($item['name']) . '</td>';
                echo '<td>
                        <form method="post" action="update_cart.php">
                            <input type="hidden" name="itemId" value="' . $itemId . '">
                            <input class="quantity-input" type="number" name="quantity" value="' . $item['quantity'] . '" min="1">
                            <button type="submit" class="update-btn">Update</button>
                        </form>
                      </td>';
                echo '<td>' . htmlspecialchars($item['price']) . '</td>';
                echo '<td>NT$' . number_format($itemTotal, 2) . '</td>';
                echo '<td>
                        <form method="post" action="remove_from_cart.php">
                            <input type="hidden" name="itemId" value="' . $itemId . '">
                            <button type="submit" class="remove-btn">Remove</button>
                        </form>
                      </td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '<tfoot>';
            echo '<tr>';
            echo '<td colspan="3" class="total">Total:</td>';
            echo '<td colspan="2" class="total">NT$' . number_format($totalPrice, 2) . '</td>';
            echo '</tr>';
            echo '</tfoot>';
            echo '</table>';
            echo '<a href="logout.php" class="checkout-btn">Checkout</a>';
        } else {
            echo '<center><p>Your cart is empty!</p></center>';
            echo '<center><a href = index2.php>Continue Shopping.</a></center>';
        }
        ?>
    </div>
    
    <br/>
    <hr width="100%" height="10px"><br/>
    <center>© 2024 NUK MERCHANDISE WEBSITE ALL RIGHT RESERVED</center>
    <br>
</body>

</html>
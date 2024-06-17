<?php
session_start();

if (isset($_POST['itemId'], $_POST['quantity'])) {
    $itemId = $_POST['itemId'];
    $quantity = (int) $_POST['quantity'];

    if (isset($_SESSION['cart'][$itemId])) {
        if ($quantity > 0) {
            $_SESSION['cart'][$itemId]['quantity'] = $quantity;
        } else {
            unset($_SESSION['cart'][$itemId]);
        }
    }
}

header('Location: checkout.php');
exit;
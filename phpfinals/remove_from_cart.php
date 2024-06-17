<?php
session_start();

if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];

    if (isset($_SESSION['cart'][$itemId])) {
        unset($_SESSION['cart'][$itemId]);
    }
}

header('Location: checkout.php');
exit;
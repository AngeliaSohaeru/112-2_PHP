<?php
session_start();

if (isset($_POST['itemId'], $_POST['itemName'], $_POST['itemPrice'])) {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (array_key_exists($itemId, $_SESSION['cart'])) {
        $_SESSION['cart'][$itemId]['quantity']++;
    } else {
        $_SESSION['cart'][$itemId] = [
            'itemId' => $itemId,
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => 1
        ];
    }
}

// Return a success response
http_response_code(200);
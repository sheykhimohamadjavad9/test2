<?php
require_once 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    if (mysqli_query($connect, "DELETE FROM products WHERE id = $productId")) {
        header('Location: admin_panel.php?msg=deleted');
        exit;
    } else {
        echo "خطا در حذف محصول.";
    }
} else {
    echo "درخواست نامعتبر است.";
}


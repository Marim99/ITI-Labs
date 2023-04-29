<?php

require_once('vendor/autoload.php');

$DB = new MySQLHandler("items");
$connect = $DB->connect();
if ($connect) {
    $id = trim($_SERVER['REQUEST_URI'], 'Day4-Day5/index.php/products');
    $deletedId = trim($_SERVER['REQUEST_URI'], 'Day4-Day5/index.php/delete');
    if ($id && is_numeric($id)) {
        require_once("views/singleItem.php");
    } elseif ($deletedId && is_numeric($deletedId)) {
        $DB->delete($deletedId);
        header("Location: /Day4-Day5/index.php");
        die();
    } else {
        if ($_SERVER['REQUEST_URI'] == "/Day4-Day5/index.php/addProduct") {
            require_once("views/addProduct.php");
            if (!empty($_POST["PRODUCT_code"]) && !empty($_POST["product_name"]) && !empty($_POST["units_in_stock"]) && !empty($_POST["list_price"])) {
                $DB->save($_POST);

                header("Location: /Day4-Day5/index.php");
                die();
            }
        } else {
            require_once("views/allItems.php");
        }
    }
}

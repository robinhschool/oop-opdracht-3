<!-- UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; -->

<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// create product here
// query products

$result = $product->update();

echo $result;

?>
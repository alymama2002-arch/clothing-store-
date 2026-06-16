<?php
include("../includes/db.php");

if(isset($_POST['add']))
{
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category_id = $_POST['category_id'];

    $sql = "INSERT INTO products
    (product_name,description,price,stock,category_id)
    VALUES
    ('$product_name','$description','$price','$stock','$category_id')";

    mysqli_query($conn,$sql);

    echo "Product Added Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
</head>
<body>

<h2>Add Clothing Product</h2>

<form method="POST">

Product Name:<br>
<input type="text" name="product_name" required><br><br>

Description:<br>
<textarea name="description"></textarea><br><br>

Price:<br>
<input type="number" step="0.01" name="price" required><br><br>

Stock:<br>
<input type="number" name="stock" required><br><br>

Category ID:<br>
<input type="number" name="category_id" required><br><br>

<input type="submit" name="add" value="Add Product">

</form>

</body>
</html>
<?php
include("../includes/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $update = "UPDATE products
               SET product_name='$product_name',
                   price='$price',
                   stock='$stock'
               WHERE id='$id'";

    mysqli_query($conn,$update);

    header("Location: manage_products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST">

Name:<br>
<input type="text"
name="product_name"
value="<?php echo $row['product_name']; ?>">

<br><br>

Price:<br>
<input type="number"
name="price"
value="<?php echo $row['price']; ?>">

<br><br>

Stock:<br>
<input type="number"
name="stock"
value="<?php echo $row['stock']; ?>">

<br><br>

<input type="submit"
name="update"
value="Update Product">

</form>

</body>
</html>
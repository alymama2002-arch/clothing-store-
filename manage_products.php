<?php
include("../includes/db.php");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
</head>
<body>

<h2>All Products</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['stock']; ?></td>


    <td>
        <a href="edit_product.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>

<a href="delete_product.php?id=<?php echo $row['id']; ?>">
Delete
</a>

    </td>
</tr>
<?php
}
?>

</table>

</body>
</html>
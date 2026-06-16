<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['fullname']; ?></h1>

<h2>Admin Dashboard</h2>

<br><br>

<a href="add_product.php">Add Product</a>

<br><br>

<a href="manage_products.php">Manage Products</a>

<br><br>

<a href="../logout.php">
Logout
</a>

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
include 'includes/db.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clothing Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h1>Welcome To Clothing Store</h1>

    <a href="register.php" class="btn btn-primary">Register</a>

    <a href="login.php" class="btn btn-success">Login</a>

    <hr>

    <h2>Our Products</h2>

    <div class="row">

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <div class="col-md-4 mb-4">
                <div class="card">

                    <img src="images/<?php echo $row['image']; ?>"
                        class="card-img-top"
                        style="height:250px; object-fit:cover;">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo $row['product_name']; ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $row['description']; ?>
                        </p>

                        <p>
                            <strong>Price:</strong>
                            <?php echo $row['price']; ?> ₪
                        </p>

                        <p>
                            <strong>Stock:</strong>
                            <?php echo $row['stock']; ?>
                        </p>

                    </div>

                </div>
            </div>

        <?php } ?>

    </div>

</div>

</body>
</html>






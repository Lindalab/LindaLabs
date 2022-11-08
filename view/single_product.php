<?php
require('..\functions\product.php');

$productId = $_GET['id'];
$productCat = $_GET['category'];
$productbrand = $_GET['brand'];
$productName = $_GET['pname'];
$productPrice = $_GET['pprice'];
$productDescription = $_GET['pdes'];
$productImage = $_GET['pimage'];
$productKeyword = $_GET['pkeyword'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">

    <title>Landing Page</title>
</head>
<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Shop Me Now</span>
    </div>
</nav>


<body>
    <h4 style=" margin: 5px 40px;">Thank you for choosing us</h4> <br>
    <a href="allproduct.php" class="btn btn-primary " role="button" aria-disabled="true" style=" margin: 5px 40px;">Back</a>
    
     <br> <br>

    <div class="card text-bg-primary mb-3" style="max-width: 18rem; margin: 0px 40px;">
        <div class="card-header">Details of <?php echo $productName ?></div>
        <div class="card-body">
            <h6 class="card-title">Product Category : <?php echo $productCat ?> </h6>
            <h6 class="card-title">Product Brand : <?php echo $productbrand ?> </h6>
            <p class="card-text">Description<br> <?php echo $productDescription ?></p>
            <a href="#" class="btn btn-primary">Price : <?php echo $productPrice ?></a>
            <a href="?id=$productId&pname=$productName&category=$productCat&brand=$productbrand&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="bi bi-cart-check"></i></a>
        </div>









        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>
<?php
require('..\functions\product.php');
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
    <h4>Select a product now</h4> <br>
    <!-- search box -->
    <div class="input-group mb-3">
        <form action="#" method="get">
        <input type="text" class="form-control"  name="search"placeholder="Type here" aria-label="Type here to search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" name="submit" type="submit">Search</button>
        </div>
        </form>
    </div>
    <br>
    <a class="btn btn-primary" href="cart.php" role="button">View Cart<i class="bi bi-eye-fill"></i></a>
    <br>
    <table class="table" style="width:80%; margin: 10px 40px;">
        <thead class="table-primary">
            <tr>
                <th scope='col'> Product</th>
                <th scope='col'>Price</th>
                <th scope='col'>Image</th>
                <th scope='col'>Details</th>
                <th scope='col'>Cart</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET['submit'])){
                $searchterm=$_GET['search'];
                mysearchproductViewTable_fnc($searchterm);

            }else{
            myproductViewTable_fnc();
            }
            ?>

        </tbody>
    </table>







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



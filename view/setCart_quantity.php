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
    <link rel="stylesheet" href="../css/index.css">


</head>



<body>


    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                           
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="../images/Customer/logo.jpg" style="width: 185px; height: 100px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">View Cart</h4>
                                    </div>


                                    <form action="../actions/add_to_cart.php" method="POST" style="margin:5% 20%;" >

                                        <div class="form-outline mb-4">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pbrand">Product Brand</label>
                                            <input type="text" name="pbrand" id="pbrand" value='<?php echo $productbrand ?>' class="form-control" readonly />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pcat">Product Category</label>
                                            <input type="text" name="pcat" id="pcat" value='<?php echo $productCat ?>' readonly class="form-control" />
                                        </div>
                                            <label class="form-label" for="pname">Product Name</label>
                                            <input type="hidden" name="pid" id="pid" class="form-control" value='<?php echo $productId ?>'/>
                                            <input type="text" name="pname" id="pname" class="form-control" value='<?php echo $productName ?>' readonly />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pprice">Product Price</label>
                                            <input type="text" name="pprice" id="pprice" class="form-control" value='<?php echo $productPrice ?>' readonly  />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pqty">Quantity</label>
                                            <input type="number" name="pqty" id="pqty" class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="submit" value="Add Product" />

                                            <!-- onclick="callmeajax()" -->
                                        </div>
                                    </form>

                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    






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


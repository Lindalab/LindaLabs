<?php
require('../functions/cart.php');
session_start();
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
    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <title>Landing Page</title>
</head>
<body>
<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Shop Me Now</span>
    </div>
</nav>
    <h4>Your Cart</h4> <br>
    <!-- search box -->
   
    <a href="cart.php" class="btn btn-primary " role="button" aria-disabled="true" style=" margin: 10px 40px;">Back</a>
    
    <table class="table" style="width:80%; margin: 10px 40px;">
        <thead class="table-primary">
            <tr>
                <th scope='col'> Product</th>
                
                
                <th scope='col'>Quantity</th>
                
                <th scope='col'>Total</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
             $total= myTableProduct_fnc();

            ?>

        </tbody>
    </table>
    

    <button class="btn btn-primary" type="submit" style=" margin: 10px 75%;" onclick="payWithPaystack()">Pay</button>
    <!-- <a href="" data-toggle="modal" data-target="#PayModalLong" class="btn btn-primary " role="button" aria-disabled="true" style=" margin: 10px 75%;" onclick="payWithPaystack()">Pay</a> -->



    <!-- <form id="paymentForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" required />
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required />
        </div>

        <div class="form-submit">
            <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form> -->

    <script>
        // const paymentForm = document.getElementById('paymentForm');
        // paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack() {
            event.preventDefault();
            // event.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_1917da2fc21c61a25eb4edb146b723e98b2a7969', // Replace with your public key
                // email: document.getElementById("email-address").value,
                email: '<?php 
                 
                  echo  $_SESSION['customerEmail']; 
                  ?>',
                // amount: document.getElementById("amount").value * 100,
                amount: <?php echo $total ?> * 100,
                ref: Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                currency: 'GHS',
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);

                    window.location = "../actions/payment_process.php?reference=" + response.reference;
                }
            });

            handler.openIframe();
        }
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
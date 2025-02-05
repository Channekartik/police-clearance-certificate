<?php 
 require "connection.php"; 
 require "controllerUserData.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
         <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image:url(lalmahalimage.jpg);
    background-size: cover;
    }
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: linear-gradient(90deg,deeppink,cyan);
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500; 
    }
    .navbar{
      position:sticky;
      top:0;
      z-index: 2100;
        text:var(--white);
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h2{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    nav img{
        max-width: 100px;
        height:auto;
        vertical-align:middle;
        overflow: hidden;
        border-radius: 50%;
        background-size:circle;
    }

        body {
    font-family: 'Arial', sans-serif;
    background-image:url(lalmahalimage.jpg);
    margin: 0;
    align-content:center;
    align-items: center;
    height: 100vh;
    background-size: cover;
    }
    .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 400px;
}

.header {
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.receipt-details,
.payment-details,
.applicant-details {
    margin-top: 20px;
}

h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

p {
    margin: 5px 0;
}

strong {
    font-weight: bold;
}
    </style>
    </head>
    <body>
    <nav class="navbar">
            <img src="maharashtrapolice.jpeg" alt="logo">
            <a class="navbar-brand" >Police Clearance Services</a>
            <a href="home.php"  class="btn btn-light">HOME</a>
            <a href="character.php" class="btn btn-light">Character Certificate</a>
            <a href="certificate.php" class="btn btn-light">Download Certificate</a>
            <a href="about.php" class="btn btn-light">About Us</a>
            <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
        </nav>
        
    <?php
    require "controllerUserData.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve payment form data
    $cardNumber = $_POST["cardNumber"];
    $expiryDate = $_POST["expiryDate"];
    $cvv = $_POST["cvv"];
    $cardHolderName = $_POST["cardHolderName"];

    // Perform payment processing logic (you would typically use a payment gateway here)
    // For this example, let's assume the payment is successful
    $paymentStatus = "Success";

    // Generate a receipt number
    $receiptNumber = "PC" . rand(100000, 999999);

    // Get the current date
    $dateIssued = date("F j, Y");

    // Display the payment receipt
    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Payment Receipt</title>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>Payment Receipt</h1>
                        <p>Date Issued: $dateIssued</p>
                    </div>

                    <div class='receipt-details'>
                    <div class='applicant-details'>
                    <p><strong>Name:</strong>$cardHolderName</p>
                </div>
                        <p><strong>Receipt Number:</strong> $receiptNumber</p>
                        <p><strong>Date Issued:</strong> $dateIssued</p>
                    </div>

                    <div class='payment-details'>
                       
                        <p><strong>Total Amount:</strong>Rs.1500.00</p>
                        <p><strong>Payment Method:</strong> Credit Card</p>
                        <p><strong>Payment Status:</strong> $paymentStatus</p>
                    </div>

                    
                </div>
            </body>
            </html>";
} else {
    // If the form is not submitted, redirect to the payment form
    header("Location: payment.php");
    exit();
}
?>



        <style>
            .footer {
            width: 100%;
            position:absolute;
            bottom:-0px;
            left:0;
            z-index: 10;
            padding: 10px 10px;
            align-content:bottom;
            
            background-color: silver;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          }
          
          .footer p {
            text-align: center;
            color: #718096;
          }
          
          @media (prefers-color-scheme: dark) {
            .footer p {
              color: #000;
            }
          }
            </style> 
          <div class="container" style="text-align:center">
				<a href="certificate.php"  class="btn btn-primary">Download Certificate</a>
			</div>
          </body>
            <footer class="footer">
              <p>© 2024 Police Clearance. All rights reserved.</p>
            </footer>
          
          </body>
          </html>
          
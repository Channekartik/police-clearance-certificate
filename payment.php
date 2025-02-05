<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
    margin:auto;
    width: 500px;
}

form {
    display: flex;
    flex-direction: column;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

        </style>
</head>
<body>
<nav class="navbar">
        <img src="maharashtrapolice.jpeg" alt="logo">
        <a class="navbar-brand" >Police Clearance Services</a>
        <a href="home.php"  class="btn btn-light">HOME</a>
        <a href="character.php" class="btn btn-light">Character Certificate</a>
        <a href="#" class="btn btn-light">Download Certificate</a>
        <a href="about.php" class="btn btn-light">About Us</a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>

    <div class="container">
        <form action="receipt.php" method="POST">
            <h1>Payment Details</h1>
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

            <label for="expiryDate">Expiry Date</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>

            <label for="cardHolderName">Cardholder Name</label>
            <input type="text" id="cardHolderName" name="cardHolderName" placeholder="John Doe" required>

            <button type="submit">Pay Now</button>
        </form>
    </div>
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

</body>
  <footer class="footer">
    <p>© 2024 Police Clearance. All rights reserved.</p>
  </footer>

</body>
</html>

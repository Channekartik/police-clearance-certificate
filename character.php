<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Character Certificate Form</title>
    <style>
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
      z-index: 210;
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
            font-family: Arial, sans-serif;
            background-image: url(Lalmahalimage.jpg);
            background-attachment: fixed;
            background-size:100%;
            
            background-size:cover;
            
    
        }
        h1{ margin-bottom: 5px;
            color: black;
            text-align:center;
            text-decoration: underline;
            font: bold;

        }
        h4{
            color: black;
            font: bold;
        }
        .form-container {
            width:80%;
            align-items: center;
            margin: 20px auto;
            backdrop-filter: blur(50px);
            box-shadow: 0 0 10px rgb(22, 177, 254);
            padding: 20px;
            background-color:silver;
            border-radius: 8px;
            animation: slideIn 1s ease-in-out;
            border-radius: 5px;
        }
        .form-control{
            width:100%;
        }

        label {
            align-items: center;
            display: flex;
            margin-bottom: 5px;
            color: black;
        }

        input[type="text"], textarea {
            align-items: center;
            height: 90%;
            width: 100%;
            color: #000;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            align-items: center;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <img src="maharashtrapolice.jpeg" alt="logo">
        <a class="navbar-brand" href="#">Police Cleararance Services</a>
        <a href="home.php"  class="btn btn-light">HOME</a>
        <a href="character.php" class="btn btn-light">Character Certificate</a>
        <a href="#" class="btn btn-light">Download Certificate</a>
        <a href="about.php" class="btn btn-light">About Us</a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
	<?php
		include 'connection.php';
		session_start();	
		$user_id = $_SESSION['user_id']; 
		$check_query = "SELECT * FROM character_certificate WHERE user_id = $user_id ";
		if($result = mysqli_query($con,$check_query)){
			if(mysqli_num_rows($result)){
				while($row = $result->fetch_assoc()){
					$firstName = $row["first_name"];
					$middleName = $row["middle_name"];
					$lastName = $row["last_name"];
					$birthDate = $row["birth_date"];
					$idType = $row["select_doc"];
					$idNumber = $row["idnoof_doc"];
					$present_building = $row["present_building"];
					$present_street = $row["present_street"];
					$present_landmark = $row["present_landmark"];
					$present_locality = $row["present_locality"];
					$present_state = $row["present_state"];
					$present_district = $row["present_district"];
					$present_taluka = $row["present_taluka"];
					$present_village = $row["present_village"];
					$present_pincode = $row["present_pincode"];
					$permanent_building = $row["permanent_building"];
					$permanent_street = $row["permanent_street"];
					$permanent_landmark = $row["permanent_landmark"];
					$permanent_locality = $row["permanent_locality"];
					$permanent_state = $row["permanent_state"];
					$permanent_district = $row["permanent_disrtict"];
					$permanent_taluka = $row["permanent_taluka"];
					$permanent_village = $row["permanent_village"];
					$permanent_pincode = $row["permanent_pincode"];
					$designation = $row["company_user_designation"];
					$company = $row["company_name"];
					$address_company = $row["company_address"];
				}
			}
		}
	?>
    <div class="form-container">
        <h1>Character Certificate Form</h1>
        <form action="char.php" method="post"><br>
            <section>
            <h1>Personal Information</h1>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo@$firstName; ?>" required>

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" value="<?php echo@$middleName; ?>" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo@$lastName; ?>" required>
            <input type="date" id="birthdate" name="birthdate" value="2000-01-01" min="1900-01-01" max="2100-12-31">

            <label for="ID">--Select--</label>
            <select placeholder="--Select--" name="ID" [(ngModel)]="ID" class="form-control" #ID="ngModel" required><br>
				<?php 
				$selcted1 = $selcted2 = $selcted3 = $selcted4 = ''; 
				if($idType == 'pancard'){
					$selcted1 = 'selected'; 
				}
				if($idType == 'electioncard'){
					$selcted2 = 'selected'; 
				}
				if($idType == 'drivinglicense'){
					$selcted3 = 'selected'; 
				}
				if($idType == 'adharcard'){
					$selcted4 = 'selected'; 
				}
				
				?>
				<option <?php echo $selcted1; ?> value="pancard">Pan Card</option>
				<option <?php echo $selcted2; ?> value="electioncard">Election Card</option>
				<option <?php echo $selcted3; ?> value="drivinglicense">Driving License</option>
				<option <?php echo $selcted4; ?> value="adharcard">Adhar Card</option>
            </select>

            <label for="idno">ID NO.</label>
            <input type="text" id="idno" name="idno" value="<?php echo@$idNumber; ?>" required>
        </section>
        <section>
            <h1>Present Residential Address</h1>

            <label for="present_building">Building</label>
            <input type="text" id="present_building" name="present_building" value="<?php echo @$present_building; ?>" required>

            <label for="present_street">Street</label>
            <input type="text" id="present_street" name="present_street" value="<?php echo @$present_street; ?>" required>

            <label for="present_landmark">Landmark</label>
            <input type="text" id="present_landmark" name="present_landmark" value="<?php echo @$present_landmark; ?>" required>

            <label for="present_locality">Locality</label>
            <input type="text" id="present_locality" name="present_locality" value="<?php echo @$present_locality; ?>" required>

            <label for="present_state">State</label>
            <input type="text" id="present_state" name="present_state" value="<?php echo @$present_state; ?>" required>

            <label for="present_district">District</label>
            <input type="text" id="present_district" name="present_district" value="<?php echo @$present_district; ?>" required>

            <label for="present_taluka">Taluka</label>
            <input type="text" id="present_taluka" name="present_taluka" value="<?php echo @$present_taluka; ?>" required>

            <label for="present_village">Village</label>
            <input type="text" id="present_village" name="present_village" value="<?php echo @$present_village; ?>" required>

            <label for="present_pincode">Pincode</label>
            <input type="text" id="present_pincode" name="present_pincode" value="<?php echo @$present_pincode; ?>" required>
        </section>
        
        <section>
            <h1>Native/Permanent Address</h1>

            <label for="permanent_building">Building</label>
            <input type="text" id="permanent_building" name="permanent_building" value="<?php echo @$permanent_building; ?>" required>

            <label for="permanent_street">Street</label>
            <input type="text" id="permanent_street" name="permanent_street" value="<?php echo @$permanent_street; ?>" required>

            <label for="permanent_landmark">Landmark</label>
            <input type="text" id="permanent_landmark" name="permanent_landmark" value="<?php echo @$permanent_landmark; ?>" required>

            <label for="permanent_locality">Locality</label>
            <input type="text" id="permanent_locality" name="permanent_locality" value="<?php echo @$permanent_locality; ?>" required>

            <label for="permanent_state">State</label>
            <input type="text" id="permanent_state" name="permanent_state" value="<?php echo @$permanent_state; ?>" required>

            <label for="permanent_district">District</label>
            <input type="text" id="permanent_district" name="permanent_district" value="<?php echo @$permanent_district; ?>" required>

            <label for="permanent_taluka">Taluka</label>
            <input type="text" id="permanent_taluka" name="permanent_taluka" value="<?php echo @$permanent_taluka; ?>" required>

            <label for="permanent_village">Village</label>
            <input type="text" id="permanent_village" name="permanent_village" value="<?php echo @$permanent_village; ?>" required>

            <label for="permanent_pincode">Pincode</label>
            <input type="text" id="permanent_pincode" name="permanent_pincode" value="<?php echo @$permanent_pincode; ?>" required>
        </section>
        <section>
            <h1>Company Name and Address where NOC/ Certificate is to be submitted</h1>

            <label for="designation">Designation</label>
            <input type="text" id="designation" name="designation" value="<?php echo @$designation; ?>" required>

            <label for="company">Company</label>
            <input type="text" id="company" name="company" value="<?php echo @$company; ?>" required>

            <label for="address_company">Address:</label>
            <input type="text" id="address_company" name="address_company" value="<?php echo @$address_company; ?>"  required>

        </section>
            <input type="submit" name="next"  value="next">
            
        </form>
    </div>
</body>
<style>
  .footer {
  width: 100%;
  position:absolute;
  bottom:-330%;
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
</html>
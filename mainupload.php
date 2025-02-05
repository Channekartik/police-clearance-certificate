<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
$application_id = $_SESSION['application_id'];

// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the target directory for file uploads
    $uploadDir = "uploads/";
	
    // Loop through each file input
	$con->query("DELETE FROM files1 WHERE application_id = $application_id");
	//print_r($_FILES['file']); 
    foreach ($_FILES as $files) {  
		
		foreach($files['name'] as $key=>$file){
			// Check if the file is selected
			if ($files['size'][$key] > 0) {
				// Generate a unique filename to prevent overwriting
				$filename = uniqid() . '_' . basename($file);
				$targetFilePath = $uploadDir . $filename;
				// Move the file to the specified directory
				if (move_uploaded_file($files["tmp_name"][$key], $targetFilePath)) {
					// Insert file information into the database
					
					$stmt = $con->prepare("INSERT INTO files1 (application_id, filename, filepath) VALUES (?, ?, ?)");
					$stmt->bind_param("iss", $application_id, $filename, $targetFilePath);
					$stmt->execute();
					$stmt->close();
				} else {
					echo "Error uploading file.";
				}
			}	
		}
        
    }
    echo '<script>
	alert("Document submitted successfully. Application ID: ' . $application_id . '");
	window.location.href="payment.php";
	</script>';
}

// Fetch file data from the database
$result = $con->query("SELECT * FROM files1 WHERE application_id = $application_id");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<title>File upload and download</title>
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
            font-family: Arial, sans-serif;
            background-color:white;
            background-attachment: fixed;
            background-size:100%;
            
            background-size:cover;
            
    }
    
    b{
        text-decoration: none;
        color: white;
        background: #dc3545;
        padding: 7px 10px;
        border-radius: 4px;  
        font-size: 19px;
    }
    b:hover{
		background: rgb(220 53 69 / 85%);
    }
    b:focus{
        outline: 3px solid rgb(220 53 69 / 50%);
    }
    .content{
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .submi{
        align-content:bottom;
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


	<div class="container mt-5">
      <form action="mainupload.php" method="POST" enctype="multipart/form-data">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Browse Files</th>
                </tr>
            </thead>
            <tbody>
                
                        <tr>
                            <td>Photo</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file"></td>
                        </tr>
                        <tr>
                            <td>Signature</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file2"></td>
                            
                        </tr>
                        <tr>
                            <td>School Leaving Certificate</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file3"></td>
                        </tr>
                        <tr>
                            <td>Passport</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file4"></td>
                        </tr>
                        <tr>
                            <td>Current Electric / Telephone bill showing applicants Address and Name</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file5"></td>
                        </tr>
                        <tr>
                            <td>Company / Office Letter / Self deaclaration for issue of Verification Certificate</td>
                            <td><input type="file" class="form-control" name="file[]" id = "file6"></td>
                        </tr>  
						<tr>
							<td colspan="3" align="right"><button type="submit" class="btn btn-primary">Upload</button></td>
						</tr>
                        <?php
						if(@$result->num_rows > 0){
							while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<td colspan="3"><img height="200" src="'.$row['filepath'].'"/></td>';
								//echo '<td><input type="file" class="form-control" name="file" id="file"></td>';
								//echo '<td><button type="submit" class="btn btn-primary">Upload</button></td>';
								//echo '<td><a href="' . htmlspecialchars($row['filepath']) . '" class="btn btn-primary" view>View</a></td>';
								echo '</tr>';
							}
						}
                ?>                  
            </tbody>
        </table>
		</form>
        <!-- <button type="submit" class="submi">Generate Application ID</button> 
    
        <input type="button" onclick="applicationID()" value="Generate Application ID">-->
        
</form>

<!-- Your script for displaying the alert message -->
<script>
function applicationID(){
    // You can customize the alert message here
    // This will trigger the alert when the page loads
    // You may want to adjust the timing based on your specific requirements
    alert("Document submitted successfully. Application ID: <?php echo $con->insert_id; ?>");
};
</script>
    </div>
            <div  class="content">
        <a href="character.php">&laquo; Previous</a>
        
    </div>
    <style>
  .footer {
  width: 100%;
  position:absolute;
  bottom:-420px;
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

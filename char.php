<?php
session_start();
$server_name="localhost";
$username="root";
$password="";
$db="policedb";
$con=mysqli_connect($server_name,$username,$password,$db);
if(!$con)
{
    die("connection failed:" . mysqli_connect_error());
}
// Check if the form is submitted
if (isset($_POST['next'])) 
{
	
	
	 //print_r($_SESSION); exit;
	
    // Collect form data
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $birthDate = $_POST["birthdate"];
    $idType = $_POST["ID"];
    $idNumber = $_POST["idno"];
    $present_building = $_POST["present_building"];
    $present_street = $_POST["present_street"];
    $present_landmark = $_POST["present_landmark"];
    $present_locality = $_POST["present_locality"];
    $present_state = $_POST["present_state"];
    $present_district = $_POST["present_district"];
    $present_taluka = $_POST["present_taluka"];
    $present_village = $_POST["present_village"];
    $present_pincode = $_POST["present_pincode"];
    $permanent_building = $_POST["permanent_building"];
    $permanent_street = $_POST["permanent_street"];
    $permanent_landmark = $_POST["permanent_landmark"];
    $permanent_locality = $_POST["permanent_locality"];
    $permanent_state = $_POST["permanent_state"];
    $permanent_district = $_POST["permanent_district"];
    $permanent_taluka = $_POST["permanent_taluka"];
    $permanent_village = $_POST["permanent_village"];
    $permanent_pincode = $_POST["permanent_pincode"];
    $designation = $_POST["designation"];
    $company = $_POST["company"];
    $address_company = $_POST["address_company"];

	$user_id = $_SESSION['user_id']; 

    $sql_query = "INSERT INTO character_certificate(user_id, first_name ,middle_name ,last_name ,birth_date ,select_doc ,idnoof_doc ,present_building ,present_street ,present_landmark ,present_locality ,present_state ,present_district ,present_taluka ,present_village ,present_pincode ,permanent_building ,permanent_street ,permanent_landmark,	permanent_locality ,permanent_state ,permanent_disrtict ,permanent_taluka ,permanent_village ,permanent_pincode ,company_user_designation ,company_name,company_address)
    VALUES($user_id, '$firstName','$middleName','$lastName','$birthDate','$idType','$idNumber','$present_building','$present_street','$present_landmark','$present_locality',
    '$present_state','$present_district','$present_taluka','$present_village','$present_pincode','$permanent_building','$permanent_street','$permanent_landmark','$permanent_locality','$permanent_state',
    '$permanent_district','$permanent_taluka','$permanent_village','$permanent_pincode','$designation','$company','$address_company')";
	
	
	$check_query = "SELECT user_id FROM character_certificate WHERE user_id = $user_id ";
	if($result = mysqli_query($con,$check_query)){
		if(mysqli_num_rows($result)){
			$sql_query = "UPDATE character_certificate SET first_name = '$firstName', 
							middle_name = '$middleName' ,last_name = '$lastName' ,
							birth_date = '$birthDate' ,
							select_doc = '$idType' ,idnoof_doc = '$idNumber' ,
							present_building = '$present_building' ,present_street = '$present_street' ,
							present_landmark = '$present_landmark' ,
							present_locality = '$present_locality',
							present_state= '$present_state' ,
							present_district = '$present_district' ,present_taluka = '$present_taluka' ,
							present_village = '$present_village' ,present_pincode = '$present_pincode' ,
							permanent_building = '$permanent_building' ,
							permanent_street = '$permanent_street' ,permanent_landmark = '$permanent_landmark',	
							permanent_locality = '$permanent_locality' ,
							permanent_state = '$permanent_state' ,
							permanent_disrtict = '$permanent_district' ,
							permanent_taluka = '$permanent_taluka' ,permanent_village = '$permanent_village' ,
							permanent_pincode = '$permanent_pincode' ,
							company_user_designation = '$designation' ,company_name = '$company',
							company_address = '$address_company' WHERE user_id = $user_id";
		}
	}
	

if(mysqli_query($con,$sql_query))
{
    //echo "success";
	$result = $con->query("SELECT * FROM character_certificate WHERE user_id = $user_id");
	if(@$result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			$_SESSION['application_id'] = $row['application_id'];							
		}
	}
	
	header('Location:mainupload.php');
	exit;
}
else
{
    echo "error:" . "" . mysqli_error($con); 
}


   
mysqli_close($con);

    
}
?>

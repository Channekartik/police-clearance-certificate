<?php require_once "controllerUserData.php"; ?>
<?php 

if(isset($_POST) && !empty($_POST) ){
	$app_id = $_POST['app_id'];
	$status = $_POST['status'];
	if($status == 'approve'){
		$con->query('UPDATE character_certificate SET is_approved=1 WHERE application_id = '.$app_id);
	}
	if($status == 'reject'){
		$con->query('UPDATE character_certificate SET is_approved=0 WHERE application_id = '.$app_id);
	}
	exit;
}

$result = $con->query("SELECT a.*, b.*, a.application_id app_id FROM character_certificate a LEFT JOIN files1 b ON a.application_id = b.application_id ORDER BY app_id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

#slider {
  box-sizing:content-box;
  position:fixed;
  z-index: 0;
  width: 100%;
  max-width: 900px;
 max-height:500px ;
}

.slides {
  display: cover;
}

.slides{
  width: 900px;
  height:auto;
}

#dot {
  position: relative;
  bottom: 20px;
  left: 50%;
  display: flex;
}

.dot {
  height: 10px;
  width: 10px;
  margin: 0 5px;
  background-color: #bbb;
  border-radius: 75%;
  cursor: pointer;
}

.dot.active {
  
  background-color: #717171;
}

</style>
</head>
<body>
    <nav class="navbar">
        <img src="maharashtrapolice.jpeg" alt="logo">
        <a class="navbar-brand" href="#">Police Cleararance Services</a>
        <a href="home.php"  class="btn btn-light">HOME</a>
        
        <a href="character.php" class="btn btn-light">Character Certificate</a>
        <a href="certificate.php" class="btn btn-light">Download Certificate</a>
        <a href="about.php" class="btn btn-light">About Us</a>
        <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    
    
<style>
   @import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
   
   .design-section {
  display: relative;
  flex-direction: grid;
  align-items: right;
  justify-content: cover;
  background-color: #fff;
  size:;
  margin-left:70% ;
  min-height: 100vh;
  padding: 100px 100;
  font-family: Jost;
}

.design {
  display: absolute;
  align-items: right;
  justify-content: right;
  position: absolute;
}

.timeline {
  width: 80%;
  height: 100%;
  max-width: 800px;
  margin: 0 0;
  display: absolute;
  flex-direction: column;
}

.timeline-content {
  padding: 20px;
  background: #1f1f1f;
  -webkit-box-shadow: 4px 4px 10px #1a1a1a, -4px -4px 10px #242424;
          box-shadow: 4px 4px 10px #1a1a1a, -4px -4px 10px #242424;
  border-radius: 5px;
  color: white;
  padding: 1.75rem;
  transition: 0.4s ease;
  overflow-wrap: break-word !important;
  margin: 100px;
  margin-bottom: 20px;
  border-radius: 6px;
}


.timeline-component {
  margin: 0px 5px 5px 5px;
}

@media screen and (min-width: 768px) {
  .timeline {
    display: grid;
    grid-template-columns: 1fr 3px 1fr;
  }
  .timeline-middle {
    position: relative;
    top:0px;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    width: 5px;
    height: 100%;
  }
  .main-middle {
    opacity: 0;
  }
  .timeline-circle {
    position: absolute;
    top: 0;
    left: 50%;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
}
table tr td,table tr th{padding:10px;}
</style>
<div class="container">
<table border="1" style="margin:10px;padding:10px;">
<tr>
	<th>Application ID</th><th>Name</th><th>Birth Date</th><th>Document</th>
	<th>Doc. No.</th><th>Address</th><th>Documents</th><th>Action</th>
</tr>

<?php 

if(@$result->num_rows > 0){
	while ($row = $result->fetch_assoc()) { ?>
	<tr>
	<td><?php echo $row['app_id'];?></td>
	<td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></td>
	<td><?php echo $row['birth_date']; ?></td>
	<td><?php echo $row['select_doc']; ?></td>
	<td><?php echo $row['idnoof_doc']; ?></td>
	<td><?php echo $row['present_building'].' '.$row['present_street'].' '.$row['present_landmark'].' '.$row['present_locality'].' '.$row['present_state'].' '.$row['present_district'].' '.$row['present_taluka'].' '.$row['present_village'].' '.$row['present_pincode']; ?></td>
	<td><img width="100" src="<?php echo $row['filepath']; ?>" /></td>
	<td width="200">
		<button type="button" onclick="changeStatus('<?php echo $row['app_id'];?>','approve');  alert('Application is approved!!');" class="btn btn-primary">Approve</button>
		<button type="button" onclick="changeStatus('<?php echo $row['app_id'];?>','reject'); alert('Application is rejected!!');" class="btn btn-primary">Reject</button>
	</td>
	</tr>	
	<?php }
}

?>

</table>   
</div>
   
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
function changeStatus(app_id, status){
	$.ajax({
		url: "admin.php",
		type: "post",
		data: {'app_id':app_id,'status':status},
		success: function(d) {
			//alert(d);
		}
	});	
}


var flag = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(flag<0){
    flag = slides.length-1;
  }

  if(flag>slides.length-1){
    flag = 0;
  }

  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }

  slides[flag].style.display= "block";
  dot[flag].classList.add("active");

  flag++;

  setTimeout(changeSlide,1500);

}

changeSlide();

</script>

 
<style>
    .footer {
    width: 100%;
    position:absolute;
    bottom:auto;
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
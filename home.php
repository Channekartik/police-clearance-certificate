<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?>| Home</title>
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
    
    <div id="slider">
  <div class="slides">
    <img src="g20.jpg" width="100%" />
   </div>

    <div class="slides">
    <img src="civil.jpeg" width="100%" />
  </div>

    <div class="slides">
    <img src="sabka_saath_sab_ka_wikas.jpg" width="100%" />
  </div>

     <div class="slides">
    <img src="satyamev.jpeg" width="100%" />
  </div>

    <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
   </div>
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
</style>
<section class="design-section">
<div class="timeline">
                  <div class="timeline-empty">
                  </div>
               <div class="timeline-middle">
                   <div class="timeline-circle"></div>
               </div>
               <div class="timeline-component timeline-content">
                <h3>To Register New Candidate, Apply Six easy steps</h3>
                </div>

                <div class="timeline-component timeline-content">
                         <h3>Step 1</h3>
                         <p>Registration</p>
                      
                </div>
                
                <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                </div>
                <div class="timeline-empty">
                </div>

                <div class="timeline-empty">
                </div>

               <div class="timeline-middle">
                   <div class="timeline-circle"></div>
               </div>
               <div class=" timeline-component timeline-content">
                <h3>Step 2</h3>
                <p>Login</p>
               </div>

               <div class="timeline-component timeline-content">
                         <h3>Step 3</h3>
                         <p>Fill Application</p>
                      
                </div>
                <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                </div>
                <div class="timeline-empty">
                </div>

                <div class="timeline-empty">
                </div>

               <div class="timeline-middle">
                   <div class="timeline-circle"></div>
               </div>
               <div class=" timeline-component timeline-content">
                <h3>Step 4</h3>
                <p>Pay Fees</p>
               </div>

               <div class="timeline-component timeline-content">
                         <h3>Step 5</h3>
                         <p>Verification by local Police station</p>
                      
                </div>
                <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                </div>
                <div class="timeline-empty">
                </div>

                <div class="timeline-empty">
                </div>

               <div class="timeline-middle">
                   <div class="timeline-circle"></div>
               </div>
               <div class=" timeline-component timeline-content">
                <h3>Step 6</h3>
                <p>Verification by CFC</p>
               </div>
               <div class="timeline-component timeline-content">
                         <h3>Download Certificate</h3>
                         
                      
                </div>
                <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                </div>

       </div>
    </div>
 
   

   

<script type="text/javascript">
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
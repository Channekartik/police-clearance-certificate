<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');
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

    
.design-section {
  display: block;
  flex-direction: column;
  align-items: right;
  justify-content: right;
  background-color: #000;
  size:cover;
  min-height: 100vh;
  padding: 100px 0;
  font-family: Jost;
}

.design {
  display: cover;
  align-items: right;
  justify-content: right;
  position: absolute;
}

.timeline {
  width: 80%;
  height: 100%;
  max-width: 800px;
  margin: auto auto;
  display: block;
  flex-direction: column;
}

.timeline-content {
  padding: 20px;
  background: #1f1f1f;
  -webkit-box-shadow: 4px 4px 10px #1a1a1a, -4px -4px 10px #242424;
          box-shadow: 4px 4px 10px #1a1a1a, -4px -4px 10px #242424;
  border-radius: 2px;
  color: white;
  padding: 1.75rem;
  transition: 0.4s ease;
  overflow-wrap: break-word !important;
  margin: 1px;
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
    width: 3px;
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
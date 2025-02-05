<?php 
@session_start(); 
include 'connection.php';
$user_id = $_SESSION['user_id'];
$result = $con->query("SELECT a.*,b.* FROM  usertable a LEFT JOIN character_certificate b ON a.user_id = b.user_id  WHERE a.user_id = $user_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Clearance Certificate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .logo{
        padding-left: 1px!important;
        width:100px;
        }             
        
        .log{
        float:right;
        padding-right: 1px!important;
        width:130px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 0.5px;
        }

        h1 {
            font-size: 24px;
        }

        h3 {
            font-size: 11.5px;
            text-align:right;
            margin-top: 0;
        }

        h4 {
            font-size: 15px;
            text-align:center;
            
            margin-top: ;
            padding:5px;
        }

        h5 {
            font-size: 15px;
            text-align:left;
            margin-top: ;
            padding:5px;
        }

        h6 {
            font-size: 15px;
            text-align:right;
            margin-top: ;
            padding:50px;
        }




        .certificate {
            border: 5px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        .certificate p {
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .b{
            text-decoration:underline;
        }
    </style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		if(@$result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$name = $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];
				$address = $row['present_building'].' '.$row['present_street'].' '.$row['present_landmark'].' '.$row['present_locality'].' '.$row['present_state'].' '.$row['present_district'].' '.$row['present_taluka'].' '.$row['present_village'].' '.$row['present_pincode'];
				$issueDate = date("F j, Y");
				$app_id = 	$row['application_id'];
				$is_approved = $row['is_approved'];
			}
		}
		// Replace these variables with actual data
		
	?>
	<?php if($is_approved == 1){ ?>
		
	
    <div class="container" id="element-to-print">
        <div class="header">
        </div>

        <div class="certificate">
            
        
    
            
            
            <p></p>
            <img class="logo" src="maharashtrapolice.jpeg" alt="logo">
            <img class="log" src="slogo.png" alt="logo"><br><br>
            <h3><b>Your Service is Our Duty</b></h3>
            


<br><h4 class="b"><b>Office of the Dy.Commissioner of Police Special Branch, Pune</b></h4></br>
<br>
<b>Refrence No.</b> SB/VERFN/PVTJOB/061653/<?php echo date('Y');?><br> <b>Application ID:</b> Pune 00000<?php echo $app_id; ?><br><b> Date:</b> <?php echo date('d/m/Y'); ?><br>
<br><br>
<h4><b>POLICE CLEARANCE CERTIFICATE</b></h4>
<br>


<h5><b>To,<br>FACILITY ATTENDANT<br> 
KRYSTAL INTERGRATED SERVICES PVT.LTD.</b></h5>
<br>
<h4><b>Subject:</b> Verification of Character and Antecedents of <?php echo "$name"?><br> residing at <?php echo "$address" ?></h4>

With reference to above, enquiries conducted through Sr.Inspector of vimantal p. station reveals that above applicant is residing at the address mentioned in the Attestation Form from <?php echo date('m/Y'); ?> to 10/2027. There is nothing adverse against the above applicant on police record during his/her stay at the given address as per police station report dated <?php echo date('d/m/Y'); ?>



<h5><b>Remarks:</b></h5>

<h6>Signature valid<br>
    Digitally Signed by <br>
    Dy.Commissioner<br>
    Date: <?php echo date('Y-m-d H:i:s a'); ?></h6>

<h6>For Dy. Commisioner of Police<br> Special Branch<br> Pune</h6>

<p>This is a digitally signed document, hence is legally valid as per the Information Technology (IT) Act, 2000. To verify visit https://aaplesarkar.mahaonline.gov.in</p>
            <p>Has been cleared of any criminal charges and has a clean record with the police department.</p>
            <p>This certificate is issued on</p>
            <p><strong><?php echo $issueDate; ?></strong></p>
        </div>

        <div class="footer">
            <p>Issued by: Police Department</p>
            
            <?php
            // Generate a dynamic filename for the certificate
    
          $filename = "Police_Clearance_Certificate_" . str_replace(' ', '_', $name) . ".pdf";
            ?>

            
        </div>
    </div>
	<?php } ?>
	<?php if($is_approved == 1){ ?>
	<div class="container" style="text-align:center">
		<a id="downloadBtn" href="javascript:void(0)"  class="btn btn-primary">Download Certificate</a>
	</div>
	<?php }else{ ?>
		<div class="container" >
		<h3 style="text-align:center;margin-top:50px;font-size:26px;"> Your Application request is not approved. Please come back again.</h3>
		</div>
	<?php } ?>
	<script>
	var element = document.getElementById('element-to-print');
	var opt = {
	  margin:       0,
	  filename:     'certificate.pdf',
	  image:        { type: 'jpeg', quality: 0.98 },
	  html2canvas:  { scale: 2, scrollY: 0 },
	  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' },
	  pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
	};

	// New Promise-based usage:
	$('#downloadBtn').click(function(){
		html2pdf().set(opt).from(element).save();
		html2pdf(element, opt);		
	});
	

	// Old monolithic-style usage:
	//html2pdf(element, opt);

	</script>
</body>
</html>

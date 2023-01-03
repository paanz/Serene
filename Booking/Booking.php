<?php
	require 'connection_booking.php';
	
	if(isset($_POST['submit'])){
	$cust_Name = $_POST['fullname'];
	$cust_Email = $_POST['email'];
	$cust_phone = $_POST['mobile'];
	$property_Name = $_POST['PropertyName'];
	
	$query = "INSERT INTO booking VALUES ('','$cust_Name', '$cust_phone', '$cust_Email', '$property_Name')";
	mysqli_query($conn,$query);
	echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
	
	include'2-thank-you.html';
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Booking</title>
		<meta charset="UTF-8">
		<meta name="author" content="Kodinger">
        <meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="Booking">
		<meta name="keywords" content="HTML">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="mstyle.css" rel="stylesheet" type="text/css">
		<script>
			function validation(){

			// Validate Email
			var cust_Email = document.forms["myform"]["cust_Email"].value;
			if(cust_Email==''){
				alert("Please enter your email.");
				return false;
			}
			else{
				var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var x = re.test(cust_Email);
				if(x){}
			else{
				alert("Email should be in proper format (e.g xxx@xxxx.xxx)");
				return false;
			}
		}
	
			// Validate Mobile
			var cust_phone = document.forms["myform"]["cust_phone"].value;
			if(cust_phone==''){
				alert("Please enter your mobile number.");
				return false;
			}
			else{
				var re = /^[\d]{3}[\d]{7,7}$/;
				var x = re.test(cust_phone);
				if(x){}
			else{
				alert("Mobile number should be in proper format (e.g 0101234567)");
				return false;
			}
			}
	
			}
		</script>
	</head>


	<body class="my-booking-page">
	    <section class="h-100">
		    <div class="container h-100">
	        <div class="row justify-content-md-center h-100">
	            <div class="card-wrapper">

                    <div class="brand">
                        <img src="GBJSB-Logo3.png" alt="logo">
                    </div>
				
				    <div class="card fat">
                    <div class="card-body">
				
					    <h4 class="card-title">Personal and Property Details</h4>
					
					    <form name="myform" id="form" class="my-booking-validation" onsubmit="return validation()"  action="" method="post">
						
						    <div class="form-group">
							    <label>Full Name</label>
							    <input type="text" id="cust_Name" name="fullname" class="form-control" value="" placeholder="Enter Your First Name" required>			
						    </div>
						 
						    <div class="form-group">
						    	<label>Email</label>
						    	<input type="text" id="cust_Email" name="email" class="form-control" value="" placeholder="Enter Your Email" required>
						    </div>
							
						    <div class="form-group">
						     	<label>Mobile</label>
						    	<input type="text" id="cust_phone" name="mobile" class="form-control" value="" placeholder="Enter Your Mobile number" required>
						    </div>
							
							<div class="form-group">
						     	<label>Select Property Type</label>
								<select name="PropertyName" id="property_Name" value="" style="width:100%; height:30px; cursor: pointer;" required>
								    <option value="" selected hidden>Select Property</option>
									<option value="Detached Double Storey">Detached Double Storey</option>
									<option value="Semi-Detached Double Storey">Semi-Detached Double Storey</option>
									<option value="Terrace Double Storey">Terrace Double Storey</option>
									<option value="Terrace Corner Double Storey">Terrace Corner Double Storey</option>
								</select>
							</div>
							
							<div class="form-group">
							    <label>Term and Conditions</label>
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="terms" id="msg" class="custom-control-input" >
                                    <label type="text" for="msg" class="custom-control-label" style="text-align: justify; text-justify: inter-word;">"I hereby confirm that the information provided herein is accurate, correct and complete. I undertake to inform Gabungan Binaan Jurutenaga Sdn Bhd in writing of any changes to the information already provided and to update the information on this form whenever requested to do so by the company.
									I hereby declare that, I am very much interested in booking the property provided by the company with the intention to buy."</label>
                                </div>
                            </div>
							
							<div class="form-group m-0">
                                <button type="submit" name="submit" class="btn btn-primary btn-block" >Book Now</button>
                            </div>
					
					    </form>
					</div>
					</div>
				</div>
			</div>
		    </div>	
        </section>	

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
	</body>

</html>

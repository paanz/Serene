<?php
	require 'connection_booking.php';
	
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$PropertyName = $_POST['PropertyName'];
	
	$query = "INSERT INTO booking VALUES ('','$name', '$phone', '$email', '$PropertyName')";
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
			var email = document.forms["myform"]["email"].value;
			if(email==''){
				alert("Please enter your email.");
				return false;
			}
			else{
				var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				var x = re.test(email);
				if(x){}
			else{
				alert("Email should be in proper format (e.g xxx@xxxx.xxx)");
				return false;
			}
		}
	
			// Validate Mobile
			var phone = document.forms["myform"]["phone"].value;
			if(phone==''){
				alert("Please enter your mobile number.");
				return false;
			}
			else{
				var re = /^[\d]{3}[\d]{7,7}$/;
				var x = re.test(phone);
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
							    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Enter Your First Name" required>			
						    </div>
						 
						    <div class="form-group">
						    	<label>Email</label>
						    	<input type="text" id="email" name="email" class="form-control" value="" placeholder="Enter Your Email" required>
						    </div>
							
						    <div class="form-group">
						     	<label>Mobile</label>
						    	<input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Enter Your Mobile number" required>
						    </div>
							
							<div class="form-group">
						     	<label>Select Property Type</label>
								<select name="PropertyName" id="PropertyName" value="" style="width:100%; height:30px; cursor: pointer;" required>
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
                                <button type="submit" name="submit" onclick="sendEmail()" value="Send An Email" class="btn btn-primary btn-block" >Book Now</button>
                            </div>
							
							 <!--====== MAILER PART START ======-->    
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>                   
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
			var PropertyName = $("#PropertyName");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(PropertyName)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       phone: phone.val(),
                       PropertyName: PropertyName.val(),
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        alert("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    <!--====== MAILER PART ENDS ======--> 
					
					    </form>
					</div>
					</div>
				</div>
			</div>
		    </div>	
        </section>	

	</body>

</html>

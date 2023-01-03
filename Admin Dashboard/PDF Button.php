<?php 
	require_once 'connection_db.php';
	$sql= "select * from admin";
	$data = mysqli_query($conn,$sql);

?>

<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    
	    <!-- ===== Iconscout CSS ===== -->
	    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	    <title> PDF GENERATOR </title>

	</head>

	<body>
		<div class="row">
			<div class="col">
				<div class="container">
					<div class="card">
					<div class="card-header">
						<form action="pdf_gen.php" method="POST">
							<button type="submit" name="btn_pdf1" class=""btn btn-success>PDF</button>
						</form>
					</div>
					<div class="card-body">
						<a1> ADMIN </a1>
						<table class="table table-striped">
							
							<tr>
								<th> Admin ID </th>
								<th> Admin Name </th>
								<th> Admin Email </th>
								<th> Admin Password </th>
							</tr>
							<?php
								while($row = mysqli_fetch_assoc($data)){
									?>

									<tr>
										<td><?php echo $row['adminID']; ?></td>
										<td><?php echo $row['admin_Name']; ?></td>
										<td><?php echo $row['admin_Email']; ?></td>
										<td><?php echo $row['admin_Password']; ?></td>
									</tr>

								<?php
									}

							?>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	
		
	<!-- <style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 			box-sizing: border-box;
 			font-family: sans-serif;
 		}

 		body {
 			
 			align-items: center;
 			justify-content: center;
 			height: 100px;
 		}
 		
 		
 		
        
 		
 		

 	
	</style>
	 -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title> Report </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" > 
</head>
<body>
	<script type="text/javascript"></script>

 	<section class ="py-5">
 		<div class= "container">
 			<div class="row justify-content-center">
 				<div class="col-md-12">
 				<div class="card">
 					<div class="card-header">
 						<h5>Report Summary</h5>
 					</div>
 					<div class="card-body">
 					

 					
 						<form action="" method="GET">
 							<div class="row">
 								<div class="col-md-4">
 									<div class="form-group">
 										<label for="">From Date</label>
 										<input type="date" name="from_date"  placeholder="From Date">
 									</div>
 								</div>
 								<div class="cl-md-4">
 									<div class="form-group">
 										<label for="">To Date</label>
 										<input type="date" name="to_date" placeholder="From Date">
 									</div>
 								</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 							<div class="cl-md-4">
 								<div class="form-group1">
 									<!-- <label for="">Check</label><br> -->
 									<button type="submit" class="btn btn-primary">Search</button>
 								</div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 								<div class="cl-md-4">
 								<div class="form-group1">
 									<!-- <label for="">Check</label><br> -->
 									<button type="submit" class="btn btn-primary">Not process yet</button>
 								</div>

 								

 							</div>
 						</form>


 						<div class="card mt-3">
 						<div class="card-body">
 							<h5>Complaint list</h5>
 							<hr>
 							<table class="table table-bordered table-striped">
 								<thead>
 									<tr>
 										<th>Complaint-Number</th>
 										<th>Complaint-Details</th>
 										<th>ID Code</th>
 										<th>status</th>

 									</tr>
 								</thead>
 								<tbody>
 									<?php
 									if(isset($_GET['from_date']) && isset($_GET['to_date']))
 									{
 										if(strtotime($_GET['from_date']) < strtotime($_GET['to_date']))
 										{

 										$from_date=$_GET['from_date'];
 										$to_date=$_GET['to_date'];

 										$con = mysqli_connect("localhost","root","","cms");

 										$query =  "select * from tblcomplaints where regDate between '$from_date' and '$to_date' ";
 										$query_run = mysqli_query($con, $query);

 										if(mysqli_num_rows($query_run)>0)
 										{
 											foreach($query_run as $row) 
 											{
 												//echo $row['Name'];
 												?>

 													<td><?php echo $row['complaintNumber'];?></td>
 													<td><?php echo $row['complaintDetails'];?></td>

 												 	<td><?php echo $row['rollno'];?></td>
 												 	<td><?php echo $row['status'];?></td>
 												</tr>





<?php



 											}
 										}
 										else
 										{
 											//echo "No records found";
 											?>

 											<tr>
 												<td colspan="4"><h5>No record found</h5>
 											</tr>
 											<?php
 										}

 										}
 										else
 										{
 											//echo "From date is greater than to-date. Please change";
 											?>

 											<tr>
 												<td colspan="4"><h5>Select date</h5>
 											</tr>
 											<?php
 										}

 									}
 									?>

 								</tbody>

 							</table>
 							
 					</div>


 					
 		</div>
 		
 	</section>

 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
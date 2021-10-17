<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student registration form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<script type="text/javascript" src="js/bootstrap.bundle.js"> </script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js"> </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/5830a2e973.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="post">
<div class="container  mt-5">
<div class="row shadow pb-3 text-white" 	>
	
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">Name:</label>
    </div>
    <div class="col-md-8 float-left">
	<input type="text" name="name" id="name" class="form-control mt-2">
	</div>
    </div>
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">DOB:</label>
    </div>
    <div class="col-md-8 float-left">
	<input type="date" name="dob" id="dob" class="form-control mt-2">
	</div>
    </div>
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">gender:</label>
    </div>
	<div class="col-md-8 float-left">
	<div class="col-md-3 float-left">
	<input type="radio" name="gender" id="gender" value="male">Male
    </div>
	<div class="col-md-3 float-left">
	<input type="radio" name="gener" id="gender" value="female">Female
	</div>
    </div>
	</div>
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">Email :</label>
    </div>	
    <div class="col-md-8 float-left">
	<input type="text" name="email" id="email" class="form-control mt-2">
    </div>
	</div>
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">Address :</label>
    </div>
	<div class="col-md-8 float-left">
	<input type="text" name="address" id="address" class="form-control mt-2">
	</div>
    </div>
	
    <div class="col-md-8 float-left mt-2">
    
    </div>
    </div>
   
    
    </div>	
	<div class="col-md-12">
	<div class="col-md-4  float-left" style="font-size:20px;">
	<label class="mt-3">Mobile Number:</label>
    </div>
    <div class="col-md-8 float-left">
	<input type="number" name="mobile" id="mobile" class="form-control mt-2">
	</div>
    </div>
	<div class="col-md-12 text-center">
	<button type="button" class="btn btn-success m-4">Reset</button>
	<button type="button" class="btn btn-warning m-4" onclick="insertdata()">Submit</button>
    </div>
    </div>
    </div>
</form>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Age</th>
						<th>gender</th>
						<th>Address</th>
				
					</tr>
				</thead>
				<tbody id="tbody">
					<?php
					$conn=mysqli_connect('localhost','root','','a2z-t-b-5-6');
					$query="SELECT * from student_form";
					$data=mysqli_query($conn,$query);
					while($row=mysqli_fetch_assoc($data)){
					?>
				<tr>
					<th><?=$row['name'];?></th>
					<th><?=$row['email'];?></th>
					<th><?=$row['phone'];?></th>
					<th><?=$row['age'];?></th>
					<th><?=$row['gender'];?></th>
					<th><?=$row['address'];?></th>
					
					<td>
						<div class="btn-group">
							<button class="btn btn-warning" data-id="<?=$row['id']?>" onclick="showdata(this)">Edit</button>
							<button class="btn btn-danger" onclick="deletedata(<?=$row['id']?>)"> Delete</button>
						</div>
					</td>
				</tr>
				<?php     
			}
			?>
			</tbody>
			</table>
		</div>
	</div>
</>div


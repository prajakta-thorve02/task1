<?php
$conn=mysqli_connect('localhost','root','',"a2z-t-b-5-6");
$name=$_POST['name'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$address=$_POST['address'];
$school=$_POST['school'];
$department=$_POST['department'];
$course=$_POST['course'];
$mobile=$_POST['mobile'];
$query="INSERT INTO student_form(name, dob, sex, email, address, school, department, course, mobile)VALUES('".$name."','".$dob."','".$sex."','".$email."','".$address."','".$school."','".$department."','".$course."','".$mobile."')";
$row=mysqli_query($conn,$query);
$seldata=mysqli_query($conn,"SELECT * from student_form");
$ar=array();
while($selrow=mysqli_fetch_assoc($seldata)){
	$ar[]=$selrow;
}
echo json_encode($ar);

?>
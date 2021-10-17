<?php
$conn=mysqli_connect('localhost','root','',"a2z-t-b-5-6");
$seldata=mysqli_query($conn,"UPDATE student_form SET name='".$_POST['name']."',dob='".$_POST['dob']."',sex='".$_POST['sex']."',email='".$_POST['email']."',address='".$_POST['address']."',school='".$_POST['school']."',department='".$_POST['department']."',course='".$_POST['course']."',mobile='".$_POST['mobile']."' WHERE id='".$_POST['id']."'");

$seldata=mysqli_query($conn,"SELECT * from student_form");
$ar=array();
while($selrow=mysqli_fetch_assoc($seldata)){
	$ar[]=$selrow;
}
echo json_encode($ar);
?>
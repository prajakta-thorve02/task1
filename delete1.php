<?php
$conn=mysqli_connect('localhost','root','',"a2z-t-b-5-6");
$id=$_POST['idd'];
$del="DELETE from student_form where id='".$id."'";
$f=mysqli_query($conn,$del);

$seldata=mysqli_query($conn,"SELECT * from student_form");
$ar=array();
while($selrow=mysqli_fetch_assoc($seldata)){
	$ar[]=$selrow;
}
echo json_encode($ar);

?>
<?php
$username=$_POST["username"];
$gender=$_POST["gender"];
$event=$_POST["event"];

$link=mysqli_connect('localhost','root','asd7326689','dbforevent');
if($link){
	echo "successful";
}else{
	echo "error";
}
$ios="INSERT INTO event(name,gender,selection) VALUES('$username','$gender','$event')";
$result=mysqli_query($link,$ios);

$result=mysqli_query($link,"SELECT * FROM event");

while($row=mysqli_fetch_assoc($result)){
	echo $row["no"]." ";
	echo $row["name"]." ";
	echo $row["gender"]." ";
	echo $row["selection"]." ";
	echo "<br>";
}
mysqli_close($link);
?>
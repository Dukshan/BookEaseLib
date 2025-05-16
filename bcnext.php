

<?php
//post all the form element
$bcategory=$_POST["bk"];
//photo uploading code start
$rr=move_uploaded_file($_FILES["ph"]["tmp_name"],"cphoto/".$_FILES["ph"]["name"]);
$iname=$_FILES["ph"]["name"];
//end here
$con=mysqli_connect("localhost","root","","ebooks");
$r=mysqli_query($con,"insert into category(categoryname,photo)
values('$bcategory','$iname')");
if($r)
	{ 
	echo "<br/> insert successfully";
	header("location:bcvieww.php");}
	
else
	echo mysqli_error($con);
?>
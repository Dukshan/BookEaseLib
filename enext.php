<!-- NEXT PAGE CODE -->

<?php
//post all the form element
$bcategory=$_POST["c"];
$btitle=$_POST["c1"];
$bdes=$_POST["p1"];


//photo uploading code start
$rr=move_uploaded_file($_FILES["pho"]["tmp_name"],"photos/".$_FILES["pho"]["name"]);
$iname=$_FILES["pho"]["name"];
//end here

//pdf uploading code start
$pp=move_uploaded_file($_FILES["p2"]["tmp_name"],"pdf/".$_FILES["p2"]["name"]);
$pname=$_FILES["p2"]["name"];
//end here

$con=mysqli_connect("localhost","root","","ebooks");
$r=mysqli_query($con,"insert into addbook(b_category,b_title,b_photo,b_descrip,b_upload)
values('$bcategory','$btitle','$iname','$bdes','$pname')");
if($r)
	{ 
	echo "<br/> insert successfully";
	header("location:eview.php");}
	
else
	echo mysqli_error($con);
?>
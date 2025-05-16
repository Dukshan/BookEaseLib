<!-- BOOK DELETE CODE -->

<?php
$con=mysqli_connect("localhost","root","","ebooks");
$id=$_REQUEST["a"];
$r=mysqli_query($con,"delete from addbook where id='$id'");
if($r)
header("location:eview.php");
?>
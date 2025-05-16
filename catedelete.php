
<?php
$con=mysqli_connect("localhost","root","","ebooks");
$id=$_REQUEST["a"];
$r=mysqli_query($con,"delete from category where id='$id'");
if($r)
header("location:bcvieww.php");
?>
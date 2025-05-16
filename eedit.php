<!-- BOOK UPDATE CODE -->
<html>
    <body>
    <body style="background-color:antiquewhite; background-size:cover;">
    
<?php
$con=mysqli_connect("localhost","root","","ebooks");
$id=$_REQUEST["a"];
$r=mysqli_query($con,"select * from addbook where id='$id'");
$rows=mysqli_fetch_row($r);
?>
<form action='eedit.php?a=<?php echo $rows[0]?>' method='post' enctype='multipart/form-data'>
<table border='2' align='center'width='50%'  cellspacing=0 cellpadding=10>
<tr>
<td colspan='2'>
<input type='hidden'
value='<?php echo $rows[0]?>'
name='id'>
</td>
</tr>
<tr>
                <td> <b> book category </b> </td>
                <td> <input type='text' name='c' value='<?php echo $rows[1];?>' > </td>
            </tr>
            <tr>
                <td> <b> book title </b> </td>
                <td> <input type='text' name='c1' value='<?php echo $rows[2];?>' > </td>
            </tr>
            <tr>
                <td> <b> book photo</b> </td>
                <td> <input type='file' name='pho' value='<?php echo $rows[3];?>' > </td>
            </tr>
            <tr>
                <td> <b> book description </b> </td>
                <td> <input type='text' name='p1' value='<?php echo $rows[4];?>' > </td>
            </tr>

            <td> <b> upload book </b> </td>
            <td> <input type='file' name='p2' value='<?php echo $rows[5];?>' > </td>

            <tr>
                <td colspan='2' align='center'> <input type='submit' name='submit' required> </td>
            </tr>
        </table>
    </form>
	
	<?php
if(isset($_REQUEST["submit"]))
{
$id=$_POST["id"];
$bcategory=$_POST["c"];
$btitle=$_POST["c1"];
$iname=$_POST["pho"];
$bdes=$_POST["p1"];
$pname=$_POST["p2"];

//photo update code start
$rr=move_uploaded_file($_FILES["pho"]["tmp_name"],"photos/".$_FILES["pho"]["name"]);
$iname=$_FILES["pho"]["name"];


	
	if(!$iname)
    	{
            $rr=mysqli_query($con,"UPDATE addbook set b_category='$bcategory',b_title='$btitle',b_descrip='$bdes',b_upload='$pname' where id='$id'");
            if($rr){
                header("location:eview.php");}
        }
	else{
            $rr=mysqli_query($con,"UPDATE addbook set b_category='$bcategory',b_title='$btitle',
            b_photo='$iname',b_descrip='$bdes',b_upload='$pname' where id='$id'");
            if($rr)
            header("location:eview.php");
        }
   //end here     

 //pdf update code start
 $pp=move_uploaded_file($_FILES["p2"]["tmp_name"],"pdf/".$_FILES["p2"]["name"]);
 $pname=$_FILES["p2"]["name"];


	
	if(!$iname)
    	{
            $rr=mysqli_query($con,"UPDATE addbook set b_category='$bcategory',b_title='$btitle',b_photo='$iname',b_descrip='$bdes' where id='$id'");
            if($rr)
                header("location:eview.php");
        }
	else{
            $r=mysqli_query($con,"UPDATE addbook set b_category='$bcategory',b_title='$btitle',
            b_photo='$iname',b_descrip='$bdes',b_upload='$pname' where id='$id'");
            if($rr)
            header("location:eview.php");
        }

   //end here
        
    }	
	?>
</body>

</html>

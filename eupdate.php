<!-- update book form -->

<html>

<head>
    <title> ebooks</title>
</head>

<body>
    <form action='enext.php' method='post' enctype='multipart/form-data'>
        <table border='2' align='center' width='50%' cellspacing=0 cellpadding=10>
            <tr>
                <td> <b> Book Category</b></td>
                <td><select required name='c'>
                    
                    <?php
                            $con=mysqli_connect("localhost","root","","ebooks");
                            $r=mysqli_query($con,"select * from  category");
                            while($row=mysqli_fetch_array($r))
                            {
                                echo "<option value='$row[1]'>$row[1]</option>";
                            }


                    ?>
                    
                    </select></td>
            </tr>
            <tr>
                <td> <b> book title </b> </td>
                <td> <input type='text' name='c1' > </td>
            </tr>
            <tr>
                <td> <b> book photo</b> </td>
                <td> <input type='file' name='pho' > </td>
            </tr>
            <tr>
                <td> <b> book description </b> </td>
                <td> <input type='text' name='p1' > </td>
            </tr>
            <tr>
            <td> <b> upload book </b> </td>
            <td> <input type='file' name='p2' > </td>
            </tr>
            <tr>
                <td colspan='2' align='center'> <input type='submit' name='submit' required> </td>
            </tr>
        </table>
    </form>
    </head>
    </html>
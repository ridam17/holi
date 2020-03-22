<?php
include('config.php');
error_reporting(0);
?>
<html>
    <head>
        <body>
            <form action="" method="GET">
                Enrollment no<input type="text" name="Enrollment" value=""/><br><br>
                Name<input type="text" name="Name" value=""/><br><br>
                Age<input type="text" name="Age" value=""/><br><br>
                Course<input type="text" name="Course" value=""/><br><br>
                Branch<input type="text" name="Branch" value=""/><br><br>
                Contact<input type="text" name="Contact" value=""/><br><br>
                Email<input type="text" name="Email" value=""/><br><br>
                <input type="submit" name="submit" value="submit"/>
            </form>
            <?php
            if($_GET['submit'])
            {
                $er=$_GET['Enrollment'];
                $sn=$_GET['Name'];
                $sa=$_GET['Age'];
                $scs=$_GET['Course'];
                $sb=$_GET['Branch'];
                $sc=$_GET['Contact'];
                $se=$_GET['Email'];
                if($er!="" && $sn!="" && $sa!="" && $scs!="" && $sb!="" && $sc!="" && $se!="")
                {
                    $sql="INSERT INTO STUDENT VALUES('$er','$sn','$sa','$scs','$sb','$sc','$se')";
                    $data=mysqli_query($conn,$sql);
                    if($data)
                    {
                        echo "Data inserted successfully!";
                    }
                
                    else
                    {
                        echo "Data insertion failed".mysqli_error($conn);
                    }
                }
                else
                {
                    echo "Insert all fields!";
                }
            }
            ?>
        </body>
    </head>
</html>
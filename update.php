<?php
include('config.php');
error_reporting(0);
$_GET['er'];
$_GET['sn'];
$_GET['sa'];
$_GET['scs'];
$_GET['sb'];
$_GET['sc'];
$_GET['se'];
?>
<html>
    <head>
        <body>
            <form action="" method="GET">
                Enrollment no<input type="text" name="Enrollment" value="<?php echo $_GET['er'];?>"/><br><br>
                Name<input type="text" name="Name" value="<?php echo $_GET['sn'];?>"/><br><br>
                Age<input type="text" name="Age" value="<?php echo $_GET['sa'];?>"/><br><br>
                Course<input type="text" name="Course" value="<?php echo $_GET['scs'];?>"/><br><br>
                Branch<input type="text" name="Branch" value="<?php echo $_GET['sb'];?>"/><br><br>
                Contact<input type="text" name="Contact" value="<?php echo $_GET['sc'];?>"/><br><br>
                Email<input type="text" name="Email" value="<?php echo $_GET['se'];?>"/><br><br>
                <input type="submit" name="submit" value="Update"/>
            </form>
            <?php
            if($_GET['submit'])
            {
                $Enrollment=$_GET['Enrollment'];
                $Name=$_GET['Name'];
                $Age=$_GET['Age'];
                $Course=$_GET['Course'];
                $Branch=$_GET['Branch'];
                $Contact=$_GET['Contact'];
                $Email=$_GET['Email'];
                $sql="UPDATE STUDENT SET NAME='$Name',AGE='$Age',COURSE='$Course',BRANCH='$Branch',CONTACT='$Contact',EMAIL='$Email' WHERE ENROLLMENT='$Enrollment' ";
                $data=mysqli_query($conn,$sql);
                if($data)
                {
                    echo "<font color='green'>Record Updated Successfully.<a href='display.php'>Check Updated list here</a>";
                }
                else
                {
                    echo "<font color='red'>Record not updated!.<a href='display.php'>Check Updated list here</a>";
                }
            }
            else
            {
                echo "<font color='blue'>Click on update button to save changes.<a href='display.php'>Check Updated list here</a>";
            }
            ?>
        </body>
    </head>
</html>
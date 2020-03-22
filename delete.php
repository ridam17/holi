<?php
include('config.php');
$Enrollment=$_GET['er'];
$sql="DELETE FROM STUDENT WHERE ENROLLMENT='$Enrollment'";
$data=mysqli_query($conn,$sql);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL="http://localhost:8080/Full-Stack-Web-Development/CSE-C/Holi%20Assignment/CRUD/display.php">
    <?php
}
else
{
    echo "<font color='red'>Sorry,Delete process Failed!".mysqli_error($conn);
}
?>
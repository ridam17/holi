<style>
    td
    {
        padding: 10px;
    }
</style>
<?php
include('config.php');
$sql="SELECT *FROM STUDENT";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
if($total!=0)
{
    ?>
    <table>
        <tr>
            <th>Enrollment</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>Email</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
                    <td>".$result['Enrollment']."</td>
                    <td>".$result['Name']."</td>
                    <td>".$result['Age']."</td>
                    <td>".$result['Course']."</td>
                    <td>".$result['Branch']."</td>
                    <td>".$result['Contact']."</td>
                    <td>".$result['Email']."</td>
                    <td><a href='update.php?er=$result[Enrollment]&sn=$result[Name]&sa=$result[Age]&scs=$result[Course]&sb=$result[Branch]&sc=$result[Contact]&se=$result[Email]'>Edit</a></td>
                    <td><a href='delete.php?er=$result[Enrollment]' onclick='checkdelete()'>Delete</a></td>
                </tr>";
        }
}
else
{
    echo "No Record Found!";
}

?>
</table>
<script>
function checkdelete()
    {
        return confirm('Are you sure you want to Delete this Data??');
    }
</script>
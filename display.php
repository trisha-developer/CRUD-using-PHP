<?php
include_once('config/con.php');

$data_show="SELECT * from login";
$query=mysqli_query($result,$data_show);



?>
<table border="2px" cellpadding='5px' cellspacing='4px'>
  <tr>
    <th>Serial number</th>
    <th>Full Name</th>
    <th>DOB</th>
    <th>Usernam</th>
    <th>Password</th>
    <th>Confirm Password</th>
    <th>Student Id</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Adhar Card</th>
    <th>Subjects</th>
    <th>Projects</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
<?php
  if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
?>
<tr>
  <td><?php echo $row['s_no']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['dob']; ?></td>
  <td><?php echo $row['user_name']; ?></td>
  <td><?php echo $row['password']; ?></td>
  <td><?php echo $row['repeat_password']; ?></td>
  <td><?php echo $row['student_id']; ?></td>
  <td><?php echo $row['contact_no']; ?></td>
  <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['adhar_card']; ?></td>
  <td><?php echo $row['subjects']; ?></td>
  <td><?php echo $row['project']; ?></td>
  <td><a href="update.php?id=<?php echo $row['s_no']; ?>">Update</a></td>
  <td><a href="delete.php?id=<?php echo $row['s_no']; ?>">Delete</a></td>
</tr>
<?php
  }
}
?>
</table>
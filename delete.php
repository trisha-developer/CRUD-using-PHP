<?php
include_once('config/con.php');

@$id=$_GET['id'];

$delete_item="DELETE FROM login WHERE s_no=$id";

$check=mysqli_query($result,$delete_item);

if($check){
  echo 'Deleted Successfully! <br>';
  echo "<a href='display.php'>View Database Table</a>";
}
else{
  echo 'Error occurs';
}


?>
<?php
include_once('config/con.php');

@$id = $_GET['id'];

$show = "SELECT * FROM login WHERE s_no ='$id'";

$qu = mysqli_query($result , $show);

$data_fetch = mysqli_fetch_assoc($qu);

if(isset($_POST['btn'])){
  $name=$_POST['n'];
  $dob=$_POST['dob'];
  $user=$_POST['username'];
  $pass=$_POST['pass'];
  $repeat=$_POST['rp'];
  $id=$_POST['id'];
  $num=$_POST['con'];
  $address=$_POST['add'];
  $gender=$_POST['gen'];
  $adhar=$_POST['adhar'];
  $sub=$_POST['sub'];
  $project=$_POST['pro'];
  
  $convert=implode(",",$sub);

  $update_query = "UPDATE login SET name = '$name' ,dob='$dob',user_name='$user',password='$pass',repeat_password='$repeat',student_id='$id',contact_no='$num',address='$address',gender='$gender',adhar_card='$adhar',subjects='$convert',project='$project' WHERE s_no = '$id' ";
  
  $res = mysqli_query($result , $update_query);
  
  if($res){
    echo "Your data is updated successfully<br>";
    echo "<a href='display.php'>View Database Table</a>";
    }
    else{
      echo "Your data is not updated successfully";
      }
      
      
}



?>

<link rel="stylesheet" href="db.css">
<form action="" method= "post">
  <h3>Student Registration Form</h3>
  <label for="">Full Name</label>
  <br>
  <input type="text" name="n" id="" placeholder="Enter your name" value="<?php echo $data_fetch['name']?>">
  
  <br><br>
  <label for="">DOB</label>
  <br>
  <input type="text" name="dob" id="" placeholder= "Enter your dob" value="<?php echo $data_fetch['dob']?>">
  
  <br><br>
  <label for="">Username</label>
  <br>
  <input type="text" name="username" id="" placeholder= "Enter your username" value="<?php echo $data_fetch['user_name']?>">
  
  <br><br>
  <label for="">Password</label>
  <br>
  <input type="password" name="pass" id="" placeholder= "Enter your password" value="<?php echo $data_fetch['password']?>">
  
  <br><br>
  <label for="">Confirm password</label>
  <br>
  <input type="password" name="rp" id="" placeholder= "Confirm your password" value="<?php echo $data_fetch['repeat_password']?>">

  <br><br>
  <label for="">Student Id</label>
  <br>
  <input type="text" name="id" id="" placeholder="Enter your student id" value="<?php echo $data_fetch['student_id']?>">
  
  <br><br>
  <label for="">Contact number</label>
  <br>
  <input type="text" name="con" id="" placeholder="Enter your number" value="<?php echo $data_fetch['contact_no']?>">
  
  <br><br>
  <label for="">Address</label>
  <br>
  <input type="text" name="add" id="" placeholder="Enter your address" value="<?php echo $data_fetch['address']?>">
  
  <br><br>
  <h4>Gender</h4>
  <input type="radio" name="gen" id="check" value="female<?php echo $data_fetch['gender']?>">
  <label for="">Female</label>
  <input type="radio" name="gen" id="check" value="male<?php echo $data_fetch['gender']?>">
  <label for="">male</label>
  <input type="radio" name="gen" id="check" value="other<?php echo $data_fetch['gender']?>">
  <label for="">prefer not to say</label>
  
  <br><br>
  <label for="">Adhar card</label>
  <br>
  <input type="file" name="adhar" id="" placeholder= "Upload your adhar card" value="<?php echo $data_fetch['adhar_card']?>">

  <br><br>
  <h4>Subjects</h4>
  <input type="checkbox" name="sub[]" id="check" value="chemistry<?php echo $data_fetch['subjects']?>">
  <label for="">Chemistry</label>
  <input type="checkbox" name="sub[]" id="check" value="physics<?php echo $data_fetch['subjects']?>">
  <label for="">Physics</label>
  <input type="checkbox" name="sub[]" id="check" value="mathematics<?php echo $data_fetch['subjects']?>">
  <label for="">Mathematics</label>
  <input type="checkbox" name="sub[]" id="check" value="biology<?php echo $data_fetch['subjects']?>">
  <label for="">Biology</label>
  <input type="checkbox" name="sub[]" id="check" value="english<?php echo $data_fetch['subjects']?>">
  <label for="">English</label>
  <input type="checkbox" name="sub[]" id="check" value="computer science<?php echo $data_fetch['subjects']?>">
  <label for="">Computer Science</label>
  
  <br><br>
  <label for="">Project URL</label>
  <br>
  <input type="url" name="pro" id="" value="<?php echo $data_fetch['project']?>">

  <br><br>
  <input type="submit" name="btn" id="btn" value="Register">
  <br><br>

</form>
<link rel="stylesheet" href="db.css">

<?php
include_once('config/con.php');

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

  $data_insert="INSERT INTO login(name,dob,user_name,password,repeat_password,student_id,contact_no,address,gender,adhar_card,subjects,project) values('$name','$dob', '$user','$pass','$repeat','$id','$num','$address','$gender','$adhar','$convert','$project')";
  $check=mysqli_query($result,$data_insert);

  if($check){
    echo 'Inserted <br>';
    echo "<a href='display.php'>View Database Table</a>";
  }
  else{
    echo 'not inserted';
  }


}


?>




<form action="" method= "post">
  <h3>Student Registration Form</h3>
  <label for="">Full Name</label>
  <br>
  <input type="text" name="n" id="">
  
  <br><br>
  <label for="">DOB</label>
  <br>
  <input type="text" name="dob" id="">
  
  <br><br>
  <label for="">Username</label>
  <br>
  <input type="text" name="username" id="" >
  
  <br><br>
  <label for="">Password</label>
  <br>
  <input type="password" name="pass" id="">
  
  <br><br>
  <label for="">Confirm password</label>
  <br>
  <input type="password" name="rp" id="">

  <br><br>
  <label for="">Student Id</label>
  <br>
  <input type="text" name="id" id="" >
  
  <br><br>
  <label for="">Contact number</label>
  <br>
  <input type="text" name="con" id="">
  
  <br><br>
  <label for="">Address</label>
  <br>
  <input type="text" name="add" id="" >
 
  <br><br>
  <label for="">Project URL</label>
  <br>
  <input type="url" name="pro" id="">
  
  <br><br>
  <label for="">Adhar card</label>
  <br>
  <input type="file" name="adhar" id="">
 
  <br><br>
  <h4>Gender</h4>
  <input type="radio" name="gen" id="check" value="female">
  <label for="">Female</label>
  <input type="radio" name="gen" id="check" value="male">
  <label for="">male</label>
  <input type="radio" name="gen" id="check" value="other">
  <label for="">prefer not to say</label>

  <br><br>
  <h4>Subjects</h4>
  <input type="checkbox" name="sub[]" id="check" value="Chemistry">
  <label for="">Chemistry</label>
  <input type="checkbox" name="sub[]" id="check" value="physics">
  <label for="">Physics</label>
  <input type="checkbox" name="sub[]" id="check" value="mathematics">
  <label for="">Mathematics</label>
  <input type="checkbox" name="sub[]" id="check" value="biology">
  <label for="">Biology</label>
  <input type="checkbox" name="sub[]" id="check" value="english">
  <label for="">English</label>
  <input type="checkbox" name="sub[]" id="check" value="computer science">
  <label for="">Computer Science</label>

  <br><br>
  <input type="submit" name="btn" id="btn" value="Register">
  <br><br>

</form>
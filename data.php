<?php 
  session_start();
$errors=array();
//connect to database
  $local='localhost';
  $db=mysqli_connect($local,'root','','edudata') or die("Could not connect in data base");
 
  if (isset($_POST['register1'])){
  $name=mysqli_real_escape_string($db,$_POST['name']);
  $email=mysqli_real_escape_string($db,$_POST['email']);
  //$phone=mysqli_real_escape_string($db,$_POST['7003402129']);
  $psw=mysqli_real_escape_string($db,$_POST['psw']);
  $pswrepeat=mysqli_real_escape_string($db,$_POST['rpsw']);

//form validation
  
  if(empty($name)){
    array_push($errors, "Name is required");
  }
  if(empty($email)){
    array_push($errors, "Email is required");
  }
  //if(empty($phone)){
  //  array_push($errors, "Phone no is required");  }
  if($psw!=$pswrepeat){
    array_push($errors, "Password do not matched");
  }

// check db for existing user
$user_check_query="SELECT * FROM student WHERE email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);
if ($user) {
  if($user['email']==$email){
    array_push($errors,"Email id already exists");
  }
  //if($user['phno']==$phone){
    //array_push($errors,"Phone no already exists");}
}

//register the user

if(count($errors)==0){
  $password=($psw);   // this will encrypt password
  $query="INSERT INTO student (name,email,psw) VALUES ('$name','$email','$password')";
  mysqli_query($db,$query);
  $_SESSION['email']=$email;
  $_SESSION['success']="YOU ARE LOGGED IN";

  
  echo "You have registered successfully";
}
}

//login user
  if(isset($_POST['login_user'])){
  $username=mysqli_real_escape_string($db,$_POST['uname']);
  $password1=mysqli_real_escape_string($db,$_POST['psw']);
  
if(empty($username)){
  array_push($errors, "user name required");

}
if(empty($password1)){
  array_push($errors,"password is required");
}
if(count($errors)==0){
  $password1=($password1);
  
  $query="SELECT * FROM student WHERE email='$username' AND psw='$password1' ";
  $result=mysqli_query($db,$query);
  
  $results=mysqli_fetch_array($result);
  $num_row = mysqli_num_rows($result);
  
  if($num_row==1){
    
    $_SESSION['username']=$username;
    $_SESSION['name']=$results['name'];
    //$_SESSION['phone_no']=$results['phone_no'];
    
    $_SESSION['success']="Logged in successfully";
    echo "logged in successfully";
    header('location: student.php');
  }
  else{
    
    echo  "wrong password/ username please try again";
    header('location: login.html');
    array_push($errors,"wrong password/ username please try again");
  }
}
}
 ?>
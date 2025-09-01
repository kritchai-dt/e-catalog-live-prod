<?php
 

session_start();
include('action.php');
 
$out = array('error' => false);
 
$username = $_POST['username'];
$password = $_POST['password'];
$password= md5($password);

 if($username ==''){
     $out['error'] = true;
     $out['message'] = "Username is required";
 }
 else if($password==''){
     $out['error'] = true;
     $out['message'] = "Password is required";
 }
 else{
     $sql = "SELECT * from tbl_users where username='$username' and password='$password'";
     $query = $conn->query($sql);
 
     if($query->num_rows>0){
         $row=$query->fetch_array();
         $_SESSION['user']=$row['id'];
         $out['message'] = "Login Successful";
     }
     else{
         $out['error'] = true;
         $out['message'] = "Login Failed. User not Found";
     }
 }
  
     
$conn->close();
 
header("Content-type: application/json");
echo json_encode($out);
die();
?>
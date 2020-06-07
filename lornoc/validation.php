<?php
session_start();
   $con = mysqli_connect('localhost','learn7sd','Learn@2019#');
if($con){
    echo "connection established";
}
      // username and password sent from form 
      
      $myemail =$_POST['email'];
      $mypassword =$_POST['password']; 
      mysqli_select_db($con,'learn7sd_isro');
      $sql = "SELECT id FROM signin WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: admin");
      }else {
          
         echo "<script> alert('Your Login Email or Password is invalid');
window.location.href='../index.php';</script>";
      }
   
?>
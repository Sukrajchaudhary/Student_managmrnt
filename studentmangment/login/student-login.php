<?php 
  include('../include/connect.php');
  if(isset($_POST['LOGIN'])){
      $email = $_POST['UserName'];
      $password = $_POST['Password'];

      $query="SELECT * FROM `tblstudent` WHERE  UserName='$email'&& Password='$password'";
      $result=mysqli_query($conn,$query);
     if( $row=(mysqli_num_rows($result)==1)){
          echo"Login SuccessFully";
          session_start();
          $_SESSION['UserName']=1;
          $_SESSION['user_id']= $data['id'];
          header('location:../index.PHP');
      }
      else{
          echo"Login failled";
          header('location:student-login.php');
      }
    }
  

?>
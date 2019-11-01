<?php
//$abc=require_once('admin/inc/config.php');
// If the values are posted, insert them into the database.

/*$host="localhost";
$user="root";
$password="";
$db="cms";
 

 $conn = mysqli_connect($host, $user, $password, $db) or die("cannot connect"); 
//mysqli_select_db($conn, $db) or die("cannot select DB");
*/
 include("admin/inc/connect.php");


if (isset($_POST['create-acc'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $phone=$_POST['phone'];
    $slquery = "SELECT * FROM tbl_customer WHERE email = '$email'";
    $selectresult = mysqli_query($conn, $slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
         echo "$msg";
    }
    elseif($password != $cpassword){
         $msg = "passwords doesn't match";
         echo "$msg";
    }
    else{
            $pass = password_hash("$password", PASSWORD_DEFAULT);
          $query = "INSERT INTO tbl_customer (`name`, `email`,`phone`, `password`) VALUES ('$username', '$email','$phone','$pass')";
          
          if(!mysqli_query($conn, $query))
          {
            echo "not inserted";
            echo "Error: ".mysqli_error($conn);
          }
          else
          {
            header("location:index.php");
            //echo "inserted"; 
          }
          
          }
  }
?>
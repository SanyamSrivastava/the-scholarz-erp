<?php
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  if(!empty(isset($email)) || !empty(isset($password))){
    $conn = new mysqli('localhost', 'root', '', 'std_profile');
    if(mysqli_connect_error()){
      die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO std_login(email,password) values('$email','$password')";
        if($conn->query($sql)){
          echo "Record Introduced";
        }
        else {
          echo "Error".$sql."<br>".$conn->error;
        }
        $conn->close();
      }
  }
 ?>

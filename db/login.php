<?php
session_start();
include("db.php");

if (isset($_POST['sub'])) {
    $name = $_POST["email"];
    $password = $_POST["pass"];

  $sql = "SELECT * FROM users WHERE email ='$name' AND password = '$password'";
      
  $run = mysqli_query($conn,$sql);
      
  if (mysqli_num_rows($run) > 0 ) {
      while($row = mysqli_fetch_array($run) ) {	  
          $user = $row["email"];
          //$isloggedIn = $row["isloggedin"];
          
              //update($name,$connect); 
              $_SESSION['login_user'] = $user;
              //.header("location : ../dashboard/index.php");
              echo "<script>location.href='../dashboard'</script>";
          
      }
  } else {
              
          // header('location : index.php');
                  /*echo " <div class='row'><div class='col-xs-4 col-md-4 col-sm-4 col-lg-4'></div><div class='col-xs-4 col-md-4 col-sm-4 col-lg-4'><div class='alert alert-warning'>

      <a  href='#' class='close' data-dismiss='alert' aria-label='close'>close</a><b>Invalid Email or Password</b>

      </div></div><div class='col-xs-4 col-md-4 col-sm-4 col-lg-4'></div></div>";*/
      $response = "failed";
      echo $response;
          
  }
    
}

?>
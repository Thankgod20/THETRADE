<?php 
include("db.php");

if (isset($_POST['update'])) {
    $name = $_POST["email"];
    $dbname = $_POST["data"];
    $param = $_POST["val"];
    $amt = $_POST["amount"];
    if ($dbname=="openposition") {
        $sql = "UPDATE `users` SET openposition = '$param', deposit ='$amt' WHERE email ='$name'";
        
        $run = mysqli_query($conn,$sql);
        if ($run){
            echo "true";
        } else {
            echo "false";
        }        
    } else if ($dbname=="closeposition") {
        $sql = "UPDATE `users` SET openposition = '$param', deposit ='$amt' WHERE email ='$name'";
        
        $run = mysqli_query($conn,$sql);
        if ($run){
            echo "true";
        } else {
            echo "false";
        }        
    } 
    else if ($dbname=="reset") {
        $sql = "UPDATE `users` SET password = '$param' WHERE email ='$name'";
        
        $run = mysqli_query($conn,$sql);
        if ($run){
            echo "true";
        } else {
            echo "false";
        }        
    } 

}

if (isset($_POST['fund'])) {
    $name = $_POST["email"];
    $amt = $_POST["amount"];
    $sql = "UPDATE `users` SET  deposit ='$amt' WHERE email ='$name'";
        
        $run = mysqli_query($conn,$sql);
        if ($run){
            echo "true";
        } else {
            echo "false";
        }
}
if (isset($_POST['bill'])) {
    $name = $_POST["email"];
    $amt = $_POST["amount"];
    $sql = "UPDATE `users` SET  billing ='$amt' WHERE email ='$name'";
        
        $run = mysqli_query($conn,$sql);
        if ($run){
            echo "true";
        } else {
            echo "false";
        }
}
?>
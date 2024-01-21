<?php
include('config.php');
$id = $_REQUEST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password= $_POST['password'];
$role_id=$_POST['role_id'];



// echo $id;
$update = "UPDATE role_id SET name = '$name' , username = '$username', password = '$password' role_id = '$role_id' where id = '$id'" ;
$result3 = mysqli_query($conn,$update);
if($result3 == true){
    header('location: dashboard.php');

}
else{
    print "your data has not been successfully updated";
}
?>

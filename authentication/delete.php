<?php
include("config.php");
if(isset($_SESSION['role_id'])==0){
    header('location:dashboard.php');
}

?>
<?php
include('config.php');
$id = $_REQUEST['id'];
$delete = "DELETE FROM user_role WHERE id = '$id'";
$result = mysqli_query($conn, $delete);
if($result == true){
    header('location:fetch.php');
    
 
}
else{
    echo "<script>alert('your data not deleted successfully')</script>";
}
?>
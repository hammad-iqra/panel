<?php
include('config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$role_id = $_POST['role_id'];


$update = "UPDATE user_role SET name='$name', username='$username', password='$password', role_id='$role_id' WHERE id='$id'";


$result = mysqli_query($conn, $update);


if ($result==true) {
    header('location: fetch.php');
    exit();
} else {
    echo "Error updating data: " . mysqli_error($conn);
}


mysqli_close($conn);
?>


<?php
$root = "root";
$host = "localhost";
$password ="";
$db = "authentication";

$conn =mysqli_connect("$host","$root","$password","$db");
if($conn==true){
    echo "<script>alert('database connection successfully')</script>";
}
else{
    echo "<script>alert('database connection successfully')</script>";
}

?>
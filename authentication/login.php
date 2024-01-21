<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .btn-color {
        background-color: #0e1c36;
        color: #fff;

    }

    .profile-image-pic {
        height: 200px;
        width: 200px;
        object-fit: cover;
    }



    .cardbody-color {
        background-color: #ebf2fa;
    }

    a {
        text-decoration: none;
    }
</style>

<body>

    <div class="container card">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login Form</h2>

                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" method="post"  >

                        <div class="text-center">
                            <img src="./images/thumb.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="admin_name" aria-describedby="emailHelp"
                                placeholder="User Name">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="admin_password" placeholder="password">
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100" name="submit" id="submit">Login</button></div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
<?php

include ("config.php");
session_start();
if(isset($_POST ["submit"])){
    $username = mysqli_real_escape_string($conn ,$_POST["username"]);
    $password = $_POST["password"];
    
    
    
        $sql ="SELECT  * FROM user_role WHERE username = '$username' and password = '$password'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
           while($row =mysqli_fetch_assoc($query));
                session_start();
        
    
                $_SESSION ["username"] =$username;
                $_SESSION["user_id"] = $rows['id'];
                $_SESSION["role_id"] =$rows['role_id'];
            } else {
                echo '<div class ="alert alert-danger">Username/Password is incorrect</div>';

            } 
         
    header('location:dashboard.php');
    
            
        }
    
    
    ?>
    



   
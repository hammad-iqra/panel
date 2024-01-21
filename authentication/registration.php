<?php
  include("config.php");
  ob_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4" method="Post" >

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="name" class="form-control" />
                        <label class="form-label" for="form3Example1c" id="name">Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example3c" name="username" class="form-control" />
                        <label class="form-label" for="form3Example3c" id="username">Username</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" name="password" class="form-control" />
                        <label class="form-label" for="form3Example4c"  id="password">Password</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">

                    <div class="form-outline flex-fill mb-0 ms-3">
        <select class="form-select" id="role_id" name="role_id">
            <option value="0">Admin</option>
            <option value="1">User</option>
        </select>
        <label class="form-label" for="userType">Select user type</label>
    </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <!-- <a href="logout.php" type="button" class="btn btn-primary btn-lg" value="submit" name="submit">Register</a>
                  -->
                      <input type="submit" class="btn btn-primary btn-lg" value="submit" name="submit" />
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://i.pinimg.com/originals/2b/9e/fc/2b9efcfa5ba390326de884366f26f0f2.jpg"
                    class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

<?php

  if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role_id = $_POST["role_id"];

    echo $name;

    echo $username;
    echo $password;
    echo $role_id;

    if (empty($name) || empty($username) || empty($password) ) {
        echo "All fields are required. Please fill in all the fields.";
    } 
  
  
       

        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        
        $sql = "INSERT INTO user_role (name, username, password, role_id) VALUES ('$name', '$username', '$password', '$role_id')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
             // Close the database connection
        mysqli_close($conn);

        header("Location: dashboard.php");

     
        
       


        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

       

      }
    


?>
<?php
include("config.php");
// session_start();
// if(isset($_SESSION["username"])){
//     header("location:dashboard.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .heading{
        text-align: center;
    }
</style>
<body>
    <h1 class="heading">Update</h1>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <?php
                                include('config.php');
                                $id = $_REQUEST['id'];
                                $edit = "SELECT * FROM user_role WHERE id = $id";
                                $result4 = mysqli_query($conn, $edit);
                                $row =  mysqli_fetch_array($result4);
                            ?>
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input type="number" class="form-control" value="<?php echo $id; ?>" id="student_id" name="student_id" required readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="username" value="<?php echo $row['username']; ?>" name="username" placeholder="UserName" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-select" id="role_id" name="role_id">
                                    <option value="0" <?php echo ($row['role_id'] == 0) ? 'selected' : ''; ?>>Admin</option>
                                    <option value="1" <?php echo ($row['role_id'] == 1) ? 'selected' : ''; ?>>User</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" id="save" name="save" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

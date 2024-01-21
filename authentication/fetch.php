<?php
include("config.php");

// if (!isset($_SESSION['username'])) {
//     header('location: dashboard.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Data</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/000/505/524/original/vector-male-student-icon-design.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="registration.php" class="btn btn-success">Create New user</a><br><br>
    <table class="table table-danger table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">UserName</th>
                <th scope="col">password</th>
                <th scope="col">Admin Role</th>
                <th colspan="2" align="center">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include('config.php');
            $select = "SELECT * FROM user_role";
            $result4 = mysqli_query($conn, $select);
            while ($row = mysqli_fetch_array($result4)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo ($row['role_id']==0)?'admin' : 'user'; ?></td>
                    <td><a href="updateform.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>


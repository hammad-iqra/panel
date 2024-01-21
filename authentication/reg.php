<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Validate input (you may want to add more validation)
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role_id = $_POST["role_id"];

    if (empty($name) || empty($username) || empty($password) || empty($role_id)) {
        echo "All fields are required. Please fill in all the fields.";
    } else {
        // Database connection parameters
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "authentication";

        // Create a database connection
        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape user input to prevent SQL injection
        $name = mysqli_real_escape_string($conn, $name);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $role_id = mysqli_real_escape_string($conn, $role_id);

        // Hash the password for security (you should use a secure hashing algorithm)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO user_role (name, username, password, role_id) VALUES ('$name', '$username', '$hashedPassword', '$role_id')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);

        // Redirect to a success page
        header("Location: dashboard.php");
        exit();
    }
} else {
    // If the form is not submitted, redirect to the registration page
    header("Location: registration.php");
    exit();
}
?>

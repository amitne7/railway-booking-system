<?php 
include("config.php"); 
$user = new User(); 
?>
<html>
<head><title>Register</title></head>
<body>
<h2>User Registration</h2>
<form method="post">
  Name: <input type="text" name="name" required><br>
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($user->isUserExist($email)) {
        echo "This email is already registered. Please <a href='login.php'>login</a>.";
    } else {
        if ($user->register($name, $email, $pass)) {
            echo "Registered successfully! <a href='login.php'>Login</a>";
        } else {
            echo "Error while registering: " . $user->db->error;
        }
    }
}
?>
</body>
</html>

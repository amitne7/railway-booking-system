<?php include("config.php"); $user = new User(); ?>
<html>
<head><title>Login</title></head>
<body>
<h2>User Login</h2>
<form method="post">
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    $userdata = $user->login($_POST['email'], $_POST['password']);
    if ($userdata) {
        $_SESSION['user_id'] = $userdata['id'];
        $_SESSION['user_name'] = $userdata['name'];
        header("Location: index.php");
    } else {
        echo "Invalid login!";
    }
}
?>
</body>
</html>

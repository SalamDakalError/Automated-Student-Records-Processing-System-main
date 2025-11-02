<?php
if (isset($_POST['btnKKMSignIn'])) {
    $emailKKM = $_POST['txtKKMEmail'];
    $passwordKKM = $_POST['txtKKMPassword'];

    if ($emailKKM === "admin@school.com" && $passwordKKM === "12345") {
        header("Location: adminDashboard.php"); // ← Updated redirect
        exit();
    } else {
        $errorMessage = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
  <div class="login-container">
    <div class="login-left">
      <img src="OIP.png" class="school-logo" alt="School Logo">
      <h2>Welcome Back</h2>
      <p class="subtitle">Please enter your admin credentials</p>

      <?php if (!empty($errorMessage)) echo "<p style='color:red; font-size:13px;'>$errorMessage</p>"; ?>

      <form method="POST" action="">
        <label>Email</label>
        <input type="email" name="txtKKMEmail" placeholder="Enter your email" required>

        <label>Password</label>
        <input type="password" name="txtKKMPassword" placeholder="Enter your password" required>

        <div class="options">
          <label><input type="checkbox" name="chkRemember"> Remember me</label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" name="btnKKMSignIn" class="signin-btn">Sign In</button>
      </form>
    </div>
    <div class="login-right"></div>
  </div>
</body>
</html>

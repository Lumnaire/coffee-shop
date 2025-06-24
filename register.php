<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | Brew Haven</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">
  <div class="login-left">
    <div class="login-logo">
      <img src="assets/logo.png" alt="Logo">
      <h1>Register Account @Brew Haven</h1>
    </div>
    
    <form action="process_register.php" method="POST" class="login-form">
      <div class="register-input-wrapper">
        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
      </div>

      <div class="register-input-wrapper">
        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
      </div>

      <div class="register-input-wrapper">
        <input type="email" id="email" name="email" placeholder="Email" required>
      </div>

      <div class="register-input-wrapper">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-login">Register</button>
    </form>

    <div class="login-footer">
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>

  <div class="login-right">
    <img src="assets/login.avif" alt="Register Illustration">
  </div>
</div>

</body>
</html>

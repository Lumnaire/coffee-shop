
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Brew Haven</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">
  <div class="login-left">
    <div class="login-logo">
      <img src="assets/logo.png" alt="Logo">
      <h1>Brew Haven</h1>
    </div>
    
  <form action="process_login.php" method="POST" class="login-form">
  <div class="input-wrapper">
    <img src="assets/coffee-beans.png" alt="Email Icon" class="input-icon">
    <input type="email" id="email" name="email" placeholder="Email" required>
  </div>

  <div class="input-wrapper">
    <img src="assets/coffee-cup.png" alt="Password Icon" class="input-icon">
    <input type="password" id="password" name="password" placeholder="Password" required>
  </div>

  <button type="submit" class="btn-login">Login</button>
</form>


    <div class="login-footer">
      <p>Don't have an account yet? <a href="register.php">Sign up</a></p>
      <p class="terms">By continuing, you accept our <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</p>
    </div>
  </div>

  <div class="login-right">
    <img src="assets/login.avif" alt="Login Illustration">
  </div>
</div>

</body>
</html>

<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login-style.css" />
  <title>Log In</title>
</head>

<body>
  <?php if ($error) : ?>
    <script>
      alert("<?php echo $error; ?>");
    </script>
  <?php endif; ?>
  <div class="container">
    <div class="left">
      <img src="img/kominfo-seeklogo.png" alt="login-logo" />
    </div>
    <div class="right">
      <div class="login">
        <h1>LOGIN</h1>
        <form method="post" action="auth.php">
          <input type="text" id="username" name="username" placeholder="Username" alt="user" />
          <input type="password" id="password" name="password" placeholder="Password" alt="pass" />
          <button type="submit" id="submit" name="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
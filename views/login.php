<?php
session_start();
$error = $_SESSION['error'] ?? "";
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/login-style.css" />
  <link rel="shortcut icon" href="../img/kominfo-seeklogo.png" type="image/x-icon">
  <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
  <title>Log In</title>
</head>

<body>
  <?php if ($error) : ?>
    <script>
      alert("<?php echo $error; ?>");
    </script>
  <?php endif; ?>
  <div class="container">
    <div class="page">
      <div class="left">
        <img src="../img/kominfo-seeklogo.png" alt="login-logo" />
      </div>
      <div class="right">
        <div class="login">
          <h1>LOGIN</h1>
          <form method="post" action="../config/auth.php">
            <input type="text" id="username" name="username" placeholder="Username" alt="user" />
            <div class="in">
              <input autocomplete="off" type="password" id="password" name="password" placeholder="Password" alt="pass">
              <i class="fa-regular fa-eye-slash toggle"></i>
            </div>

            <button type="submit" id="submit" name="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  const toggle = document.querySelector(".toggle");
  const input = document.querySelector("#password");

  toggle.addEventListener("click", () => {
    if (input.type === "password") {
      input.type = "text";
      toggle.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      input.type = "password";
      toggle.classList.replace("fa-eye", "fa-eye-slash");
    }
  });
</script>

</html>
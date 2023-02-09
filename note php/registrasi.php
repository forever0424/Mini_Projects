<?php
require 'function.php';

if (isset($_POST["register"])) {
  if (regis($_POST) > 0) {
    echo "
    <script>
      alert('user baru ditambah dek');
    </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>

<body>
  <h1>Halaman Registrasi</h1>

  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required>
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
      </li>
      <li>
        <label for="konfirmasi">konfirmasi Password :</label>
        <input type="password" name="konfirmasi" id="konfirmasi" required>
      </li>
      <br>
      <li>
        <button type="submit" name="register">Register</button>
      </li>
    </ul>
  </form>
  <a href="login.php">Login</a>
</body>

</html>
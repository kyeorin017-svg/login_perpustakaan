<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Sistem</title>
    </head>
          <body>
            <h1>selamat datang kembali</h1>
            <p>silahkan masukkan email dan password dengan benar</p>
              <form action="process_login.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username"  id="username">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password">
<button type="submit" class="btn btn-success">kirim</button>

<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "050994") {
        echo "Login berhasil";
    } else {
        echo "Username atau password salah";
    }

} 

?>
</form>
</body>
</html>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action = "logincon.php" method = "post">
  <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>
</form>
</body>
</html>
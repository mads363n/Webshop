<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example.">
    <meta name=viewport  content="width=device-width, intial-scale=1"Z
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <form action="includes/login.inc.php" method="post"
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php">Signup</a>
          <form action="includes/logout.inc.php" method="post"
            <button type="submit" name="logout-submit">Logout</button>
              </form>
    </header>

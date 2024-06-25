<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="whole">
<div class="box1">
  <div class="a1">Welcome to PHP Learning System</div>
  <div class="a2">Sign-Up</div>

<div class="frm">
  <form action="logic.php" method="post">
    <input type="text" placeholder="First name" name="fname">

    <input type="text" placeholder="Last name" name="lname">

    <input type="text" placeholder="Email address" name="email">

    <input type="number" placeholder="contact number" name="number">

    <input type="text" placeholder="password" name="pass">

    <input type="text" placeholder="Confirm password" name="confirmpass">

    <input type="submit" value="Create Account" name="create">
  </form>

</div>

  <div class="main">
  <a href="user.php">Login</a>
  <a href="index.php">Home</a>
</div>
</div>

</div>


</body>
</html>
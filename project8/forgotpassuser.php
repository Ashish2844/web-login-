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
    <div class="box2">
      <div class="a1">Forgot Password</div>
      <div class="a2">Enter email to send request</div>
    

    <div class="frm1">
      <form action="logic.php" method="post">
        <input type="text" placeholder="email id" name="emailid">

        <input type="submit" value="Send Request to admin" name="send">
        <br/>
        
        <a href="otp.php">Via OTP</a>
      </form>
    </div>
    

</div>

  </div>

</body>
</html>
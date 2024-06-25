<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
session_start();

if(isset($_SESSION['msg'])){
  echo'
  <div id="msg1" style="display:none;">'. $_SESSION['msg'].'</div>
  ';
  unset($_SESSION['msg']);
}

?>
<div class="whole">
    <div class="box2">
      <div class="a1">Change  Password by otp</div>
  
              
  <form action="logic.php" method="post">
    </br>
    </br>

    <label>OTP</label>
    <input type="number" name="otpp">
    
    <label>New Password </label>
    <input type="text" name="newpasso">

    </br>
    </br>

    <label>Confirm Password</label>
    <input type="text" name="confirmpasso">
    
    </br>
    </br>

    <input type="submit" value="submit" name="resetpass">
  </form>


  <script>
  
let msg11=document.getElementById("msg1");

msg111=msg11.innerHTML;

  alert(msg111);

  </script>
</body>
</html>
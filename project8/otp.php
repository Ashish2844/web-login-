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
  <div id="msg1">'. $_SESSION['msg'].'</div>
  ';
  unset($_SESSION['msg']);
}

?>
<div class="whole">
    <div class="box2">
      <div class="a1">Forgot Password</div>
      <div class="a2">Enter email to get otp</div>
    

    <div class="frm1">
      <form action="logic.php" method="post">
        <input type="text" placeholder="email id" name="emailv">

        <input type="submit" value="verify email" name="verify">

        <input type="submit" value="Resend Otp" name="resend">
      
      </form>
    </div>
    

</div>

  </div>

  <script>
  
  
let msg11=document.getElementById("msg1");

msg111=msg11.innerHTML;

  alert(msg111);

  </script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

$to="uk.chauhan@gmail.com";

$subject="hello";

$msg="alsdfhsdfjsdj";


if(mail($to,$subject,$msg)){
  echo "send";

}

else{
  echo "not send";
}

?>  


<div class="navbar">
  Welcome to PHP learning System
</div>
<div class="box">
    <div class="b">
      <div class="a1">New Users</div>
      <div class="a2"><a href="newuser.php">Signup Here</a></div>
    </div>
    <div class="b">
    <div class="a1">I have user account</div>
      <div class="a2"><a href="user.php">Login Here</a></div>
    </div>
    <div class="b">
    <div class="a1">Admin Panel</div>
      <div class="a2"><a href="admin.php">Login Here</a></div>
    </div>    
</div>


</body>
</html>
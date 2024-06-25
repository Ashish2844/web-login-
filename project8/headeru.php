<div class="head">
  <div class="adm">User Panel</div>
  <div class="form">
  <form action="logic.php" method="post">
    <input type="text" name="searchfield" placeholder="search by name">
    <input type="submit" value="search" name="search">
  </form>
</div>
<div class="logs">
    <i class="fa-solid fa-user" onclick="show()"></i>
    <div class="sign" id="sign">
      <a href="changepass">Change Password</a>
      <form action="logic.php" method="post">
        <input type="submit" value="signout" name="signout">
      </form>
    </div>
     </div>
</div>


<?php

session_start();



if(isset($_SESSION['email'])){
  $_SESSION['email'];
  $email=$_SESSION['email'];
}

else{
  header("Location:index.php");
}



?>
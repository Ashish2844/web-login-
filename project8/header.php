<div class="head">
  <div class="adm">Admin Panel</div>
  <div class="form">
  <form action="logic.php" method="post">
    <input type="text" name="searchfield" placeholder="search by name">
    <input type="submit" value="search" name="search">
  </form>
</div>
<div class="logs">
    <i class="fa-solid fa-user" onclick="show()"></i>
    <div class="sign" id="sign">
      <a href="changepassword">Change Password</a>
      <form action="logic.php" mehtod="post">
        <input type="submit" value="signout" name="signout">
      </form>
    </div>
     </div>
</div>
<?php
session_start();
if(isset($_SESSION['user'])){
   $_SESSION['user'];

   $username=$_SESSION['user'];
  
}

else{
  header("Location:index.php");
}

?>
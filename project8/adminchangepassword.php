<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="header">
<?php
include "header.php";
?>
</div>

<div class="mid">
  <div class="mid1">
    <?php
     include "sidebar.php";
    ?>
  </div>
  <div class="mid2">
  <div class="dash">
    <?php 
     
     if(isset($_GET['ida'])){
      $ida=$_GET['ida'];
     }

     include "db.php";
     
     $data="SELECT * FROM table1 WHERE id=$ida";
     
     $data_query=$box->query($data);

     if($data_query->num_rows>0){
      echo '
   <div class="chng">
    <form action="logic.php" method="post">
    </br>
    </br>
    
    <input type="hidden" value="'.$ida.'" name="idc">

    <label>New Password </label>
    <input type="text" name="newpass">

    </br>
    </br>

    <label>Confirm Password</label>
    <input type="text" name="confirmpass">
    
    </br>
    </br>

    <input type="submit" value="Password change" name="adminchange">

    </form>
   </div>
  </div>
</div>';
     }

?>
<script src="myjs.js"></script>


</body>
</html>
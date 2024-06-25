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
include "headeru.php";

if(isset($_SESSION['chng'])){
  echo'
  <div id="chng1" style="width:500px; height:500px; background-color:red; margin-left:400px;">'. $_SESSION['chng'].'</div>
  ';
  unset($_SESSION['chng']);
}

?>
</div>

<div class="mid">
  <div class="mid1">
    <?php
     include "sidebaru.php";
    ?>
  </div>
  <div class="mid2">
      
  <div class="chng">
    <form action="logic.php" method="post">
    </br>
    </br>

    <label>Current Password </label>
    <input type="text" name="current">

    </br>
    </br>

    <label>New Password</label>
    <input type="text" name="newpass">
    
    </br>
    </br>

    <input type="submit" value="Change" name="change">

    </form>
  </div>
       
    </div>
</div>


<script src="myjs.js"></script>
<script>
  
let chng11=document.getElementById("chng1");

let chng111=chng11.innerHTML;
if(chng111=="changed"){
  alert("Password changed");
}

</script>



</body>
</html>
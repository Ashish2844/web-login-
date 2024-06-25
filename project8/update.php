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

if(isset($_SESSION['msg'])){
  echo'
  <div id="msg1">'. $_SESSION['msg'].'</div>
  ';
  unset($_SESSION['msg']);
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
    <a href="update.php">Edit</a>
  <div class="d">
      <?php
      include "db.php";
         $data="SELECT * FROM table1 WHERE email='$email'";

         $data_query=$box->query($data);

         if($data_query->num_rows>0){
          echo '<form action="logic.php" method="post">';
          while($output=$data_query->fetch_assoc()){
            echo '
            </br>
            
            <label>Firstname</label>
            <input type="text" value="'.$output['firstname'].'" name="firstname">

            <label>Lastname</label>
            <input type="text" value="'.$output['lastname'].'" name="lastname">

            <label>Email</label>
            <input type="text" value="'.$output['email'].'" name="emaill">

            <label>Number</label>
            <input type="text" value="'.$output['contact'].'" name="contactt"> 
            
            <input type="submit" value="update" name="update">
            ';
          }
          echo '</form>';
         }

       ?>
    </div>
</div>



<script>
  let msg11=document.getElementById("msg1");

msg111=msg11.innerHTML;

if(msg11=="done"){
  alert("updated");
}

</script>




</body>
</html>
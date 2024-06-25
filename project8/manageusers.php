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


if(isset($_SESSION['msg'])){
  echo'
  <div id="msg1" style="display:none;">'. $_SESSION['msg'].'</div>
  ';
  unset($_SESSION['msg']);
}
?>
</div>

<div class="mid">
  <div class="mid1">
    <?php
     include "sidebar.php";
    ?>
  </div>
  <div class="mid2">
  <div class="d">
      <?php
      include "db.php";
         $data="SELECT * FROM table1";

         $data_query=$box->query($data);

         if($data_query->num_rows>0){
          echo '<table border=1 >';
           echo'<tr>
           <td>Firstname</td>
           <td>Lastname</td>
           <td>Email</td>
           <td>Contact</td>
           <td>Password</td>
           <td>Edit</td>
           <td>Delete</td>
           <td>ChangePassword</td>
           <td>Status</td>
           <td>Active user</td>
           <td>DeActivate user</td>
           </tr>';     
          while($output=$data_query->fetch_assoc()){
            echo '

            </br>
            <tr>
            <td>'.$output['firstname'].'</br></td>
            
            
            <td>'.$output['lastname'].'</br></td>
            
            
            <td>'.$output['email'].'</br></td>
            
            
            <td>'.$output['contact'].'</br></td>
            
            <td>'.$output['password'].'</br></td>

            <td><a href="adminupdate.php?id='.$output['id'].'">Edit</a></td>
            <td><a href="logic.php?idd='.$output['id'].'">Delete</a></td>
            <td><a href="adminchangepassword.php?ida='.$output['id'].'">Change password</a></td>
            
            <td>'.$output['statuss'].'<br/></td>

            <td>
            <form action="logic.php" method="post">
            <input type="hidden" value="'.$output['email'].'" name="aemail">
            <input type="submit" value="Activate" name="active">
            </form>
            </td>

            <td>
            <form action="logic.php" method="post">
            <input type="hidden" value="'.$output['email'].'" name="demail">
            <input type="submit" value="DeActivate" name="deactive">
            </form>
            </td>
            
            </tr>
            ';
          }
          echo '</table>';
         }

       ?>
    </div>
</div>



<script>


let msg11=document.getElementById("msg1");

msg111=msg11.innerHTML;

  alert(msg111);



</script>



</body>
</html>

</body>
</html>
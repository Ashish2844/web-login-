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
          echo '<table border=1>';
          while($output=$data_query->fetch_assoc()){
            echo '
            <tr>
            <td>Firstname</td>
            <td>'.$output['firstname'].'</br></td>
            </tr>

             <tr>
             <td>Lastname</td>
            <td>'.$output['lastname'].'</br></td>
            </tr>

            <tr>
            <td>Email</td>
            <td>'.$output['email'].'</br></td>
            </tr>

            <tr>
            <td>Contact</td>
            <td>'.$output['contact'].'</br></td>
            </tr>

            <tr>
            <td>Password</td>
            <td>'.$output['password'].'</br></td>
             </tr>
            ';
          }
          echo '</table>';
         }

       ?>
    </div>
</div>


<script src="myjs.js"></script>




</body>
</html>
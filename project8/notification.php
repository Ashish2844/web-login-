<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="whole">
    <div class="box2">
      <div class="a1">User forgot password</div>
      <div class="a2">Change user password</div>
    

    <div class="frm1">
      <div class="query"><span>Queries</span>
      <?php 
      include "db.php";

      $data="SELECT * FROM table3 WHERE status='1'";

      $data_query=$box->query($data);

      if($data_query->num_rows>0){
        echo '<table>';
        while($notif=$data_query->fetch_assoc()){
          echo '
          </br>
          <tr>
          <td>'.$notif['email'].'</br></td>
           <td><a href="notifchngpass.php?idn='.$notif['id'].'&email='.$notif['email'].'">Change password</a></td>
          </tr>
          ';
        }
        echo'</table>';
      }

      ?>
      </div>

      <div class="allquery">
        <form action="#" method="post">
          <input type="submit" value="All query" name="allquery">
          <input type="submit" value="Pending" name="pending">
        </form>
        <?php 
        include "db.php";
        $data="SELECT * FROM table3 WHERE status='1'";
        if(isset($_POST['allquery'])){
          $data="SELECT * FROM table3";
        }

         else if(isset($_POST['pending'])){
          $data="SELECT * FROM table3 WHERE status='1'";
        }
        
          $data_query=$box->query($data);

          if($data_query->num_rows>0){
            echo '<table>';
            while($all=$data_query->fetch_assoc()){
               echo '
               <tr>
               <td>'.$all['email'].'</br></td>
               </tr>
               ';
            }
            echo '</table>';
          }
        
        
        ?>

        <a href="adminpanel.php">Dashboard</a>
      </div>



    
    </div>
    

</div>

  </div>

</body>
</html>
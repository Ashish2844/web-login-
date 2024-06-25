<?php
include "db.php";

session_start();

if(isset($_POST['create'])){
  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['pass'];


$data="INSERT INTO table1 (id,firstname,lastname,email,contact,password,statuss)
 VALUES (NULL,'$fname','$lname','$email','$number','$pass','1')";

 $data_query=$box->query($data);

if($data_query){
  header("Location:user.php");
}

}


if(isset($_POST['login'])){
  $emailu=$_POST['emailu'];
  $passu=$_POST['passu'];

  $data="SELECT * FROM table1 WHERE email='$emailu' AND password='$passu' AND statuss='1'";

  $data_query=$box->query($data);

  if($data_query->num_rows>0){
    
    $result=$data_query->fetch_assoc();

    if($result['statuss']==0){
       echo "Account disabled";
    }

    $_SESSION['email']=$result['email'];

      header("Location:welcomeuser.php");
    
  }

  else{
    header("Location:user.php");
  }
}


if(isset($_POST['signout'])){
   unset($_SESSION['email']);
   header("Location:index.php");
}

if(isset($_POST['update'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $emaill=$_POST['emaill'];
  $contactt=$_POST['contactt'];

  $email=$_SESSION['email'];

  $data="UPDATE table1 SET firstname='$firstname', lastname='$lastname', email='$emaill', contact='$contactt' WHERE email='$email'";

  $data_query=$box->query($data);

  if($data_query){
    $_SESSION['msg']="done";

    header("Location:update.php");
  }
}



if(isset($_POST['change'])){
  $current=$_POST['current'];
  $newpass=$_POST['newpass'];

  $email=$_SESSION['email'];

  $data="UPDATE table1 SET password='$newpass' WHERE password='$current' AND email='$email'";

  $data_query=$box->query($data);

  if($data_query){
    $_SESSION['chng']="changed";

    header("Location:changepassword.php");
  }
}

if(isset($_POST['adminlogin'])){
  $usera=$_POST['usera'];
  $passa=$_POST['passa'];
   
  $data="SELECT * FROM table2 WHERE username='$usera' AND password='$passa'";

  $data_query=$box->query($data);
  if($data_query->num_rows>0){ 
    echo "test";
    $result1=$data_query->fetch_assoc();

    $_SESSION['user']=$result1['username'];

    header("Location:adminpanel.php");

}
else{
  header("Location:index.php");
}
}


if(isset($_POST['logout'])){
  unset($_SESSION['user']);
  header("Location:index.php");
}


if(isset($_POST['adupdate'])){
  $adfirstname=$_POST['adfirstname'];
  $adlastname=$_POST['adlastname'];
  $ademaill=$_POST['ademaill'];
  $adcontactt=$_POST['adcontactt'];
   
  $ids=$_POST['ids'];
   
  $data="UPDATE table1 SET firstname='$adfirstname', lastname='$adlastname', email='$ademaill', contact='$adcontactt' WHERE id='$ids'";

  $data_query=$box->query($data);

  if($data_query){
    $_SESSION['msg']="user updated";

    header("Location:manageusers.php");
  }
}

if(isset($_GET['idd'])){
  $id=$_GET['idd'];

   $data="DELETE FROM table1 WHERE id='$id'";

   $data_query=$box->query($data);

   if($data_query){

    $_SESSION['msg']="deleted";
    header("Location:manageusers.php");
   }
}


if(isset($_POST['adminchange'])){
  $newpass=$_POST['newpass'];
  
   $idc=$_POST['idc'];
  $data="UPDATE table1 SET password='$newpass' WHERE id='$idc'";

  $data_query=$box->query($data);

  if($data_query){

    echo "Changed";
  }
}

if(isset($_POST['send'])){
  $emailid=$_POST['emailid'];

  $data="INSERT INTO table3 (id,email,status) VALUES (null,'$emailid','1')";

  $data_query=$box->query($data);

  if($data_query){
    echo "Request has been send";
  }
}


if(isset($_POST['notifchange'])){
  $emailn=$_POST['emailn'];
  $idn=$_POST['idn'];
  $newpassn=$_POST['newpassn'];

  $data="UPDATE table1 SET password='$newpassn' WHERE email='$emailn'";

  $data_query=$box->query($data);

  if($data_query){
     
      $data1="UPDATE table3 SET status='0' WHERE id='$idn'";

      $data_query1=$box->query($data1);

      if($data_query1){
        header("Location:notification.php");
      }
      
  }
}

if(isset($_POST['active'])){
  $aemail=$_POST['aemail'];

  $data="UPDATE table1 SET statuss='1' WHERE email='$aemail'";

  $data_query=$box->query($data);

  if($data_query){
    echo "User account activated";
  }
}


if(isset($_POST['deactive'])){

  $demail=$_POST['demail'];

  $data="UPDATE table1 SET statuss='0' WHERE email='$demail'";

  $data_query=$box->query($data);

  if($data_query){
    echo "User account deactivated";
  }

}

if(isset($_POST['verify'])){
  $emailv=$_POST['emailv'];

  $data="SELECT * FROM table1 WHERE email='$emailv'";

  $data_query=$box->query($data);

  if($data_query->num_rows>0){
    
    $otp=rand(0000,9999);

    $data2="UPDATE table1 SET otp='$otp' WHERE email='$emailv'";

    $data_query2=$box->query($data2);

    if($data_query2){

      $_SESSION['useremail']=$emailv;

      if(mail($emailv,"subject",$otp)){
        $_SESSION['msg']="OTP sent to your email id";

        header("Location:otpchngps.php");
      }
    }
  }
}

  if(isset($_POST['resend'])){
    $emailv=$_POST['emailv'];
  
    $data="SELECT * FROM table1 WHERE email='$emailv'";
  
    $data_query=$box->query($data);
  
    if($data_query->num_rows>0){
      
      $otp=rand(0000,9999);
  
      $data2="UPDATE table1 SET otp='$otp' WHERE email='$emailv'";
  
      $data_query2=$box->query($data2);
  
      if($data_query2){
  
        $_SESSION['useremail']=$emailv;
        
        if(mail($emailv,"subject",$otp)){
          $_SESSION['msg']="OTP resent to your email id";
  
          header("Location:otpchngps.php");
        }
      }
    }

  else{
      $_SESSION['msg']="Incorrect email id";  

      header("Location:otp.php");
  }
}


if(isset($_POST['resetpass'])){
  $newpasso=$_POST['newpasso'];
  $otpp=$_POST['otpp'];
  $emailv=$_SESSION['useremail'];
 
  $data="SELECT * FROM table1 WHERE otp='$otpp' AND email='$emailv'";

  $data_query=$box->query($data);

  if($data_query->num_rows>0){

   $timee=$data_query->fetch_assoc();
   
   date_default_timezone_set('Asia/Kolkata');

    $time=strtotime($timee['time']);

   $datee=strtotime(date('Y-m-d H:i:s'));

   $timeleft=$datee-$time;
   
   if($timeleft>20){
    
    $_SESSION['msg']="otp expired";
    header("Location:otp.php");
   }

   else{
   
     $emailv=$_SESSION['useremail'];
     $data3="UPDATE table1 SET password='$newpasso', otp='0' WHERE otp='$otpp' AND email='$emailv'";

     $data_query3=$box->query($data3);

     if($data_query){
      unset($_SESSION['useremail']); 
      $_SESSION['msg']="password has been reset";
      header("Location:user.php");
     }
    }
  }

  else{
    $_SESSION['msg']="entered otp is wrong";
    header("Location:otpchngps.php");
  }
}



?>
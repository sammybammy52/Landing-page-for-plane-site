<?php
  if(isset($_POST['Submit'])){
    $name=$_POST['firstname'];
    $phonenumber=$_POST['phonenumber'];
    $service=$_POST['servicerequired'];
    $message=$_POST['subject'];

    $to='sammybammystudios@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone: ".$phonenumber."\n". "Wrote the following: "."\n\n".$message;

    if(mail($to, $subject, $message)){
      echo "<h1>Sent Sucessfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
    }
    else{
      echo "Something went wrong!";
    }
  }

?>

<?php if (!isset($_POST['btnreg'])) {
  header("location: index.html");
} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">
    .success{
      font-size: 20px;
      font-family: sans-serif;
      margin: auto;
    }
    .notification_body{

      margin:100px auto;
      max-width: 400px;
      padding: 50px;
      height: 160px;
      background: #EBEBEB;
      -webkit-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
      -moz-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
      box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
    }
  </style>
  <body>
<?php

include('dbcon.php');
$db=$conn;// database connection

$student_email = legal_input($_POST['student_email']);
$student_name = legal_input($_POST['student_name']);
$grade = legal_input($_POST['grade']);
$pass = legal_input($_POST['pass']);
$status = 0;
$app_date = date("r");


/*
echo $student_email."<br>";
echo $student_name."<br>";
echo $grade."<br>";
echo $pass."<br>";
echo $sub."<br>";
echo $sub_date."<br>";
*/
// convert illegal input value to ligal value formate
function legal_input($value) {
   $value = trim($value);
   $value = stripslashes($value);
   $value = htmlspecialchars($value);
   return $value;
}

// // function to insert user data into database table
//function insert_data($phone,$email,$service_request){

    global $db;

     $query="INSERT INTO applications(student_email, student_name, grade, pass, status, app_date) VALUES('$student_email','$student_name','$grade','$pass','$status','$app_date')";

    $execute=mysqli_query($db,$query);
    if($execute==true)
    {
      ?>

          <div class="notification_body" align = "center">
            <span class="success" align = "left"> <b> Applicaion recieved:</b> <br> <br>You will receve an email in <b><?php echo $student_email; ?></b>
                notifying you of the status of your application withing 24 hours!
            </span>
            <!--  <div class="success_image">
                <img src="images/success.svg" alt="" height="60">
              </div>-->
              <br>
              <br>
              <br>
              <div class="redirect" align = "center">
                Click <a href="index.html">here</a> to go home.
              </div>
          </div>
      <?php
    }
    else{
     echo  "Error: " . $sql . "<br>" . mysqli_error($db);
   }
//}

?>


  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>SGODIPHOLA | Admin </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="High Edu Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--<script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>-->
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
    <!-- //Fonts -->
</head>
  <body>
    <div class="banner-content inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.html"><img src="images/wlogo4.svg" alt="SGODIPHOLA logo" height="80"></a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
    </div>
    <style media="screen">
      .apply-main{
        background: none;
      }
      .login{

        -webkit-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
        box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
      }
      .submit{
        width: 100%;
      }
      .applicants{
        width: 800px;
        margin: auto;
        -webkit-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
        box-shadow: 0px 2px 10px -2px rgba(0,0,0,0.25);
        padding: 20px;
      }
      .applicants table{
        width: 100%;
        margin: auto;
      }
      .applicants td{
        width: 100px;
        margin: auto;
      }
    </style>
    <section class="apply-main py-5" id="apply">
        <div class="container">
            <div class="row py-lg-5">

                <div id="admin_log" class="login p-md-5 p-4 mx-auto bg-white mw-100 col-lg-5">
                    <h5 class="text-center mb-4">Admin Access</h5>
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Username</label>
                            <input name="admin_uname" type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group mb-4">
                            <label class="mb-2">Password</label>
                            <input name="pass"  type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>

                        <button name="btnreg" type="submit" class="btn btn-primary submit mb-4">Login</button>


                        <div class="error" style="color:red;">
                          <span id="error_text">g</span>
                        </div>
                    </form>

                </div>
            </div>
            <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "sgodiphola";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT admin_uname, password FROM admin";
              $result = $conn->query($sql);
              $applications_sql = "SELECT * FROM applicantions";
              $applications_result = $conn->query($applications_sql);

              if ($result->num_rows > 0) {
                // output data of each row
                ?>
                <style media="screen">
                  #admin_log{
                    display: none;
                  }
                </style>
                <div class="applicants" >
                  <table class="" cellpadding="2" border="0" style="font-weight: bold; border-bottom: 1px solid grey;">
                    <tr>
                      <td>Names</td>
                      <td>Grade Applied</td>
                      <td>Email</td>
                    </tr>
                  </table>
                  <table class="" cellpadding="2" border="0">

                    <tr>
                      <td>J</td>
                      <td>Grade Applied</td>
                      <td>Action</td>
                    </tr>
                  </table>
                </div>
                <?php
              } else {
                ?>
                <script type="text/javascript">
                  document.getElementById('error_text').innerHTML = "Access Denied!";
                </script>
                <?php
              }
              $conn->close();
            ?>
        </div>
    </section>

  </body>

</html>

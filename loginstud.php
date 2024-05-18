<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/img/sah.jpg" />
          <title>Online Quiz Management System</title>
      
    <!-- Main css -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    
      
</head>



<?php
        if (isset($_POST['login'])) {
            if (  isset($_POST['usn']) && isset($_POST['pass'])) {        require_once 'sql.php';
                $conn = mysqli_connect($host, $user, $ps, $project);if (!$conn) {
                    echo "<script>alert(\"Database error retry after some time !\")</script>";
                }
                $usn = mysqli_real_escape_string($conn, $_POST['usn']);
                $password = mysqli_real_escape_string($conn, $_POST['pass']);
                $sql = "select * from student where usn='{$usn}'";
                $res =   mysqli_query($conn, $sql);
                if ($res == true) {
                    global $dbusn, $dbpw;
                    while ($row = mysqli_fetch_array($res)) {
                        $dbpw = $row['pw'];
                        $dbusn = $row['usn'];
                        $_SESSION["name"] = $row['name'];
                        $_SESSION["usn"] = $dbusn;
                    }
                    if ($dbpw === $password) {
                            header("Location: homestud.php");
                        }
                     else  {
                        echo "<script>alert('username or password is wrong');</script>";
                    } 
                }
            }
        }
?>



<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Online Exam System</a>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact Us</a></li>
                    <li class="nav__item"><a href="loginstud.php" class="nav__link">Login as Student</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Login as Teacher</a></li>
                    
                    <li class="nav__item"><a href="#" class="nav__link">Signup</a></li>
                          
                </ul>
            </div>
        </nav>
    </header>

    <div class="main">

  
  <!-- Sing in  Form -->
  <section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                <a href="signup" class="signup-image-link">Create an account</a>
            </div>

            <div class="login-form" >
                <center>

                <h2 class="form-title" >Login as Student</h2>
                </center>

                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="usn" id="email" placeholder="USN" class="validate" for="email"/>
                        <div class="col-md-10">
                  
                </div>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="password" placeholder="******"/>
                    </div>

                    <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                  <button class="btn btn-primary" name="login" value="login" type="submit">
                    Login
                  </button>
                </div>
              </div>
                </form>
               
            </div>
        </div>
    </div>
</section>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
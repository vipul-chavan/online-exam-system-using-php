<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST['studsu'])) {
    session_start();
    if (isset($_POST['name1']) && isset($_POST['usn1']) && isset($_POST['mail1']) && isset($_POST['phno1']) && isset($_POST['dept1']) && isset($_POST['dob1']) && isset($_POST['gender1']) && isset($_POST['password1']) && isset($_POST['cpassword1'])) {
        require_once 'sql.php';
        $conn = mysqli_connect($host, $user, $ps, $project);       if (!$conn) {
            echo "<script>alert(\"Database error retry after some time !\")</script>";
        }
        $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
        $usn1 = mysqli_real_escape_string($conn, $_POST['usn1']);
        $mail1 = mysqli_real_escape_string($conn, $_POST['mail1']);
        $phno1 = mysqli_real_escape_string($conn, $_POST['phno1']);
        $dept1 = mysqli_real_escape_string($conn, $_POST['dept1']);
        $dob1 = mysqli_real_escape_string($conn, $_POST['dob1']);
        $gender1 = mysqli_real_escape_string($conn, $_POST['gender1']);
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $cpassword1 = mysqli_real_escape_string($conn, $_POST['cpassword1']);
        if ($password1 == $cpassword1) {
            $sql = "insert into student (usn,name,mail,phno,dept,gender,DOB,pw) values('$usn1','$name1','$mail1','$phno1','$dept1','$gender1','$dob1','$password1')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>
                alert('successful!');
                window.location.replace(\"index.php\");</script>";
                session_destroy();
            } else {
                echo "<script>
                alert('Data enter by you alreay exist in Database please Sign In');
                window.location.replace(\"index.php\");</script>";
                session_destroy();
            }
        } else {
            echo "<script>
                alert(' Password should be same');
                window.location.replace(\"singup.php\");</script>";
            session_destroy();
        }
    }
}

if (isset($_POST['staffsu'])) {
    session_start();
    if (isset($_POST['name2']) && isset($_POST['staffid']) && isset($_POST['mail2']) && isset($_POST['phno2']) && isset($_POST['dept2']) && isset($_POST['dob2']) && isset($_POST['gender2']) && isset($_POST['password2']) && isset($_POST['cpassword2'])) {
require 'sql.php';
        $conn = mysqli_connect($host, $user, $ps, $project);        if (!$conn) {
            echo "<script>alert(\"Database error retry after some time !\")</script>";
        }
        $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
        $usn2 = mysqli_real_escape_string($conn, $_POST['staffid']);
        $mail2 = mysqli_real_escape_string($conn, $_POST['mail2']);
        $phno2 = mysqli_real_escape_string($conn, $_POST['phno2']);
        $dept2 = mysqli_real_escape_string($conn, $_POST['dept2']);
        $dob2 = mysqli_real_escape_string($conn, $_POST['dob2']);
        $gender2 = mysqli_real_escape_string($conn, $_POST['gender2']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
        $cpassword2 = mysqli_real_escape_string($conn, $_POST['cpassword2']);
        if ($password2 == $cpassword2) {
            $sql = "insert into staff (staffid,name,mail,phno,dept,gender,DOB,pw) values('$usn2','$name2','$mail2','$phno2','$dept2','$gender2','$dob2','$password2')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>
                alert('successful!');
                window.location.replace(\"index.php\");</script>";
                session_destroy();
            } else {
                echo "<script>
                alert('Data enter by you alreay exist in Database please Sign In');
                window.location.replace(\"index.php\");</script>";
                session_destroy();
            }
        } else {
            echo "<script>
                alert(' Password should be same');
                window.location.replace(\"signup.php\");</script>";
            session_destroy();
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>


    <link rel="stylesheet" href="{{ url_for('static', filename='fonts/material-icon/css/material-design-iconic-font.min.css') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="assets/img/sah.jpg" />
          <title>Online Quiz Management System</title>
      
        <!--     Fonts and icons     -->
      
      
      
      
    
        <title>online quize</title>
</head>

</head>
<body>


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
                    <li class="nav__item"><a href="index.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="index.php#about" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact Us</a></li>
                    <li class="nav__item"><a href="loginstud.php" class="nav__link">Login as Student</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Login as Teacher</a></li>
                   
                          
                </ul>
            </div>
        </nav>
    </header>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="signup-image">
                        <figure><img src="assets/img//signup-image.jpg" alt="sing up image"></figure> -->
                        <a href="login.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

      

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
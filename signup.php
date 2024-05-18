<html>

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
   
  
  <link rel="stylesheet" href="assets/css/creativetim.min.css" type="text/css">
</head>




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


  <body class="bg-white" id="top">
    
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
                    
                    <li class="nav__item"><a href="#" class="nav__link">Signup</a></li>
                          
                </ul>
            </div>
        </nav>
    </header>

    <div class="main">




<div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-info badge-pill mb-3">Sign Up</span>
          </div>
        </div>
		
<div class="row row-content align-text-center text-white ">
	<div class="col-12 offset-sm-2 col-sm-8 offset-sm-2 ">

                <div class="card card-body  bg-dark">

<div class="col-12  ">
                   <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#teachersignup"  ><p>I'm a Teacher</p> </a>
</div>
<br>				
<div class="col-12  ">  
<a class="btn btn-primary btn-block" data-toggle="modal" data-target="#studentsignup" > <p> I'm a Student</p>  </a>
</div>
                </div>
            </div>
			</div>
	
 <!-- Registration Modal  Teacher -->
<div>
    <div id="teachersignup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up as Staff</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-danger">
		  
		  
            <form
              class="col s12 l5 white-text"
              method="POST"
			  name="staffSIGNUP"
              autocomplete="new-password"
			 
            >
			
              <div class="form-group row">
                <label
                  for="name"
                  class="col-md-2 col-form-label text-white"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="form-control"
                    required
                    placeholder="Name"
                    id="first_name"
                    name="name2"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label
                  for="staffid"
                  class="col-md-2 col-form-label text-white"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="form-control"
                    required
                    placeholder="Staff ID"
                    id="first_name"
                    name="staffid"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  
			    <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="mail2"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Email Address"
                    id="email"
                    name="mail2"
                    type="email"
                    class="validate"
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="phno2"></label>
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text form-control"
                    required
                    placeholder="Contact Number"
                    id="phone"
                    name="phno2"
                    type="text"
                    pattern="[6789][0-9]{9}"
                    class="validate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label
                  for="firstname"
                  class="col-md-2 col-form-label text-white"
                  for="dept2"
                  ></label
                >
                <div class="col-md-10">
                  <select
                    name="dept2"
                    id="blood"
                    class="validate form-control"
                    required
                  >
                  <option value="It">It</option>
                        <option value="Comp">Comp</option>
                        <option value="AIML">AIML</option>
                        <option value="AIDS">AIDS</option>
                  </select>
                </div>
              </div>
			  
			  <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="dob2"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Date of Birth"
                    id="email"
                    name="dob2"
                    type="date"
                    class="validate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label
                  for="gender2"
                  class="col-md-2 col-form-label text-white"
                  for="rh"
                  ></label
                >
                <div class="col-3">
                  <label>
                    <input
                      class="form-control"
                      value="M"
                      name="gender2"
                      type="radio"
                      required
					  checked
                    />
                    <span class="text-white"></span>
                  </label>
                </div>

                <div class="col-3">
                  <label>
                    <input
                      class="form-control"
                      value="F"
                      name="gender2"
                      type="radio"
                      required
                    />
                    <span class="text-white"></span>
                  </label>
                </div>
              </div>

            
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="password2"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    type="password"
                    name="password2"
                    class=" form-control"
                    required
                    placeholder="**********"
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  />
				   <p>  <small class="text-white"> Use minimum 8 Characters with atleast 1 numericals, Capital letter and Special Character.  </small></p>
                </div>
              </div>
			  
			   <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="cpassword2"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    type="password"
                    name="cpassword2"
                    class=" form-control"
                    required
                    placeholder="**********"
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  />
				   <p>  <small class="text-white"> Enter the same password as before, for verification. </small></p>
                </div>
              </div>

          

              <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                  <button class="btn btn-success form-control" type="submit" name="staffsu">
                    Sign Up
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

 <!-- Registration Modal  Student -->

    <div id="studentsignup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up as Student</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-primary">
		  
		  
            <form
              class="col s12 l5 white-text"
              method="POST"
			  name="student"
              autocomplete="new-password"
            >
			
              <div class="form-group row">
                <label
                  for="name1"
                  class="col-md-2 col-form-label text-white"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="form-control"
                    required
                    placeholder="Name"
                    id="first_name"
                    name="name1"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label
                  for="usn1"
                  class="col-md-2 col-form-label text-white"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="form-control"
                    required
                    placeholder="USN"
                    id="first_name"
                    name="usn1"
                    type="text"
                    class="validate"
                  />
                </div>
              </div>
			  
			    <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="mail1"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Email Address"
                    id="email"
                    name="mail1"
                    type="email"
                    class="validate"
                  />
                </div>
              </div>
			  
			   <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="phno1"></label>
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text form-control"
                    required
                    placeholder="Contact Number"
                    id="phone"
                    name="phno1"
                    type="text"
                    pattern="[6789][0-9]{9}"
                    class="validate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label
                  for="firstname"
                  class="col-md-2 col-form-label text-white"
                  for="dept1"
                  ></label
                >
                <div class="col-md-10">
                  <select
                    name="dept1"
                    id="blood"
                    class="validate form-control"
                    required
                  >
                  <option value="It">It</option>
                        <option value="Comp">Comp</option>
                        <option value="AIML">AIML</option>
                        <option value="AIDS">AIDS</option>
                  </select>
                </div>
              </div>
			  
			  <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="dob1"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    autocomplete="new-password"
                    class="white-text validate form-control"
                    placeholder="Date of Birth"
                    id="email"
                    name="dob1"
                    type="date"
                    class="validate"
                  />
                </div>
              </div>

              <div class="form-group row">
                <label
                  for="gender1"
                  class="col-md-2 col-form-label text-white"
                  for="rh"
                  >Male</label
                >
                <div class="col-3">
                  <label>
                    <input
                      class="form-control"
                      value="M"
                      name="gender1"
                      type="radio"
                      required
					  checked
                    />
                    <span class="text-white"></span>
                  </label>
                </div>

                <div class="col-3">
                  <label>
                    <input
                      class="form-control"
                      value="F"
                      name="gender1"
                      type="radio"
                      required
                    />
                    <span class="text-white"></span>
                  </label>
                </div>
              </div>

            
              <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="password1"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    type="password"
                    name="password1"
                    class=" form-control"
                    required
                    placeholder="**********"
										pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"

                  />
				  				   <p>  <small class="text-white"> Use minimum 8 Characters with atleast 1 numericals, Capital letter and Special Character.  </small></p>

                </div>
              </div>
			  
			   <div class="form-group row">
                <label class="col-md-2 col-form-label text-white" for="cpassword1"
                  ></label
                >
                <div class="col-md-10">
                  <input
                    type="password"
                    name="cpassword1"
                    class=" form-control"
                    required
                    placeholder="**********"
										pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"

                  />
				  				   <p>  <small class="text-white"> Enter the same password as before, for verification. </small></p>

                </div>
              </div>

          <div>
            

              <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                  <button class="btn btn-success form-control" type="submit" name="studsu">
                    Sign Up
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	
	</section>
	
<?php require("footer.php");?>

</body>

</html>

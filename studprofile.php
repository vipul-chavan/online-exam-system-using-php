<html>


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

<?php require ("header.php");?>
<?php
session_start();
require_once 'sql.php';
                $conn = mysqli_connect($host, $user, $ps, $project);if (!$conn) {
    echo "<script>alert(\"Database error retry after some time !\")</script>";
} else {
    $usn = $_SESSION["usn"];
    $sql = "select * from student where usn='{$usn}'";
    $res =   mysqli_query($conn, $sql);
    if ($res == true) {
        global $dbusn, $dbpw;
        while ($row = mysqli_fetch_array($res)) {
            $dbusn = $row['usn'];
            $dbname = $row['name'];
			$dbmail = $row['mail'];
            $dbphno = $row['phno'];
            $dbgender = $row['gender'];
            $dbdob = $row['DOB'];
            $dbdept = $row['dept'];
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
                    <li class="nav__item"><a href="index.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="index.php#about" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact Us</a></li>
                    
                    <li class="nav__item"><a href="studpeofile.php" class="nav__link"><?php echo $dbname ?></a></li>
                    
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                          
                </ul>
            </div>
        </nav>
    </header>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>


<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Profile</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-4 mb-3">
			
			
				<div class="card">
                <div class="card-body bg-gradient-info">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/img/user.jpeg" alt="student" class="rounded-circle" width="177">
                    <div class="mt-3">
                      <h4>                      <?php echo $dbname ?></h4>
                      <p class="text-white mb-1"> <?php echo $dbdept ?> Engineering</p>
                      <p class="text-white font-size-sm">Modern College of Engineering</p>

                    </div>
                  </div>
                </div>
              </div>			 		  
            </div>
			
			
                <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body bg-gradient-success">
				
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $dbname ?>
                    </div>
                  </div>
				  <br>
                  
				  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Email</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $dbmail ?>
                    </div>
                  </div>
               <br>
				  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $dbphno ?>
                    </div>
                  </div>
                   <br>
             
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">USN</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $dbusn ?>
                    </div>
                  </div>
                   <br>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                     <?php echo $dbgender ?>
                    </div>
                  </div>
                   <br>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">DOB</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                      <?php echo $dbdob ?>
                    </div>
                  </div>
                   <br>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Department</h6>
                    </div>
                    <div class="col-sm-9 text-dark">
                     <?php echo $dbdept ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>				
          </div>

	

        </div>
</section>


    <?php require("footer.php");?>

</body>

</html>
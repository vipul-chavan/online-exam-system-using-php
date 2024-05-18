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
    $staffid = $_SESSION["staffid"];
    $sql = "select * from staff where staffid='{$staffid}'";
    $res =   mysqli_query($conn, $sql);
    if ($res == true) {
        global $dbstaffid, $dbpw;
        while ($row = mysqli_fetch_array($res)) {
            $dbstaffid = $row['staffid'];
            $dbname = $row['name'];
			$dbmail = $row['mail'];
            $dbphno = $row['phno'];
            $dbgender = $row['gender'];
            $dbdob = $row['DOB'];
            $dbdept = $row['dept'];
        }
    }
    $qname = $_SESSION['qname'];
    $sql = "select quizid from quiz where quizname='{$qname}'";
    $res =   mysqli_query($conn, $sql);
    if ($res == true) {
        global $qid;
        while ($row = mysqli_fetch_array($res)) {
            $qid = $row['quizid'];
        }
    }
    if (isset($_POST['submit'])) {
        $qs = $_POST["qs"];
        $op1 = $_POST["op1"];
        $op2 = $_POST["op2"];
        $op3 = $_POST["op3"];
        $ans = $_POST["ans"];
        $sql = "insert into questions(qs,op1,op2,op3,answer,quizid) values('$qs','$op1','$op2','$op3','$ans','$qid');";
        $res =   mysqli_query($conn, $sql);
        if ($res == true) {
            echo '<script>history.pushState({}, "", "");</script>';
        } elseif ($res != true) {
            echo '<script>alert("Question already exsits");</script>';
        }
    }
    if (isset($_POST['submit1'])) {
        $qs = $_POST["qs"];
        $op1 = $_POST["op1"];
        $op2 = $_POST["op2"];
        $op3 = $_POST["op3"];
        $ans = $_POST["ans"];
        $sql = "insert into questions(qs,op1,op2,op3,answer,quizid) values('$qs','$op1','$op2','$op3','$ans','$qid');";
        $res =   mysqli_query($conn, $sql);
        if ($res == true) {
            header("Location: homestaff.php");
        } elseif ($res != true) {
            echo '<script>alert("Question already exsits");</script>';
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
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                    
                    
                          
                </ul>
            </div>
        </nav>
    </header>

    <div class="main">
	
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

		


<div class="row">
            <div class="col-sm-12 mb-3">  
              <div class="card card-body bg-gradient-default text-white mt-3">
			  
			   <div class="col-12 mx-auto text-center">
            <span class="badge badge-warning badge-pill mb-3">Add questions</span>
          </div>

            <section id="ans">			
                <form  method="post">
                 <div id="QS">
						
				<div class="form-group row">
                    <label for="qs" class="col-md-2 col-form-label"
                      >
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="quizid"
                        name="qs"
                        placeholder="Enter Question"
						required"
                      />
                    </div>
                </div>
				
				<div class="form-group row">
                    <label for="op1" class="col-md-2 col-form-label"
                      >
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="quizid"
                        name="op1"
                        placeholder="Option 1"
						required"
                      />
                    </div>
                </div>
				
				<div class="form-group row">
                    <label for="op2" class="col-md-2 col-form-label"
                      >
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="quizid"
                        name="op2"
                        placeholder="Option 2"
						required"
                      />
                    </div>
                </div>
				
				<div class="form-group row">
                    <label for="op3" class="col-md-2 col-form-label"
                      >
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="quizid"
                        name="op3"
                        placeholder="Option 3"
						required"
                      />
                    </div>
                </div>
				
				<div class="form-group row">
                    <label for="ans" class="col-md-2 col-form-label"
                      >
                    </label>
                    <div class="col-md-10">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="quizid"
                        name="ans"
                        placeholder="Option 4 (ans)"
						required"
                      />
                    </div>
                </div>
				
			</div>
			
					<div class="form-group row">
                    <div class="offset-md-2 col-md-2">
                      <button
                        type="submit"
                        class="btn btn-info text-dark"
						name="submit" id="submit" value="Add 1 More Question"
                      >
                        Add 1 More Question
                      </button>
                    </div>
					
					 <div class="offset-md-7 col-md-">
                      <button
                        type="submit"
                        class="btn btn-success text-white"
						name="submit1" id="submit1" value="Done"
                      >
                        Submit
                      </button>
                    </div>
					</div>

	
			</form>
					
          </section>
		
		
		
		
                  </div>
                </div>
              </div>		
		
 </div>
 </section>
 
    <?php require("footer.php");?>

</body>

</html>
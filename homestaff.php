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
    if (isset($_POST['submit'])) {
        $qname = strtolower($_POST['quizname']);
        $_SESSION["qname"]=$qname;
        $sql1 = "insert into quiz(quizname,staffid) values('$qname','$staffid')";
        $res1 = mysqli_query($conn, $sql1);
        if ($res1 == true) {
            $sql = "select quizid from quiz where quizname='" . $qname . "';";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                header("location: addqs.php");
            } else {
                echo "<script>alert(\"some error occured\");</script>";
            }
        } else {
            echo "<script>alert(\"Already name exists\");</script>";
        }
    }
    if (isset($_POST['submit1'])) {
        $qid1 = strtolower($_POST['quizid']);
        $sql1 = "delete from quiz where quizid='{$qid1}'";
        $res1 = mysqli_query($conn, $sql1);
        if ($res1 == true) {
            echo "<script>alert(\"Quiz successfully deleted\");</script>";
        } else {
            echo "<script>alert(\"Unknown error occured during deletion of quiz\");</script>";

        }
    }
    if (isset($_POST['submit2'])) {
        $qid1 =$_POST['quizid'];
        $sql1 = "select quizid from quiz where quizid='{$qid1}'";
        $res1 = mysqli_query($conn, $sql1);
        if ($res1 == true) {
            echo "<script>window.location.replace(\"viewq.php?qid=".$qid1."\");</script>";
        } else {
            echo "<script>alert(\"Unknown error occured during viweing of quiz\");</script>";

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
                    <li class="nav__item"><a href="homestaff.php" class="nav__link active">Dashboard </a></li>
                    <li class="nav__item"><a href="quizlist.php" class="nav__link">QuizeList</a></li>
                    <li class="nav__item"><a href="staffleaderboard.php" class="nav__link">LeaderBoard</a></li>
                    <li class="nav__item"><a href="staffprofile.php" class="nav__link"><?php echo $dbname ?></a></li>
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


<div class="container"> 
      
<div class="row">
<div class="col-sm-12 mb-3">  
			  
  <div class="nav nav-tabs nav-fill bg-gradient-default" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active font-weight-bold text-success" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Add Quiz</a>
  
  </div>
                  
                		  
      <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">
 
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="card card-body bg-gradient-success">
			<h1 class="text-white">Add Quiz</h1>
					
                <form  method="post">     
                        
					<div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label"
                      ><h6 class="text-white font-weight-bold">Quiz Name</h6>
                    </label>
                    <div class="col-md-9">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="name"
                        name="quizname"
                        placeholder="Enter Quiz Name"
						required"
                      />
                    </div>
                  </div>
				  
					 <div class="form-group row">
                    <div class="offset-md-3 col-md-2">
                      <button
                        type="submit"
                        class="btn btn-info text-dark"
						name="submit" id="submit" value="submit"
                      >
                        Submit
                      </button>
                    </div>
					</div>
             </form>
				
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
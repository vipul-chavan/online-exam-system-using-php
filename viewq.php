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
error_reporting(E_ERROR | E_PARSE);
require_once 'sql.php';
                $conn = mysqli_connect($host, $user, $ps, $project);if (!$conn) {
    echo "<script>alert(\"Database error retry after some time !\")</script>";
}
?>
     
<?php
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

		
<div class="container-fluid"> 
      
<div class="row">
            <div class="col-sm-12 mb-3">  
              <div class="card card-body bg-gradient-default text-white mt-3">

       
		
        <?php 
        if(isset($_GET["qid"])){
        $qid=$_GET["qid"];
            $sql ="select * from questions where quizid='{$qid}'";
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                $count=mysqli_num_rows($res);
                if(mysqli_num_rows($res)==0)
                {
                    echo "No questions found under this quiz please come later";
                    echo "<form method=\"POST\">";
                echo "<input id=\"btn\" type=\"submit\" name=\"submit\" value=\"Add Questions\" class=\" btn btn-success \"><br><br><br>";

                }else{
                $i=1;
                $j=0;
                echo "<form method=\"POST\">";
                echo "<input id=\"btn\" type=\"submit\" name=\"submit\" value=\"Add Questions\" class=\" btn btn-success \"><br><br><br>";
                echo "</form><br><br>";

                while ($row = mysqli_fetch_assoc($res)) { 
                    echo $i.". ".$row["qs"]."<br>";
                    echo "<input type=\"radio\" value=\"".$j."\" name=\"ans".$i.$j."\">".$row["op1"]."<br>";
                    echo "<input type=\"radio\" value=\"".($j+1)."\" name=\"ans".$i.$j."\">".$row["op2"]."<br>";               
                    echo "<input type=\"radio\" value=\"".($j+2)."\"name=\"ans".$i.$j."\">".$row["op3"]."<br>";               
                    echo "<input type=\"radio\"value=\"".($j+3)."\" name=\"ans".$i.$j."\">".$row["answer"]."<br><br>";  
                    $i++;                            
                }
                echo "</form><br><br>";
            }
            }
            else
            {
                echo "error".mysqli_error($conn).".";
            }
            if(isset($_POST["submit"])){
                echo "<script>window.location.replace(\"addq.php?qid=".$qid."\")</script>";
            }
     } ?>
		
		
                  </div>
                </div>
              </div>		
		
 </div>
 </section>
 
    <?php require("footer.php");?>

</body>

</html>
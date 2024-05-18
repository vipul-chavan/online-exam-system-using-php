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
                    <li class="nav__item"><a href="quizelist.php" class="nav__link">QuizeList</a></li>
                    <li class="nav__item"><a href="staffleaderboard.php" class="nav__link">LeaderBoard</a></li>
                    
                    <li class="nav__item"><a href="staffprofile.php" class="nav__link"><?php echo $dbname ?></a></li>
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


<div class="container"> 
      

<div class="row">
            <div class="col-sm-12 mb-3">  
              <div class="card card-body bg-gradient-white text-white mt-3">
			   <div class="col-12 mx-auto text-center">
            <span class="badge badge-warning badge-pill mb-3">Quiz List</span>
          </div>
		  
		  
		      <table id="tabledata" class=" table table-striped table-hover table-bordered  text-center ">

            <thead class="font-weight-bold">
                      <tr >

                <td >Quiz ID</td>
                <td> Quiz Title </td>
                <td> Created On </td>
                <td>  View </td>

				<td> Delete </td>
				        </tr>

            </thead>

		<tbody >
		
		
		  				        <?php


  $sql ="select * from quiz where staffid='{$staffid}'";
            $res=mysqli_query($conn,$sql);
       
while ($row = mysqli_fetch_array($res)) {                
             
			$id=$row['quizid'];
			$name=$row['quizname'];
			$date=$row['date_created'];
			
        ?>
		
			     <tr class="text-center">
              
                <td data-label="Quiz ID"> <?php echo $id ?> </td>
                <td data-label="Quiz Title"> <?php echo $name  ?> </td>
                <td data-label="Created On"> <?php echo $date  ?> </td>
                
        <td data-label="Profile"> <button class="btn btn-info btn-sm" > <a href="viewq.php?qid=<?php echo $id ?>" class="nav-link text-white"> View </a> </button> </td>
	
       <td data-label="delete"> <button class="btn btn-sm btn-danger" > <a href="delete.php?id=<?php echo $id ?>"  class=" nav-link text-white" data-toggle="tooltip">Delete</a> </button> </td>

            </tr>

							<?php
					
					
					}
				?>
			</tbody>
			
    </table>
     
             </div>
                </div>
              </div>    	
    </div>
</section>


    <?php require("footer.php");?>

</body>

</html>
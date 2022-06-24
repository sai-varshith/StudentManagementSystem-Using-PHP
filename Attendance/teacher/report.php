<?php

ob_start();
session_start();


?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendence</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">

   
  <!-- Optional theme -->

   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <body>
   <style type="text/css">
    /* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html{
  overflow-x: hidden;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  z-index: 100;
  transition: all 0.5s ease;
  background-color: black;
  opacity: none;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
  margin-left: 0px;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 20px;
  width: 20px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}

.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
}
input[type='text'],input[type="mail"], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: black;
  outline: 0px;
}
input[type='reg']{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: black;
  outline: 0px;
}

input[type=submit] {
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 50%;
}

input[type=submit]:hover {
  background-color: #45a049;
}
table thead tr th{
  padding: 10px;
}
table tbody tr td{
  padding: 10px;
}


  </style>

<header>
   <div class="sidebar close">
    <div class="logo-details">
<i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <span class="logo_name">Student</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Home</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="index_new.php">
        <i class="fa fa-plus" aria-hidden="true"></i>

            <span class="link_name">Add User</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Add User</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="students.php">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="link_name">Students</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Students</a></li>
        </ul>
      </li>
      
      <li>
        <a href="teachers.php">
      <i class="fa fa-users" aria-hidden="true"></i>

          <span class="link_name">Faculty</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Faculty</a></li>
        </ul>
      </li>
      <li>
        <a href="faculty_attendence.php">
     <i class="fa fa-th-list" aria-hidden="true"></i>

          <span class="link_name">Attendance</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Attendance</a></li>
        </ul>
      </li>
     
      <li>
        <a href="report.php">
         <i class="fa fa-check" aria-hidden="true"></i>


          <span class="link_name">Report</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Report</a></li>
        </ul>
      </li>
     
      
      <li>
    <div class="profile-details">
    
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['user_name'];?></div>
  


      </div>
      <a href="logout.php"><i class='bx bx-log-out' > </i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
          <p>Home</p>
       
          <div class="profile">

               <ul style="list-style:none;display: inline-flex;margin-left: 970px;margin-top: 10px;">

                 <li style="margin-top: 12px;margin-left: 10px;"><h4><?php echo $_SESSION['user_name'];?></h4></li>
                  <li style="margin-top: 14px;margin-left: 8px;"> <a href="logout.php"><i class='bx bx-log-out' > </i></a></li>
               </ul>
               
          </div>
    </div>

  <h1>Attendence</h1>
 <center>

<div class="row">

  <div class="content">
    <h3>Individual Report</h3>

    <form method="post" action="">

    <label>Select Subject</label>
    <select name="whichcourse">
    <option  value="algo">Analysis of Algorithms</option>
         <option  value="algolab">Analysis of Algorithms Lab</option>
        <option  value="dbms">Database Management System</option>
        <option  value="dbmslab">Database Management System Lab</option>
        <option  value="weblab">Web Programming Lab</option>
        <option  value="os">Operating System</option>
        <option  value="oslab">Operating System Lab</option>
        <option  value="obm">Object Based Modeling</option>
        <option  value="softcomp">Soft Computing</option>
    </select>

      <p>  </p>
      <label>Student Reg. No.</label>
      <input type="text" name="sr_id">
      <input type="submit" name="sr_btn" value="Go" >

    </form>

    <!-- <h3>Mass Report</h3> -->

    <!-- <form method="post" action="">

    <label>Select Subject</label>
    <select name="course">
    <option  value="algo">Analysis of Algorithms</option>
         <option  value="algolab">Analysis of Algorithms Lab</option>
        <option  value="dbms">Database Management System</option>
        <option  value="dbmslab">Database Management System Lab</option>
        <option  value="weblab">Web Programming Lab</option>
        <option  value="os">Operating System</option>
        <option  value="oslab">Operating System Lab</option>
        <option  value="obm">Object Based Modeling</option>
        <option  value="softcomp">Soft Computing</option>
    </select>
    <p>  </p>
      <label>Date ( yyyy-mm-dd )</label>
      <input type="text" name="date">
      <input type="submit" name="sr_date" value="Go!" >
    </form> -->

    <br>

    <br>

   <?php

    if(isset($_POST['sr_btn'])){

     $sr_id = $_POST['sr_id'];
     $course = $_POST['whichcourse'];

     $single = mysqli_query($conn,"select stat_id,count(*) as countP from attendance where attendance.stat_id='$sr_id' and attendance.course = '$course' and attendance.st_status='Present'");
      $singleT= mysqli_query($conn,"select count(*) as countT from attendance where attendance.stat_id='$sr_id' and attendance.course = '$course'");
    //  $count_tot = mysql_num_rows($singleT);
  } 

    if(isset($_POST['sr_date'])){

     $sdate = $_POST['date'];
     $course = $_POST['course'];

     $all_query = mysqli_query($conn,"select * from attendance where reports.stat_date='$sdate' and reports.course = '$course'");

    }
    if(isset($_POST['sr_date'])){

      ?>

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Reg. No.</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Batch</th>
          <th scope="col">Date</th>
          <th scope="col">Attendance Status</th>
        </tr>
     </thead>


    <?php

     $i=0;
     while($data = mysqli_fetch_array($all_query)) {

       $i++;

     ?>
        <tbody>
           <tr>
             <td><?php echo $data['st_id']; ?></td>
             <td><?php echo $data['st_name']; ?></td>
             <td><?php echo $data['st_dept']; ?></td>
             <td><?php echo $data['st_batch']; ?></td>
             <td><?php echo $data['stat_date']; ?></td>
             <td><?php echo $data['st_status']; ?></td>
           </tr>
        </tbody>

     <?php 
   } 
  }
     ?>
     
    </table>


    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">

    <?php


    if(isset($_POST['sr_btn'])){

       $count_pre = 0;
       $i= 0;
       $count_tot;
       if ($row=mysqli_fetch_row($singleT))
       {
       $count_tot=$row[0];
       }
       while ($data = mysqli_fetch_array($single)) {
       $i++;
       
       if($i <= 1){
     ?>


     <tbody>
      <tr>
          <td>Student Reg. No: </td>
          <td><?php echo $data['stat_id']; ?></td>
      </tr>

           <?php
         //}
        
        // }

      ?>
      
      <tr>
        <td>Total Class (Days): </td>
        <td><?php echo $count_tot; ?> </td>
      </tr>

      <tr>
        <td>Present (Days): </td>
        <td><?php echo $data[1]; ?> </td>
      </tr>

      <tr>
        <td>Absent (Days): </td>
        <td><?php echo $count_tot -  $data[1]; ?> </td>
      </tr>

    </tbody>

   <?php

     }  
    }}
     ?>
    </table>
  </form>

  </div>

</div>

</center>

</header>


<script type="text/javascript">
  let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

</script>




</body>
</html>

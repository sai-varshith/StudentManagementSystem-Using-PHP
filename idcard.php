<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <style>
        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e6ebe0;
            flex-direction: row;
            flex-flow: wrap;
            
            

        }

        .font {
            height: 375px;
            width: 250px;
            position: relative;
            border-radius: 10px;
        }

        .top {
            height: 30%;
            width: 100%;
            background-color: #8338ec;
            position: relative;
            z-index: 5;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .bottom {
            height: 70%;
            width: 100%;
            background-color: white;
            position: absolute;
            border-bottom-left-radius: 15px;
                        box-shadow: box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

           
        }

        .top img {
            height: 100px;
            width: 100px;
            background-color: #e6ebe0;
            border-radius: 10px;
            position: absolute;
            top: 60px;
            left: 75px;
        }

        .bottom h1 {
            position: relative;
            top: 60px;
            text-align: center;
            text-transform: capitalize;
            font-weight: bold;
            font-size: 30px;
            text-emphasis: spacing;
        }

        .bottom .desi {
            font-size: 17px;
            color: grey;
            font-weight: normal;
        }

        .bottom .no {
            font-size: 17px;
            font-weight: normal;
        }



        .Details {
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 25px;
        }

        @media screen and (max-width:400px) {
            .container {
                height: 130vh;
            }

            .container .front {
                margin-top: 50px;
            }
        }

        @media screen and (max-width:600px) {
            .container {
                height: 130vh;
            }

            .container .front {
                margin-top: 50px;
            }

        }
    </style>
    <title>ID Card</title>
    <!--     
    So lets start -->
</head>

<body>
      <div class="sidebar close">
    <div class="logo-details">
<i class="fa fa-graduation-cap" aria-hidden="true"></i>
      <span class="logo_name">Student</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
        <i class="fa fa-check" aria-hidden="true"></i>
            <span class="link_name">Result</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Result</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="link_name">Timetable</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Timetable</a></li>
        </ul>
      </li>
      
      <li>
        <a href="id.php">
      <i class="fa fa-id-badge" aria-hidden="true"></i>
          <span class="link_name">Id card</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Id card</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
        <i class="fa fa-money" aria-hidden="true"></i>

          <span class="link_name">Fees</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Fees</a></li>
        </ul>
      </li>
     
      <li>
        <a href="#">
         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

          <span class="link_name">My courses</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">My courses</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
       <i class="fa fa-user" aria-hidden="true"></i>

          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Profile</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
          <?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['Photo']).'" alt ="Image" style="width: 55px; height: 55px;" >';?> 
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['name'];?></div>
        <div class="job">Roll no.<?php echo $_SESSION['rollno']; ?></div>


      </div>
      <a href="logout.php"><i class='bx bx-log-out' > </i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
     <p><a href="http://localhost:8080/login/home.php" style="color: black;text-decoration: none;">Home</a></p>
    </div>
    <div>
    <div class="container">
         <div class="padding">
            <div class="font">
                <div class="top">
                 <?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['Photo']).'" alt ="Image" style="width: 100px; height: 100px;" >';?>   
                </div>
                <div class="bottom">

                    <h1><?php echo $_SESSION['name'];?></h1>
                    <h1 class="desi"> <?php echo $_SESSION['Course'];?></h1>
                    <br>
                    <h1 class="no">Year: <?php echo $_SESSION['Year'];?></h1>
                    <h1 class="no">Roll Number: <?php echo $_SESSION['rollno'];?></h1>
                    <h1 class="no">Number: <?php echo $_SESSION['number'];?></h1>
                </div>
                <?php echo "<br>";?>
            </div>
        </div>

        </div>
     
  </div>
  </section>
   <script src="script.js"></script>
   
</body>

</html>
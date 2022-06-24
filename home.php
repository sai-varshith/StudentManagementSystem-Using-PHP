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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Student</title>
     <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="component3.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


   </head>
<body>
  <style type="text/css">
.article_links:hover{
  transform: translateY(-2px);
  cursor: pointer;
}
.library:hover{
    transform: translateY(-2px);
}
.glow-on-hover {
    width: 150px;
    height: 30px;
    border: none;
    outline: none;
    color: #fff;
    background:none;
    cursor: pointer;
    position: relative;
    z-index: 0;
    margin-top: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

  </style>

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
        <a href="idcard.php">
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
          <p>Home</p>
       
          <div class="profile">

               <ul style="list-style:none;display: inline-flex;margin-left: 970px;margin-top: 10px;">

                <li><?php echo '<img src="data:Photo;base64,'.base64_encode($_SESSION['Photo']).'" alt ="Image" style="width: 45px; height: 45px;border-radius:30px;border:5px solid #cccccc" >';?></li> 
                 <li style="margin-top: 12px;margin-left: 10px;"><h4><?php echo $_SESSION['name'];?></h4></li>
                  <li style="margin-top: 14px;margin-left: 8px;"> <a href="logout.php"><i class='bx bx-log-out' > </i></a></li>
               </ul>
               
          </div>
    </div>
    <div class="header">
     <ul>

          <li class="attendence">

        <i class="fa fa-th-list" aria-hidden="true"></i>
          <div class="attend">
               <a href="attendence/student/index.php"><h3>Attendence</h3></a>
        
               
          </div>
          </li>
          <li class="performance">

          <i class="fa fa-line-chart" aria-hidden="true"></i>

          <div class="attend">
               <a href=""><h3>Performance</h3></a>
               <a href="" style="font-size: 20px;"><span><?php echo $_SESSION['performance']?>%</span></a>
               
          </div>
               
          </li>
           <li class="email">
             <i class="fa fa-money" aria-hidden="true"></i>

            <div class="fee">
               <a href=""><h3>Fee Due</h3></a>
               <a href="" style="font-size: 15px;"><span><?php echo $_SESSION['fee']?></span></a>

                 
            </div>

           </li>
        <li class="user">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
             <div class="user_id">
              <h4><?php echo $_SESSION['email']?></h4>
              <a href=""><button class="check_emails">Check Emails</button></a>
                  
             </div>
            
        </li>

     </ul>
     
         
    </div>
    <div class="component2" style="margin-top:15px;">
      <ul id="component2">
    <li><div class="my_courses">
      <h2>My Classes</h2>
      <div class="buttons">
<button class="button1"><a class="prev" onclick="plusSlides(-1)" >&#10094;</a></button>
<button  class="button2"><a class="next" onclick="plusSlides(1)" >&#10095;</a></button>
</div>
      
    </div>
    <div class="slideshow-container">

 <div class="mySlides fade" id="card">
 
 <h1>Monday</h1>
 
                                  <ul>
               <table style="width: 100%; margin-top: 15px;">
                  <tr>
                     <td>
                <div class="one" style="display: flex; box-sizing: border-box;" id="bg">
                   <h4>09:10 - 10:00</h4><li style="margin-left: 50px;list-style: none;"> <i class="fa fa-book" style="margin-right: 25px; font-size:25px ; color: orange;"></i>First period <br>
                     <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f1']?></span></h4></li>
                </div> </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 10px;">
                    <h4>10:00 - 10:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Second period 
                   <h4 style="margin-top:10px;margin-left: 0px;"><span style="margin-left:0px;"><?php echo $_SESSION['f2']?></h4></li>
                </div>
                  </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>11:00 - 11:50</h4><li style="margin-left: 60px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Third period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>12:00 - 12:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fourth period 
                   <h4 style="margin-top:10px;margin-left: 14px;"> <span style="margin-left:0px;"><?php echo $_SESSION['f4']?></li>
                </div>
                </td>
                </tr>
             <tr>
               <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>14:00 - 14:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fifth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"> <span style="margin-left:0px;"><?php echo $_SESSION['f5']?></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>15:00 - 15:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> sixth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></li>
                </div>
                </td>
                </tr>
                </table>
             </ul>

</div>

<div class="mySlides fade" id="card">
  <h1>Tuesday</h1>
                                  <ul>
              <table style="width: 100%; margin-top: 15px;">
                  <tr>
                     <td>
                <div class="one" style="display: flex; box-sizing: border-box;" id="bg">
                   <h4>09:10 - 10:00</h4><li style="margin-left: 50px;list-style: none;"> <i class="fa fa-book" style="margin-right: 25px; font-size:25px ; color: orange;"></i>First period <br>
                     <h4 style="margin-top:10px;margin-left: 20px;"> <span style="margin-left:0px;"><?php echo $_SESSION['f1']?></span></h4></li>
                </div> </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 10px;">
                    <h4>10:00 - 10:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Second period 
                   <h4 style="margin-top:10px;margin-left: 0px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></span></h4></li>
                </div>
                  </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>11:00 - 11:50</h4><li style="margin-left: 60px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Third period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f1']?></span></h4></li>
                </div>
                </td>
                </tr>
          
             <tr>
               <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>14:00 - 14:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fifth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f5']?></span></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>15:00 - 15:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> sixth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f4']?></span></li>
                </div>
                </td>
                </tr>
                </table>
             </ul>
</div>

<div class="mySlides fade" id="card">
  <h1>Wednesday</h1>
                                   <ul>
               <table style="width: 100%; margin-top: 15px;">
                  <tr>
                     <td>
                <div class="one" style="display: flex; box-sizing: border-box;" id="bg">
                   <h4>09:10 - 10:00</h4><li style="margin-left: 50px;list-style: none;"> <i class="fa fa-book" style="margin-right: 25px; font-size:25px ; color: orange;"></i>First period <br>
                     <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f4']?></span></li>
                </div> </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 10px;">
                    <h4>10:00 - 10:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Second period 
                   <h4 style="margin-top:10px;margin-left: 0px;"><span style="margin-left:0px;"><?php echo $_SESSION['f1']?></span></h4></li>
                </div>
                  </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>11:00 - 11:50</h4><li style="margin-left: 60px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Third period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></span></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>12:00 - 12:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fourth period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f2']?></span></h4></li>
                </div>
                </td>
                </tr>
             <tr>
               <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>14:00 - 14:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fifth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f5']?></span></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>15:00 - 15:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> sixth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></span></h4></li>
                </div>
                </td>
                </tr>
                </table>
             </ul>
</div>
<div class="mySlides fade" id="card">
  <h1>Thursday</h1>
                                  <ul>
              <table style="width: 100%; margin-top: 15px;">
                  <tr>
                     <td>
                <div class="one" style="display: flex; box-sizing: border-box;" id="bg">
                   <h4>09:10 - 10:00</h4><li style="margin-left: 50px;list-style: none;"> <i class="fa fa-book" style="margin-right: 25px; font-size:25px ; color: orange;"></i>First period <br>
                     <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f1']?></span></h4></li>
                </div> </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 10px;">
                    <h4>10:00 - 10:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Second period 
                   <h4 style="margin-top:10px;margin-left: 0px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></span></h4></li>
                </div>
                  </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>11:00 - 11:50</h4><li style="margin-left: 60px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Third period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f2']?></span></h4></li>
                </div>
                </td>
                </tr>
             <tr>
               <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>14:00 - 14:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fifth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f5']?></span></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>15:00 - 15:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> sixth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f4']?></span></h4></li>
                </div>
                </td>
                </tr>
                </table>
             </ul>
   </div>


   <div class="mySlides fade" id="card">
  <h1>Friday</h1>
                                  <ul>
               <table style="width: 100%; margin-top: 15px;">
                  <tr>
                     <td>
                <div class="one" style="display: flex; box-sizing: border-box;" id="bg">
                   <h4>09:10 - 10:00</h4><li style="margin-left: 50px;list-style: none;"> <i class="fa fa-book" style="margin-right: 25px; font-size:25px ; color: orange;"></i>First period <br>
                     <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f5']?></span></h4></li>
                </div> </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;" id="bg">
                   <h4>11:00 - 11:50</h4><li style="margin-left: 60px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Third period 
                   <h4 style="margin-top:10px;margin-left: 14px;"><span style="margin-left:0px;"><?php echo $_SESSION['f3']?></span></h4></li>
                </div>
                </td>
                </tr>
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>12:00 - 12:50</h4><li style="margin-left: 50px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> Fourth period 
                   <h4 style="margin-top:10px;margin-left: 14px;"> <span style="margin-left:0px;"><?php echo $_SESSION['f2']?></span></h4></li>
                </div>
                </td>
                </tr>
           
            
                <tr>
                  <td>
                <div class="one" style="display: flex; margin-top: 0px;">
                   <h4>15:00 - 15:50</h4><li style="margin-left: 45px;list-style: none;"><i class="fa fa-book" aria-hidden="true" style="color: orange; font-size: 25px; margin-right: 25px;"></i> sixth period 
                   <h4 style="margin-top:10px;margin-left: 20px;"><span style="margin-left:0px;"><?php echo $_SESSION['f4']?></span></h4></li>
                </div>
                </td>
                </tr>
                </table>
             </ul>
   </div>





</div>
<br>
</li>
<li>
  <div class="articles">
      <h2>Latest Articles</h2>
      
    </div>

    <div class="article_links">
     <ul style="list-style:none;margin: 25px;padding: 10px;">
       <a href="https://www.frontiersin.org/articles/10.3389/feduc.2019.00113/full"><li>Innovative Pedagogies of the Future: An Evidence-Based Selection</li></a>
        <a href="https://www.springer.com/journal/10755"><li>Innovative Higher Education</li></a>
         <a href="https://www.newscientist.com/article/2298314-new-plastic-made-from-dna-is-biodegradable-and-easy-to-recycle/#ixzz7D0q3e7QU"><li>New plastic made from DNA is biodegradable and easy to recycle</li></a>
          <a href="https://www.newscientist.com/article/2298161-robots-can-use-their-own-whirring-to-echolocate-and-avoid-collisions/#ixzz7D0qM9lfv"><li>Robots can use their own whirring to echolocate and avoid collisions</li></a>
           <a href="https://scitechdaily.com/electrically-switchable-nanoantennas-developed-for-holographic-video-technology/"><li>Electrically Switchable Nanoantennas Developed for Holographic Video Technology</li></a>
     </ul>
      </div>
    <div class="library">
      <h4><a href="#">click here</a> to access library</h4>
     <button class="glow-on-hover" type="button">Click Here</button>
      
    </div>
</li>
</div>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
   


  </section>

  <script src="script.js"></script>
<script src="popup.js"></script>

</body>
</html>

<?php
session_start();
include_once '../Database/database.php';
include_once '../Classes/class_student.php';

$student_object = new class_student;
$check_student = $student_object->check_student($_SESSION['type']);
if(!$check_student)
{
    header("Location: index.php");
}

$id = $_SESSION['id'];
$db = new database();
$data = $db->get_row("SELECT room_num FROM room INNER JOIN student ON student.room_id = room.id WHERE student.users_id =\"$id\"");
$_SESSION['room_num']=$data['room_num'];
$student_room = $_SESSION['room_num'];

echo $room_num;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>show_announcements</title>

      <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

   
  </head>

  <body>
 
       <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">U<span class="lite">City</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                   
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="profile1.png">
                            </span>
                            <?php
                            $name = $_SESSION['name'];
                            $name = ucwords($name);
                            ?>
                            <span class="username"><?php echo $name; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
     
  </section>
 
      <!--header start-->
      
           
     
      <!--header end-->

      <!--sidebar start-->
      <aside>
                <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="old_student_request.php">Old Student Request</a></li>                          
                          
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="" href="downloadpdf.php">
                          <i class="icon_desktop"></i>
                          <span>Check Acceptance</span>
                          
                      </a>
                      
                  </li>
                  <li>
                      <a class="" href="show_attendance.php">
                          <i class="icon_genius"></i>
                          <span>See Attendance</span>
                      </a>
                  </li>
                  
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>See penalties</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Student Penalties</a></li>
                          <li><a class="" href="basic_table.html">Room Penalties</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu ">
                      <a href="javascript:;" class="" href="show_announcements.php">
                          <i class="icon_documents_alt"></i>
                          <span>See Announcements</span>
                          
                      </a>
                    
                  </li>
                  <li>                     
                      <a class="" href="payment.php">
                          <i class="icon_piechart"></i>
                          <span>payment</span>
                          
                      </a>
                                         
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
     
      </aside>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                                                <li><i class="fa fa-hme"></i><a href="student_home.php">Student</a></li>
                                                <li><i class="fa fa-bars"></i><a href="show_penalties1.php">Show penalties</a></li>
						<li><i class="fa fa-square-o"></i>show student penalties</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <?php
              $db_object = new database();
              $student_object = new class_student;
              $data = $student_object->show_room_penalties($student_room);
              /*echo '<pre>';
              print_r($data);
              echo '<pre>';*/
              foreach ($data as $row)
              {
                  //echo ;
                  echo '<textarea style="margin-right :50px; width: 500px; height: 300px;float: left;font-size: 26px;border:2px solid;border-radius: 10px; font-family: monospace;" disabled="disabled">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['date']."\n".$row['content'].'</textarea>';
              }
              if(!$data)
              {
                echo '<textarea style="margin-right :50px; width: 500px; height: 300px;float: left;font-size: 26px;border:2px solid;border-radius: 10px; font-family: monospace;" disabled="disabled">NO PENALTIES ARE FOUND</textarea>';
              }
              
              ?>
              
              
             
              <!-- page end-->
              
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
              
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>

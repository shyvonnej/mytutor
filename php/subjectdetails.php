<?php
session_start();
    
    if (!isset($_SESSION['sessionid'])) {
        echo "<script>alert('Session not available. Please login');</script>";
        echo "<script> window.location.replace('../index.php')</script>";
    } else {
        $email = $_SESSION['email'];
    }

    include_once("dbconnect.php");

    if(isset($_GET['subid'])) {
        $subid = $_GET['subid'];
        $sqlsubject = "SELECT sub.*, tt.tutor_id, tt.tutor_name FROM tbl_subjects sub, tbl_tutors tt WHERE subject_id = '$subid' AND sub.tutor_id = tt.tutor_id";
        $stmt_subject = $conn -> prepare($sqlsubject);
        $stmt_subject -> execute();
        $number_of_result = $stmt_subject -> rowCount();

        if($number_of_result > 0) {
            $result = $stmt_subject -> setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt_subject -> fetchAll();
        } else {
            echo "<script>alert('Subject Not Found');</script>";
            echo "<script>window.location.replace('courses.php');</script>";
        }
    } else {
        echo "<script>alert('Page Error');</script>";
        echo "<script>window.location.replace('../index.php');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Detail</title>
    <script src="../js/menu.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Karma", serif
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    background-color: #D5D6EA;
    }
    div {
    background-color: #FFFFF0;
    }
</style>
<body>
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-bar w3-white">
        <a href="" class="w3-bar-item w3-button w3-hide-small w3-right">Profile</a>
        <a href="" class="w3-bar-item w3-button w3-hide-small w3-right">Subscription</a>
        <a href="../php/tutors.php" class="w3-bar-item w3-button w3-hide-small w3-right">Tutors</a>
        <a href="../php/index.php" class="w3-bar-item w3-button w3-hide-small w3-right">Courses</a>
        <a href="javascript:void(0)" onClick="sideMenu()"
          class="w3-bar-item w3-button w3-hide-large w3-hide-medium">&#9776</a>
          <a href="index.php" class="w3-bar-item w3-button"><b>MYTutor</b></a>
      </div>

      <div id="idsidebar" class="w3-bar-block w3-white w3-hide-medium w3-hide-large w3-hide">
        <a href="../php/index.php" class="w3-bar-item w3-button">Courses</a>
        <a href="../php/tutors.php" class="w3-bar-item w3-button">Tutors</a>
        <a href="" class="w3-bar-item w3-button">Subscription</a>
        <a href="" class="w3-bar-item w3-button">Profile</a>
      </div>
    </div>
  </div>

        <div class="w3-container w3-margin-top w3-padding-32 w3-center" style="margin:auto; padding-left: 64px; padding-right: 64px; word-wrap: keep-all">
            <h2><b>About Course</b></h2>
            <?php
            foreach ($rows as $subject) {
                $subid = $subject['subject_id'];
                $subname = $subject['subject_name'];
                $subdesc = $subject['subject_description'];
                $subprice = number_format((float)$subject['subject_price'], 2, '.', '');
                $subtutor = $subject['tutor_name'];
                $subsessions = $subject['subject_sessions'];
                $subrating = $subject['subject_rating'];

                echo 
                "<div class='w3-container w3-padding'>
                    <img class='w3-card w3-image' src=../assets/courses/$subid.png" . " onerror=this.onerror=null;this.src='../img/user_profile.png' style='border-radius: 15px; height: 250px; display: block; margin: auto' />
                    <br />
                </div>
                <div class='w3-container w3-padding w3-center' style=:margine:auto;>
                    <div>
                        <h4><b>$subname</b></h4>
                    </div><hr />
                    <table style='width:100%' class='w3-table w3-striped w3-card'>
                        <tr>
                            <th class='w3-indigo'>Description</th>
                            <td style='width:60%'>$subdesc</td>
                        </tr>
                        <tr>
                            <th class='w3-indigo'>Price</th>
                            <td style='width:60%'>RM$subprice</td>
                        </tr>
                        <tr>
                            <th class='w3-indigo'>Tutor</th>
                            <td style='width:60%'>$subtutor</td>
                        </tr>
                        <tr>
                            <th class='w3-indigo'>Sessions</th>
                            <td style='width:60%'>$subsessions</td>
                        </tr>
                        <tr>
                            <th class='w3-indigo'>Rating</th>
                            <td style='width:60%'>$subrating / 5</td>
                        </tr>
                    </table>
                    <div>
                        <br /><input type='hidden' name='subid' />
                        <br /><input class='w3-button w3-margin-top w3-indigo w3-round w3-center' type='submit' name='submit' value='Enroll Course' />
                    </div>
                </div>";
            }
        ?>
        </div>
    </div>

  <!--footer-->
  <footer id="footer" ; class="w3-container w3-light-gray w3-center w3-margin-top">
      <p>Find me on social media.</p>
      <a href="https://web.facebook.com/shyvonnejinshii/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/shylx__/?hl=en"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://pin.it/7v3QqJ6"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
      <a href="https://twitter.com/ShyvonneH"><i class="fa fa-twitter w3-hover-opacity"></i></a>
      <a href="https://www.linkedin.com/in/shyvonne-jinshi-016090189/"><i
          class="fa fa-linkedin w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/channel/UC7hYxt1VSU6ptQ94-wH-y_g/about"><i
          class="fa fa-youtube w3-hover-opacity"></i></a>
      <p>Design and Edited by</p>
      <p><b>Shyvonne Ho Yue Lynn 279733.</b></p>
    </footer>

    <script>
        function sideMenu() {
            var x = document.getElementById("idsidebar");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
    </body>
</html>
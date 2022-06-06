<?php
include_once("dbconnect.php");
session_start();
if (!isset($_SESSION['sessionid'])) {
  $user_email = $_SESSION['user_email'];
  $user_name = $_SESSION['user_name'];
  $user_phone = $_SESSION['user_phone'];
  echo "<script>alert('Session not available. Please login');</script>";
  echo "<script> window.location.replace('login.php')</script>";
}

$results_per_page = 10;
if (isset($_GET['pageno'])) {
  $pageno = (int)$_GET['pageno'];
  $page_first_result = ($pageno - 1) * $results_per_page;
} else {
  $pageno = 1;
  $page_first_result = 0;
}

include_once("dbconnect.php");
  $sqlsubject = "SELECT * FROM tbl_subjects";
  $stmt = $conn->prepare($sqlsubject);
  $stmt->execute();
  $number_of_result = $stmt->rowCount();
  $number_of_page = ceil($number_of_result / $results_per_page);
  $sqlsubject = $sqlsubject . " LIMIT $page_first_result , $results_per_page";
  $stmt = $conn->prepare($sqlsubject);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $rows = $stmt->fetchAll();
  $conn= null;

  function truncate($string, $length, $dots = "...") {
    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <!-- Header -->
  <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
    <img class="w3-image" src="../res/pics/courses.jpg" alt="Homepage" style="width:1400px; height:300px; object-fit: cover; filter: brightness(50%);">
    <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
      <h1 class="w3-xxlarge w3-text-white"><span class=" w3-text-light-grey"><b>Courses that Offered by MY Tutor</b></span></h1>
      </h1>
    </div>
  </header>

  </div>
    <div class="w3-grid-template w3-margin-right w3-margin-left">
      <?php
        $i = 0;
        foreach ($rows as $subjects) {
        $i++;
        $subid = $subjects['subject_id'];
        $subname = truncate($subjects['subject_name'],60);
        $subprice = number_format((float)$subjects['subject_price'], 2, '.', '');
        $subsessions = $subjects['subject_sessions'];
        $subrate = $subjects['subject_rating'];
        echo "<div class='w3-card-4 w3-round' style='margin: 10px'><header class='w3-container w3-black'><b>$subname</b>
        </header><p><img class='w3-image' src=../assets/courses/$subid.png" .
            " onerror=this.onerror=null;this.src='../res/images/users/profile.png' style='height: 150px; display: block; margin: auto'></p>
            <hr/>
            <p class='w3-container w3-center'>Price: RM$subprice<br />Session: $subsessions<br />Ratings: $subrate</p>
        </div>";
    }

    echo "</table>";
?>}
    </div>
    <br>

    <?php
    $num = 1;
    if ($pageno == 1) {
        $num = 1;
    } else if ($pageno == 2) {
        $num = ($num) + 10;
    } else {
        $num = $pageno * 10 - 9;
    }
    echo "<div class='w3-container w3-row'>";
    echo "<center>";
    for ($page = 1; $page <= $number_of_page; $page++) {
        echo '<a href = "index.php?pageno=' . $page . '" style=
            "text-decoration: none">&nbsp&nbsp' . $page . ' </a>';
    }
    echo " ( " . $pageno . " )";
    echo "</center>";
    echo "</div>";
    ?>
    <br>

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

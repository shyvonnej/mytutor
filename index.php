<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="../js/menu.js" defer></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Karma", serif
    }

    .w3-bar-block .w3-bar-item {
      padding: 20px
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
      flex: 25%;
      max-width: 25%;
      padding: 0 4px;
    }

    .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
      .column {
        flex: 50%;
        max-width: 50%;
      }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        flex: 100%;
        max-width: 100%;
      }
    }

    img {
      width: 200px;
      height: 300px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="index.php" class="w3-bar-item w3-button"><b>MYTutor</b></a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="php/login.php" class="w3-bar-item w3-button">Log In</a>
        <a href="php/signup.php" class="w3-bar-item w3-button">Sign Up</a>
      </div>
    </div>
  </div>
  <!-- Header -->
  <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
    <img class="w3-image" src="res/pics/edu1.jpg" alt="Homepage" style="width:1400px; height:600px;">
    <style>
      img {
        filter: brightness(60%);
      }
    </style>
    <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
      <h1 class="w3-xxlarge w3-text-white"><span class=" w3-text-light-grey"><b>Welcome to MyTutor.</b></span></h1>
      <h1 class="w3-xlarge w3-text-white"><span class=" w3-text-light-grey">A place where we build more experts.</span>
      </h1>
    </div>
  </header>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content w3-padding w3-center" style="max-width:1500px;margin-top:30px">
    <h2><b>WHY CHOOSE US?</b></h2>

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="edu">
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1518133910546-b6c2fb7d79e3?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435"
          alt="Ages" style="width:310px;height:400px;">
        <h3>Suitable for all Ages</h3>
        <p>We have tutors from Kindergarden, Primary, Secondary and Tertiary Schools.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871"
          alt="language" style="width:310px;height:400px;">
        <h3>Multi-lingual Tutors</h3>
        <p>Our tutors are mostly multi-lingual, students are able to communicate with them easily.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
          alt="Cherries" style="width:310px;height:400px;">
        <h3>Flexibility Booking</h3>
        <p>Able to make booking according to your availability schedule.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1595311182166-d63273ddc386?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386"
          alt="Pasta and Wine" style="width:310px;height:400px;">
        <h3>Homework and Exam Preparations</h3>
        <p>All of our tutors are willing to help on homeworks and preparations for exam.</p>
      </div>
    </div>

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
</body>

</html>
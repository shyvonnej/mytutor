<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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

    img {
        width: 200px;
        height: 300px;
        object-fit: cover;
    }
</style>

<body onload="loadCookies()">

    <body>
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <a href="index.php" class="w3-bar-item w3-button"><b>MYTutor</b></a>
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    <a href="login.php" class="w3-bar-item w3-button">Log In</a>
                    <a href="signup.php" class="w3-bar-item w3-button">Sign Up</a>
                </div>
            </div>
        </div>
        <!-- Header -->
        <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
            <img class="w3-image" src="../res/pics/login.jpg" alt="Homepage" style="width:1400px; height:200px;">
            <style>
                img {
                    filter: brightness(60%);
                }
            </style>
            <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
                <h1 class="w3-xxxlarge w3-text-white"><span class=" w3-text-light-grey"><b>LOGIN</b></span></h1>
            </div>
        </header>
        <div style="display:flex; justify-content: center">
            <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
                <form name="loginForm" action="login.php" method="post">
                    <p>
                        <label><b>Email</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail"
                            placeholder="Your email" required>
                    </p>
                    <p>
                        <label><b>Password</b></label>
                        <input class="w3-input w3-round w3-border" type="password" name="password" id="idpass"
                            placeholder="Your password" required>
                    </p>
                    <p>
                        <input class="w3-check" name="rememberme" type="checkbox" id="idremember"
                            onclick="rememberMe()">
                        <label> Remember Me</label>
                    </p>
                    <p style="font-size:16px;"> Don't have an account? <a href="signup.html">Sign Up</a></p>
                    <p>
                        <input class="w3-button w3-round w3-border w3-dark-gray" type="submit" name="submit"
                            id="idsumit">
                    </p>
                </form>
            </div>
        </div>
        <div id="cookieNotice" class="w3-right w3-block" style="display: none;">
            <div class="w3-red">
                <h4>Cookie Consent</h4>
                <p>This website uses cookies or similar technologies, to enhance your
                    browsing experience and provide personalized recommendations.
                    By continuing to use our website, you agree to our
                </p>
                <div class="w3-button">
                    <button onclick="acceptCookieConsent();">Accept</button>
                </div>
            </div>
        </div>
        <footer id="footer" ; class="w3-container w3-light-gray w3-center w3-margin-top">
            <p>Find me on social media.</p>
            <a href="https://web.facebook.com/shyvonnejinshii/"><i
                    class="fa fa-facebook-official w3-hover-opacity"></i></a>
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
    <script>
        let cookie_consent = getCookie("user_cookie_consent");
        if (cookie_consent != "") {
            document.getElementById("cookieNotice").style.display = "none";
        } else {
            document.getElementById("cookieNotice").style.display = "block";
        }
    </script>

</html>
<?php
session_start();
if(!isset($_SESSION['userID'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Corner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="homeStyle.css">
</head>
<body>

    <div class="wrapper">
        <div class="logo">
            <div class="container">
                <p>Movie<span>Corner</span></p>
            </div>
        </div>

        <div id="mySidenav" class="sidenav">
            <a href="home.php" id="sidenav1">Home</a>
            <a href="playlist.php" id="sidenav2">Playlist</a>
            <a href="contact.php" id="sidenav3">Contact us</a>
            <a action="logout.php" id="sidenav4" value="Logout">Logout</a>
        </div>


        <div class="container">
            <form action="">
                <h1>Contact Info</h1><br><br><br><br>
                <div class="social-icon">
                    <a href="https://twitter.com/imAshish_Saini" target="_blank"><i class="fa fa-twitter-square"
                                                                                    style="font-size:48px;color:#0099ff"></i></a>
                    <a href="https://wa.me/+917419055866" target="_blank"><i class="fa fa-whatsapp"
                                                                             style="font-size:48px; margin-left:20px; color:#2eb82e"></i></a>
                    <a href="https://www.facebook.com/imAshishSaini5" target="_blank"><i class="fa fa-facebook-square"
                                                                                         style="font-size:48px; margin-left:20px; color:#0066ff"></i></a>
                    <a href="https://www.instagram.com/imashish.saini/" target="_blank"><i class="fa fa-instagram"
                                                                                           style="font-size:48px; margin-left:20px; color:#ff0000"></i></a>
                </div>
                <br><br><br>
                <p style="font-size: 24px; text-align: center;"><b>&#169; All Rights Reserved</b></p>
                <p style="text-align: center;"><b>Contact &#64;admin: Ashish</b></p>
            </form>
        </div>
    </div>

</body>
</html>
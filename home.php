<?php
session_start();
if(!isset($_SESSION['userID'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Corner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "homeStyle.css">
</head>
<body>

    <div class = "wrapper">
        <div class = "logo">
            <div class = "container">
                <p>Movie<span>Corner</span></p>
            </div>
        </div>

        <div id="mySidenav" class="sidenav">
            <a href="home.php" id="sidenav1">Home</a>
            <a href="playlist.php" id="sidenav2">Playlist</a>
            <a href="contact.php" id="sidenav3">Contact us</a>
            <a href="logout.php" id="sidenav4" value="Logout">Logout</a>
        </div>

        <div class = "search-container">
            <div class = "search-element">
                <input type = "text" class = "form-control" placeholder="Search Movie" id = "movie-search-box" onkeyup="findMovies()" onclick = "findMovies()">
                <div class = "search-list" id = "search-list">

                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "result-container">
                <div class = "result-grid" id = "result-grid">

                </div>
            </div>
        </div>
    </div>

    <script src = "script.js"></script>
</body>
</html>
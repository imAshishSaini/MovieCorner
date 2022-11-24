<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns:th="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Movie Corner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  include 'connection.php';
  if(isset($_POST['Login'])){
    $id = $_POST['id'];
    $password = $_POST['password'];

    $id_search = "SELECT * FROM user WHERE id=$id";
    $query = mysqli_query($conn,$id_search);
    $id_count = mysqli_num_rows($query);
    if($id_count){
      $id_pass = mysqli_fetch_array($query);
      $pass = $id_pass['password'];
      $_SESSION['userID'] = $id_pass['id'];
      if($password == $pass){
        header('Location: home.php' . $_GET['redirect']);
      }else{
        ?>
        <script>
          alert('Invalid password');
        </script>
        <?php
      }
    }else{
      ?>
      <script>
        alert('Invalid User id');
      </script>
      <?php
    }

  }
  ?>
  <?php

    if (isset($_POST['register'])) {
      $name = $_POST['name'];
      $email = $_POST['emailId'];
      $password = $_POST['password'];

      $Select = "SELECT emailId FROM user WHERE emailId = ? LIMIT 1";
      $Insert = "INSERT INTO user(name, emailId, password) values(?, ?, ?)";

      $stmt = $conn->prepare($Select);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($resultEmail);
      $stmt->store_result();
      $stmt->fetch();
      $rnum = $stmt->num_rows;

      if ($rnum == 0) {
        $stmt->close();
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("sss",$name, $email, $password);
        if ($stmt->execute()) {
          ?>
          <script>
            alert('Registered Successfully');
          </script>
          <?php
        }
        else {
          ?>
          <script>
            alert('Error');
          </script>
          <?php
        }
      }
      else {
        ?>
        <script>
          alert('Email already exist.');
        </script>
        <?php 
      }
      $stmt->close();
      $conn->close();
    }
    else {
    }
    ?>

    <div class="container">
        <div class="logo">
            <div class="site-name">
                <p>Movie<span>Corner</span></p>
            </div>
        </div>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="image/google.png">
                <img src="image/fb.png">
                <img src="image/tw.png">
            </div>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" id="Login" method="POST" class="input-group">
                <input type="text" class="input-field" name="id" placeholder="User id" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>

                <input type="checkbox" class="check-box" required><span>Remember Password</span>
                <input type="submit" class="submit-btn" value="Login" name="Login">
            </form>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" id="register" method="POST" class="input-group">
                <input type="text" class="input-field" placeholder="Name" name="name" required>
                <input type="email" class="input-field" placeholder="Email Id" name="emailId" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>

                <input type="checkbox" class="check-box" required><span>I agree to the terms & conditions</span>
                <input type="submit" class="submit-btn" value="register" name="register">
            </form>
        </div>
    </div>

    <script>
        var x=document.getElementById("Login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register() {
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login() {
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>


</body>
</html>
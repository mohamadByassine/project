<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <title>PickMeUp</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class = "container">

    <div class = "forms">

      <!-- Driver Login -->

      <div class = "form logindriver">
        <span class = "title">Log In as a Driver</span>

        <form id = "driverlogin">
          <div class = "input-field">
            <input id = "driveremail" type = "text" placeholder = "E-Mail Address" required></input>
            <i class = "uil uil-envelope icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverpassword" type = "password" class = "password" placeholder = "Password" required></input>
            <i class = "uil uil-padlock icon"></i>
            <i class = "uil uil-eye-slash showHidePw"></i>
            <div class = "error"></div>
          </div>
          <div class = "loginbutton">
            <button type = "submit" class = "login-btn">Log In</button>
          </div>
        </form>

        <div class = "login-signup">
          <span class = "text">Don't have an account?
            <a href = "#" class = "tosignup"> Signup now! </a>
          </span>
        </div>

      </div>

      <!-- Sign Up as Driver -->

      <div class = "form signupdriver">
        <span class = "title">Sign Up as a Driver</span>

        <form id = "driversignup">
          <div class = "input-field">
            <input id = "driveremail2" type = "text" placeholder = "E-Mail Address" required></input>
            <i class = "uil uil-envelope icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverfirstname" type = "text" placeholder = "First Name" required></input>
            <i class = "uil uil-user icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverlastname" type = "text" placeholder = "Last Name" required></input>
            <i class = "uil uil-user icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "licensenumber" type = "text" placeholder = "License Number" pattern = "[A-Z]{1}[0-9]{5}" required></input>
            <i class = "uil uil-car icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverphonenumber" type = "tel" placeholder = "Phone Number (+961)" pattern = "[0-9]{2}[0-9]{3}[0-9]{3}" required></input>
            <i class = "uil uil-phone icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverpassword2" type = "password" class = "password" placeholder = "Password" required></input>
            <i class = "uil uil-padlock icon"></i>
            <i class = "uil uil-eye-slash showHidePw"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "driverpassword2" type = "password" class = "password" placeholder = "Re-enter Password" required></input>
            <i class = "uil uil-padlock icon"></i>
            <i class = "uil uil-eye-slash showHidePw"></i>
            <div class = "error"></div>
          </div>
          <div class = "loginbutton">
            <button onclick = "signup_driver()" type = "submit" class = "loginsignup-btn">Sign Up</button>
          </div>
        </form>

        <div class = "login-signup">
          <span class = "text">Already have an account?
            <a href = "#" class = "tologin"> Login now! </a>
          </span>
        </div>

      </div>

    </div>

  </div>

</body>

<?php include 'include/config.php'; ?>

<?php include 'include/AddingDriver.php'; ?>

<?php include 'include/animation.php'; ?>

</html>

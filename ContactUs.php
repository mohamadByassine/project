<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <title>PickMeUp</title>
  <link rel = "stylesheet" href = "css/contactus.css">
</head>

<body>

  <div class = "container">

    <div class = "forms">

      <div class = "contactform">
        <span class = "title">GET IN TOUCH!</span>

        <form id = "contactusform" class = "form">
          <div class = "input-field">
            <input id = "userstars" type = "text" class = "subject" placeholder = "Rate your experience from 1 to 5" pattern = "[1-5]{1}" optional></input>
            <i class = "uil uil-star icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "useremail" type = "text" placeholder = "E-Mail Address" class = "useremail" required></input>
            <i class = "uil uil-envelope icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "username" type = "text" class = "username" placeholder = "Name" required></input>
            <i class = "uil uil-user icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "usersubject" type = "text" class = "subject" placeholder = "Subject" required></input>
            <i class = "uil uil-bullseye icon"></i>
            <div class = "error"></div>
          </div>
          <div id = "inputfieldd" class = "input-field">
            <input id = "usertext" type = "text" class = "usertext" placeholder = "Message" required></input>
            <i class = "uil uil-pen icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "sendbutton">
            <button id = "sendit" type = "submit" class = "sendbtn">SEND</button>
          </div>
        </form>

      </div>

    </div>

  </div>

</body>

<?php include 'include/config.php'; ?>

<?php include 'include/contact.php'; ?>

</html>

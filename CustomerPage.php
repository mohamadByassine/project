<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <title>PickMeUp</title>
  <link rel="stylesheet" href="css/customerpage_style.css">

</head>

<body>

  <!-- Navigation Bar -->

  <section class = "navsection">
    <nav>
      <div class = "logo">
        <h4>PickMeUp</h4>
      </div>
      <ul class = "navbarlinks">
        <li>
          <a href = "#abt">About</a>
        </li>
        <li>
          <a href = "ContactUs.php">Contact Us</a>
        </li>
        <li>
          <a href = "#ridesct">Ride</a>
        </li>
        <li>
          <a href = "#deliverysct">Order</a>
        </li>
        <li>
          <i class = "uil uil-user icon"></i>
          <span class = "customername" data-username>Name</span>
        </li>
        <li>
          <button id = "customersignout" type = "submit" class = "signout-btn" data-logout>SIGN OUT</button>
        </li>
      </ul>
    </nav>
  </section>

  <!-- Ride -->

  <section class = "ridesection" id = "ridesct">

        <div class = "map">
          <iframe width="800px" height="578px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=beirut%20aab%20univrsity+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.maps.ie/draw-radius-circle-map/"></a>
        </div>
        <div class = "booking">
          <span class = "title">RIDE</span>

          <form id= "bookingform" class = "bookingform">
            <div class = "inputfield">
              <input id = "loclong" type = "text" class = "loclong" placeholder = "Location Longitude" required></input>
              <i class = "uil uil-map-pin icon"></i>
            </div>
            <div class = "inputfield">
              <input id = "loclat" type = "text" class = "loclat" placeholder = "Location Latitude" required></input>
              <i class = "uil uil-map-pin icon"></i>
            </div>
            <div class = "inputfield">
              <input id = "deslong" type = "text" class = "deslong" placeholder = "Destination Longitude" required></input>
              <i class = "uil uil-map-marker icon"></i>
            </div>
            <div class = "inputfield">
              <input id = "deslat" type = "text" class = "deslat" placeholder = "Destination Latitude" required></input>
              <i class = "uil uil-map-marker icon"></i>
            </div>
            <div class = "inputfield">
              <input id = "nbseats" type = "text" class = "nbofseats" placeholder = "Numbers of Seats (1 to 4)" pattern = "[1-4]{1}" required></input>
              <i class = "uil uil-map-marker icon"></i>
            </div>
            <div class = "bookbutton">
              <button id = "ridenow" class = "bookbtn">BOOK</button>
              <button id = "cancelride" class = "cancelbtn">CANCEL</button>
            </div>

          </form>

        </div>

  </section>

  <!-- Delivery -->

  <section class = "deliverysection" id = "deliverysct">

      <div class = "map">
          <iframe width="800px" height="578px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=beirut%20aab%20univrsity+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.maps.ie/draw-radius-circle-map/"></a>
        </div>
        <div class = "delivery">
          <span class = "title">DELIVERY</span>

          <form id = "orderingform" class = "deliveryform">
            <div class = "inputfield">
              <input id = "loclong2" type = "text" class = "deliverylong" placeholder = "Location Longitude" required></input>
              <i class = "uil uil-map-pin icon"></i>
            </div>
            <div class = "inputfield">
              <input id = "loclat2" type = "text" class = "deliverylat" placeholder = "Location Latitude" required></input>
              <i class = "uil uil-map-pin icon"></i>
            </div>
            <div class = "descriptionfield">
              <textarea id = "describe" class = "description" placeholder = "Description" required></textarea>
              <i class = "uil uil-pen icon"></i>
            </div>
            <div class = "deliverybutton">
              <button id = "ordernow" type = "submit" class = "orderbtn">ORDER</button>
              <button id = "cancelorder" type = "submit" class = "cancel-btn">CANCEL</button>
            </div>
          </form>
        </div>

  </section>

  <!-- About -->

  <section class = "aboutsection" id = "abt">
    <div class = "aboutcontainer">
      <span class = "title">ABOUT</span>
      <p class = "para">
        PickMeUp is a car pooling and delivery service which helps you to move inside Lebanon in a reliable and cheap way!
      </p>
    </div>
  </section>

  <!-- Footer -->

  <section class = "footer" id = "footer">
    <div class = "footercontainer">
      <p>Copyright © PickMeUp. All rights reserved.</p>
    </div>
  </section>

</body>

<?php include 'include/config.php'; ?>

<!-- Display Customer's Full Name -->

<script type="text/javascript">

var database = firebase.database();
var db = firebase.firestore();
var storageRef = firebase.storage().ref();

/* Display User's FullName */

var firstName = JSON.parse(localStorage.getItem('dataUser'))["first_name"];
var secondName = JSON.parse(localStorage.getItem('dataUser'))["last_name"];
var fullName = firstName + ' ' + secondName;
if (localStorage.getItem('dataUser') != null) {
document.querySelector("[data-username]").innerText = fullName
}

document.querySelector("[data-logout]").addEventListener("click",
function() {
  localStorage.removeItem('dataUser');
  location.href = location.pathname.replace(/[^\/]+(?=\/$|$)/, "");
}

)

</script>

<?php include 'include/ride.php'; ?>

<!-- Include order.php -->

<?php include 'include/order.php'; ?>

</html>

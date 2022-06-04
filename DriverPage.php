<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <title>PickMeUp</title>
  <link rel="stylesheet" href="css/driverpage_style.css">
  <script src="js/script.js" defer></script>

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
          <a href = "#ridesection">Rides</a>
        </li>
        <li>
          <a href = "#ordersection">Orders</a>
        </li>
        <li>
          <i class = "uil uil-user icon"></i>
          <span class = "drivername" data-username>Name</span>
        </li>
        <li>
          <button type = "submit" class = "signout-btn" data-logout>SIGN OUT</button>
        </li>
      </ul>
    </nav>
  </section>

  <!-- Ride -->

  <section class = "ridesection" id = "ridesection">
        <div class = "map">
          <iframe width="800px" height="578px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=beirut%20aab%20univrsity+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.maps.ie/draw-radius-circle-map/"></a>
        </div>
        <div class = "confirm">
          <span class = "title">THERE'S A NEW BOOKING!</span>

          <form = "#" class = "rideconfirm">
            <div class = "displayfield">
              <span class = "currentlocation">Location</span>
              <p id = "ridelocation" class = "locationtext" data-empty>000000</p>
            </div>
            <div class = "displayfield">
              <span class = "currentlocation">Destination</span>
              <p id = "ridedestination" class = "destinationtext" data-empty2>000000</p>
            </div>
            <div class = "displayfield">
              <span class = "destination">Number of Seats</span>
              <p id = "rideseats" class = "seatstext" data-empty3>000000</p>
            </div>
            <div class = "ridebuttons">
              <button id = "confirmridebutton" type = "submit" class = "confirmridebtn" data-rideconfirm>CONFIRM</button>
              <button id = "rejectridebutton" type = "submit" class = "rejectridebtn" data-ridereject>REJECT</button>
            </div>
          </form>

        </div>
  </section>

  <!-- Order -->

  <section class = "ordersection" id = "ordersection">
        <div class = "map">
          <iframe width="800px" height="578px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=beirut%20aab%20univrsity+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://www.maps.ie/draw-radius-circle-map/"></a>
        </div>
        <div class = "oconfirm">
          <span class = "title">THERE'S A NEW ORDER!</span>

          <form = "#" class = "orderconfirm">
            <div class = "displayfield">
              <span class = "currentlocation">Location</span>
              <p id = "orderlocation" class = "orderlocationtext" data-empty4>000000</p>
            </div>
            <div class = "descriptionfield">
              <span class = "customerorder">Customer's Order</span>
              <p id = "orderdesc" class = "customerordertext" data-empty5>000000</p>
            </div>
            <div class = "orderbuttons">
              <button id = "confirmorderbutton" type = "submit" class = "confirmorderbtn" data-confirmorder>CONFIRM</button>
              <button id = "rejectorderbutton" type = "submit" class = "rejectorderbtn" data-rejectorder>REJECT</button>
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

<!-- Display Driver's Full Name -->

<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();

  var firstName = JSON.parse(localStorage.getItem('DriverData'))["first_name"];
  var secondName = JSON.parse(localStorage.getItem('DriverData'))["last_name"];
  var fullName = firstName + ' ' + secondName;
  if (localStorage.getItem('DriverData') != null) {
  document.querySelector("[data-username]").innerText = fullName
  }

  document.querySelector("[data-logout]").addEventListener("click",
  function() {
    localStorage.removeItem('DriverData');
    location.href = location.pathname.replace(/[^\/]+(?=\/$|$)/, "");
  }

  )

</script>

<!-- Reject Ride -->

<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();

  var empty = " ";

  document.querySelector("[data-ridereject]").addEventListener("click", (e) => {

    e.preventDefault();

    document.querySelector("[data-empty]").innerText = empty
    document.querySelector("[data-empty2]").innerText = empty
    document.querySelector("[data-empty3]").innerText = empty

    alert("You rejected this ride!");

  })

</script>

<!-- Reject Order -->

<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();

  var empty = " ";

  document.querySelector("[data-rejectorder]").addEventListener("click", (e) => {

    e.preventDefault();

    document.querySelector("[data-empty4]").innerText = empty
    document.querySelector("[data-empty5]").innerText = empty

    alert("You rejected this order!");

  })

</script>

<!-- Confirm Ride -->

<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();

  var empty = " ";

  document.querySelector("[data-rideconfirm]").addEventListener("click", (e) => {

    e.preventDefault();

    document.querySelector("[data-empty]").innerText = empty
    document.querySelector("[data-empty2]").innerText = empty
    document.querySelector("[data-empty3]").innerText = empty

    alert("You confirmed this ride!");

  })

</script>

<!-- Confirm Order -->

<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();

  var empty = " ";

  document.querySelector("[data-confirmorder]").addEventListener("click", (e) => {

    e.preventDefault();

    document.querySelector("[data-empty4]").innerText = empty
    document.querySelector("[data-empty5]").innerText = empty

    alert("You confirmed this order!");

  })

</script>

<?php include 'include/ride.php'; ?>

</html>

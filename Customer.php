<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <title>PickMeup</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Test -->

  <div class = "container">

    <div class = "forms">

      <!-- Customer Login -->

      <div class = "form logincustomer">
        <span class = "title">Log In as a Customer</span>

        <form = "#" id = "customerlogin">
          <div class = "input-field">
            <input id = "customeremail" type = "text" placeholder = "E-Mail Address" class = "loginemail" required></input>
            <i class = "uil uil-envelope icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "customerpassword" type = "password" class = "password" placeholder = "Password" required></input>
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

      <!-- Sign Up as Customer -->

      <div class = "form signupcustomer">
        <span class = "title">Sign Up as a Customer</span>

        <form = "#" id = "customersignup">
          <div class = "input-field">
            <input id = "customeremail2" type = "text" placeholder = "E-Mail Address" required></input>
            <i class = "uil uil-envelope icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "customerfirstname" type = "text" placeholder = "First Name" required></input>
            <i class = "uil uil-user icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "customerlastname" type = "text" placeholder = "Last Name" required></input>
            <i class = "uil uil-user icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "input-field">
            <input id = "customerpassword2" type = "password" class = "password" placeholder = "Password" required></input>
            <i class = "uil uil-padlock icon"></i>
            <div class = "error"></div>
            <i class = "uil uil-eye-slash showHidePw"></i>
          </div>
          <div class = "input-field">
            <input id = "re-customerpassword2" type = "password" class = "password" placeholder = "Re-enter Password" required></input>
            <i class = "uil uil-padlock icon"></i>
            <div class = "error"></div>
            <i class = "uil uil-eye-slash showHidePw"></i>
          </div>
          <div class = "input-field">
            <input id = "customerphonenumber" type = "tel" placeholder = "Phone Number (+961)" pattern = "[0-9]{2}[0-9]{3}[0-9]{3}" required></input>
            <i class = "uil uil-phone icon"></i>
            <div class = "error"></div>
          </div>
          <div class = "loginbutton">
              <button onclick = "sign_up_customer()" type = "submit" id = "signupbtn" class = "loginsignup-btn">Sign Up</button>
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

<!-- Firebase Configuration -->

<?php include 'include/config.php'; ?>

<!-- Customer Signup -->

<?php include 'include/Addingcustomer.php'; ?>

<!-- ========== Customer Login ========== -->

<script type="text/javascript">
customerlogin.addEventListener('submit', (e) => {

e.preventDefault();

var email = document.getElementById('customeremail').value;
var password = document.getElementById('customerpassword').value;

/* Get User's Data */

db.collection("users")
.where("email", "==", document.getElementById('customeremail').value).get()
  .then((querySnapshot) => {
      //console.log(querySnapshot.docs[0].data())
    localStorage.setItem('dataUser', JSON.stringify( querySnapshot.docs[0].data()) );
  })
  .catch((error) => {
     document.querySelector(".alert-is-there").hidden = !true
  });

firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {

    // Show "Logged In Successfully" and redirect to Customer's home page
    const user = userCredential.user;
    alert('Logged In Successfully!');
    window.location = "CustomerPage.php"

  })

  // Show an error if there is a problem with signing in

  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    alert(errorMessage);
  });

});

</script>

<!-- Overriding Style -->

<style>
  .form .input-field {
    margin-top: 25px;
  }
</style>

<?php include 'include/animation.php'; ?>

</html>

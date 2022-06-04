<script type="text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();
  var auth = firebase.auth();

  db.settings({ timestampsInSnapshots: true });

  //Signup Driver

  driversignup.addEventListener('submit', (e) => {

    e.preventDefault();

    var email = document.getElementById('driveremail2').value;
    var password = document.getElementById('driverpassword2').value;
    var driverfirstname = document.getElementById('driverfirstname').value;
    var driverlastname = document.getElementById('driverlastname').value;
    var licensenumber = document.getElementById('licensenumber').value;
    var driverphonenumber = document.getElementById('driverphonenumber').value;

    firebase.auth().createUserWithEmailAndPassword(email, password).then((userCredential) => {

      const user = userCredential.user;

      alert("Driver Created!");
      window.location = "Driver.php";

    })

    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      alert(errorMessage);

    });

  })

  //Add Driver Informations to Firebase Firestore

  function signup_driver() {

    db.collection("drivers").add({
      email: driveremail2.value,
      first_name: driverfirstname.value,
      last_name: driverlastname.value,
      license_number: licensenumber.value,
      phone_number: driverphonenumber.value
    })
    .then(() => {
        console.log("Document successfully written!");
    })
    .catch((error) => {
        console.error("Error writing document: ", error);
    });

  }

  //Driver login

  driverlogin.addEventListener('submit', (e) => {

    e.preventDefault();

    var email = document.getElementById('driveremail').value;
    var password = document.getElementById('driverpassword').value;

    db.collection("drivers").where("email", "==", document.getElementById('driveremail').value).get().then((querySnapshot) => {
      localStorage.setItem('DriverData', JSON.stringify(querySnapshot.docs[0].data()));
    })

    .catch((error) => {
       document.querySelector(".alert-is-there").hidden = !true
    })

    firebase.auth().signInWithEmailAndPassword(email, password).then((userCredential) => {
      const user = userCredential.user;
      alert("Logged In Successfully!");
      window.location = "DriverPage.php";
    })

    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      alert(errorMessage);
    });

  })

</script>

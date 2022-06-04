<script type="text/javascript">

var database = firebase.database();
var db = firebase.firestore();
var storageRef = firebase.storage().ref();
var auth = firebase.auth();
db.settings({ timestampsInSnapshots: true });

customersignup.addEventListener('submit', (e) => {

e.preventDefault();

var email = document.getElementById('customeremail2').value;
var password = document.getElementById('customerpassword2').value;
var customerfirstname = document.getElementById('customerfirstname').value;
var customerlastname = document.getElementById('customerlastname').value;
var customerphonenumber = document.getElementById('customerphonenumber').value;


firebase.auth().createUserWithEmailAndPassword(email, password)
  .then((userCredential) => {

    // Show "Customer Created" if Signed Up succcessfully
    const user = userCredential.user;


    alert('Customer Created!');
    window.location = "Customer.php";



  })

  // Give an error if there is a probem with Signing Up

  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    alert(errorMessage);

  });

});

function sign_up_customer(){

  db.collection("users").add({
      email: customeremail2.value,
      first_name: customerfirstname.value,
      last_name: customerlastname.value,
      phone_number: customerphonenumber.value
  })
  .then(() => {
      console.log("Document successfully written!");
  })
  .catch((error) => {
      console.error("Error writing document: ", error);
 });

}
</script>

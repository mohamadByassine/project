<script type = "text/javascript">

var database = firebase.database();
var db = firebase.firestore();
var storageRef = firebase.storage().ref();
var auth = firebase.auth();

db.settings({ timestampsInSnapshots: true });

contactusform.addEventListener('submit', (e) => {

  e.preventDefault();

  db.collection("contact-form").add({
    email: useremail.value,
    name: username.value,
    subject: usersubject.value,
    message: usertext.value,
    stars: userstars.value
  })
  .then(() => {
      console.log("Document successfully written!");
      alert("Form sent!");
  })
  .catch((error) => {
      console.error("Error writing document: ", error);
 });

})

</script>

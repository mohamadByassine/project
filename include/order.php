<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();
  var auth = firebase.auth();

  db.settings({ timestampsInSnapshots: true });

  /* Ride Form */

  orderingform.addEventListener('submit', (e) => {

    e.preventDefault();

    db.collection("deliveries").add({
      date_ordered: firebase.firestore.FieldValue.serverTimestamp(),
      location: new firebase.firestore.GeoPoint(loclong2.value, loclat2.value),
      in_progress: "true",
      is_completed: "false",
      description: describe.value,
      rating: 0
    })
    .then(() => {
        console.log("Document successfully written!");
        alert("Thanks for your order!");
    })
    .catch((error) => {
        console.error("Error writing document: ", error);
        alert("Something is wrong!");
    });

    db.collection("deliveries").get().then((querySnapshot) => {
      localStorage.setItem('orderdata', JSON.stringify(querySnapshot.docs[0].data()));
    })

    .catch((error) => {
       document.querySelector(".alert-is-there").hidden = !true
    });

  })

  cancelorder.addEventListener('click', (e) => {
    document.getElementById('orderingform').reset();
    alert("Order Canceled!");
  })

</script>

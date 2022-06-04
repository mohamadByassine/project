<script type = "text/javascript">

  var database = firebase.database();
  var db = firebase.firestore();
  var storageRef = firebase.storage().ref();
  var auth = firebase.auth();

  db.settings({ timestampsInSnapshots: true });

  /* Ride Form */

  bookingform.addEventListener('submit', (e) => {

    e.preventDefault();

    db.collection("rides").add({
      date_ordered: firebase.firestore.FieldValue.serverTimestamp(),
      destination: new firebase.firestore.GeoPoint(deslong.value, deslat.value),
      location: new firebase.firestore.GeoPoint(loclong.value, loclat.value),
      in_progress: "true",
      is_completed: "false",
      number_of_seats: nbseats.value,
      rating: 0
    })
    .then(() => {
        console.log("Document successfully written!");
        alert("Thanks for your booking!");
    })
    .catch((error) => {
        console.error("Error writing document: ", error);
        alert("Something is wrong!");
    });

    db.collection("rides").get().then((querySnapshot) => {
      localStorage.setItem('ridedata', JSON.stringify(querySnapshot.docs[0].data()));
    })

    .catch((error) => {
       document.querySelector(".alert-is-there").hidden = !true
    });

  })

  cancelride.addEventListener('click', (e) => {
    document.getElementById('bookingform').reset();
    alert("Ride Canceled!");
  })

</script>

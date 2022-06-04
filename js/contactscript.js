import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js";
import { getFirestore, addDoc, setDoc, doc, set } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-firestore.js";
import { getDatabase } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-database.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-auth.js";

const firebaseConfig = {
  apiKey: "AIzaSyDovJGM1p6e0HIkbyvWVqAAqxveADKOhTY",
  authDomain: "pick-me-up-efb79.firebaseapp.com",
  databaseURL: "https://pick-me-up-efb79-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "pick-me-up-efb79",
  storageBucket: "pick-me-up-efb79.appspot.com",
  messagingSenderId: "75546060443",
  appId: "1:75546060443:web:11c0fb9b6ace48dff8483e",
  measurementId: "G-9WYV167TC3"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const database = getDatabase(app);
const auth = getAuth();
const db = getFirestore(app);

  let sendButton = document.getElementById('send');

  sendButton.addEeventListener("click", (e) => {

    e.preventDefault()

    var useremail = document.getElementById('uemail').value;
    var username = document.getElementById('uname').value;
    var usersubject = document.getElementById('sub').value;
    var usertext = document.getElementById('txta').value;

    db.doc().set({
      email: useremail,
      message: usertxt,
      name: username,
      subject: usersubject
    }).then( () => {
      console.log("Data saved!")
    }).catch( (error) => {
      console.log("Error")
    })

  })

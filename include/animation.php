<script>
const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signup = document.querySelector(".tosignup"),
      login = document.querySelector(".tologin");

/* ========== Show and Hide Password ========== */

pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach(pwField => {
      if(pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach(icon => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        })
      } else {
        pwField.type = "password";

        pwShowHide.forEach(icon => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        })
      }
    })
  })
})

/* ========== Transition between Forms ========== */

signup.addEventListener("click", ()=>{
  container.classList.add("active");
});
login.addEventListener("click", ()=>{
  container.classList.remove("active");
});
</script>

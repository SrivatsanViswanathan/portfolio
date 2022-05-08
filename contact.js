function sendEmail() {
 const name = document.getElementById("firstname").value + " " + document.getElementById("lastname").value
 const email = document.getElementById("email").value
 const subject = document.getElementById("subject").value
 const message = document.getElementById("message").value

 fetch("https://formsubmit.co/ajax/5c593b081c27f6f905dae6e9b448a925", {
  method: "POST",
  headers: {
   'Content-Type': 'application/json',
   'Accept': 'application/json'
  },
  body: JSON.stringify({
   name: name,
   email: email,
   subject: subject,
   message: message
  })
 })

 confirmation();
}

function confirmation() {
 const confirm = document.getElementById("confirm");
 confirm.textContent = "Email has been sent. Thank you.";
 confirm.setAttribute("class", "confirm");

 setTimeout(function () {
  confirm.classList.add("confirm-end");
 }, 14900);

}
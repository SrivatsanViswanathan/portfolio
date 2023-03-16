function validate() {
  passed = false;
  const firstname = document.getElementById("firstname").value;
  const lastname = document.getElementById("lastname").value;
  var hasNumber = /\d/;

  if (hasNumber.test(firstname) || hasNumber.test(lastname)) {
    if (hasNumber.test(firstname)) {
      document.getElementsByClassName("errorMessage1")[0].style.display =
        "block";
      document.getElementsByClassName("errorMessage1")[0].textContent =
        "Error. Numbers not allowed.";
    }
    if (hasNumber.test(lastname)) {
      document.getElementsByClassName("errorMessage2")[0].style.display =
        "block";
      document.getElementsByClassName("errorMessage2")[0].textContent =
        "Error. Numbers not allowed.";
    }
    if (!hasNumber.test(firstname)) {
      document.getElementsByClassName("errorMessage1")[0].style.display =
        "none";
      document.getElementsByClassName("errorMessage1")[0].textContent = "";
    }
    if (!hasNumber.test(lastname)) {
      document.getElementsByClassName("errorMessage2")[0].style.display =
        "none";
      document.getElementsByClassName("errorMessage2")[0].textContent = "";
    }
  } else {
    passed = true;
  }

  if (passed == true) {
    sendEmail();
    document.getElementById("contact-form").reset();
    document.getElementsByClassName("errorMessage1")[0].style.display = "none";
    document.getElementsByClassName("errorMessage1")[0].textContent = "";
    document.getElementsByClassName("errorMessage2")[0].style.display = "none";
    document.getElementsByClassName("errorMessage2")[0].textContent = "";
  }
}

function sendEmail() {
  const firstname = document.getElementById("firstname").value;
  const lastname = document.getElementById("lastname").value;
  const username = firstname + " " + lastname;
  const email = document.getElementById("email").value;
  const subject = document.getElementById("subject").value;
  const message = document.getElementById("message").value;

  fetch("https://formsubmit.co/92a64e78aa951ec6fa59c2d6643994f5", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
    },
    body: JSON.stringify({
      name: username,
      email: email,
      subject: subject,
      message: message,
    }),
  });

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

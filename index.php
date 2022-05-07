<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/png" href="./favicon/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./styles.css">

  <script defer src="./navbar.js"></script>
  <script defer src="./scroll.js"></script>

  <title>Home</title>
</head>

<body>
  <header>
    <nav class="navbar" id="navbar">
      <div class="left" id="About">
        <a href="">Srivatsan Viswanathan</a>
      </div>
      <div class="right">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#About">About</a>
        <a href="#Projects">Projects</a>
        <a href="#Contact">Contact</a>
      </div>
    </nav>
  </header>
  <article>
    <div class="about-container">
      <div class="left">
        <h1>Srivatsan Viswanathan</h1>
        <p>Hi, my name is Sri. I am a 5th year computer engineering student at Toronto Metropolitan
          University. I have developed websites from scratch and I focus on developing scalable and reusable
          code. I enjoy working collaborately or independantly. I am an aspiring front end developer.
        </p>
        <p>
        <table>
          <tr>
            <td>
              Languages: HTML, CSS, Javascript, JSON, PHP, Python, Java, C, LaTeX, Matlab
            </td>
          <tr>
            <td>Frameworks: Bootstrap</td>
          </tr>
          <tr>
            <td>Databases: SQL, MYSQL</td>
          </tr>
          <tr>
            <td>Tools: Git, Bash, Unix</td>
          </tr>
          </tr>
        </table>
        </p>
        <a href="#">Resume</a>
      </div>
      <div class="middle"></div>
      <div class="right">
        <img src="./images/lelouch.jpg" alt="Lelouch">
      </div>
    </div>
    <div class="arrow-move">
      <a href="#Projects" id="arrow-link" onclick="arrow_scroll()">
        <i class="arrow down" id="arrow">
        </i>
      </a>
    </div>
    <div class="project-container" id="Projects">
      <h1>Projects</h1>
      <div class="box1">
        <div class="project1">
          <a href=" https://srivatsanviswanathan.github.io/Landing-Page/" target="_blank">
            <img src="./images/landing-page.JPG" alt="Landing Page">
          </a>
          <p>A webpage that contains some information on why you should enroll in a free online course.
            Built using HTML, CSS, and Javascript.
          </p>
        </div>
        <div class="project2">
          <a href="https://multipolar-marauder.github.io/website/" target="_blank">
            <img src="./images/debate-website.JPG" alt="Debate Website">
          </a>
          <p>A debate website for a McMaster politics club. Contains the vote results done by the members
            in the club and the blogs journalists have written. Built using HTML, CSS, and Javascript. The
            bootstrap framework was used as well.
          </p>
        </div>
        <div class="project3">
          <a href="https://srivatsanviswanathan.github.io/testing/" target="_blank">
            <img src="./images/university-website.JPG" alt="University Website">
          </a>
          <p>A website built for a University course. Contains all the information a student would
            need when attending the course. JSON was used as a database to store all the information
            and Javascript DOM was used to display it.
          </p>
        </div>
      </div>
    </div>
    <div class="contact-container" id="Contact">
      <h1>Contact Me</h1>
      <form class="contact-form" action="contact.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name" required> <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Last name" required><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <label for="email">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject" required><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="7" cols="50" placeholder="Message" required></textarea><br>
        <input type="submit">
      </form>
    </div>
    <div class="arrow-move2">
      <a href="#About" id="arrow-link2" onclick="arrow_scroll()">
        <i class="arrow up2" id="arrow2">
        </i>
      </a>
    </div>
  </article>
  <footer class="footer">
    &copy Srivatsan Viswanathan 2022
  </footer>
</body>

</html>
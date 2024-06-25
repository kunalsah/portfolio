<?php include("navbar.html"); ?>

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  * {
    box-sizing: border-box;
  }

  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
    scroll-behavior: smooth;
  }

  .section {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  h1,
  p {
    margin: 0;
    padding: 10px;
  }


  .section1 {
    height: 90vh;
    background-color: #303134;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .typing-container {
    text-align: center;
  }

  #dynamicHeading {
    min-height: 1.2em;
    /* Adjust this value as needed */
  }

  .typing-cursor {
    display: inline-block;
    vertical-align: middle;
    width: 2px;
    /* Increased width for better visibility */
    height: 1.2em;
    /* Match this with the min-height of #dynamicHeading */
    background-color: white;
    animation: blink 0.7s infinite alternate;
  }

  /* .section1 {
    height: 90vh;
    background-color: #303134;
    color: white;
  } */

  .section2 {
    font-family: Arial, sans-serif;
    background-color: #494b50;
    color: #fff;
    margin: 0;
    padding: 20px;
    min-height: 100vh;
    overflow-y: auto;
    width: 100%;
  }

  .section3 {
    font-family: Arial, sans-serif;
    background-color: #303134;
    color: #fff;
    margin: 0;
    padding: 20px;
    min-height: 100vh;
    overflow-y: auto;
    width: 100%;
  }

  .section4 {
    font-family: Arial, sans-serif;
    background-color: #494b50;
    color: #fff;
    margin: 0;
    padding: 20px;
    min-height: 100vh;
    overflow-y: auto;
    width: 100%;

  }

  @keyframes blink {
    0% {
      opacity: 1;
    }

    100% {
      opacity: 0;
    }
  }

  .skills-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
  }

  .skill-card {
    background-color: #3a3b3f;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: calc(33.333% - 40px);
    box-sizing: border-box;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
  }

  .skill-card:hover {
    transform: translateY(-10px);
  }

  .skill-image {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
  }

  .skill-name {
    font-weight: bold;
    margin-bottom: 10px;
  }

  .skill-bar {
    background-color: #f0f0f0;
    height: 20px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
  }

  .skill-progress {
    width: 0;
    height: 100%;
    background-color: #4CAF50;
    position: absolute;
    transition: width 1.5s ease-in-out;
  }

  .skill-percentage {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 12px;
    color: #fff;
  }

  @media (max-width: 768px) {
    .skill-card {
      width: calc(50% - 40px);
    }
  }

  @media (max-width: 480px) {
    .skill-card {
      width: 100%;
    }
  }

  .project {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    min-height: 100vh;
  }

  .slider,
  .details {
    flex: 1;
    min-width: 300px;
    padding: 15px;
    box-sizing: border-box;
  }

  .slider {
    position: relative;
    overflow: hidden;
  }

  .slider img {
    width: 100%;
    display: none;
  }

  .slider img.active {
    display: block;
    animation: slide 0.5s ease-in-out;
  }

  .details {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
  }

  .project:nth-child(even) .slider {
    order: 2;
  }

  .project:nth-child(even) .details {
    order: 1;
  }

  @media (max-width: 768px) {
    .project {
      flex-direction: column;
    }

    .project:nth-child(even) .slider,
    .project:nth-child(even) .details {
      order: initial;
    }
  }

  .slider-controls {
    position: relative;
    top: 8%;
    width: 94.5%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
  }

  .slider-controls button {
    background: rgba(0, 0, 0, 0.5);
    border: none;
    border-radius: 50px;
    color: white;
    padding: 20px;
    margin: 10px;
    cursor: pointer;
    outline: none;
  }

  .slider-controls button:hover {
    background: rgba(0, 0, 0, 0.8);
  }

  @keyframes slide {
    from {
      opacity: 0;
      transform: translateX(-20%);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slide-in-left {
    from {
      opacity: 0;
      transform: translateX(-20%);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slide-in-right {
    from {
      opacity: 0;
      transform: translateX(20%);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @media (max-width: 768px) {
    .slider-controls button {
      padding: 5px;
    }

    .slider img {
      margin-bottom: 0;
    }

    .details {
      margin-top: 20px;
    }
  }

  table {
    width: 50%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
  }

  th,
  td {
    padding: 12px 15px;
    color: #ffffff;

  }

  thead tr {
    background-color: #333;
    text-align: left;
  }

  tbody tr {
    border-bottom: 1px solid #444;
  }

  tbody tr:nth-of-type(even) {
    background-color: #3a3a3a;
  }

  tbody tr:nth-of-type(odd) {
    background-color: #333;
  }

  tbody tr:last-of-type {
    border-bottom: 2px solid #444;
  }

  /* Styles for the education section */
  .education-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: rgba(73, 75, 80, 0.2);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  }

  .education-item {
    background: rgba(48, 49, 52, 0.6);
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
    animation: fadeIn 1s ease-out;
  }

  .education-item:hover {
    transform: scale(1.05);
  }

  .education-item h3 {
    margin-top: 0;
    color: #a0a0a0;
  }

  .education-item p {
    margin: 5px 0;
    color: #d0d0d0;
  }

  .section5 {
    font-family: Arial, sans-serif;
    background-color: #303134;
    color: #fff;
    margin: 0;
    padding: 20px;
    min-height: 50vh;
    width: 100%;
  }

  .footer {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 100%;
    max-width: 1200px;
    margin-bottom: 20px;
  }

  .footer-section {
    flex: 1;
    min-width: 200px;
    margin: 10px;
  }

  .footer-section h3 {
    margin-bottom: 15px;
    color: #a0a0a0;
  }

  .social-icons a {
    color: #fff;
    font-size: 24px;
    margin-right: 15px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .social-icons a:hover {
    color: #4CAF50;
  }

  .footer-section ul {
    list-style-type: none;
    padding: 0;
  }

  .footer-section ul li {
    margin-bottom: 10px;
  }

  .footer-section ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-section ul li a:hover {
    color: #4CAF50;
  }

  .footer-bottom {
    width: 100%;
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #494b50;

  }

  @media (max-width: 768px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
    }

    .footer-section {
      width: 100%;
      text-align: center;
      margin-bottom: 20px;
    }
  }
</style>



<div class="section section1 " id="home">
  <div class="typing-container">
    <h1 id="dynamicHeading"></h1>
    <p>Web & React Native Developer</p>
  </div>
</div>

<section class="section2 " id="skills">
  <h2 align='center'>Skills </h2><br><br>
  <div class="skills-container">
    <div class="skill-card">
      <img src="./img/html.png" alt="HTML" class="skill-image">
      <div class="skill-name">HTML</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="90">
          <span class="skill-percentage">90%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/css.png" alt="CSS" class="skill-image">
      <div class="skill-name">CSS</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="80">
          <span class="skill-percentage">80%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/javascript.png" alt="JavaScript" class="skill-image">
      <div class="skill-name">JavaScript</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="70">
          <span class="skill-percentage">70%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/php.png" alt="PHP" class="skill-image">
      <div class="skill-name">PHP</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="80">
          <span class="skill-percentage">80%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/jquery.png" alt="jQuery" class="skill-image">
      <div class="skill-name">jQuery</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="75">
          <span class="skill-percentage">75%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/mysql.png" alt="MySQL" class="skill-image">
      <div class="skill-name">MySQL</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="70">
          <span class="skill-percentage">70%</span>
        </div>
      </div>
    </div>
    <div class="skill-card">
      <img src="./img/react_native.png" alt="React Native" class="skill-image">
      <div class="skill-name">React Native</div>
      <div class="skill-bar">
        <div class="skill-progress" data-percentage="50">
          <span class="skill-percentage">50%</span>
        </div>
      </div>
    </div>
  </div>
  <h2 align='center'>Work Experience </h2><br>
  <div style="display: flex; justify-content: center; align-items: center;">
    <table style="width: auto; border-collapse: collapse; text-align: center; margin-top: 50px;">
      <tr>
        <td style="padding: 16px 40px;">Sept, 2023 - Today</td>
        <td style="padding: 16px 40px; ">Web & App Developer | Paid InternShip</td>
        <td style="padding: 16px 40px;">RISPL, Bhilai</td>
      </tr>
      <tr>
        <td style="padding: 16px 40px;">July, 2023 - August, 2023</td>
        <td style="padding: 16px 40px; ">Full Stack Developer | Vocational Training</td>
        <td style="padding: 16px 40px;">RISPL, Bhilai</td>
      </tr>
      <tr>
        <td style="padding: 16px 40px;">July, 2022 - August, 2022</td>
        <td style="padding: 16px 40px; ">Full Stack Developer | Vocational Training</td>
        <td style="padding: 16px 40px;">Vibe Infotech, Bhilai</td>
      </tr>

    </table>
  </div>
</section>

<section class="section3 " id="projects">
  <h2 align='center'>Projects</h2>
  <div class="project">
    <div class="slider">
      <img src="./img/srgi hr/Screenshot (83).png" alt="srgi hr " class="active">
      <img src="./img/srgi hr/Screenshot (84).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (85).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (86).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (87).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (88).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (89).png" alt="srgi hr ">
      <img src="./img/srgi hr/Screenshot (90).png" alt="srgi hr ">

      <div class="slider-controls">
        <button class="prev">&lt;</button>
        <button class="next">&gt;</button>
      </div>
    </div>
    <div class="details">
      <h2>SRGI HR</h2>
      <p>A mobile app for both Android and iOS platforms designed for college faculty. The app allows faculty members to view and manage their profiles, check their attendance reports and allotted leaves, mark and view students' attendance, and more. The app is developed entirely from scratch.
      </p>
      <table>
        <thead>
          <tr>
            <th>Technology Used</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>React Native</td>
          </tr>
          <tr>

            <td>Node.Js</td>
          </tr>
          <tr>

            <td>Express</td>
          </tr>
          <tr>

            <td>MySQL</td>
          </tr>

        </tbody>
      </table>

    </div>
  </div>
  <hr><br>
  <div class="project">
    <div class="slider">
      <img src="./img/cms/Screenshot (51).png" alt="CMS Screenshot 1" class="active">
      <img src="./img/cms/Screenshot (52).png" alt="CMS Screenshot 2">
      <img src="./img/cms/Screenshot (53).png" alt="CMS Screenshot 1">
      <img src="./img/cms/Screenshot (54).png" alt="CMS Screenshot 2">
      <img src="./img/cms/Screenshot (55).png" alt="CMS Screenshot 2">
      <div class="slider-controls">
        <button class="prev">&lt;</button>
        <button class="next">&gt;</button>
      </div>
    </div>
    <div class="details">
      <h2>Canteen Management System</h2>
      <p>A Complete Canteen Management System to Take Order, Print Bills, Generate Report, and Manage Stocks.
        Here You can also create Users with different access rights and Temprory Add and Remove company according to requirements.
        Purely made from scratch and is being used in SRGI for last 1 year. The Website is developed entirely from scratch.
      </p>
      <table>
        <thead>
          <tr>
            <th>Technology Used</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Html</td>
          </tr>
          <tr>

            <td>Css</td>
          </tr>
          <tr>

            <td>BootStrap</td>
          </tr>
          <tr>

            <td>Js</td>
          </tr>
          <tr>

            <td>jQuery</td>
          </tr>
          <tr>

            <td>PHP</td>
          </tr>
          <tr>

            <td>MySQL</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
  <hr><br>
  <div class="project">
    <div class="slider">
      <img src="./img/ims/Screenshot (64).png" alt="IMS Screenshot 1" class="active">
      <img src="./img/ims/Screenshot (57).png" alt="IMS Screenshot 2">
      <img src="./img/ims/Screenshot (58).png" alt="IMS Screenshot 1">
      <img src="./img/ims/Screenshot (60).png" alt="IMS Screenshot 2">
      <img src="./img/ims/Screenshot (61).png" alt="IMS Screenshot 1">
      <img src="./img/ims/Screenshot (62).png" alt="IMS Screenshot 2">
      <img src="./img/ims/Screenshot (63).png" alt="IMS Screenshot 1">
      <div class="slider-controls">
        <button class="prev">&lt;</button>
        <button class="next">&gt;</button>
      </div>
    </div>
    <div class="details">
      <h2>Inventory Management System</h2>
      <p>This inventory management system allows users to place requests for inventory products and managers to accept or reject these requests. It also includes features for proper stock management, stock purchase history management, and user history management.The Website is developed entirely from scratch.
      </p>
      <table>
        <thead>
          <tr>
            <th>Technology Used</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Html</td>
          </tr>
          <tr>

            <td>Css</td>
          </tr>
          <tr>

            <td>BootStrap</td>
          </tr>
          <tr>

            <td>Js</td>
          </tr>
          <tr>

            <td>jQuery</td>
          </tr>
          <tr>

            <td>PHP</td>
          </tr>
          <tr>

            <td>MySQL</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
  <hr><br>
  <div class="project">
    <div class="slider">
      <img src="./img/game vortex/Screenshot (65).png" alt="game vortex " class="active">
      <img src="./img/game vortex/Screenshot (66).png" alt="game vortex ">
      <img src="./img/game vortex/Screenshot (67).png" alt="game vortex ">
      <img src="./img/game vortex/Screenshot (68).png" alt="game vortex ">
      <img src="./img/game vortex/Screenshot (69).png" alt="game vortex ">
      <img src="./img/game vortex/Screenshot (70).png" alt="game vortex ">
      <div class="slider-controls">
        <button class="prev">&lt;</button>
        <button class="next">&gt;</button>
      </div>
    </div>
    <div class="details">
      <h2>Game Vortex</h2>
      <p>Online Game Downloading Website where users can Create Profile , Manage Profile, Search and Download Games, Review Games with 24x7 ChatBot Support with active users count. The Website is developed entirely from scratch.
      </p>
      <p>Website Link:- <a style="color: white;" href="https://kunalsahwebsitefortesting.wuaze.com/index.php">Game Vortex</a></p>
      <table>
        <thead>
          <tr>
            <th>Technology Used</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Html</td>
          </tr>
          <tr>

            <td>Css</td>
          </tr>
          <tr>

            <td>Js</td>
          </tr>
          <tr>

            <td>jQuery</td>
          </tr>
          <tr>

            <td>PHP</td>
          </tr>
          <tr>

            <td>MySQL</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>

</section>

<section class="section4 " id="education">
  <h2 align='center'>Education</h2>
  <div class="education-container">
    <div class="education-item">
      <h3>College</h3>
      <p>Degree: B.Tech in CSE</p>
      <p>Institution: RSR Rungta College of Engineering and Technology</p>
      <p>Year: 2020-2024</p>
      <p>GPA/Percentage: 83.8%</p>
    </div>
    <div class="education-item">
      <h3>12th Grade</h3>
      <p>School: Sun Public School</p>
      <p>Year: 2020</p>
      <p>Percentage: 70%</p>
      <p>Stream: PCM</p>
    </div>
    <div class="education-item">
      <h3>10th Grade</h3>
      <p>School: Sanskar City International School</p>
      <p>Year: 2018</p>
      <p>Percentage: 74%</p>
    </div>
  </div>
</section>

<section class="section5 ">
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contact Me</h3>
        <p>Email: kunalsahwork@gmail.com</p>
        <p>Phone: +91 9399537951</p>
        <p>Location: Durg, Chhattishgarh, India</p>
      </div>
      <div class="footer-section">
        <h3>Social Media</h3>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/kunal-sah-5649bb203" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/kunalsah" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://x.com/Kunal_Sah?t=W5WXwpSAgcjVdGNXpzJIwA&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/_kunal_sah_?igsh=MXBrbmxiNm03OTF1eg==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#education">Education</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 KUNAL SAH. All rights reserved.</p>
    </div>
  </footer>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    const headings = [
      "Hello, there!!!",
      "Welcome to My Website",
      "My Name is KUNAL SAH",
      "& I am a Full Stack Web and React Native Developer",
      "With 1+ Year of Working experience",
      "& Currently Learning & Working on React native Projects"
    ];
    let index = 0;
    const headingElement = $("#dynamicHeading");

    function typeText(text, element) {
      let index = 0;
      const interval = setInterval(() => {
        element.text(element.text() + text[index]);
        index++;
        if (index >= text.length) {
          clearInterval(interval);
          setTimeout(() => {
            deleteText(text, element);
          }, 1000);
        }
      }, 100);
    }

    function deleteText(text, element) {
      let index = text.length - 1;
      const interval = setInterval(() => {
        element.text(text.substring(0, index));
        index--;
        if (index < 0) {
          clearInterval(interval);
          setTimeout(() => {
            changeHeading();
          }, 1000);
        }
      }, 50);
    }

    function changeHeading() {
      index = (index + 1) % headings.length;
      const newText = headings[index];
      headingElement.empty().append($("<span>").addClass("typing-cursor"));
      typeText(newText, headingElement);
    }

    setInterval(() => {
      $(".typing-cursor").toggleClass("hidden");
    }, 500);

    changeHeading();
  });


  function animateSkills() {
    const skillBars = document.querySelectorAll('.skill-progress');
    skillBars.forEach(bar => {
      const percentage = bar.getAttribute('data-percentage');
      bar.style.width = percentage + '%';
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateSkills();
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.5
  });

  observer.observe(document.querySelector('.skills-container'));

  document.querySelectorAll('.slider').forEach(slider => {
    let images = slider.querySelectorAll('img');
    let currentIndex = 0;
    let interval = setInterval(showNextImage, 5000);

    function showNextImage() {
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add('active');
    }

    slider.querySelector('.next').addEventListener('click', () => {
      clearInterval(interval);
      showNextImage();
      interval = setInterval(showNextImage, 5000);
    });

    slider.querySelector('.prev').addEventListener('click', () => {
      clearInterval(interval);
      images[currentIndex].classList.remove('active');
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      images[currentIndex].classList.add('active');
      interval = setInterval(showNextImage, 5000);
    });
  });


  // 
</script>
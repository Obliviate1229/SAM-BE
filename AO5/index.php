<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>DKrypt</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif;
    }

    body,
    html {
      height: 100%;
      color: #777;
      line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
      background-image: url('/w3images/parallax1.jpg');
      min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
      background-image: url("/w3images/parallax2.jpg");
      min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
      background-image: url("/w3images/parallax3.jpg");
      min-height: 400px;
    }

    .w3-wide {
      letter-spacing: 10px;
    }

    .w3-hover-opacity {
      cursor: pointer;
    }

    .footer {
      background-color: #133e87;
      padding-top: 3.5rem;
      padding-bottom: 0;
      padding: 2rem 1rem;
    }

    .overline {
      color: #f2f0ee;
      letter-spacing: .15em;
      text-transform: uppercase;
      margin-bottom: .25rem;
      font-size: 1rem;
      line-height: 1rem;
    }

    .footer-grid {
      grid-template-rows: auto;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      margin-bottom: .5rem;
      grid-row-gap: 16px;
      grid-column-gap: 16px;
      grid-auto-columns: 1fr;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 1.5rem;
    }

    .footer-info {
      flex: 1 1 calc(50% - 1rem);
      min-width: 200px;
      max-width: 300px;
      margin: 0 auto;
    }

    .footer-info img {
      width: 6rem;
      border-radius: 1.5rem;
      margin: 0 auto 1rem;
      display: block;
    }

    .footer-text-one {
      color: #f2f0ee;
      font-size: 0.75rem;
    }

    .footer-text-two {
      color: #f2f0ee;
    }

    .footer-socials {
      grid-column-gap: 2rem;
      grid-row-gap: 0rem;
      grid-template-rows: auto auto;
      grid-template-columns: 1fr 1fr 1fr;
      grid-auto-columns: 1fr;
      display: grid;
      overflow-x: hidden;
    }

    .cr {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
      overflow: hidden;
      padding-top: .75rem;
      padding-bottom: .75rem;
      background-color: #133e87;
    }

    .cr p {
      margin: 0;
      font-size: 0.875rem;
      color: #f2f0ee;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {

      .bgimg-1,
      .bgimg-2,
      .bgimg-3 {
        background-attachment: scroll;
        min-height: 400px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
        onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span
          class="w3-hide-small">WEBSITE</span> LOGO</span>
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center"><em>I love photography</em></p>
    <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem
      ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
      aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
      non proident, sunt in culpa
      qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat.</p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>
        <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me"
          width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large">
        <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing
          elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
  </div>

  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">14+</span><br>
      Partners
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">55+</span><br>
      Projects Done
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">89+</span><br>
      Happy Clients
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">150+</span><br>
      Meetings
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
  </div>

  <!-- Container (Portfolio Section) -->
  <div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them
        bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="The mist over the mountains">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Coffee beans">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Bear closeup">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Quiet ocean">
      </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
      <div class="w3-col m3">
        <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="My beloved typewriter">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
          alt="Empty ghost train">
      </div>

      <div class="w3-col m3">
        <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
      </div>
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i
        class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Third Parallax Image with Portfolio Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">WHERE I WORK</h3>
    <p class="w3-center"><em>I'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
      </div>
      <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
          <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
        </div>
        <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="section footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer-grid">
            <div class="footer-info">
              <a href="index.html">
                <img src="IMG/DKrypt.svg">
              </a>
            </div>
            <div class="footer-info">
              <div class="description-text overline footer-text-one">
                Contact Me
              </div>
              <div class="description-text footer-text-two">
                <i class="fa-solid fa-envelope" aria-hidden="true" style="color:#f2f0ee;font-size: 1rem;"></i>
                dustinkyle122915@gmail.com
              </div>
              <div class="description-text footer-text-two">
                <i class="fa-solid fa-phone" aria-hidden="true"
                  style="color:#f2f0ee;font-size: 1rem;"></i>+63998-938-3995
              </div>
            </div>
            <div class="footer-info">
              <div class="description-text overline footer-text-one">
                Address
              </div>
              <div class="description-text footer-text-two">
                <i class="fa-solid fa-location-dot" aria-hidden="true" style="color: #f2f0ee;font-size: 1rem;"></i> PUP
                Sto. Tomas Campus
                <br>A. Bonifacio St. Poblacion II,<br>Sto. Tomas
                Batangas, Philippines.
              </div>
            </div>
            <div class="footer-info">
              <div class="description-text overline footer-text-one">
                Socials
              </div>
              <div class="footer-socials footer-text-two">
                <a href="https://www.facebook.com/dustinkyle.garcia">
                  <i class="fa-brands fa-facebook mb-4" aria-hidden="true" style="color: #f2f0ee;font-size:1.5rem;"></i>
                </a>
                <a href="https://github.com/Obliviate1229">
                  <i class="fa-brands fa-github mb-4" aria-hidden="true" style="color: #f2f0ee;font-size:1.5rem;"></i>
                </a>
                <a href="https://www.linkedin.com/in/dustin-kyle-garcia-953682225/">
                  <i class="fa-brands fa-linkedin mb-4" aria-hidden="true" style="color: #f2f0ee;font-size:1.5rem;"></i>
                </a>
                <a href="https://discord.com/users/561175979100209157">
                  <i class="fa-brands fa-discord mb-4" aria-hidden="true" style="color: #f2f0ee;font-size:1.5rem;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function () { myFunction() };
    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

</body>

</html>
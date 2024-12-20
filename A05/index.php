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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
      color: #000;
      line-height: 1.8;
    }

    .bgimg-1 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bgimg-1 {
      background-image: url('https://i.imgur.com/5uXQl8u.png');
      min-height: 100%;
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

  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);"
        onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button"><i class="fa-solid fa-house"></i> HOME</a>
      <a href="#islandofpersonality1" class="w3-bar-item w3-button w3-hide-small"><i class="fa-solid fa-gamepad"></i> GAME HUB</a>
      <a href="#islandofpersonality2" class="w3-bar-item w3-button w3-hide-small"><i class="fa-solid fa-star"></i> FLAVOR FEELINGS</a>
      <a href="#islandofpersonality3" class="w3-bar-item w3-button w3-hide-small"><i class="fa-solid fa-heart"></i> HEARTSTRINGS</a>
      <a href="#islandofpersonality4" class="w3-bar-item w3-button w3-hide-small"><i class="fa-solid fa-clapperboard"></i> BACKSTAGE BYTES</a>
    </div>

    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#islandofpersonality1" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa-solid fa-gamepad"></i> GAME HUB</a>
      <a href="#islandofpersonality2" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa-solid fa-star"></i> FLAVOR FEELINGS</a>
      <a href="#islandofpersonality3" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa-solid fa-heart"></i> HEARTSTRINGS</a>
      <a href="#islandofpersonality4" class="w3-bar-item w3-button" onclick="toggleFunction()"><i class="fa-solid fa-clapperboard"></i> BACKSTAGE BYTES</a>
    </div>
  </div>

  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity rounded-5">DKrypt.</span>
    </div>
  </div>

  <div class="w3-row w3-center w3-padding-16" id="island"
    style="background-color: #ffffff; color: black; display: flex; justify-content: center; align-items: center; height: 100px;">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge" style="font-family: sans-serif; text-transform: uppercase;">Islands of
        Personalities</span><br>
    </div>
  </div>

  <?php
  $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 1";
  $gameHubResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($gameHubResult)) {
    ?>

    <div class="bgimg-1 w3-display-container w3-opacity-min" id="islandofpersonality1">
      <div class="w3-display-middle text-center">
        <span class="w3-xxlarge w3-wide"
          style="font-weight: bold; text-transform: uppercase; color: <?php echo $row['color'] ?>">
          <?php echo $row['name'] ?></span>
        <h3 class="w3-center w3-text-white"><?php echo $row['shortDescription'] ?></h3>
      </div>
    </div>

    <section id="islandofpersonality1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="w3-content w3-container w3-padding-64">
              <p class="w3-center"><em><?php echo $row['longDescription'] ?></em></p><br>

              <?php
  }
  ?>

            <?php
            $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 1";
            $gameHubResult = executeQuery($getQuery);

            if (!$gameHubResult) {
              echo "Error: " . mysqli_error($conn);
              exit();
            }

            $counter = 0;

            while ($row = mysqli_fetch_array($gameHubResult)) {
              if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
              }

              echo '
            <div class="images col-md-4 d-flex justify-content-center flex-column align-items-center">
                <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                <h5 class="mt-2" style="color: ' . htmlspecialchars($row['color']) . ';">' . htmlspecialchars($row['content']) . '</h5>
            </div>
        ';

              $counter++;

              if ($counter % 3 === 0) {
                echo '</div>';
              }
            }

            if ($counter % 3 !== 0) {
              echo '</div>';
            }

            echo '</div>';
            ?>

          </div>
        </div>
      </div>
  </section>

  <?php
  $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 2";
  $flavorFeelingsResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($flavorFeelingsResult)) {
    ?>

    <div class="bgimg-1 w3-display-container w3-opacity-min" id="islandofpersonality2">
      <div class="w3-display-middle text-center">
        <span class="w3-xxlarge w3-wide"
          style="font-weight: bold; text-transform: uppercase; color: <?php echo $row['color'] ?>">
          <?php echo $row['name'] ?></span>
        <h3 class="w3-center w3-text-white"><?php echo $row['shortDescription'] ?></h3>
      </div>
    </div>

    <section id="islandofpersonality">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="w3-content w3-container w3-padding-64">
              <p class="w3-center"><em><?php echo $row['longDescription'] ?></em></p><br>

              <?php
  }
  ?>

            <?php
            $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 2";
            $flavorFeelingsResult = executeQuery($getQuery);

            if (!$flavorFeelingsResult) {
              echo "Error: " . mysqli_error($conn);
              exit();
            }

            $counter = 0;

            while ($row = mysqli_fetch_array($flavorFeelingsResult)) {
              if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
              }

              echo '
            <div class="images col-md-4 d-flex justify-content-center flex-column align-items-center">
                <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                <h5 class="mt-2" style="color: ' . htmlspecialchars($row['color']) . ';">' . htmlspecialchars($row['content']) . '</h5>
            </div>
        ';

              $counter++;

              if ($counter % 3 === 0) {
                echo '</div>';
              }
            }

            if ($counter % 3 !== 0) {
              echo '</div>';
            }

            echo '</div>';
            ?>

          </div>
        </div>
      </div>
  </section>

  <?php
  $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 3";
  $heartStringsResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($heartStringsResult)) {
    ?>

    <div class="bgimg-1 w3-display-container w3-opacity-min" id="islandofpersonality3">
      <div class="w3-display-middle text-center">
        <span class="w3-xxlarge w3-wide"
          style="font-weight: bold; text-transform: uppercase; color: <?php echo $row['color'] ?>">
          <?php echo $row['name'] ?></span>
        <h3 class="w3-center w3-text-white"><?php echo $row['shortDescription'] ?></h3>
      </div>
    </div>

    <section id="islandofpersonality">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="w3-content w3-container w3-padding-64">
              <p class="w3-center"><em><?php echo $row['longDescription'] ?></em></p><br>

              <?php
  }
  ?>

            <?php
            $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 3";
            $heartStringsResult = executeQuery($getQuery);

            if (!$heartStringsResult) {
              echo "Error: " . mysqli_error($conn);
              exit();
            }

            $counter = 0;

            while ($row = mysqli_fetch_array($heartStringsResult)) {
              if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
              }

              echo '
            <div class="images col-md-4 d-flex justify-content-center flex-column align-items-center">
                <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                <h5 class="mt-2" style="color: ' . htmlspecialchars($row['color']) . ';">' . htmlspecialchars($row['content']) . '</h5>
            </div>
        ';

              $counter++;

              if ($counter % 3 === 0) {
                echo '</div>';
              }
            }

            if ($counter % 3 !== 0) {
              echo '</div>';
            }

            echo '</div>';
            ?>

          </div>
        </div>
      </div>
  </section>

  <?php
  $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 4";
  $backstageBytesResult = executeQuery($getQuery);

  while ($row = mysqli_fetch_array($backstageBytesResult)) {
    ?>

    <div class="bgimg-1 w3-display-container w3-opacity-min" id="islandofpersonality4">
      <div class="w3-display-middle text-center">
        <span class="w3-xxlarge w3-wide"
          style="font-weight: bold; text-transform: uppercase; color: <?php echo $row['color'] ?>">
          <?php echo $row['name'] ?></span>
        <h3 class="w3-center w3-text-white"><?php echo $row['shortDescription'] ?></h3>
      </div>
    </div>

    <section id="islandofpersonality">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="w3-content w3-container w3-padding-64">
              <p class="w3-center"><em><?php echo $row['longDescription'] ?></em></p><br>

              <?php
  }
  ?>

            <?php
            $getQuery = "SELECT * FROM `islandcontents` WHERE islandOfPersonalityID = 4";
            $backstageBytesResult = executeQuery($getQuery);

            if (!$backstageBytesResult) {
              echo "Error: " . mysqli_error($conn);
              exit();
            }

            $counter = 0;

            while ($row = mysqli_fetch_array($backstageBytesResult)) {
              if ($counter % 3 === 0) {
                echo '<div class="row justify-content-center mb-4">';
              }

              echo '
            <div class="images col-md-4 d-flex justify-content-center flex-column align-items-center">
                <img src="' . htmlspecialchars($row['image']) . '" alt="Island Content" class="img-fluid" style="max-width: 300px; height: auto;">
                <h5 class="mt-2" style="color: ' . htmlspecialchars($row['color']) . ';">' . htmlspecialchars($row['content']) . '</h5>
            </div>
        ';

              $counter++;

              if ($counter % 3 === 0) {
                echo '</div>';
              }
            }

            if ($counter % 3 !== 0) {
              echo '</div>';
            }

            echo '</div>';
            ?>

          </div>
        </div>
      </div>
  </section>

  <div class="section footer">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer-grid">
            <div class="footer-info">
              <a href="index.php">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>

    window.onscroll = function () { myFunction() };
    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

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
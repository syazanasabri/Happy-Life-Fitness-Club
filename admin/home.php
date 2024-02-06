<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Happy Life Fitness Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/bloom.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Happy Life Fitness Club</b></h4>
    <p class="w3-text-grey">Owned by Syazana<br> Empowering Lives Through Fitness</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>ABOUT US</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>COMMITTEE</a> 
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
    <a href="#activities" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>ACTIVITIES</a> 
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>ACHIEVEMENTS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="#admin" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-fw w3-margin-right"></i>ADMINISTRATOR</a>

  </div>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Happy Life Fitness Club</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>

 <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="images/bg.jpg" alt="Background" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">Lets Get Fit</h1>
      <h1 class="w3-hide-large w3-hide-medium">Lets Get Fit</h1>
      <h1 class="w3-hide-small">Become a Member Now!</h1>
      <h1 class="w3-hide-small">WOMEN ONLY!</h1>
      <p><a href="membership" class="w3-button w3-black w3-padding-large w3-large">JOIN US NOW</a></p>
    </div>
<br></br>

<!--About Us section -->
  <header id="about">
    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h2><b>About Us</b></h2>
    <p>At Happy Life Club, we believe in the transformative power of fitness to elevate both the body and the mind. Established with a passion for health and wellness, we are more than just a fitness club; we are a community committed to inspiring and supporting each member on their unique fitness journey.</p>
    <hr>

    <h2><b>Our Mission</b></h2>
    <p>Empowering Lives Through Fitness</p>
    <p>Our mission is to create a positive and inclusive environment where individuals of all fitness levels can thrive. We are dedicated to fostering a sense of community, encouraging personal growth, and promoting a healthy lifestyle.</p>
    <hr>

    <h2><b>Our Commitment to You</b></h2>
    <p>We are committed to providing an unparalleled fitness experience that goes beyond the physical. Joining Happy Life Club means joining a community that celebrates achievements, fosters connections, and encourages a balanced and healthy lifestyle.</p>
    <hr>

    <h2><b>Get Started Today!</b></h2>
    <p>Embark on your fitness journey with us. Whether you're looking to build strength, improve flexibility, or simply enjoy a vibrant community, Happy Life Club is here to support you every step of the way.</p>
    <p>Welcome to a healthier, happier you!</p>
  
    <hr>



  <!-- Committee Members -->
  <header id="committee">
  <div class="w3-container w3-padding-64 w3-center" id="classes">
  <h2><b>OUR COMMITTEE MEMBERS</b></h2>

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="committee">
    <div class="w3-quarter">
      <img src="images/pilatestrain.jpg" alt="pilatestrain" style="width:100%">
      <h3>IMAN DAHLIA</h3>
      <p>President</p>
    </div>
    <div class="w3-quarter">
      <img src="images/boxtrainer.jpg" alt="Steak" style="width:100%">
      <h3>IMAN SOFEA</h3>
      <p>Vice President</p>
    </div>
    <div class="w3-quarter">
      <img src="images/zumbatrainer.jpg" alt="Cherries" style="width:100%">
      <h3>IMAN MUTIARA</h3>
      <p>Secretary</p>
    </div>
    <div class="w3-quarter">
      <img src="images/soo.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>SURIA ANDREANA</h3>
      <p>Treasurer</p>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="committee">
    <div class="w3-quarter">
      <img src="images/shin.jpg" alt="pilatestrain" style="width:100%">
      <h3>DARA NAILUFAR</h3>
      <p>Member</p>
    </div>
    <div class="w3-quarter">
      <img src="images/hyun.jpg" alt="Steak" style="width:100%">
      <h3>TRISTIN HAZEL</h3>
      <p>Member</p>
    </div>
    <div class="w3-quarter">
      <img src="images/hyeri.jpg" alt="Cherries" style="width:100%">
      <h3>NURISSA ROSE</h3>
      <p>Member</p>
    </div>
    <div class="w3-quarter">
      <img src="images/seorina.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>IRIS CHEMPAKA</h3>
      <p>Member</p>
    </div>
  </div>
  <hr>

<!-- Club -->
<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
    ?>
  <p align="center"><h3>Club form for Happy Life Fitness Club</h3></p>
    <a href="add_club.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
            <td>
              <a href="edit_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<!--  Membership -->
  <header id="membership">
      <h4><b>Happy Life Fitness Club Membership</b></h4>
      <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p align="center"><h3>Membership form for Happy Life Fitness Club</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!--Activities -->
  <header id="activities">
<div class="w3-container w3-padding-64 w3-center" id="activities">
  <h2><b>ACTIVITIES</b></h2>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for Happy Life Fitness Club</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- First Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="committee">
    <div class="w3-quarter">
      <img src="images/u.jpg" alt="pilatestrain" style="width:100%">
      <h3>PILATES CLASS</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/boxing.jpg" alt="Steak" style="width:100%">
      <h3>BOXING CLASS</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/zumba.jpg" alt="Cherries" style="width:100%">
      <h3>ZUMBA CLASS</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/sugar.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>30 DAYS NO SUGAR CHALLENGE</h3>
      <p></p>
    </div>

    <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="committee">
    <div class="w3-quarter">
      <img src="images/eat.jpg" alt="pilatestrain" style="width:100%">
      <h3>30 DAYS HEALTHY EATING CHALLENGE</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/coffee.jpg" alt="Steak" style="width:100%">
      <h3>30 DAYS NO COFFEE CHALLENGE</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/stretch.jpg" alt="Cherries" style="width:100%">
      <h3>5 MINUTE DAILY STRETCHING CHALLENGE</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="images/skip.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>30 DAY SKIPPING CHALLENGE</h3>
      <p></p>
    </div>
  </div>
    <hr>

  <!--Achievement section -->
  <header id="achievements">
    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h2><b>ACHIEVEMENTS</b></h2>

    <!-- Achievements Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="achievements">
    <br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Pilates</p>
        </li>
        <li class="w3-padding-16">Charity and Social Responsibility Initiatives</li>
        <li class="w3-padding-16">Collaborations with Fitness Experts</li>
        <li class="w3-padding-16">Partnerships with Health Professionals</li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Boxing</p>
        </li>
        <li class="w3-padding-16">Anti-Bullying and Self-Defense Workshops</li>
        <li class="w3-padding-16">Fitness and Wellness Collaborations</li>
        <li class="w3-padding-16">Participation in Amateur Tournaments</li>
        <li class="w3-padding-16">Youth Development Programs</li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Zumba</p>
        </li>
        <li class="w3-padding-16">Community Engagement</li>
        <li class="w3-padding-16">Participation in Zumbathons or Marathons</li>
        <li class="w3-padding-16">Innovative Choreography and Themes</li>
        <li class="w3-padding-16">Health and Wellness Collaborations</li>
      </ul>
    </div>
</div>
  
   <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Us</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>happylifeclub@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Kuala Lumpur, Malaysia</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>01131700154</p>
      </div>
    </div>
</div>
<hr>  
 <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Contact Us for Happy Life Fitness Club</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

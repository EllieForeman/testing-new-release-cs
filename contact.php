<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Control Shift is an exciting new arts programme coming to Bristol (UK) in June 2020.">
  <meta name="keywords" content="art, artists, Bristol, data, embodiement, materiality, code">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta property="og:url" content="http://www.control-shift.network">
  <meta property="og:title" content="Control Shift">
  <meta property="og:description" content="Control Shift is an exciting new arts programme coming to Bristol (UK) in June 2020 exploring creative and critical approaches to technology, rooted in embodiment and materiality. Call out open for artworks, workshops and provocations. Deadline 15th March.">
  <meta property="og:image" content="https://www.control-shift.network/img/control-shift-banner.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styles/style.css">

  <title>Control Shift - contact</title>

</head>

<body>
  <div class="container">
    <!-- all content goes in the container -->

    <!-- creating navigation bar by pulling in html from the navBar.php file -->
    <?php include("navBar.php"); ?>

    <!-- row  -->
    <div class="row">
      <div class="col-sm">
        <h1>Contact us / Subscribe</h1>

        <p>If you have any questions about Control Shift please contact us through the form below. </p>
        <p>Join our mailing list for the latest news and info by checking the subscribe box.</p>


        <div class="form-area d-flex justify-content-center">
          <form role="form" name="contactForm" id="contactForm">
          <!-- <form role="form" action="https://network.us4.list-manage.com/subscribe/post?u=e432b14e44ea9b04c5ab8633e&amp;id=91154fa16e" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> -->

            <br style="clear:both">
            <div class="form-group">
              <input type="text" value="" name="FNAME" class="form-control mc" id="mce-FNAME" placeholder="First Name" required><input type="text" value="" name="LNAME" class="form-control mc" id="mce-LNAME" placeholder="Last Name" required>
              <!-- <input type="text" name="inputFirstName" class="form-control" id="inputFirstName" placeholder="First Name" required> -->
            </div>

            <div class="form-group">
              
              <!-- <input id="inputLastName" type="text" name="inputLastName" class="form-control" placeholder="Last Name" required> -->
            </div>

            <div class="form-group">
              <input type="email" value="" name="EMAIL" class="form-control required email mc" id="mce-EMAIL" placeholder="Email" required>
              <!-- <input id="inputEmail" type="text" name="inputEmail" class="form-control" placeholder="Email" required> -->
            </div>

            <div class="form-group">
              <textarea id="inputMsg" type="textarea" name="inputMsg" class="form-control" placeholder="Optional Message" maxlength="140" rows="7"></textarea>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="SubscribeCheckBox">
              <label class="form-check-label" for="SubscribeCheckBox">Subscribe me to the Control Shift mailing list, I have read and agree to the <a href="privacy.php" target="_blank">Privacy Policy</a></label>
            </div>

            <div class="overlay is-hidden" id="overlay">
              <span class="" id="sendStatus">hello</span><span class="button-close" onclick="closeModal();"></span>
            </div>

            <div class="send-submit">
              <a href="#/"  id="sendMsg">Send</a>
            </div>
            
          </form>
        </div>
        <p></p>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row logos">
        <div class="col-md-12 mt-md-0 mt-3">
          <h5 class="footer-text">funded by</h5>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row logos">
        <div class="col-sm "></div>
        <div class="col-sm text-center"><img src="logos/lottery_Logo.png" alt="Arts Council England logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/ioc.png" alt="Institute of code logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/KWMC-2014.png" alt="Knowle west Media Centre logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/uwe.png" alt="University of the west England logo" class="img-fluid"></div>
        <div class="col-sm"></div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row logos">
        <div class="col-md-12 mt-md-0 mt-3">
          <h5 class="footer-text">supported by</h5>
        </div>
      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row logos">
        <div class="col-sm "></div>
        <div class="col-sm text-center"><img src="logos/PCD.png" alt="processing community day logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/watershed.png" alt="watershed logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/pmstudio.png" alt="bristol city council logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/curious.png" alt="we the cuious logo" class="img-fluid"></div>
        <div class="col-sm text-center"><img src="logos/BCC-logo.png" alt="bristol city council logo" class="img-fluid"></div>
        <div class="col-sm"></div>
      </div>
      <!-- Grid row -->

    </div>

    <!-- Footer Text -->

  </footer>
  <!-- Footer -->
    


  <!-- JavaScript -->
  <script src="js/contact-form.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<style type=text/css> .header {
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/contact.gif);}
</style>
<link rel="stylesheet" href="css/contact.css">
<?php $title = 'Contact - '; ?>
<?php require_once('inc/header.php'); ?>
  <div class="text-box">
        <h1>Let's Chat</h1>
        <p>ShareTheMeal is a crowdfunding smartphone application to fight global hunger through the United Nations World Food Programme (WFP).</p>
        <a href="#mail" class="visit-btn">Email</a>
        </div>
    </section>
<body>
  <div class="contact1" id="mail">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="img/mailcon.png" alt="IMG">
      </div>

      <form class="contact1-form validate-form">
        <h5 class="contact1-form-title">
          Get in touch
        </h5>

        <div class="wrap-input1 validate-input" data-validate = "Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Subject is required">
          <input class="input1" type="text" name="subject" placeholder="Subject">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn">
            <span>
              Send Email
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

<script src="js/contact.js"></script>
</body>
</html>
<?php require_once('inc/footer.php'); ?>
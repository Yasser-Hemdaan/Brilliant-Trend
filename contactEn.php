
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Variables

  $name = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
  $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
  $msg = filter_var($_POST['msg'],FILTER_SANITIZE_STRING);


  $formErrors = array();

  // empty data

  if(strlen($name) <= 0 || strlen($phone) <= 0 || strlen($mail) <= 0 || strlen($subject) <= 0 || strlen($msg) <= 0){
    $formErrors[] = 'All of data is <span>"REQUIRED"</span>';
  }

  if(strlen($name) < 3 || strlen($name) > 35){
    $formErrors[] = 'name must be more than <span>3</span> and less than <span>35</span> letters.';
  }
  
  if(strlen($subject) < 3 || strlen($subject) > 22){
    $formErrors[] = 'subject must be more than <span>3</span> and less than <span>22</span> letters.';
  }

  if(strlen($phone) < 11 || strlen($phone) > 15){
    $formErrors[] = 'phone must be more than <span>11</span> digits and less than <span>15</span> digits, not inclueded letters.';
  }

  if(strlen($msg) < 10){
    $formErrors[] = 'message must be more than <span>10</span> letters.';
  }

  // $myMail = "yasserhemdaan@gmail.com";
  // $headers = 'from: ' . $mail . '\r\n';

  // if(empty($formErrors)){
  //   mail($myMail , $subject , $msg , $headers);
  // }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/logo.svg"
      type="image/x-icon"
    />
    <!--// meta data //-->

    <title>Brilliant Trend | contact</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css" />

    <!-- bootstrap files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="assets/images/favicon/android-chrome-512x512.png"
    />

    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- css style -->
    <link rel="stylesheet" href="assets/css/styleEn.css" />
  </head>

  <body>
    <div class="contactPage">
      <!-- normal navigation -->

    <div class="navigation">
      <div class="container">
        <div class="content">
          <div class="logo">
            <a href="indexEn.html">
              <img src="assets/images/yellowLogo.svg" alt="" />
            </a>
          </div>
          <ul class="list">
            <li><a href="indexEn.html">home</a></li>
            <li><a href="aboutEn.html">about us</a></li>
            <li><a href="worksEn.html">works</a></li>
            <!-- <li><a href="contact.php">contact us</a></li> -->
          </ul>
          <div class="lang">
            <a href="contact.php">العربية</a>
          </div>
        </div>
      </div>
    </div>

    <!-- normal navigation -->

    <!-- menu navbar -->

    <div class="menuNav">
      <div class="container">
        <div class="content">
          <div class="logo">
            <a href="indexEn.html">
              <img src="assets/images/yellowLogo.svg" alt="" />
            </a>
          </div>
          <div class="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>

    <!--// menu navbar //-->

    <div class="menuNavBody">
      <div class="container">
        <div class="close">
          <span></span>
          <span></span>
        </div>
        <div class="content">
          <div class="list">
            <ul>
              <li><a href="indexEn.html">home</a></li>
              <li><a href="aboutEn.html">about us</a></li>
              <li><a href="worksEn.html">works</a></li>
              <!-- <li><a href="contact.php">contact us</a></li> -->
              <li><a href="contact.php">العربية</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

      <!-- ScrollToTop -->

    <div class="scrollToTopBtn">
      <div class="icon">
        <i class="fa-solid fa-caret-up"></i>
        <i class="fa-solid fa-caret-up"></i>
      </div>
    </div>

    <!--// ScrollToTop //-->

      <!-- about us -->

      <div class="contact">
        <div class="head">
          <div class="container">
            <div class="text">
              <div class="title wow animate__animated animate__fadeInUp">
                <h2>contact us</h2>
              </div>
              <div class="description wow animate__animated animate__fadeInUp">
                <div class="block1">
                  We make your work easier for you, and we are distinguished by
                  our unique and creative character, and we never forget to
                  facilitate communication with us through our unified number
                  and our social media platforms, choose what suits your time
                </div>
                <div class="block2">
                  Waiting for you to become our partners
                </div>
              </div>
              <!-- <a href="mailto:info@btaa-sa.com" class="EmailBtn wow animate__animated animate__fadeInUp"><i class="fa-solid fa-envelope"></i>Send Email</a> -->
            </div>
            <div class="images">
              <img src="assets/images/contact_us.svg" alt="" />
            </div>
          </div>
        </div>

        <div class="form">
          <div class="container">
            <form  method="POST" action="https://formsubmit.io/send/bcea543f-5c7d-491f-9615-9e223027ae30" name="emailContact" id="contactform">
            <div class="errors">
          
          <?php 
          if(! empty($formErrors)){
            foreach($formErrors as $error){
              echo $error.'<br />';
            }  
          }else{
            $name = '';
            $phone = '';
            $mail = '';
            $subject = '';
            $msg = '';
          }
          ?>
          
          
        </div>
              <div class="formContent">
              <input name="_redirect" type="hidden" id="name" value="https://btaa-sa.com/contactEn.php">
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input 
                    type="text"
                    name="fullname"
                    id="fullname"
                    placeholder="fullname"
                    value="<?php if(isset($name)){echo $name;}?>"
                    minlength="3"
                    maxlength="40"
                    required="required"
                  />
                  <span>name</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="Phone"
                    value="<?php if(isset($phone)){echo $phone;}?>"
                    minlength="11"
                    maxlength="15"
                    required="required"
                  />
                  <!--  -->
                  <span>phone</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="email"
                    name="mail"
                    id="mail"
                    placeholder="example123@abc.com"
                    value="<?php if(isset($mail)){echo $mail;}?>"
                    required="required"
                  />
                  <!--  -->
                  <span>mail</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="subject"
                    value="<?php if(isset($subject)){echo $subject;}?>"
                    minlength="3"
                    required="required"
                  />
                  <!--  -->
                  <span>subject</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <textarea
                    name="msg"
                    id="msg"
                    cols="30"
                    rows="5"
                    placeholder="Hello, enter your message"
                    minlength="10"
                    maxlength="300"
                    required="required"
                  ><?php if(isset($msg)){echo $msg;}?></textarea>
                  <!--  -->
                  <span>message</span>
                </div>
              </div>
              <button type="submit" class="wow animate__animated animate__fadeInUp">submit</button>
            </form>
          </div>
        </div>
      </div>

      <!--// about us //-->

      <!-- footer -->

      <div class="footer">
        <div class="container">
          <div class="content">
            <div class="data">
              <div class="logo">
                <a href="indexEn.html">
                  <img src="assets/images/yellowLogo.svg" alt=""
                /></a>
              </div>
              <div class="contactDetails">
                <a href="tel:+966540007013">+966 50 040 8103</a>
                <a href="https://wa.me/+966535952069?text=hi" target="_blank">+966 53 595 2069</a>
                <a href="mailto:info@btaa-sa.com">info@btaa-sa.com</a>
                <p>Riyadh - Saudi Arabia</p>
              </div>
            </div>
            <div class="footerDescription">
              <h3 class="colTitle">about us</h3>
              <p>
                A leading company that goes with you from the nucleus of the
                idea to planning and implementation to ensure an effective
                presence and continuous communication with your customers
                through an integrated set of technical services and innovative
                marketing solutions provided by a professional team that
                combines science, experience and creative thinking in order to
                achieve the goals of our customers and exceed their
                expectations.
              </p>
            </div>
            <div class="social">
              <div class="accounts">
              <a href="https://twitter.com/BrilliantTrend" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/brilliant.trend" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.snapchat.com/add/brilliant.trend" target="_blank"><i class="fa-brands fa-snapchat"></i></a>
                <a href="https://www.facebook.com/brilliant.trend" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.tiktok.com/@brilliant.trend" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                <!-- <a href="hhttps://www.pinterest.com/btrendksa/" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a> -->
                <a href="https://www.linkedin.com/company/brilliant.trend/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <!-- <a href="https://vimeo.com/user189768433" target="_blank"><i class="fa-brands fa-vimeo-v"></i></a> -->
                <a href="https://www.behance.net/brillianttrend" target="_blank"><i class="fa-brands fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="rights">
        <div class="container">
          <p>&copy; brilliant trend 2022</p>
        </div>
      </div>

      <!--// footer //-->
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
      integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

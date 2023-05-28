
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
    $formErrors[] = 'كل الحقول <span>"مطلوبة"</span>';
  }

  if(strlen($name) < 3 || strlen($name) > 35){
    $formErrors[] = 'يجب أن يكون الاسم أكثر من <span>3</span> وأقل من <span>35</span> حروف.';
  }
  
  if(strlen($subject) < 3 || strlen($subject) > 22){
    $formErrors[] = 'يجب أن يكون الموضوع أكثر من <span>3</span> وأقل من <span>22</span> حروف.';
  }

  if(strlen($phone) < 11 || strlen($phone) > 15){
    $formErrors[] = 'يجب أن يكون رقم الهاتف أكثر من <span>11</span> وأقل من <span>15</span> رقم ، غير متضمنة حروف.';
  }

  if(strlen($msg) < 10){
    $formErrors[] = 'يجب أن تكون الرسالة أكثر من <span>10</span> حروف.';
  }
}

?>

<!DOCTYPE html>
<html lang="ar">
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

    <title>الإتجاه المُشرق | تواصل معنا</title>

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
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <div class="contactPage">
      <!-- normal navigation -->

    <div class="navigation">
      <div class="container">
        <div class="content">
          <div class="logo">
            <a href="index.html">
              <img src="assets/images/yellowLogo.svg" alt="" />
            </a>
          </div>
          <ul class="list">
            <li><a href="index.html">الرئيسية</a></li>
            <li><a href="about.html">من نحن</a></li>
            <li><a href="works.html">أعمالنا</a></li>
          </ul>
          <div class="lang">
            <a href="contactEn.php">english</a>
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
            <a href="index.html">
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
              <li><a href="index.html">الرئيسية</a></li>
              <li><a href="about.html">من نحن</a></li>
              <li><a href="works.html">أعمالنا</a></li>
              <li><a href="contactEn.php">english</a></li>
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
                <h2>تواصل معنا</h2>
              </div>
              <div class="description wow animate__animated animate__fadeInUp">
                <div class="block1">
                نسهل عليكم أعمالكم ونتميز بطابعنا الفريد والمبدع
                ولا ننسى أبدا تسهيل التواصل معنا من خلال
                رقمنا الموحد ومنصات التواصل الاجتماعي الخاصة بنا
                اختر منها ما يناسب وقتك.
                </div>
                <div class="block2">
                في انتظاركم لتصبحوا شركاءنا.
                </div>
              </div>
              <!-- <a href="mailto:mailto:info@btaa-sa.com" class="EmailBtn wow animate__animated animate__fadeInUp"><i class="fa-solid fa-envelope"></i>أرسل لنا</a> -->
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
              <input name="_redirect" type="hidden" id="name" value="https://btaa-sa.com/contact.php">
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    placeholder="الإسم"
                    value="<?php if(isset($name)){echo $name;}?>"
                    minlength="3"
                    maxlength="40"
                    required="required"
                  />
                  <span>الإسم</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="الهاتف"
                    value="<?php if(isset($phone)){echo $phone;}?>"
                    minlength="11"
                    maxlength="15"
                    required="required"
                  />
                  <span>الهاتف</span>
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
                  <span>البريد</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="الموضوع"
                    value="<?php if(isset($subject)){echo $subject;}?>"
                    minlength="3"
                    required="required"
                  />
                  <span>الموضوع</span>
                </div>
                <div class="inputRow wow animate__animated animate__fadeInUp">
                  <textarea
                    name="msg"
                    id="msg"
                    cols="30"
                    rows="5"
                    placeholder="مرحبا, إكتب لنا رسالتك"
                    minlength="10"
                    maxlength="300"
                    required="required"
                  ><?php if(isset($msg)){echo $msg;}?></textarea>
                  <span>الرسالة</span>
                </div>
              </div>
              <button type="submit" class="wow animate__animated animate__fadeInUp">إرسال</button>
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
              <h3 class="colTitle">من نحن</h3>
              <p>
              شركة سعودية مقرها بالرياض وأيمان بقدراتنا وخبراتنا والمستقبل
                الرقمي في المملكة العربية السعودية ولمواكبة النمو الرقمي السريع
                تخصصنا في التسويق والتصميم وإنتاج الفيديو وتطوير المواقع
                الإلكترونية من خلال فريق محترف لديه من الخبرات اللازمة باستخدام
                أحدث التقنيات لمساعدة المشاريع والشراكات الناشئة في التسويق لها
                وجعلها تأخذ حيزا كبيرا في السوق السعودي

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
          <p>كل الحقوق محفوظة لدى شركة</p>
          <p>&copy; الاتجاه المشرق 2022</p>
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

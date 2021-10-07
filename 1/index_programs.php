
<?php
session_start();
$_SESSION['user_id']=17;
$_SESSION["program_type"]=0;

if (isset($_POST['submit_1']) ) {
    $_SESSION["program_type"]=3;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_2']) ) {
    $_SESSION["program_type"]=6;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_3']) ) {
    $_SESSION["program_type"]=9;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_11']) ) {
    $_SESSION["program_type"]=2;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_22']) ) {
    $_SESSION["program_type"]=5;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_33']) ) {
    $_SESSION["program_type"]=8;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_111']) ) {
    $_SESSION["program_type"]=1;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_222']) ) {
    $_SESSION["program_type"]=4;
    header("Location: index_workout.php");
}

if (isset($_POST['submit_333']) ) {
    $_SESSION["program_type"]=7;
    header("Location: index_workout.php");
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="icon" type="image/png" href="images/123.ico"/>
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Hello Fitness</title>
    <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/lib/animate.css">

      <style>
          input[type=submit] {
              background-color: black;
              border: none;
              color: white;
              padding: 16px 32px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
              width: 100%;
              transition: 0.3s;
              border-radius: 20px;
          }
          input[type=submit]:hover {
              background-color: black;
                color:#1db954;
          }
      </style>
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" style="color: #232d39">Hello<em> Fitness</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a style="color: black; " href="index.php#home">Home</a></li>
                            <li class="scroll-to-section"><a style="color: black; " href="index.php#about">About</a></li>
                            <li class="scroll-to-section"><a style="color: black; " href="index.php#top">Discover</a></li>
                            <li class="scroll-to-section"><a style="color: black; " href="index.php#contact-us">Contact</a></li>
                            <li class="main-button" onclick=""><a style="background-color: #232d39; " href="#">Profile</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Pop-ups ***** -->
    <div class="modal_login">
        <div class="modal_block">
            <form id="myform" method="POST">
                <input type=" text" id="name" placeholder="Name" class="order_input">
                <input type="text" id="password" placeholder="Message" class="order_input">
                <button type="button" class="order_btn modal_btn" onclick="sender();">Send</button>
                <button class="close_modal" onclick="close_modal()">X</button>
            </form>
        </div>
        <div class="modal_overlay"></div>
    </div>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="trainers">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 wow fadeInUp">
                    <div class="section-heading">
                        <h2 style="margin-bottom: 5px;">Stable <em>Programs</em></h2>
                    </div>
                </div>
            </div>
            <div class="row" >

                <div class="col-lg-4 col-md-6 col-xs-12 wow fadeInUp">

                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="images/program_1.jpg"  alt="">
                        </div>
                        <center>
                        <div class="down-content" style="margin-top: 10px;">

                                <form action="" method="post">
                                    <input type="submit" value="Beginner" name="submit_1">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Intermediate" name="submit_2">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Advanced" name="submit_3">
                                </form>

                        </div>
                        </center>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-xs-12 wow fadeInUp">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="images/program_2.jpg" alt="">
                        </div>
                        <div class="down-content" style="margin-top: 10px;">
                            <center>
                                <form action="" method="post">
                                    <input type="submit" value="Beginner" name="submit_11">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Intermediate" name="submit_22">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Advanced" name="submit_33">
                                </form>
                            </center>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-xs-12 wow fadeInUp">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="images/program_3.jpg"  alt="">
                        </div>
                        <div class="down-content" style="margin-top: 10px;">
                            <center>
                                <form action="" method="post">
                                    <input type="submit" value="Beginner" name="submit_111">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Intermediate" name="submit_222">
                                </form>
                                <form action="" method="post">
                                    <input type="submit" value="Advanced" name="submit_333">
                                </form>
                            </center>
                        </div>
                    </div>
                </div>



        </div>

    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Footer ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" >
                    <b>Copyright &copy; 2021 SMAD </b>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="assets/lib/wow.js"></script>

    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script src="assets/js/custom.js"></script>

  </body>
  <script>

      function order_modal_register() {
          $('.modal_register').fadeIn();
      }
      function order_modal_login() {
          $('.modal_login').fadeIn();
      }

      function close_modal() {
          $('.modal_register').fadeOut();
          $('.modal_login').fadeOut();
      }

      function sender() {
          var a = 0;
          $('#name').removeAttr("style", "border-color: #f08080");
          $('#phone').removeAttr("style", "border-color: #f08080");
          $('#email').removeAttr("style", "border-color: #f08080");
          $('#message').removeAttr("style", "border-color: #f08080");

          var name = $.trim($('#name').val());
          var phone = $.trim($('#phone').val());
          var email = $.trim($('#email').val());
          var message = $.trim($('#message').val());

          if (name.length < 1 || name.length > 170) {
              $('#name').attr("style", "border-color: #f08080");
              a++;
          }
          if (!validateChar(name) && a == 0) {
              $('#name').attr("style", "border-color: #f08080");
              a++;
          }
          if (phone.length < 1 || phone.length > 170) {
              $('#phone').attr("style", "border-color: #f08080");
              a++;
          }
          if (!validatePhone(phone) && a == 0) {
              $('#phone').attr("style", "border-color: #f08080");
              a++;
          }
          if (message.length < 1 || message.length > 170) {
              $('#message').attr("style", "border-color: #f08080");
              a++;
          }
          if (email.length < 1 || email.length > 1170) {
              $('#email').attr("style", "border-color: #f08080");
              a++;
          }
          if (!validateEmail(email) && a == 0) {
              $('#email').attr("style", "border-color: #f08080");
              a++;
          }

          if (a > 0) {
              alert("No data")
              return false;

          } else {
              var fd = new FormData;
              fd.append('task', 'login_form' );
              fd.append('name', name );
              fd.append('phone', phone );
              fd.append('message', message );
              fd.append('email', email );

              $.ajax({
                  url: 'ajax.php',
                  data: fd,
                  processData: false,
                  contentType: false,
                  type: 'POST',
                  success: function ( msg ) {
                      if( $.trim(msg) == 'ok' ){
                          $('.ContactsForm input').val('');
                          $('.modal').fadeOut();
                      }else{
                          alert("Nooooo");
                      }

                  }
              });
          }
          document.getElementById('myform').reset();
      }

      function validateChar(text) {
          var re = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;
          return re.test(text);
      }

      function validatePhone(phone){
          var re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
          return re.test(phone);
      }

      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
      }
  </script>
</html>
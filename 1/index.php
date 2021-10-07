<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/123.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
          rel="stylesheet">

    <title>Hello Fitness</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/lib/animate.css">

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
                    <a href="index.php" class="logo">Hello<em> Fitness</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#home">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#top">Discover</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                        <li class="main-button" onclick="order_modal_login();"><a href="#">Log in</a></li>
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
<div class="modal_register">
    <div class="modal_block">
        <form id="myform" method="POST">
            <input type=" text" id="name" placeholder="Name" class="order_input">
            <input type="text" id="nickname" placeholder="Nickname" class="order_input">
            <input type="number" id="phone" placeholder="Phone number" class="order_input">
            <input type="email" id="email" placeholder="Email" class="order_input">
            <input type="number" id="weight" placeholder="Your weight" class="order_input">
            <input type="number" id="hight" placeholder="Your hight" class="order_input">
            <input type="password" id="password" placeholder="Password" class="order_input">
            <p style="text-align: center;" id="Reg_succes"></p>
            <button type="button" class="order_btn modal_btn" onclick="register();">Send</button>
            <button type="button" class="close_modal" onclick="close_modal($('.modal_register'))">X</button>
        </form>
    </div>
    <div class="modal_overlay"></div>
</div>

<div class="modal_login">
    <div class="modal_block">
        <form id="myform" method="POST">
            <input type=" text" id="lnickname" placeholder="Nickname" class="order_input">
            <input type="password" id="lpassword" placeholder="Password" class="order_input">
            <button type="button" class="order_btn modal_btn" onclick="login();">Send</button>
            <button type="button" class="close_modal" onclick="close_modal($('.modal_login'))">X</button>
        </form>
    </div>
    <div class="modal_overlay"></div>
</div>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/gym-video.mp4" type="video/mp4"/>
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>work smarter, not harder</h6>
            <h2>easy with our <em>programs</em></h2>
            <div class="main-button">
                <a id="sign_up" onclick="order_modal_register();">Sign up</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 wow fadeInUp">
                <div class="section-heading">
                    <h2 style="margin-bottom: 5px;">Our <em>Programs</em></h2>
                    <p>„It is hard to fail, but it is worse never to have tried to succeed.”</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow fadeInUp">
                <div class="trainer-item">
                    <h4 align="center">Exercitiul</h4>
                    <div class="image-thumb">
                        <img src="assets/images/training-image-01.jpg" alt="">
                    </div>
                    <div class="down-content" style="margin-top: 10px;">
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                            church-key pour-over seitan flannel.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp">
                <div class="trainer-item">
                    <h4 align="center">Exercitiul</h4>
                    <div class="image-thumb">
                        <img src="assets/images/training-image-01.jpg" alt="">
                    </div>
                    <div class="down-content" style="margin-top: 10px;">
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                            church-key pour-over seitan flannel.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp">
                <div class="trainer-item">
                    <h4 align="center">Exercitiul</h4>
                    <div class="image-thumb">
                        <img src="assets/images/training-image-01.jpg" alt="">
                    </div>
                    <div class="down-content" style="margin-top: 10px;">
                        <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                            church-key pour-over seitan flannel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section wow fadeInUp" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                    <p>„The best way to predict your future is to create it.”</p>
                    <div class="main-button scroll-to-section">
                        <a href="#our-classes">Become a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Our Classes Start ***** -->
<?php require "show_goals.php" ?>

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInUp">
                <div id="map">
                    <iframe src="https://open.spotify.com/embed/album/7kcbYCvOoFZs9FRPDWVrey" width="100%"
                            height="600px" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInUp">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                           placeholder="Your Email*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message"
                                              required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Footer ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
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
        $('.modal_login').fadeOut();
    }

    function order_modal_login() {
        $('.modal_login').fadeIn();
        $('.modal_register').fadeOut();
    }

    function close_modal(modal) {
        modal.fadeOut();
    }

    function login() {

        var a = 0;
        $('#lnickname').removeAttr("style", "border-color: #f08080");
        $('#lpassword').removeAttr("style", "border-color: #f08080");

        var nickname = $.trim($('#lnickname').val());
        var password = $.trim($('#lpassword').val());

        if (nickname.length < 6 || nickname.length > 170) {
            $('#lnickname').attr("style", "border-color: #f08080");
            a++;
        }
        if (!validateNick(nickname) && a == 0) {
            $('#lnickname').attr("style", "border-color: #f08080");
            a++;
        }
        if (password.length < 6 || password.length > 170) {
            $('#lpassword').attr("style", "border-color: #f08080");
            a++;
        }
        if (a > 0) {
            alert("Don't leave blank spaces!");
            return false;
        } else {
            var fd = new FormData;
            fd.append('task', 'login_form');
            fd.append('nickname', nickname);
            fd.append('password', password);

            $.ajax({
                url: 'ajax.php',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    if (data == 'incorect') {
                        $('#lnickname').attr("style", "border-color: red");
                        $('#lpassword').attr("style", "border-color: red");
                        alert("Incorrect Username or Password!");
                        return false;
                    }
                    if (data == 'error_db') {
                        alert("Error conection to DB!");
                        return false;
                    } else {
                        $('.modal_login input').val('');
                        //document.getElementById("Reg_succes").innerHTML = 'User is registered!';
                        setTimeout(function () {
                            $('.modal_login').fadeOut();
                        }, 2000);
                    }
                }
            });
        }
    }


    function register() {

        var a = 0;
        $('#name').removeAttr("style", "border-color: #f08080");
        $('#phone').removeAttr("style", "border-color: #f08080");
        $('#email').removeAttr("style", "border-color: #f08080");
        $('#nickname').removeAttr("style", "border-color: #f08080");
        $('#password').removeAttr("style", "border-color: #f08080");
        $('#weight').removeAttr("style", "border-color: #f08080");
        $('#hight').removeAttr("style", "border-color: #f08080");

        var name = $.trim($('#name').val());
        var phone = $.trim($('#phone').val());
        var email = $.trim($('#email').val());
        var nickname = $.trim($('#nickname').val());
        var password = $.trim($('#password').val());
        var weight = $.trim($('#weight').val());
        var hight = $.trim($('#hight').val());

        if (name.length < 1 || name.length > 170) {
            $('#name').attr("style", "border-color: #f08080");
            a++;
        }
        if (!validateChar(name) && a == 0) {
            $('#name').attr("style", "border-color: #f08080");
            a++;
        }
        if (weight.length < 1 || weight.length > 170) {
            $('#weight').attr("style", "border-color: #f08080");
            a++;
        }
        if (!validateNumber(weight) && a == 0) {
            $('#weight').attr("style", "border-color: #f08080");
            a++;
        }
        if (hight.length < 1 || hight.length > 170) {
            $('#hight').attr("style", "border-color: #f08080");
            a++;
        }
        if (!validateNumber(hight) && a == 0) {
            $('#hight').attr("style", "border-color: #f08080");
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
        if (nickname.length < 6 || nickname.length > 170) {
            $('#nickname').attr("style", "border-color: #f08080");
            a++;
        }
        if (!validateNick(nickname) && a == 0) {
            $('#nickname').attr("style", "border-color: #f08080");
            a++;
        }
        if (password.length < 6 || password.length > 170) {
            $('#password').attr("style", "border-color: #f08080");
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
        if (password.length < 6 || password.length > 170) {
            $('#password').attr("style", "border-color: #f08080");
            a++;
        }
        if (email.length < 1 || email.length > 1170) {
            $('#email').attr("style", "border-color: #f08080");
            a++;
        }

        if (a > 0) {
            alert("Don't leave blank spaces!");
            return false;

        } else {
            var fd = new FormData;
            fd.append('task', 'register_form');
            fd.append('nickname', nickname);
            fd.append('password', password);
            fd.append('name', name);
            fd.append('phone', phone);
            fd.append('weight', weight);
            fd.append('hight', hight);
            fd.append('email', email);

            $.ajax({
                url: 'ajax.php',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    if (data == 'exist') {
                        $('#nickname').attr("style", "border-color: red");
                        alert("Username already exists!");
                        return false;
                    }
                    if (data == 'error_db') {
                        alert("Error conection to DB!");
                        return false;
                    } else {
                        $('.modal_register input').val('');
                        document.getElementById("Reg_succes").innerHTML = 'User is registered!';
                        setTimeout(function () {
                            $('.modal_register').fadeOut();
                        }, 2000);
                    }
                }
            });
        }
    }

    function validateNick(nickname) {
        var re = /^[a-zA-Z0-9]+$/;
        return re.test(nickname);
    }

    function validateNumber(number) {
        var re = /^\d+$/;
        return re.test(number);
    }

    function validateChar(text) {
        var re = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;
        return re.test(text);
    }

    function validatePhone(phone) {
        var re = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
        return re.test(phone);
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
</script>
</html>
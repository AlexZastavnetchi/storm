<?php
require_once 'connect.php';
session_start();

$sql_u = "SELECT bmi, coef_performance, day_counter FROM daw_users WHERE id={$_SESSION['user_id']};";
$result_u = mysqli_query($conn, $sql_u);

$user_bmi = 0;
$user_coef_performance= 0;
$user_day_counter=0;
while ($row = mysqli_fetch_array($result_u)) {
    $user_bmi=$row['bmi'];
    $user_coef_performance=$row['coef_performance'];
    $user_day_counter=$row['day_counter'];
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
          rel="stylesheet">

    <title>Hello Fitness</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/lib/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a href="index.php" style="color:black;" class="logo">Hello<em> Fitness</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a style="color: black; " href="index.php#home">Home</a></li>
                        <li class="scroll-to-section"><a style="color: black; " href="index.php#about">About</a></li>
                        <li class="scroll-to-section"><a style="color: black; " href="index.php#top">Discover</a></li>
                        <li class="scroll-to-section"><a style="color: black; " href="index.php#contact-us">Contact</a></li>
                        <li class="main-button" onclick=""><a style="background-color: black; " href="#">Profile</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 wow fadeInUp">
                <div class="section-heading">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <div style="font-size: 200%">
                                <div class="inv" id="time"></div>
                                <div id="pause_timer">Press tick to start!</div>
                                <?php

                                $sql = "SELECT id_ex, ex_name, demo, repetitions, efort, calories_burnt_ex  FROM daw_exercises WHERE id_prog_type={$_SESSION["program_type"]};";
                                $result = mysqli_query($conn, $sql);
                                $counter = 0;
                                $calories_burnt_ex=0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $calculated_repetes=0;
                                    $repetitions_from_db=$row['repetitions'];
                                    $efort_from_db=$row['efort'];
                                    $calories_burnt_ex=$calories_burnt_ex+$row['calories_burnt_ex'];
                                    $splited_reps=0;
                                    $counter = $counter + 1; ?>
                                    <div class='inv' id='<?php echo "{$counter}"; ?>'><?php echo "{$row['ex_name']}" ?>
                                        <br> <img src="images/<?php echo "{$row['demo']}" ?>">
                                    <?php

                                    if($user_bmi>=18.5 && $user_bmi<=24.9)
                                    {
                                        $calculated_repetes=$calculated_repetes + 1;
                                    }
                                    if($user_coef_performance == 1)
                                    {
                                        $calculated_repetes=$calculated_repetes + 2;
                                    }
                                    if($user_coef_performance == 3)
                                    {
                                        $calculated_repetes = $calculated_repetes - 3;
                                    }
                                    if($user_day_counter % 2 == 0)
                                    {
                                        $calculated_repetes=round(($calculated_repetes+($user_day_counter/2)));
                                    }
                                    $calculated_repetes=$calculated_repetes+$repetitions_from_db;
                                    if($calculated_repetes % 2 != 0)
                                    {
                                        $calculated_repetes=$calculated_repetes+1;
                                    }
                                    echo"x{$calculated_repetes} reps";

                                    if($efort_from_db==2)
                                    {
                                        $splited_reps=$calculated_repetes/2;
                                        echo"<br><i>(Recommended x{$splited_reps} per round)</i>";
                                    }
                                    ?> </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 wow fadeInUp" style="margin-top:-150px;">
                        <div class="section-heading">
                            <div id="return_home"></div>
                            <a class="ex_butt" id="ex_button"><img width="100" height="100" src="assets/images/tick_sport.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<!-----------------------------------------------JS SCRIPTS FOR TIMING AND REPS------------------------------------------------->
<?php echo "
    <script>
      let counter_php={$counter}+1;
      let program_type_php={$_SESSION["program_type"]};
    </script>
    "
?>

<script>
    let pause_time = 0;
    if (program_type_php === 1 || program_type_php === 2 || program_type_php === 3) {
        pause_time = 30;
    } else if (program_type_php === 4 || program_type_php === 5 || program_type_php === 6) {
        pause_time = 20;
    } else if (program_type_php === 7 || program_type_php === 8 || program_type_php === 9) {
        pause_time = 10;
    }


    let countdown = 0;
    let reps = 0;
    let lever = false;
    let button_lever = true;

    function Sport_Function(timer_seconds) {
        button_lever = false;
        lever = false;
        countdown = timer_seconds;
        const down_timer = document.getElementById('pause_timer');
        down_timer.innerHTML = 'Pause: ' + countdown + ' s';

        countdown = countdown - 1;
        if (countdown === 1) {
            setTimeout(function () {
            }, 3000);
        }
        if (countdown === -1) {
            countdown = 0;
            lever = true;
            button_lever = true;
            down_timer.innerHTML = 'Start the exercise!';

        }
        if (lever === false) {
            setTimeout("Sport_Function(countdown)", 1000);
        }
    }

    let string = "";
    let counter = 0;


    $('.ex_butt').on('click', function () {
        if (button_lever === true) {
            if (counter < counter_php - 1) {

                Sport_Function(pause_time);
            } else {
                const down_timer = document.getElementById('pause_timer');
                down_timer.innerHTML = ' ';
            }

            counter = counter + 1;
            if (counter === 1) {
                start();
            }
            string = '#' + counter;
            $(string).removeClass("inv");
            if (counter !== 1) {
                let ex_counter = counter - 1;
                string = '#' + ex_counter;
                $(string).addClass("inv");
            }

            if (counter === counter_php) {
                $('#time').removeClass("inv");
                pause();
                let final_timing = document.getElementById('time');
                final_timing.innerHTML = 'Workout duration: <br>' + minutes + ' minutes & ' + seconds + ' seconds <br> Burnt kcal: <?php echo($calories_burnt_ex)?>';
                let final_return = document.getElementById('return_home');
                final_return.innerHTML = "<form action='insert_workout_data.php' method='POST'><input type='hidden' name='user_id' value='<?php echo($_SESSION['user_id'])?>'/><input type='hidden' name='program_type' value='<?php echo($_SESSION["program_type"])?>'/><input type='hidden' name='minutes' value='"+minutes+ "'/><input type='hidden' name='calories_burnt_ex' value='<?php echo($calories_burnt_ex)?>'/> <input type='submit' value='Return Home'></form>";
            }
        } else {
            return false;
        }


    });


</script>
<!---------------------------------------------------------------------------------------------------------->


<!-----------------------------------------------STOPWATCH------------------------------------------------->
<script>
    const timer = document.querySelector('#time');

    let time = 0,
        interval;

    function showTime() {
        time += 1;
        timer.innerHTML = toHHMMSS(time);
    }

    function start() {
        interval = setInterval(showTime, 1000);
    }

    function pause() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        } else {
            interval = setInterval(showTime, 1000);
        }
    }

    function reset() {
        clearInterval(interval);
        interval = null;
        time = 0;
        timer.innerHTML = toHHMMSS(time);
    }

    let hours = Math.floor(time / 3600);
    let minutes = Math.floor((time - hours * 3600) / 60);
    let seconds = time - hours * 3600 - minutes * 60;

    function toHHMMSS(time) {
        hours = Math.floor(time / 3600);
        minutes = Math.floor((time - hours * 3600) / 60);
        seconds = time - hours * 3600 - minutes * 60;

        hours = `${hours}`.padStart(2, '0');
        minutes = `${minutes}`.padStart(2, '0');
        seconds = `${seconds}`.padStart(2, '0');

        return hours + ':' + minutes + ':' + seconds;
    }
</script>
<!-----------------------------------------------END OF STOPWATCH------------------------------------------------->


<iframe class="wow fadeInLeftBig" src="https://open.spotify.com/embed/album/7kcbYCvOoFZs9FRPDWVrey" width="100%"
        height="600px" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
<!-- ***** Features Item End ***** -->

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
            fd.append('task', 'login_form');
            fd.append('name', name);
            fd.append('phone', phone);
            fd.append('message', message);
            fd.append('email', email);

            $.ajax({
                url: 'ajax.php',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (msg) {
                    if ($.trim(msg) == 'ok') {
                        $('.ContactsForm input').val('');
                        $('.modal').fadeOut();
                    } else {
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
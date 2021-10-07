<?php
require_once 'connect.php';
$sql = "SELECT Goal_Title, Goal_Info, Image_nr FROM goals_content;";
$result = mysqli_query($conn, $sql);
?>

<section class="section wow fadeInUp" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Our <em>Goals</em></h2>

                    <p>,,The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion."</p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>


                    <?php
                    $counter=0;
                    while($row = mysqli_fetch_array($result)){
                        $counter=$counter+1;
                    echo
                    "<li><a href='#tabs-{$counter}'><img src='assets/images/tabs-first-icon.png' alt=''> {$row['Goal_Title']}</a> </li>";
                    }
                    ?>

                </ul>
            </div>
            <div class="col-lg-8">
                <section class="tabs-content">



                    <?php
$result = mysqli_query($conn, $sql);
                    $counter_2=0;
                    while($row = mysqli_fetch_array($result)){
                        $counter_2=$counter_2+1;
                        echo
                        " <article id='tabs-{$counter_2}'>
                           <img src='images/{$row['Image_nr']}.jpg' alt=''>
                            <h4>{$row['Goal_Title']}</h4>
                            <p>{$row['Goal_Info']}</p>
                          <div class='main-button'>
                        </div>
                        </article>
";} ?>


                </section>
            </div>
        </div>
    </div>
</section>


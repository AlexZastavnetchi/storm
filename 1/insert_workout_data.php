<?php
require_once 'connect.php';
$user_id = $_POST['user_id'];
$program_type = $_POST['program_type'];
$minutes = $_POST['minutes'];
$calories_burnt_ex = $_POST['calories_burnt_ex'];

$sql = "INSERT INTO daw_calendar (id_user, id_prog_type, calories_record, time_record) VALUES('$user_id', '$program_type','$calories_burnt_ex','$minutes');";
mysqli_query($conn, $sql);

$sql_finder = "SELECT total_workouts, day_counter, total_calories, total_time FROM daw_users WHERE id={$user_id}";
$result_finder = mysqli_query($conn, $sql_finder);

$user_total_workouts = 0;
$user_total_days= 0;
$user_total_calories=0;
$user_total_time=0;

while ($row = mysqli_fetch_array($result_finder)) {
    $user_total_workouts=$row['total_workouts'];
    $user_total_days=$row['day_counter'];
    $user_total_calories=$row['total_calories'];
    $user_total_time=$row['total_time'];
}

$user_total_workouts=$user_total_workouts+1;
$user_total_days=$user_total_days+1;
$user_total_calories=$user_total_calories+$calories_burnt_ex;
$user_total_time=$user_total_time+$minutes;

$sql_user = "UPDATE daw_users SET total_workouts='$user_total_workouts', day_counter='$user_total_days', total_calories='$user_total_calories', total_time='$user_total_time' WHERE id=$user_id;";
mysqli_query($conn, $sql_user);

header("refresh:0; url=index.php");
?>
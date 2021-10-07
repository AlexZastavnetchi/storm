<?
include_once 'connect.php';
$ar_clean = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
if (!isset($_POST) || empty($_POST) || !isset($_POST['task'])) {
    exit;
}

if ($ar_clean['task'] == 'register_form') {
    $name = trim($ar_clean['name']);
    $nickname = trim($ar_clean['nickname']);
    $password = trim($ar_clean['password']);
    $phone = trim($ar_clean['phone']);
    $email = trim($ar_clean['email']);
    $weight = trim($ar_clean['weight']);
    $hight = trim($ar_clean['hight']);

    $password_crypt = hash_hmac("sha256", $password, 'c1isvFdxMDdmjOlvxpecFw');

    $dataTitle = $dataValue = array();
    $dataTitle[] = " user_name ";
    $dataValue[] = " '" . $name . "' ";
    $dataTitle[] = " nickname ";
    $dataValue[] = " '" . $nickname . "' ";
    $dataTitle[] = " password ";
    $dataValue[] = " '" . $password_crypt . "' ";
    $dataTitle[] = " phone ";
    $dataValue[] = " '" . $phone . "' ";
    $dataTitle[] = " email ";
    $dataValue[] = " '" . $email . "' ";
    $dataTitle[] = " weight ";
    $dataValue[] = " '" . $weight . "' ";
    $dataTitle[] = " hight ";
    $dataValue[] = " '" . $hight . "' ";
    $dataTitle[] = " usergroup ";
    $dataValue[] = " '1' ";

    $unique_nick = mysqli_query($conn, "SELECT `nickname` FROM daw_users WHERE `nickname` = '" . $nickname . "'");
    $counter = mysqli_num_rows($unique_nick);
    if ($counter == 1) {
        echo 'exist';
    } else {
        $qInsert = mysqli_query($conn, "INSERT INTO daw_users ( " . implode(',', $dataTitle) . " ) VALUES ( " . implode(',', $dataValue) . " ) ");
    }
    if (!$qInsert and $counter == 0) {
        echo 'error_db';
    }
}
if ($ar_clean['task'] == 'login_form') {
    $nickname = trim($ar_clean['nickname']);
    $password = trim($ar_clean['password']);

    $password_hashed = hash_hmac("sha256", $password, 'c1isvFdxMDdmjOlvxpecFw');
    $bd_user = mysqli_query($conn, "SELECT * FROM `daw_users` WHERE `password` =  '" . $password_hashed . "' AND `nickname` = '" . $nickname . "'");
    $counter = mysqli_num_rows($bd_user);
    $user = mysqli_fetch_assoc($bd_user);
    $user_id = $user['id'];

    if (!$bd_user) {
        echo 'error_db';
    }
    if ($counter == 1) {
        echo "ok";
        session_start();
        $_SESSION['documentation'] = 'true';
        $_SESSION['nickname'] = $nickname;
        $_SESSION['user_id'] = $user_id;
    } else {
        echo "incorect";
    }
}

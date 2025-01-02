<?php include_once "db.php";

$user = $User->find(['email' => $_GET['email']]);

if (!empty($user)) {
    echo "你的密碼:" . $user['pw'];
} else {
    echo "查無資料";
}

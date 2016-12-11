<?php

if(isset($_POST['user_password'])) {
    if (!empty($_POST['user_password'])) {
        $user_password = $_POST['user_password'];

        $filename = 'hash.txt';
        $handle = fopen($filename, 'r');
        $hash = fread($handle, filesize($filename));

        if (md5($user_password) === $hash) {
            echo 'welcome';
        } else {
            echo 'wrong password';
        }

    } else {
        echo 'enter password';
    }
}

?>

<form action="passwordHashing.php" method="post">
    Password: <input type="password" name="user_password"><br><br>
    <input type="submit" value="Submit">
</form>
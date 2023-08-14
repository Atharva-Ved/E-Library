<?php
if (isset($_POST['login'])) {
        include "./database/db.php";
        $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "' and password='" . ($_POST['psw']) . "'");
        $count = mysqli_num_rows($result);
        $rows=mysqli_fetch_assoc($result);
        if ($count>0) {
            
                header("Location: ./index.html");
        }else {
            header("Location: ./login.php?msg=<div class='alert alert-danger' id='inf'>Email or Password Incorrect!<button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
        }
    }else {
    header("Location: ./login.php?msg=<div class='alert alert-danger' id='inf'>Code doesnt work<button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
}




?>
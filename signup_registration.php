<?php 
if(isset($_POST['signup']))
{
include "./database/db.php";
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'"); 
$row= mysqli_num_rows($result);
if($row == 0)
{
    if ($_POST['psw']==$_POST['psw-repeat']) { 
        ;

        if (mysqli_query($conn, "INSERT INTO users(email,password) VALUES('" . $_POST['email'] . "', '" . $_POST['psw'] ."')"))
         
        {
            header("Location: ./login.php?msg=<div class='alert alert-info' id='inf'>Email has been registered successfully<button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
        }
    }else {
        header("Location: ./Signup.php?msg=<div class='alert alert-danger' id='inf'>Password and Re-Password must be same <button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
    }

}
else
{
    header("Location: ./login.php?msg=<div class='alert alert-danger' id='inf'>You have already registered with us.<button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
}
}else {
    header("Location: ./Signup.php?msg=<div class='alert alert-danger' id='inf'>Code doesnt Work<button data-dismiss='alert' class='close' type='button' onclick='myfunction()'>x</button></div>");
}
?>
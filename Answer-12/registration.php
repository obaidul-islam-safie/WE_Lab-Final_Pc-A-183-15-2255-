<?php
    include("connection.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        if(!empty($user_name) && !empty($user_email) && !empty($user_password) )
        {
            $query = "insert into users (user_name,user_email,user_password) values ('$user_name','$user_email','$user_password')";

            mysqli_query($con,$query);
        }else
        {
            echo("Please Enter Some Valid information");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <div class="registration">
        <h1>Registration Page</h1>

        <form method="post">
            <input type="text" name="user_name" placeholder="Enter Your Name.."><br><br>
            <input type="text" name="user_email" placeholder="Enter Your Email.."><br><br>
            <input type="text" name="user_password" placeholder="Enter Your Password.."><br><br>
            <button id="signup" type="submit">Signup</button><br><br>
        </form>
    </div>
</body>

<style>
.registration{
    text-align: center;
    width: 500px;
    padding: 20px;
    margin: auto;
    margin-top: 200px;
    background-color: gray;
}
input{
    border: 2px solid skyblue;
    padding: 10px;
}
#signup{
    padding: 10px;
    background-color: skyblue;
    border: 1px solid green;
    font-size: large;
    border-radius: 10px;
    cursor: pointer;
    
}
#signup:hover{
    background-color: black;
    border: 2px solid white;
    color: white;
    border-radius: 10px;
}
</style>
</html>
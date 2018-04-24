<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Псевдокласс :focus</title>
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/course7/course-5.css">
    </head>
    <body>


        <form class="login" action="login.php" method="post">
        <p>    <label for="login">Login</label>
<br>
            <input type="text" id="login" name="login">
</p>
<br>
<p>
            <label for="password">Password<br></label>
            <input type="password" id="password" name="password">
</p>
<br>
<p>
      <input type="submit" value="Submit">
</p>
        </form>
        <?php

        $admin = '1';
        $pass = '1';


        if($_POST['submit']){

        if($admin == $_POST['login'] AND $pass == $_POST['password']){


          $_SESSION['admin'] = $admin;

        header("Location:mainPage.php");

exit;

        }else echo '<p>Логин или пароль неверны!</p>';

        }
        ?>

    </body>
</html>

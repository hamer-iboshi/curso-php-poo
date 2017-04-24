<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hora do Curso</title>
        <?php
            date_default_timezone_set('America/Bahia');
            $members = [];
        ?>
    </head>
    <body>
        <h2><?php echo date("H:i:s a"); ?></h2>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        if (empty($name)) {
            echo "<h1>Name is empty</h1>";
        } else {
            echo "<h1>".$name."</h1>";
        }
        if (empty($email)) {
            echo "<h1>Email is empty</h1>";
        } else {
            echo $email;
        }
    }else{
        echo "Nome: " . $_GET['name'] . " Email:" . $_GET['email'];
    }

    ?>
</html>

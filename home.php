<?php
    session_start();
    if(!$_SESSION['isLoggedIn'])
    {
        header("Location: form.php");
    }

    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']?></h1>
    <a href="logout.php">Logout</a>
    <?php
        if(isset($_GET['page']))
        {
            switch($_GET['page'])
            {
                case 'add' : include("addUser.php");break;
                default: include("listUser.php");break;
            }
        }
        else
        {
            echo "Dashboard";
        }
    ?>
</body>
</html>
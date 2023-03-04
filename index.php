<!-- Index Page (Page User Is Presented With after Login) -->

<!-- Login Session Validation -->

<?php
    session_start();
    if(empty($_SESSION['user'])){
        header("Location: log-reg.php");
        exit;
    }
?>

<!-- Header - Title, Favicon, Stylesheet (Style Sheet is Auto Updated) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png">
    <link rel="stylesheet" href="style.css?<?php echo date('his')?>">
</head>

<body>

    <!-- Simple Content - User Name & Logout -->
    <!-- Set Time to Another Nation & City -->

    Welcome <?php echo $_SESSION['user'][1]; ?>, you logged in at <?php date_default_timezone_set('Australia/Melbourne'); echo date("g:i a") . " AEDT";?>, feel free to logout&nbsp;<a href="logout.php">Here</a>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>

    <!-- MAIN STYLES -->
    <link rel="stylesheet" href="/style.css">

    <!-- NAVIGATION STYLES -->
    <link rel="stylesheet" href="./assets/css/nav.css">

    <!-- HEADER STYLES -->
    <link rel="stylesheet" href="./assets/css/header.css">

    <!-- MAIN STYLES -->
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- FOOTER STYLE -->
    <link rel="stylesheet" href="./assets/css/footer.css">

</head>

<body>

    <div class="grid_container">
        <div class="grid_item header">
            <?php include 'header.php' ?>
        </div>
        <div class="grid_item main">
            <?php include './pages/main.php' ?>
        </div>
        <div class="grid_item footer">
            <?php include 'footer.php' ?>
        </div>
    </div>
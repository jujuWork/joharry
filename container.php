<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- MAIN STYLES -->
    <link rel="stylesheet" href="/style.css">

    <!-- NAVIGATION STYLES -->
     <link rel="stylesheet" href="./assets/css/nav.css">

     <!-- HEADER STYLES -->
      <link rel="stylesheet" href="./assets/css/header.css">

</head>
<body>

<div class="grid_container">
    <div class="grid_item header">
        <div class="nav">
            <?php include './pages/nav.php' ?>
        </div>
        <?php include 'header.php' ?>

    </div>
    <div class="grid_item main">
        <?php include 'main.php' ?>
    </div>
    <div class="grid_item footer">
        <?php include 'footer.php' ?>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo "Hometown - " .$page;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <script src="<?php echo $path;?>assets/js/index.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header class="topbar">
                <a href="https://www.baltimorecountymd.gov/">
                    <img id="logo" src="<?php echo $path;?>assets/img/BaltimoreLogo3.png" alt="Baltimore, MD" title="Baltimore, MD" width="100">
                </a>
                <button class="hamburger" id="hamburger">&#9776;</button>
                <div class="navbar">
                    <a href="<?php echo $path;?>home/index.php">Home</a>
                    <div class="dropdown">
                        <a href="#">Activities</a>
                        <button class="dropbtn">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo $path;?>activities/activities1.php">National Aquarium</a>
                            <a href="<?php echo $path;?>activities/activities2.php">Maryland Zoo</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#">Food</a>
                        <button class="dropbtn">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo $path;?>food/food1.php">Woodberry Kitchen</a>
                            <a href="<?php echo $path;?>food/food2.php">The Reserve Restaurant</a>
                        </div>
                    </div>
                    <a href="<?php echo $path;?>rest/rest.php">Rest</a>
                    <a href="<?php echo $path;?>feedback/feedback.php">Feedback</a>
                    <a href="<?php echo $path;?>comments/comments.php">Comments</a>
                </div>
            </header>
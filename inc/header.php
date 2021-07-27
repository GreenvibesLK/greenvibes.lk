<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/gv logo favicon green.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $title; ?>Greenvibes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    </head>


<body>
    
    <section class="header">
        <nav>
            <a href="/"><img src="img/GreenvibesLK white.png">  </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="about-us">ABOUT US</a></li>
                    <li><a href="our-group">OUR GROUP</a></li>
                    <li><a href="services">SERVICES</a></li>
                    <li><a href="projects">PROJECTS</a></li>
                    <li><a href="clients">CLIENTS</a></li>
                    <li><a href="resources">RESOURCES</a></li>
                    <li><a href="news">NEWS</a></li>
                    <li><a href="contact">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
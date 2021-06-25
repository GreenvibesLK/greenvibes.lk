<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?>Greenvibes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" >
	<link rel="shortcut icon" type="image/svg" href="img/gv logo favicon green.svg">
    </head>
<body> 
    <section class="header")>
        <nav>
            <a href="index.php" onclick="hideMenu()"><img src="img/GreenvibesLK white.png">  </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="about-us.php">ABOUT US</a></li>
                    <li><a href="about-us.php">OUR GROUP</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="projects.php">PROJECTS</a></li>
                    <li><a href="client.php">CLIENTS</a></li>
                    <li><a href="resources.php">RESOURCES</a></li>
                    <li><a href="news/index.php">NEWS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>  
        </nav>
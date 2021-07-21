<?php 
  //connecting to the database
  require_once('inc/connection.php');
  //checking the connection
  if (!$connection) {
    die("Error - Database Connection failed");
  }
  // checking if url parameter is present
  if(isset($_GET['blog_id']))
  {
    $blog_id = mysqli_real_escape_string($connection, $_GET['blog_id']);
    $query = "SELECT * FROM {$table} WHERE blog_id = {$blog_id} LIMIT 1";
    
  } else {
    //getting the latest blog post
    $query = "SELECT * FROM {$table} ORDER BY blog_id DESC LIMIT 1";
  }
  //executing the query
  $result_set = mysqli_query($connection, $query);
    //checking id the query is successful
    if ($result_set){
      if ( mysqli_num_rows($result_set) == 1){
        // prepare to display the record
        $blog_post = mysqli_fetch_assoc($result_set);
        $blog_title = stripcslashes($blog_post['blog_title']);
        $blog_date = stripcslashes($blog_post['blog_date']);
        $blog_text = stripcslashes($blog_post['blog_text']);
        $blog_img = $blog_post['blog_img'];
        $created_by = $blog_post['created_by'];
      }
    }

    //preparing a list of previous posts
    $query = "SELECT blog_id, blog_short_title FROM {$table} ORDER BY blog_id LIMIT 10";
    $result_set = mysqli_query($connection, $query);
    $blog_nav = '<ul>';
    if ( $result_set ) {
      if ( mysqli_num_rows($result_set) > 0 ){
        while ( $result = mysqli_fetch_assoc($result_set)){
          $blog_nav.= '<li><a href="news.php?blog_id='.$result['blog_id'].'"> ' . $result['blog_short_title'] . '</a></li>';
        }
      }
    }
    $blog_nav .= '</ul>';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/gv logo favicon green.svg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function(){
    $('.navigation').sticky();
  });
      window.addEventListener("load",function(){
    document.querySelector(".loader").classList.add("hidden")
})
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News - <?php echo $blog_title ?></title>
</head>
<body>
  <div class="loader">
         <img src="img/preloader.gif" alt="">
    </div>
<div class="navigation">
  <nav>
      <a href="/"><img src="img/GreenvibesLK.png">  </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="about-us.php">ABOUT US</a></li>
                    <li><a href="about-us.php">OUR GROUP</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="projects.php">PROJECTS</a></li>
                    <li><a href="client.php">CLIENTS</a></li>
                    <li><a href="resources.php">RESOURCES</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
</div>

<div class="add">
  <p>Advertising area</p>
</div><br><br><hr>

  <div class="newscontent">
    <div class="newsblog">
        <h1><?php echo $blog_title; ?></h1>
        <p class="newsdate">DATE POSTED :<?php echo $blog_date ?></p><br>
        <?php echo '<img src="img/'.$blog_img.'" alt="">'?>
        <?php echo $blog_text; ?> <br>
        <h5>Published by :  <?php echo $created_by; ?></h5>
    </div>


    <div class="newsnav">
      <h2>PREVIOUS NEWS</h2>
      <?php echo stripcslashes($blog_nav); ?>
      <br>

<!--       <div class="add addn">
        <p>Advertising area</p>
      </div>

      <div class="add addn">
        <p>Advertising area</p>
      </div> -->

    </div>
  </div>



<?php require_once('inc/latest-post.php') ?> 


<div class="add addn">
  <p>Advertising area</p>
</div><br><br>

<?php require_once('inc/footer.php') ?>
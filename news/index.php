<?php 
  //connecting to the database
  $connection = mysqli_connect('localhost','root','','news');
  //checking the connection
  if (!$connection) {
    die("Error - Database Connection failed");
  }
  // checking if url parameter is present
  if(isset($_GET['blog_id']))
  {
    $blog_id = mysqli_real_escape_string($connection, $_GET['blog_id']);
    $query = "SELECT * FROM blog WHERE blog_id = {$blog_id} LIMIT 1";
    
  } else {
    //getting the latest blog post
    $query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 1";
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

      }
    }
    //preparing a list of previous posts
    $query = "SELECT blog_id, blog_short_title FROM blog ORDER BY blog_id LIMIT 10";
    $result_set = mysqli_query($connection, $query);
    $blog_nav = '<ul>';
    if ( $result_set ) {
      if ( mysqli_num_rows($result_set) > 0 ){
        while ( $result = mysqli_fetch_assoc($result_set)){
          $blog_nav.= '<li><a href="index.php?blog_id='.$result['blog_id'].'"> ' . $result['blog_short_title'] . '</a></li>';
        }
      }
    }
    $blog_nav .= '</ul>';


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/news.css">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEWS</title>
</head>
<body>
<section class="navigation">
  <h4>Greenvibes Technologies</h4>
  <ul>
    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
    <li><a href=""><i class="fab fa-twitter"></i></a></li>
    <li><a href=""><i class="fab fa-instagram"></i></a></li>
    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
  </ul>
</section>

<div class="add">
  <p>Advertizing Area</p>
</div><br><br><hr>

  <div class="content">
    <div class="newsblog">
        <h1><?php echo $blog_title; ?></h1>
        <p class="newsdate">DATE POSTED :<?php echo $blog_date ?></p><br>
        <?php echo ($blog_text); ?>
    </div>


    <div class="newsnav">
      <h2>PREVIOUS NEWS</h2>
      <?php echo stripcslashes($blog_nav); ?>
    </div>
  </div>


<!-- <?php require_once('inc/footer.php') ?> -->
</body>
</html>


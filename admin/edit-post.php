<?php 
  //connecting to the database
  require_once('inc/connect.php');
  //checking the connect
  if (!$connect) {
    die("Error - Database connect failed");
  }
  // checking if url parameter is present
  if(isset($_GET['blog_id']))
  {
    $blog_id = mysqli_real_escape_string($connect, $_GET['blog_id']);
    $query = "SELECT * FROM {$table} WHERE blog_id = {$blog_id} LIMIT 1"; 
  } 
  //executing the query
  $result_set = mysqli_query($connect, $query);
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
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="icon" href="img/gv logo favicon green.svg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News - <?php echo $blog_title ?></title>
</head>
<body>
  <div class="container"><br><br>
     <a href="content-list.php" type="button" class="btn btn-primary" style="float:right;">BACK TO LIST</a>
    <div class="newsblog">
        <h1 class="blog_title" id="blog_date" data-id2=<?php echo $blog_id?> contenteditable><?php echo $blog_title; ?></h1>

        <p class="newsdate" id="blog_date" contenteditable>DATE POSTED :<?php echo $blog_date ?></p><br>
        <img src="../img/blog_img/<?php echo $blog_img ?>"  >
        <form action="edit-post.php?blog_id=<?php echo $blog_id ?>" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="image" id="">
                <input type="submit" name="submit">
        </form>


        <?php echo $blog_text; ?> <br>

        <h5>Published by :  <?php echo $created_by; ?></h5>


        <style>
            h1 {
                width: 100%;
            }

            img{
                width: 80%;
            }
        </style>
    </div>
</div>
<?php 
  
  if (isset($_POST['submit'])) {
    
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];

    $upload_to = '../img/blog_img/';

    $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name); 

    if($file_uploaded){
          echo '<script> alert("File Uplaoded !") </script>';
     $sql = "UPDATE {$table} SET blog_img= '{$file_name}' WHERE blog_id={$blog_id} ";

     if(mysqli_query($connect, $sql))  
          {  
              echo $sql;
          }


    }
  }
?>

<?php require_once('inc/fetch.php'); ?>
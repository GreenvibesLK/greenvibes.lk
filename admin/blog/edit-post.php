!
<?php 
  //connecting to the database
  require_once('inc/connection.php');
  //checking the connect
  if (!$connect) {
    die("Error - Database connect failed");
  }
  // checking if url parameter is present
  if(isset($_GET['blog_id']))
  {
    $blog_id = mysqli_real_escape_string($connect, $_GET['blog_id']);
    $query = "SELECT * FROM {$table} WHERE blog_id = {$blog_id} LIMIT 1";
    
  } else {
    //getting the latest blog post
    $query = "SELECT * FROM {$table} ORDER BY blog_id DESC LIMIT 1";
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
  <div class="container" class="btn btn-secondary">
     <a href="index.php">Back TO LIST</a>
    <div class="newsblog">
        <h1 class="blog_title" id="blog_date" data-id2=<?php echo $blog_id?> contenteditable><?php echo $blog_title; ?></h1>
        <p class="newsdate">DATE POSTED :<?php echo $blog_date ?></p><br>
        <?php echo '<img src="img/'.$blog_img.'" alt="">'?>
        <?php echo $blog_text; ?> <br>
        <h5>Published by :  <?php echo $created_by; ?></h5>
    </div>
</div>





<script>  
$(document).ready(function(){
    function fetch_data()  
    { 
        $.ajax({
            url:"edit-post.php",
            method:"POST", 
            success:function(data){
                    $('#live_data').html(data);  
            }  
        });  
    }

    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var blog_date = $('#blog_date').text();  
        var blog_title = $('#blog_title').text(); 
        var blog_short_title = $('#blog_short_title').text(); 
        if(blog_date == '')  
        {  
            alert("Enter Blog Date");  
            return false;  
        }  
        if(blog_title == '')  
        {  
            alert("Enter Blog Title");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{blog_date:blog_date, blog_title:blog_title, blog_short_title:blog_short_title},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
     function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                    $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }

    $(document).on('blur', '.blog_date', function(){  
        var id = $(this).data("id1");  
        var blog_date = $(this).text();  
        edit_data(id, blog_date, "blog_date");  
    });  
    $(document).on('blur', '.blog_title', function(){  
        var id = $(this).data("id2");  
        var blog_title = $(this).text();  
        edit_data(id,blog_title, "blog_title");  
    });
    $(document).on('blur', '.blog_short_title', function(){  
        var id = $(this).data("id3");  
        var blog_short_title = $(this).text();  
        edit_data(id,blog_short_title, "blog_short_title");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id4");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();
                }  
            });  
        }  
    });  
});  
</script>


<style>
     *{
          font-family: 'Poppins', sans-serif;
     }

     div.newsblog h1 {
     font-size: 48px;
     letter-spacing: -2px;
}

/*div.newsblog img {
 width: 100%;
}*/

div.newsblog h5{
     float: right;
}

p.newsdate {
     font-size:  14px;
}
</style>


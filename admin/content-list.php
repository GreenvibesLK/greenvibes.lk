<?php session_start(); ?>
<?php require_once('inc/header.php'); ?>
<?php require_once('inc/navi.php'); ?>
<?php require_once('inc/session.php'); ?>
<?php 
    if(isset($_POST['table'])){
       $table = $_POST['table']; 
       $_SESSION['table'] = $table;
   }   
       $table = $_SESSION['table'];

?>
<head> 
        <title>Contents</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head> 
    <body> 
        <div class="container">
            <br /> 
            <br />
             <a href="admin-area.php" type="button" class="btn btn-primary" style="float:right;">BACK TO ADMIN</a>
			<br /> <?php 
                    $heading = $table;

        switch ($heading) {
          case "blog":
            echo "<h4>Greenvibes News Panel</h4>";
            break;
          case "pblog":
            echo "<h4>Greenvibes Planting News Panel</h4>";
            break;
          case "eblog":
            echo "<h4>Greenvibes Edu News Panel</h4>";
            break;
          case "iblog":
            echo "<h4>Greenvibes Innovation News Panel</h4>";
            break;
          default:
            echo "null!";
        }
             ?>
			<div class="table-responsive">
				<p id="result"></p>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html> 

<script>  
$(document).ready(function(){
    function fetch_data()  
    { 
        $.ajax({
            url:"select.php",
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
        // if(blog_date == '')  
        // {  
        //     alert("Enter Blog Date");  
        //     return false;  
        // }  
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

<?php 
  require_once('inc/footer.php')
 ?>
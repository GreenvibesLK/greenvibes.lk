<html>  
    <head>  
        <title>ADMIN - GREENVIBES</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head> 
    <body> 
        <div class="container">  
            <br /> 
            <br />
			<br />
			<div class="table-responsive">
				<h3 align="center">ADMIN AREA GREENVIBES TECHNOLOGIES</h3><br />
                 <h3 align="center">POSTS LIST</h3>
				<span id="result"></span>
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
        var blog_date = $('#blog_date').date();  
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
        var blog_date = $(this).date();  
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
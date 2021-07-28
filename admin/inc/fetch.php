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
        var online = $('#online').text();
        var blog_text = $('#blog_text').text();
        var link = $('#link').text();
        var download = $('#download').text();
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
            data:{blog_date:blog_date, blog_title:blog_title, blog_short_title:blog_short_title, online:online, blog_text:blog_text, link:link, download:download},  
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

    $(document).on('blur', '.online', function(){  
        var id = $(this).data("id4");  
        var online = $(this).text();  
        edit_data(id,online, "online");  
    });  
  
    $(document).on('blur', '.blog_text', function(){  
        var id = $(this).data("id6");  
        var blog_text = $(this).text();  
        edit_data(id,blog_text, "blog_text");  
    });  
  
    $(document).on('blur', '.link', function(){  
        var id = $(this).data("id7");  
        var link = $(this).text();  
        edit_data(id,link, "link");  
    });  
  
    $(document).on('blur', '.download', function(){  
        var id = $(this).data("id8");  
        var download = $(this).text();  
        edit_data(id,download, "download");  
    });  

    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id5");  
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
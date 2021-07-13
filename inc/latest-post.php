<div class="latest">
<?php 
	//checking if the connection already created
	if (!isset($connection)){
		//connecting to the database
		$connection = mysqli_connect('localhost', 'root','','news');
		//checking the connection
		if ( !$connection ) {
			die("Error -Database connection failed");
		}

	}

	$query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 3";
	$result_set = mysqli_query($connection,$query);
	// checking if the query is successful
	if ( $result_set ){
		while ( $result = mysqli_fetch_assoc($result_set)){
			$blog_id = $result['blog_id'];
			$blog_title = $result['blog_short_title'];
			$blog_date = $result['blog_date'];
			$blog_text =  substr(strip_tags($result['blog_text']), 0, 100);
			$blog_img = $result['blog_img'];
			
			//preparing the html
			$latest_post = '<div class="latest_column"';
			$latest_post .= ' style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,1)), url(img/'.$blog_img.');">';
			$latest_post .= '<h5>' . $blog_title . '</h5>';
			$latest_post .= '<p>' . $blog_text . '...</p>';
			$latest_post .= '<h6>POST DATE:  ' . $blog_date . '</h6>';
			$latest_post .= '<a href="news.php?blog_id='.$blog_id.'" class="readmore"> Read more &raquo;</a>';
			$latest_post .= '</div>';
			echo $latest_post;
		}
	}
 ?>
 </div>


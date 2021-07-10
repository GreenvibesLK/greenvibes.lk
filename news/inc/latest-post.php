<?php 
	//checking if the connection already created
	if (!isset($connection)){
		//connecting to the database
		$connection = mysqli_connect('localhost', 'root','','blog');
		//checking the connection
		if ( !$connection ) {
			die("Error -Database connection failed");
		}

	}

	$query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 2";
	$result_set = mysqli_query($connection,$query);
	// checking if the query is successful
	if ( $result_set ){
		while ( $result = mysqli_fetch_assoc($result_set)){
			$blog_title = $result['blog_short_title'];
			$blog_date = $result['blog_date'];
			$blog_text = strip_tags(substr($result['blog_text'], 0, 150));
			//preparing the html
			$latest_post = '<div>';
			$latest_post .= '<h5>' . $blog_title . '</h5>';
			$latest_post .= $blog_date;
			$latest_post .= '</div>';
			$latest_post .= '<p>' . $blog_text . '</p>';
			$latest_post .= '<a href="index.php?blog_id='.$blog_id.'" class="readmore"> Read more &raquo;</a>';
			$latest_post .= '</div>';
			echo $latest_post;
			echo '<br><br>';
		}
	}
	
 ?>
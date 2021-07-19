<?php 
 require_once('inc/connect.php');
 $output = '';  
 $sql = "SELECT * FROM {$table} ORDER BY blog_id DESC";
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive borderless">
           <table class="table table-bordered">
            <tr>  
                     <th width="2%" >Id</th>  
                     <th width="8%">Blog Date</th>  
                     <th width="20%">Blog Title</th>
                     <th width="20%">Blog S-title</th>
                     <th width="5%">Delete</th>
                </tr>';  

 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
 while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                     <td align="center"><a href="edit-post.php?blog_id='.$row["blog_id"].'&table='.$table.'">'.$row["blog_id"].'</td>  

                     <td class="blog_date" data-id1="'.$row["blog_id"].'" contenteditable>'.$row["blog_date"].'</td>  

                     <td class="blog_title" data-id2="'.$row["blog_id"].'" contenteditable>'.$row["blog_title"].'</td> 

                     <td class="blog_short_title" data-id3="'.$row["blog_id"].'" contenteditable>'.$row["blog_short_title"].'</td>

                     <td><button type="button" name="delete_btn" data-id4="'.$row["blog_id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="blog_date" contenteditable></td>

                <td id="blog_title" contenteditable></td> 

                <td id="blog_short_title" contenteditable></td>

                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  

					<td id="blog_date" contenteditable></td>

					<td id="blog_title" contenteditable></td>

                         <td id="blog_short_title" contenteditable></td>

					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>

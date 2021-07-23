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
            echo "<h4>Planting News Panel</h4>";
            break;
          case "eblog":
            echo "<h4>Edu News Panel</h4>";
            break;
          case "iblog":
            echo "<h4>Innovation News Panel</h4>";
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



<?php 
    
    require_once('inc/fetch.php');
    require_once('inc/footer.php');

?>
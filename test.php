   
   <?php

    $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title>Names</title>
    	<link rel="stylesheet" href="style/bootstrap.min.css">
    	<link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="container">
    		
    	<?php
   $sql = 'SELECT * FROM users';
   mysqli_select_db($conn,'new_php');
   $retval = mysqli_query(  $conn,$sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   
   
   
   mysqli_close($conn);
   ?>
   <div class="row">
	
				<?php 
					
					while($row = mysqli_fetch_assoc($retval)) {
echo '<div class="col-lg-4 col-md-6 col-s">
			<a  class="part one high">';
				      echo "<h4 class='title'>Name:{$row['name']} </h4> ";
				      echo "<p >Description :{$row['description']} </p>  ";
echo '</a></div>';
				   }
				   

   			?>
				
		</div>

    	</div>
    </body>
    </html>
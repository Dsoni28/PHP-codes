<?php
function showcomment($connectdata){

      $sql = "SELECT * FROM *DATABASENAME* where id='$post_id' ";  //compare post id from database
			$result = mysqli_query($connectdata, $sql); //getting back the  result
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
				//Displaying the result  
					<div class="single-item">
						<h4><?php echo $row['name']; ?></h4> 
						<p><?php echo $row['comment']; ?></p>
					</div>
			
				}
			}

}
<?

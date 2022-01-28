<?php
function showcomment($connectdata){

      $sql = "SELECT * FROM *DATABASENAME* where id='$post_id' ";
			$result = mysqli_query($connectdata, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}

}
<?

function comment($connectdata){  //get the data
   
//when submit button get clicked..
  if (isset($_POST['submit'])) {
      $name = $_POST['username'];  //active user's name
      $post_id = $_POST['post_id']; //id of the post for comment 
      $comment = $_POST['comment']; //actual comment content
    
    $sql = "INSERT INTO *DATABASENAME* (postid, name, comment) 
              VALUES ('$post_id', '$name', '$comment')";  
      
    $result = mysqli_query($connectdata, $sql);
    
  }

}

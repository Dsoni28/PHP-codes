function comment($connectdata){
   
  if (isset($_POST['submit'])) {
      $name = $_POST['username']; 
      $post_id = $_POST['post_id']; 
      $comment = $_POST['comment']; 
    
    $sql = "INSERT INTO comments (postid, name, comment) 
              VALUES ('$post_id', '$name', '$comment')";
      
    $result = mysqli_query($connectdata, $sql);
    if ($result) {
      if($name=="admin"){
            header("location: admin_page.php ");                    
      }
      else{
            header("location: user_page.php ");
      }
    }
  }

}

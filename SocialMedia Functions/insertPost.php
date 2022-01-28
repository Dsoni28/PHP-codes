<?php
function insertPost($connectdata)
{
  include "account.php";
  $msg = "";
  
  // If upload button is clicked
  if (isset($_POST['submit'])) {
  
    $filename = $_FILES["my_image"]["name"];  //image file
    $username = $_SESSION["username"];   //active session username
    $tempname = $_FILES["my_image"]["tmp_name"];    
    $content = htmlentities($_POST['text']);  //text content added by user 
        $folder = './';
        move_uploaded_file($tempname, $folder.$filename);
  
        // insert all the submitted data from the form
        $sql = "INSERT INTO *DATABSENAME* (username, img_url, text, time) VALUES ('$username', '$filename', '$content', NOW())";
  
        // Execute query
        mysqli_query($connectdata, $sql);
          

  }
  
 
}
?>

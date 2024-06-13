<?php
    include 'connect.php';
    $image = $_FILES['image']['name'];
 
    if(isset($_POST['archive'])){
        $archive=1;
       }else{
        $archive=0;
       }
    $target_dir = 'images/'.$image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
    $query = "INSERT INTO film (category, title, about, content, image, archive) VALUES ('$category', '$title', '$about', '$content', '$image', 
   '$archive')";
    $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    mysqli_close($dbc);
  
    
    ?>
    
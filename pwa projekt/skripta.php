<?php
include 'connect.php';
if($dbc){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $about = $_POST['about'];
        $content=$_POST['content'];
        $category =$_POST['category'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = $_FILES['image'];
            $imageName = basename($image['name']);
            $imagePath = 'images/' . $imageName;
    
    
            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                
            } else {
                echo 'Uspjesno prenesena slika.';
                exit;
            }
        } else {
            echo 'Image upload error.';
            exit;
        }
    include 'unos.php';

}
}
?>
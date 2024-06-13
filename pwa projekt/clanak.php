<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="clanak.css">
</head>
<?php
include 'connect.php';
define('UPLPATH', 'images/');
?>
<body>
    <div class="main">
    <header> 
<div class="col-12 mali"></div>      
<div class="col-12 naslov" > <h1>Filmovi</h1></div>
<nav class="nav1">
<?php
    include 'nav.php';
    
    ?>

</nav>
</header>

        <section class="dis">
            
        <?php
            $query = "SELECT * FROM film WHERE archive=0 AND id='" . $_GET['id'] . "'";
            $result = mysqli_query($dbc, $query);
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            echo '<article>';
            
            echo '<h2>';
            echo $row['title'];
            echo '</h2>';
            echo '<div class="iimg">';
            echo '<img src="' . UPLPATH . $row['image'] . '"class="img2"';
            echo '</div>';
            echo '<div class="sazetak_body">';
            echo '<p class="about">';
            echo $row['about'];
            echo '</p>';
            echo '</div>';
            echo '<div class="tekst_body">';
            echo '<p class="tekst">';
            echo $row['content'];
            echo '</p>';
            echo '</div>';
            
            echo '</article>';
            }?>
            
        </section>

    
    </div>
    <footer class="footer">
    <div class="footer-content">
        <p>Tin Tikvić</p>
    </div>
</footer>
</body>
</html>
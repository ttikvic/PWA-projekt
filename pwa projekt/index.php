<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    
<header> 
<div class="col-12 mali"></div>      
<div class="col-12 naslov" > <h1>Filmovi</h1></div>
<nav class="nav1">
    <?php
    include 'nav.php';
    
    ?>

</nav>
</header>

<?php
include 'connect.php';
define('UPLPATH', 'images/');
?>
<section class="articles">
<section class="action">
<div class="articles-container">
    <h2 class="col-12">Akcija</h2>
<?php
$query = "SELECT * FROM film WHERE archive=0 AND category='Action' LIMIT 3";
$result = mysqli_query($dbc, $query);
 $i=0;
 while($row = mysqli_fetch_array($result)) {
    echo '<div class="article-item">';
    echo '<article>';
    echo'<div class="article2">';
    echo '<div class="sport_img">';
    echo '<img src="' . UPLPATH . $row['image'] . '"class="iimg"';
    echo '</div>';
    echo '<div class="media_body">';
    echo '<h4 class="title">';
    echo '<a href="clanak.php?id='.$row['ID'].'">';
    echo $row['title'];
    echo '</a></h4>';
    echo '</div></div>';
    echo '</article>';
    echo '</div>';
 }?> 
 </div>
</section>
<section class="action">
<div class="articles-container">
    <h2 class="col-12">Drama</h2>
<?php
$query = "SELECT * FROM film WHERE archive=0 AND category='Drama' LIMIT 3";
$result = mysqli_query($dbc, $query);
 $i=0;
 while($row = mysqli_fetch_array($result)) {
    echo '<div class="article-item">';
    echo '<article>';
    echo'<div class="article2">';
    echo '<div class="sport_img">';
    echo '<img src="' . UPLPATH . $row['image'] . '"class="iimg"';
    echo '</div>';
    echo '<div class="media_body">';
    echo '<h4 class="title">';
    echo '<a href="clanak.php?id='.$row['ID'].'">';
    echo $row['title'];
    echo '</a></h4>';
    echo '</div></div>';
    echo '</article>';
    echo '</div>';
 }?> 
 </div>
</section>
</section>


<footer class="footer">
    <div class="footer-content">
        <p>Tin Tikvić</p>
    </div>
</footer>
</body>
</html>
<?php
include 'connect.php';
define('UPLPATH', 'images/');

$category = isset($_GET['id']) ? $_GET['id'] : '';

if ($category) {
   
    $query = "SELECT * FROM film WHERE category='$category'";
    $result = mysqli_query($dbc, $query);
} else {
    
    die("No category specified.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi - <?php echo htmlspecialchars($category); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<header>
    <div class="col-12 mali"></div>      
    <div class="col-12 naslov"><h1>Filmovi</h1></div>
    <nav class="nav1">
        <?php include 'nav.php'; ?>
    </nav>
</header>

<section class="articles">
    <div class="articles-container">
        <h2 class="col-12"><?php echo htmlspecialchars($category); ?></h2>
        <?php
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="article-item">';
                echo '<article>';
                echo '<div class="article2">';
                echo '<div class="sport_img">';
                echo '<img src="' . UPLPATH . $row['image'] . '" class="iimg">';
                echo '</div>';
                echo '<div class="media_body">';
                echo '<h4 class="title">';
                echo '<a href="clanak.php?id=' . $row['ID'] . '">';
                echo $row['title'];
                echo '</a></h4>';
                echo '</div></div>';
                echo '</article>';
                echo '</div>';
            }
        } else {
            echo "<p>No articles found in this category.</p>";
        }
        ?>
    </div>
</section>

<footer class="footer">
    <div class="footer-content">
        <p>Tin Tikvić</p>
    </div>
</footer>
</body>
</html>

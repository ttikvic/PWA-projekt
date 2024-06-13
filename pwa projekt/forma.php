<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmovi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="unos.css"/>
    <script>
        function validateForm() {
            var category = document.getElementById('category').value;
            var title = document.getElementById('title').value.trim();
            var about = document.getElementById('about').value.trim();
            var content = document.getElementById('content').value.trim();
            var image = document.getElementById('image').value;

            if (category === "") {
                alert("Category must be selected.");
                return false;
            }
            if (title.length < 5 || title.length > 30) {
                alert("Title must be between 5 and 30 characters.");
                return false;
            }
            if (about.length < 10 || about.length > 100) {
                alert("Short content must be between 10 and 100 characters.");
                return false;
            }
            if (content === "") {
                alert("Main content must not be empty.");
                return false;
            }
            if (image === "") {
                alert("Image must be uploaded.");
                return false;
            }

            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(image)) {
                alert('Invalid file type. Please upload an image file (jpg, jpeg, png, gif).');
                document.getElementById('image').value = '';
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
<header> 
<div class="col-12 mali"></div>      
<div class="col-12 naslov" > <h1>Filmovi</h1></div>
<nav class="nav1">
    <?php include 'nav.php'; ?>
</nav>
</header>

<div class="form-container">
    <h1>Dodaj film</h1>
    <br>
    <form action="skripta.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <select class="form-control" id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="Action">Akcija</option>
                <option value="Drama">Drama</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Naslov filma</label>
            <input type="text" class="form-control" id="title" name="title" required><br>
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">Kratak tekst</label>
            <textarea class="form-control" id="about" name="about" rows="3" required></textarea><br>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea><br>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Slika</label>
            <input type="file" class="form-control" id="image" name="image" required><br>
        </div>
        <div class="form-item">
            <label>Spremiti u arhivu:
                <div class="form-field">
                    <input type="checkbox" id="archive" name="archive">
                </div>
            </label>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Predaj</button><br>
    </form>
</div>
<div class="jbg">
    <br>
</div>

<footer class="footer">
    <div class="footer-content">
        <p>Tin Tikvić</p>
    </div>
</footer>
</body>
</html>

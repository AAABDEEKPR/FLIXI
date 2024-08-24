<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Data Entry Form</title>
    <link rel="stylesheet" href="add_movie.css">
</head>


<body>
    <h1>Movie Data Entry</h1>
    <form action="movie_add_database.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Movie Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div class="form-group">
            <label for="rdate">Release Date:</label>
            <input type="date" id="rdate" name="rdate" required>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" required>
        </div>
        <div class="form-group">
            <label for="imglogo">Movie Cast Image (Upload):</label>
            <input type="file" id="imgcast" name="imgcast" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="runtime">Runtime (Minutes):</label>
            <input type="number" id="runtime" name="runtime" min="0" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="viewers">Viewers:</label>
            <input type="number" id="viewers" name="viewers" min="0" required>
        </div>
        <div class="form-group">
            <label for="imgpath">Movie Poster Image (Upload):</label>
            <input type="file" id="imgpath" name="imgpath" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="imglogo">Movie Logo Image (Upload):</label>
            <input type="file" id="imglogo" name="imglogo" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="videopath">Movie Video Link (URL):</label>
            <input type="text" rows="5" id="videopath" name="videopath" required>
        </div>
        <div class="form-group">
            <label for="latest">Latest Release?</label>
            <select name="latest" id="latest" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="trending">Trending?</label>
            <select name="trending" id="trending" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="todaybest">Today's Best Pick?</label>
            <select name="todaybest" id="todaybest" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="oscar">Oscar winner?</label>
            <select name="oscar" id="oscar" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Submit Movie Data</button>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>


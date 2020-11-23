<?php  include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publish news</title>
    <link rel="stylesheet" href="styles.css">

    <!-- <link rel="stylesheet" href="styles.css">-->
</head>

<body>

    <h1>Upload News</h1>
    <form>

    </form>
    <div container>
        <label for="writer">Writer</label>
        <input type="text" name="writer"><br>
        <label for="date">Date</label>
        <input type="date" name="date"><br>
        <label for="Category">Category</label>
        <select name="Category">
            <option value="Select">Select</option>
            <option value="Corona">Corona Virus</option>
            <option value="Crime">Crime</option>
            <option value="Politics">Politics</option>
            <option value="Sport">Sport</option>
            <option value="Tech">Technology</option>
        </select><br>
        <label for="heading">Heading</label>
        <input type="text" name="heading"><br>
        <label for="image">Image</label>
        <input type="file" accept="image/*" name="image"><br>
        <label for="content">Content</label>
        <textarea name="content" cols="30" rows="5" placeholder="Type your story here..."></textarea><br>
        <input type="submit" name="upload" value="Upload">
        <a href="index.php" class="btn-cancel">Cancel</a>
    </div>

</body>
<div id="footer">
    Copyright ©Lekgala & Kgothatso
</div>

</html>
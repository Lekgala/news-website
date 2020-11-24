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
    <form action="publish.php" method="POST">

   
    <div container>
    <label for="heading">Heading</label>
        <input type="text" name="heading"><br>
        <label for="writer">Writer</label>
        <input type="text" name="writer"><br>
        <label for="date">Date</label>
        <input type="date" name="date"><br>
        <label for="category">Category</label>
        <select name="category">
            <option value="Select">Select</option>
            <option value="business">Business</option>
            <option value="corona">Corona Virus</option>
            <option value="crime">Crime</option>
            <option value="politics">Politics</option>
            <option value="sport">Sport</option>
            <option value="technology">Technology</option>
        </select><br>
        <label for="content">Content</label>
        <textarea name="content" cols="30" rows="5" placeholder="Type your story here..."></textarea><br>
        <input type="submit" id="save" name="upload" value="Save"><br> <br>
        <a href="index.php" class="btn-cancel">Cancel</a>
    </div>
    </form>
</body>


</html>


    <?php
    //assign variables and sanitize input data
    include_once 'config.php';
    if (isset($_POST['upload'])) {
        $heading = santizeString ($_POST['heading']);
        $writer =santizeString ($_POST['writer']);
        $date = santizeString ($_POST['date']);
        $category= santizeString ($_POST['category']);
        $content = santizeString ($_POST['content']);
       

      //insert data to the database
        $sql = "INSERT INTO news (heading, writer,date,category,content)
     VALUES ('$heading','$writer','$date','$category','$content')";

        if (mysqli_query($conn, $sql)) {

            echo "<script>alert('Article Uploaded Successfully');document.location='index.php'</script>";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        //close connection
        mysqli_close($conn);
    }
    ?>
  


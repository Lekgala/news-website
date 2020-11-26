<?php 
include "header.php";

 ?>
 <?php
// Include config file
include 'config.php';

// Get the select query execution
$sql = "SELECT * FROM news";
$result = $conn->query($sql);

?>
<?php
    //Fetch Data form database
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?><br><br>
     <p><strong><?php echo $row['category']  ?></strong></i></p>
    <h1><?php echo $row['heading'] ?></h1>
    <h3><?php echo $row['content'] ?></h3>
    <p>Article by: <i><?php echo $row['writer']  ?></i></p>
    <p>Date: <em><?php echo $row['date'] ?></em></p>
<?php
      }
    } else {
      ?>
 <!--message that displays when there is no data in the table-->
      <p> <em>Sorry! No Contacts found!!</em> </p>

    <?php
    }
    ?>
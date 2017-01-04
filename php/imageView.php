<?php
include "connect.php";
$conn = connect();
//mysql_select_db("phppot_examples") or die(mysql_error());
//if (isset($_GET['image_id'])) {
    $sql = "SELECT postImg FROM posts WHERE postId=" . $_GET['num'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    //header("Content-type: " . $row['imageType']);
    echo $row['postImg'];
//}
mysqli_close($conn);
?>
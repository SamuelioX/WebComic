<?php
if (count($_FILES) > 0) {
//    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
//        $db = mysqli_connect("localhost", "root", "root", "prism");
    include "/php/connect.php";
    $db = connect();
//mysql_select_db ("phppot_examples");
//    $imgArray = $_FILES['userImage']['tmp_name'];
//    $imgCount = count($imgArray);
////        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
////        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
//    for ($i = 0; $i < $imgCount; $i++) {
//        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name'][$i]));
//        if ($_FILES['userImage']['tmp_name'][$i] != "") {
////        if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
//            $imageProperties = getimageSize($_FILES['userImage']['tmp_name'][$i]);
//            $sql = "INSERT INTO output_images(imageData) "
//                    . "VALUES('{$imgData}')";
//            $current_id = mysqli_query($db, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>");
//            if (isset($current_id)) {
//                header("Location: listImages.php");
//            }
//        }
//    }
}
?>
<HTML>
    <HEAD>
        <TITLE>Upload Image to MySQL BLOB</TITLE>
        <link href="css/index.css?index" rel="stylesheet"/>
    </HEAD>
    <BODY>
        <header></header>
        <div id="contentwrapper">
            <div id="content">
                <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
                    <label>Upload Image File:</label><br/>
                    <div id="text_body">
                        <input name="userImage" type="file" class="inputFile" /><br>

                        <label for="title">title:</label><input name="title" id="title" type="text" class="title"><br>
                        <label for="date">date:</label><input name="date" id="date" type="date" class="date"/><br>
                        <label for="body">body:</label><textarea name="body" id="textbody" type="text" class="body" style="width:300px;
    resize:none;
    overflow:hidden;
    font-size:18px;
    height:1.1em;
    padding:2px;"></textarea><br>

                        <input type="submit" value="Submit" class="btnSubmit" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</BODY>
</HTML>

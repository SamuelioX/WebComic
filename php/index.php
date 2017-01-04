<?php
//include 'databaseQuery.php';
$index = 0;
require_once( dirname(__FILE__) . '/databaseQuery.php' );

if (isset($_GET['num'])) {
    $data = new DatabaseQuery($_GET['num']);
} else {
    //index is set to the latest index
    $data = new DatabaseQuery(0);
}
//query database based on index
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <link rel="stylesheet" href="../css/index.css" media="screen"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Nelsy</title>
    </head>

    <body>
        <h1>WebComic</h1>
        <div id="wrapper">
            <div id="comic">
                <img src="imageView.php?num=<?php echo $data->getPostId() ?>"/>
            </div>
            <div id="lowernav">
                <div class="nav">
                    <a href="index.php" class="first" rel="start"></a>
                    <a href="index.php?num=<?php echo $data->getPrevPostId() ?>" class="prev" rel="prev"></a>
                    <a href="index.php?num=<?php echo $data->getNextPostId() ?>" class="next" rel="next"></a>
                    <a href="index.php?num=1" class="last" rel="index"></a>
                    <br></br>
                </div>
            </div>
            <h3><?php echo $data->getPostTitle() ?></h3>
            <footer> Copyright &copy; 2016 Samuel No<br>
                    <!-- Formats the email footer -->
                    <a href="mailto:samueliox@gmail.com">samueliox@gmail.com</a>
            </footer>
        </div>
    </body>

</html>

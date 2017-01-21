<?php
//include 'databaseQuery.php';
$index = 0;
require_once( dirname(__FILE__) . '/php/databaseQuery.php' );

if (isset($_GET['num'])) {
    $index = $_GET['num'];
//    $data = new DatabaseQuery($index);
}
//index is set to the latest index
$data = new DatabaseQuery($index);
//query database based on index
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <link rel="stylesheet" href="css/index.css?reload"/>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Nelsy</title>
    </head>

    <body>
        <h1>WebComic</h1>
        <div id="wrapper">
            <div id="comic">
                <img src="php/imageView.php?num=<?php echo $data->getPostId() ?>"/>
                <br>
            </div>

            <div id="lowernav">
                <div class="nav">
                    <?php $data->printNavigation($data->getPostId()) ?>
                </div>
            </div>


            <!--</div>-->

            <div id ="notes">
                <div id="title">
                    <h2><?php echo $data->getPostTitle() ?></h2>
                </div>
                <div id="date">
                    <?php $data->convertDate() ?>
                    <h3><?php echo $data->getPostDate() ?></h3>
                </div>
                <div id="text_body">
                    <?php echo $data->getPostBody() ?>
                </div>
            </div>
        </div>
        <footer> Copyright &copy; 2016 Samuel No<br>
                <!-- Formats the email footer -->
                <a href="mailto:samueliox@gmail.com">samueliox@gmail.com</a>
        </footer>
    </body>

</html>

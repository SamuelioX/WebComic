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
        <header><h1>WebComic</h1></header>
        <div id="contentwrapper">
            <div id="content">

                <div id="menu">
                    <div class="top_menu">
                        <ul>
                            <li><a href="http://www.whompcomic.com/comic/alligator-games"  rel="start">Home</a></li>
                            <li><a href="http://www.whompcomic.com/comic/conspiracy-weary"  rel="prev">Archives</a></li>
                            <li><a href="http://www.whompcomic.com/comic/conspiracy-weary"  rel="prev">About</a></li>
                            <li><a href="html/contact.html" rel="next">Contact</a></li>
                            <!--                        <li><a href="http://www.whompcomic.com/comic/merry-christmas"  rel="index">Last</a></li>-->
                        </ul>
                    </div>
                </div>

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
                <div id="bottomhalf">
                    <div id="leftside">
                        <p>Left Half</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    </div>
                    <div id="rightside">
                        <p>Right Half</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    </div>
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
            </div>
        </div>
        <footer> Copyright &copy; 2016 Samuel No<br>
                <!-- Formats the email footer -->
                <a href="mailto:samueliox@gmail.com">samueliox@gmail.com</a>
        </footer>
    </body>

</html>

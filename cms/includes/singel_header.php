<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/22/2016
 * Time: 9:56 AM
 */



if(!isset($_GET['post_id'])){
    header('Location:index.php');
}else{
    $post_id = $_GET['post_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Php BLog</title>

    <!-- Bootstrap core CSS -->
    <?php include 'assets/css.php'?>

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item " href="index.php">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item active" href="#">Singel post</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">PHP Tutorial BLOG</h1>
        <p class="lead blog-description">All about php tutorials, news and others.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
                <?php foreach ($singer_post as $the_post):?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $the_post['title']; ?></h2>
                    <p class="blog-post-meta"><?php echo date("F j, Y, g:i a", strtotime($the_post['date']))?>, Form: <a href="#"><?php echo $the_post['author']?></a></p>
                    <img src="assets/images/<?php echo  $the_post['image']?>" alt="<?php echo $the_post['title']; ?> image" class="post_img_full">
                    <p class="content"><?php echo $the_post['content']; ?></p>
                    <a href="index.php" class=" btn btn-default align-right" >Back to all posts!</a>

                    <!--                <pre><code>Example code block</code></pre>-->


                </div><!-- /.blog-post -->
                <hr>
            <?php endforeach; ?>


            <!--            <nav>-->
            <!--                <ul class="pager">-->
            <!--                    <li><a href="#">Previous</a></li>-->
            <!--                    <li><a href="#">Next</a></li>-->
            <!--                </ul>-->
            <!--            </nav>-->

        </div><!-- /.blog-main -->
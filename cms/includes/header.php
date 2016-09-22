<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/22/2016
 * Time: 9:56 AM
 */




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
            <a class="blog-nav-item active" href="index.php">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
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
            <?php foreach($posts as $post):?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
                <p class="blog-post-meta"><?php echo date("F j, Y, g:i a", strtotime($post['date']))?>, Form: <a href="#"><?php echo $post['author']?></a></p>
                <img src="assets/images/<?php echo  $post['image']?>" alt="" width="600">
                <p><?php echo $post['content']?></p>

<!--                <pre><code>Example code block</code></pre>-->


            </div><!-- /.blog-post -->
            <?php endforeach; ?>

            <!--            <nav>-->
            <!--                <ul class="pager">-->
            <!--                    <li><a href="#">Previous</a></li>-->
            <!--                    <li><a href="#">Next</a></li>-->
            <!--                </ul>-->
            <!--            </nav>-->

        </div><!-- /.blog-main -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog | Naztech Empire</title>
        <meta name="description" content="">
                <meta charset="utf-8">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="32x32">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/js/menu.js"></script>
        <script src="/js/overlay.js"></script>
        <script src="/js/code-copy.js"></script>
        <script src="/js/validate.min.js"></script>
        <script src="/js/validator.js"></script>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/code.css">
        <?php  
        include("scripts/login.php"); 
        ?>  
        <link rel="stylesheet" href="css/blog.css">
        <script src="js/blog.js"></script>
    </head>
    <body>
        <div class="slim">
            <?php require 'scripts/session.php'; ?>
            <header class="blur">
    <?php include('include/header.php') ?>
</header>
<?php include('include/hamburger.php') ?>
<section id="overlay"></section>
        </div>
        <main>
            <iframe src="" frameborder="0" id="blog_post"></iframe>
        </main>
        <footer>
            <?php include('include/footer.php') ?>
        </footer>
    </body>
</html>
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
        <script src="js/slideshow.js"></script>
        <script src="/js/contents.js"></script>
    </head>
    <body>
        <div class="slim">
        <header class="blur">
    <?php include('include/header.php') ?>
</header>
<?php include('include/hamburger.php') ?>
<section id="overlay"></section>
        </div>
        <main>
            <div id="hero">
                <div id="hero_image"></div>
                <div id="hero_text">
                    <h1>Blog</h1>
                </div>
            </div>
            
            <section id="blog_list">
                <div class="blog">
                    
                    <a href="blog_view.php?post=linux_101">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/linux_101/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 15, 2024 </h6>
                                <h4>Linux Series 101: Introduction to Linux <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Linux</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="blog_view.php?post=tkinter_gui">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/tkinter_gui/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 08, 2024 </h6>
                                <h4>Using Tkinter to Create GUI Apps in Python <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Software_Development</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="blog_view.php?post=creating_this_website">
                        <div class="post">
                            <div class="thumbnail" style="background-image: url('/img/blog/creating_this_website/thumbnail.jpg');"></div>
                            <div class="info">
                                <h6> Jan 01, 2024 </h6>
                                <h4>Streamlined Web Development: Embracing Jekyll for Content Management <!-- <h5> Nasser Abumariam </h5> --> </h4>
                                <h5>#Web_Development</h5>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </section>
        </main>
        <footer>
            <?php include('include/footer.php') ?>
        </footer>
    </body>
</html>
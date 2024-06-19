<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Software | Naztech Empire</title>
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
        <link rel="stylesheet" href="/css/index.css">
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
            <div id="hero">
                <div id="hero_image"></div>
                <div id="hero_text">
                    <h1>The Products Page is Currently</h1>
                    <h2>Under Developmemt</h2>
                </div>
            </div>
            <section>
                <h2>Software</h2>
                <div id="applications">
                    
                    <a href="/software/001-3d-printer-utility.html" class="tile" style="background-image: url('/img/software/3d_printer_utility/hero.jpg');">
                        <div class="tile_wrap">
                            <h3>3D Printer Utility</h3>
                            <img src="img/software/3d_printer_utility/logo.png">
                            <p>Connect to your 3D printer via serial. This lightweight desktop application allows you to effortlessly send and receive G-Code commands, monitor your printer's status, and even capture timelapses of your prints.</p>
                        </div>
                    </a>
                    
                    <a href="/software/002-image-optimizer.html" class="tile" style="background-image: url('/img/software/image_optimizer/hero.jpg');">
                        <div class="tile_wrap">
                            <h3>Image Optimizer</h3>
                            <img src="img/software/image_optimizer/logo.png">
                            <p>Locally optimize images for your website. Whether you prefer a one-at-a-time approach or need to process images in bulk, this tool ensures seamless optimization for improved website performance.</p>
                        </div>
                    </a>
                    
                    <!-- <a href="#" class="tile" style="background-image: url(img/projects/flashcards.jpg);">
                        <div class="tile_wrap">
                            <h3>Flashcards</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam laudantium, dolores cumque exercitationem quae sunt!</p>
                        </div>
                    </a>
                    <a href="#" class="tile" style="background-image: url(img/projects/workout.jpg);">
                        <div class="tile_wrap">
                            <h3>PixelPulse</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam laudantium, dolores cumque exercitationem quae sunt!</p>
                        </div>
                    </a> -->
                </div>
            </section>
        </main>
        <footer>
            <?php include('include/footer.php') ?>
        </footer>
    </body>
</html>
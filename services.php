<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Services | Naztech Empire</title>
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
        <link rel="stylesheet" href="/css/services.css">
        <script src="js/slideshow.js"></script>
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
                    <h1>Services</h1>
                </div>
            </div>
            <section>
                <p>Explore our services here and discover a diverse range of offerings, including web development and graphic design. Delve into our portfolio for a glimpse of the quality and creativity we bring to each project.</p>
                <!-- partners section -->
            </section>
            <section>
                <h2>Web Development</h2>
                <a href="http://mamalulus.naztechempire.com/index.php" class="site" style="background-image: url(img/services/websites/mamalulus.png);">
                    <div class="container"><div></div></div>
                    <div class="logo"></div>
                </a>
                <h2>Graphic Design</h2>

                <h2>Technological Consultation</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, laboriosam dicta! Non quas minima voluptatibus veniam, reiciendis provident velit amet consequatur omnis fuga. Modi vero, impedit veniam tempora maxime at optio. Nisi fugit, quibusdam minima corrupti tempora in modi alias.</p>
            </section>
        </main>
        <footer>
            <?php include('include/footer.php') ?>
        </footer>
    </body>
</html>
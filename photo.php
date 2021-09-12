<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
        <title>Photography</title>

        <!-- Normalize will work with all browsers -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    
        <!-- FontAwesome will be used for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/photo.css">
        <link rel="stylesheet" href="css/index.css">


        <!-- Import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    </head>

    <body>
        

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Introduction -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="intro" id="home">
            <h1 class="section_title section_title-intro-alt">
                 Photography
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                Capturing a moment
            </p>
            <img img src="img/whis-eagle.jpg" class="intro_img" alt="photography-title_img">
        </section> <!-- /section -->

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Gallery -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       
        <section class="my-section my-project-intro my-photo-intro gallery" id="gallery">
            <h2 class="section_project-title section_project-title-light">Gallery</h2>
            <button class="btn_gal btn_pre"><</button>
            <button class="btn_gal btn_nxt">></button>
            
        </section>

        <script>src="js/gallery.js"</script>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Gallery 2 -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-projects" id="gallery-sq">
            <h2 class="section_title section_title-projects">Some More Photos</h2>
            <p class="section_subtitle section_subtitle-projects"><?php echo $projects_tagline;?></p>

            <div class="gallery-square">
                <!-- gallery item 1 -->
                <a href="https://www.instagram.com/p/BSti--fgDYG/" class="gallery_sq_item">
                    <img src="img/blue-reflections.jpg" alt="" class="sq_gallery_img" >
                </a>
                
                <!-- gallery item 2 -->
                <a href="https://www.instagram.com/p/BXYG75vAoKL/" class="gallery_sq_item">
                    <img src="img/woodstock.jpeg" alt="" class="sq_gallery_img">
                </a>

                <!-- gallery item 3 -->
                <a href="https://www.instagram.com/p/BWisZ6lgwwC/" class="portfolio_item">
                    <img src="img/neon.jpeg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 4 -->
                <a href="https://www.instagram.com/p/Bh8wYqLlEtU/" class="portfolio_item">
                    <img src="img/mtn-harry.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 5 -->
                <a href="https://www.instagram.com/p/BlYP4QMF796/" class="portfolio_item">
                    <img src="img/bench-man.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 6 -->
                <a href="https://www.instagram.com/p/CJp5timhRaf/" class="portfolio_item">
                    <img src="img/yall-got-black-crows.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 7 -->
                <a href="https://www.instagram.com/p/BVnOh6nAJbk/" class="portfolio_item">
                    <img src="img/poland-portal.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 8 -->
                <a href="https://www.instagram.com/p/BWeylQEgrXh/" class="portfolio_item">
                    <img src="img/flower-boy.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 9 -->
                <a href="https://www.instagram.com/p/BgwV4QoB2Zp/" class="portfolio_item">
                    <img src="img/telegraph.jpeg" alt="" class="portfolio_img">
                </a>
                
                <!-- gallery item 10 -->
                <a href="https://www.instagram.com/p/BVUbzPYgu1S/" class="portfolio_item">
                    <img src="img/smoky-chris.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 11 -->
                <a href="https://www.instagram.com/p/CTiXplNpTqU/" class="portfolio_item">
                    <img src="img/whis-eagle.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 12 -->
                <a href="https://www.instagram.com/p/BT4iGYZgw2d/" class="portfolio_item">
                    <img src="img/surrey-sunset.jpeg" alt="" class="portfolio_img">
                </a>
                
                <!-- gallery item 13 -->
                <a href="https://www.instagram.com/liamk3nny/" class="portfolio_item">
                    <img src="img/walk-to-work.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 14 -->
                <a href="https://www.instagram.com/p/BVIkVPBAiDr/" class="portfolio_item">
                    <img src="img/graph-abstract.jpeg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 15 -->

                <a href="https://www.instagram.com/p/BUq2dTigvNx/" class="gallery_sq_item">
                    <img src="img/jack-bubbles.jpg" alt="" class="sq_gallery_img">
                </a>

                <!-- gallery item 16 -->
                <a href="https://www.instagram.com/p/B6JOxEUhmBf/" class="gallery_sq_item">
                    <img src="img/lost-lauren.jpg" alt="" class="sq_gallery_img">
                </a>

               <!-- gallery item 17 -->
                <a href="https://www.instagram.com/liamk3nny/" class="portfolio_item">
                    <img src="img/ire-rainbow.jpg" alt="" class="portfolio_img">
                </a>

                <!-- gallery item 18 -->
                <a href="https://www.instagram.com/p/CMYvERKhLuH/" class="portfolio_item">
                    <img src="img/snowy-nick.jpg" alt="" class="portfolio_img">
                </a>

                
            </div>    
        </section>

        <script src="js/gallery.js"></script>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>


    </body>

</html>
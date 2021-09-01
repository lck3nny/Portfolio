<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sneakers</title>

        <!-- Normalize will work with all browsers -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    
        <!-- FontAwesome will be used for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        <link rel="stylesheet" href="css/style.css">

        <!-- Import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Header Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "header.html";?>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Introduction -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="intro" id="home">
            <h1 class="section_title section_title-intro-alt">
                 Sneaker Stocks 
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                Buying, Selling, Trading
            </p>
            <img img src="img/snkrs_square.png" class="intro_img" alt="ow_blazer_vanilla">
        </section> <!-- /section -->

        <section>
            <h2>Profit vs Loss</h2>
            <img img src="files/sneaker_stocks1.png" class="intro_img" alt="graph of sneaker profit">
        </section>

        <script src="js/index.js"></script>
    </body>
</html>
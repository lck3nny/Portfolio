<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "content.php";?>
        <title>Pokémon Generation</title>

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
                Pokémon Generation
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                creation and categorization
            </p>
            <img img src="img/pokemon_square.png" class="intro_img" alt="picture of Liam smiling">
        </section> <!-- /section -->


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- How It Works -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       
        <section class="my-project-intro my-pokemon-intro" id="pokemon-intro">
            <h2 class="section_project-title section_project-title-light">How It Works</h2>
            <div class="project-descs">

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snkrs_explained[0]?></h3>
                    <p class="desc-body"><?php echo $snkrs_explained_body[0]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snkrs_explained[1]?></h3>
                    <p class="desc-body"><?php echo $snkrs_explained_body[1]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snkrs_explained[2]?></h3>
                    <p class="desc-body"><?php echo $snkrs_explained_body[2]?></p>
                </div> <!-- / project-desc -->

            </div> <!-- / project-descs -->
            
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Poster -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-mid" id="poster">
            <h2 class="section_project-title section_project-title-dark">How We Did It</h2>
            <div class="poke-cols">
                <div class="poke-col-1">
                    <h3 class="section_subtitle section_subtitle_mid"><?php echo $pokemon_how_subtitle[0]?></h3>

                    <p class="depop_body"><?php echo $snkrs_depop_body?></p>
                    <a href="https://developers.google.com/machine-learning/gan/gan_structure">
                        <img img src="img/gan.png" class="gan_img" alt="gan-architecture">
                    </a>
                </div>

                <div class="poke-col-2">
                    <h3 class="section_subtitle section_subtitle_mid"><?php echo $pokemon_how_subtitle[1]?></h3>

                    <p class="depop_body"><?php echo $snkrs_depop_body?></p>
                    <img img src="img/cnn.png" class="cnn_img" alt="gan-architecture">
                    
                </div>
            </div>
            
            
            
          
        </section>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Profits -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-end" id="profit">
            <h2 class="section_project-title section_project-title-light">How It Went</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $pokemon_results_subtitle?></h3>
            <p class="profit_body"><?php echo $snkrs_profit_body?></p>
            <p class="profit_body"><?php echo $snkrs_profit_body_2?></p>
            <img img src="img/deep_learning_poster.png" class="snkrs_stocks_img" alt="graph of sneaker profit">
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        <script src="js/index.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
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
       
        <section class="my-section my-project-intro my-pokemon-intro" id="pokemon-intro">
            <h2 class="section_project-title section_project-title-light">How It Works</h2>
            <div class="project-descs">

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $pokemon_about_heads[0]?></h3>
                    <p class="desc-body"><?php echo $pokemon_about_bodys[0]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $pokemon_about_heads[1]?></h3>
                    <p class="desc-body"><?php echo $pokemon_about_bodys[1]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $pokemon_about_heads[2]?></h3>
                    <p class="desc-body"><?php echo $pokemon_about_bodys[2]?></p>
                </div> <!-- / project-desc -->

            </div> <!-- / project-descs -->
            
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- How we did it -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-project-mid" id="how">
            <h2 class="section_project-title section_project-title-dark">How We Did It</h2>

            
            <div class="poke-cols">
                
                <h3 class="section_subtitle section_subtitle_mid gan_head"><?php echo $pokemon_how_subtitle[0]?></h3>

                <p class="poke-mid-body gan_body"><?php echo $pokemon_how_bodys[0]?></p>
                <a href="https://developers.google.com/machine-learning/gan/gan_structure" class="gan_img">
                    <img img src="img/gan.png" class="image_wrapper gan_img" alt="gan-architecture">
                </a>
                <br>
            

            
                <h3 class="section_subtitle section_subtitle_mid cnn_head"><?php echo $pokemon_how_subtitle[1]?></h3>

                <p class="poke-mid-body cnn_body"><?php echo $pokemon_how_bodys[1]?></p>
                <img img src="img/cnn.png" class="cnn_img" alt="gan-architecture">
                
                
            </div>
     
            
            
            
            
          
        </section>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Poster -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-end" id="poster">
            <h2 class="section_project-title section_project-title-light">How It Went</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $pokemon_results_subtitle?></h3>
            <p class="project-end_body"><?php echo $pokemon_results_bodys[0]?></p>
            <p class="project-end_body"><?php echo $pokemon_results_bodys[1]?></p>
            <img img src="img/deep_learning_poster.png" class="banner_img" alt="graph of sneaker profit">
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        
    </body>
</html>
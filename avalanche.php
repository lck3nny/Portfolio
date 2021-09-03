<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "content.php"?>
        <title>Avalanche Prdiction</title>

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
                Avalanche Prediction
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                with Machine Learning
            </p>
            <img img src="img/avalanche_square_light.png" class="intro_img" alt="picture of Liam smiling">
        </section> <!-- /section -->

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Networks -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-intro my-avi-intro" id="avi-intro">
            <h2 class="section_project-title section_project-title-light">How It Works</h2>
            <div class="project-descs">

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $avi_explained[0]?></h3>
                    <p class="desc-body"><?php echo $avi_explained_body[0]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $avi_explained[1]?></h3>
                    <p class="desc-body"><?php echo $avi_explained_body[1]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $avi_explained[2]?></h3>
                    <p class="desc-body"><?php echo $avi_explained_body[2]?></p>
                </div> <!-- / project-desc -->

            </div> <!-- / project-descs -->
        
        </section>

       

        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        <script src="js/index.js"></script>
    </body>
</html>
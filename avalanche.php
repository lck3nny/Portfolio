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
        <?php include "header.php";?>

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
        <!-- Machine Learning -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-intro my-avi-intro" id="avi-intro">
            <h2 class="section_project-title section_project-title-light">Machine Learning</h2>
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
        <!-- Avalanche Prediction -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="about-avalanches" id="about">
            <h2 class="section_title section_title-about">Avalanche Prediction</h2>
            <p class="section_subtitle section_subtitle-about"><?php echo $avi_prediction_tagline;?></p>

            <div class="avi-pred-body1">
                <p><?php echo $about_me_bodys[0];?></p>
                <p><?php echo $about_me_bodys[1];?></p>
            </div>
            <a href="https://avalanche.org/avalanche-encyclopedia/danger-scale/" class="avi-scale_img">
                <img src="img/danger_scale.jpg" alt="danger-scale" >
            </a>
            
            <div class="avi-pred-body2">
                <p><?php echo $about_me_bodys[0];?></p>
            </div>
            <a href="http://freeride-verbier.com/blog/avalanche-risk-4-verbier-safety-ski-tips/" class="avi_img">
                <img src="img/avalanche-model.jpg" alt="danger-scale" >
            </a>

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Data Visualisation -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-end" id="variables">
            <h2 class="section_project-title section_project-title-light">Data</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $avi_vairables_subtitle?></h3>
            
            <div class="avi-data-visualisation">
                <img img src="img/precip.png" class="avi-data-img" alt="Precip Visualisation">
                <img img src="img/temp.png" class="avi-data-img" alt="Temperature Visualisation">
                <img img src="img/wind.png" class="avi-data-img" alt="Wind Visualisation">
                <a href="https://hal.archives-ouvertes.fr/hal-00298992/document">
                    <img img src="img/temp-explained.png" class="avi-data-img" alt="Temp Range Explained">

                </a>

            </div>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Network Architecture -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-mid" id="architecture">
            <h2 class="section_project-title section_project-title-dark">Network Architecture</h2>
            <h3 class="section_subtitle section_subtitle_mid"><?php echo $avi_architecture_subtitle?></h3>
            <p class="depop_body"><?php echo $snkrs_depop_body?></p>
            <a href="https://www.bioinf.jku.at/publications/older/2604.pdf">
                <img img src="img/lstm.png" class="lstm_img" alt="screenshot of depop">
            </a>
           
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Results -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-end" id="results">
            <h2 class="section_project-title section_project-title-light">Results</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $avi_results_subtitle?></h3>
            
            <div class="avi-data-visualisation">
                <img img src="img/3fold_val_acc.jpg" class="avi-data-img" alt="Precip Visualisation">
                <img img src="img/roc.png" class="avi-data-img" alt="Temperature Visualisation">
            </div>
        </section>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        <script src="js/index.js"></script>
    </body>
</html>
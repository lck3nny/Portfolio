<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
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

        <section class="my-section my-project-intro my-avi-intro" id="avi-intro">
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
        <!-- About Avalanche Prediction -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section about-avalanches" id="about">
            <h2 class="section_title section_title-about">Avalanche Prediction</h2>
            <p class="section_subtitle section_subtitle-about"><?php echo $avi_prediction_tagline;?></p>

            <div class="avi-pred-body1">
                <p><?php echo $about_me_bodys[0];?></p>
                <p><?php echo $about_me_bodys[1];?></p>
            </div>
            <!-- changing things -->

            
            <a href="https://avalanche.org/avalanche-encyclopedia/danger-scale/" class="img-wrapper avi-img-1"> 
                <img src="img/danger_scale.jpg" alt="danger-scale">
            </a> 
            
            
            <div class="avi-pred-body2">
                <p><?php echo $about_me_bodys[0];?></p>
            </div>
            
            <a href="http://freeride-verbier.com/blog/avalanche-risk-4-verbier-safety-ski-tips/" class="img-wrapper avi-img-2"> 
                <img src="img/avalanche-model.jpg" alt="danger-scale" >
            </a> 
            

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Data Visualisation -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-project-end" id="data">

            <h2 class="section_project-title section_project-title-light">Data</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $avi_vairables_subtitle?></h3>
            <div class="avi-data">
                <p class="project-end_body"><?php echo $lorem_ipsum ?></p>
                
                <img img src="img/temp.png" class="avi-data_img" alt="Temperature Visualisation">

            </div>

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Network Architecture -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-project-mid" id="architecture">
            <h2 class="section_project-title section_project-title-dark">Network Architecture</h2>
            <h3 class="section_subtitle section_subtitle_mid"><?php echo $avi_architecture_subtitle?></h3>
            <p class="project-mid_body"><?php echo $avi_architecture_body?></p>
            <a href="https://www.bioinf.jku.at/publications/older/2604.pdf">
                <img img src="img/lstm.png" class="lstm_img" alt="screenshot of depop">
            </a>
           
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Results -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-project-end" id="results">
            <h2 class="section_project-title section_project-title-light">Results</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $avi_results_subtitle?></h3>
            
            <div class="avi-results">
                <p class="avi-results_body"><?php echo $lorem_ipsum ?></p>
                <p class="avi-results_body"><?php echo $lorem_ipsum ?></p>

                <a href="https://github.com/lck3nny/AvalancheLSTM" class="img-wrapper avi-results-img1"> 
                    <img img src="img/3fold_val_acc.png" class=" avi-results-img1" alt="Precip Visualisation">
                </a> 
                <a href="https://github.com/lck3nny/AvalancheLSTM" class="img-wrapper avi-results-img2"> 
                    <img img src="img/roc.png" class="img-wrapper avi-results-img2" alt="Temperature Visualisation">
                </a> 

            </div>
        </section>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

    </body>
</html>
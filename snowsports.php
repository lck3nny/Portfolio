<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
        <title>Surrey Snowsports</title>

        <!-- Normalize will work with all browsers -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    
        <!-- FontAwesome will be used for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" 
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />  
        <link rel="stylesheet" href="css/style.css">
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
                Surrey Snowsports
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                Freestyle Captain, Medalist
            </p>
            <img img src="img/susnow_square.jpg" class="intro_img" alt="picture of Liam smiling">
        </section> <!-- /section -->


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- How It Works -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
       
        <section class="my-section my-project-intro my-snowsports-intro" id="snkrs-intro">
            <h2 class="section_project-title section_project-title-light">What Was Involved</h2>
            <div class="project-descs">

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snow_explained[0]?></h3>
                    <p class="desc-body"><?php echo $snow_explained_bodys[0]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snow_explained[1]?></h3>
                    <p class="desc-body"><?php echo $snow_explained_bodys[1]?></p>
                </div> <!-- / project-desc -->

                <div class="project-desc">
                    <h3 class="desc-head"><?php echo $snow_explained[2]?></h3>
                    <p class="desc-body"><?php echo $snow_explained_bodys[2]?></p>
                </div> <!-- / project-desc -->

            </div> <!-- / project-descs -->
            

        </section>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- About Me -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-section about-me" id="about">
            <h2 class="section_title section_title-about">My Role</h2>
            <p class="section_subtitle section_subtitle-about"><?php echo $snow_role_subtitle;?></p>

            <div class="about-me_body">
                <p><?php echo $snow_role[0];?></p>
                <p><?php echo $snow_role[1];?></p>
            </div>

            <img src="img/medals.jpg" alt="picture of Liam smiling" class="about-me_img">


        </section>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Profits -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-project-end" id="trip">
            <h2 class="section_project-title section_project-title-light">Ski Trip</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $snow_trip_subtitle?></h3>
            <p class="project-end_body"><?php echo $snow_trip_bodys[0]?></p>
            <p class="project-end_body"><?php echo $snow_trip_bodys[1]?></p>
            <a href="https://www.youtube.com/watch?v=5ywpW3mItNA&t=182s">
                <img img src="img/tignes.jpg" class="banner_img" alt="graph of sneaker profit">
            </a>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        
    </body>
</html>
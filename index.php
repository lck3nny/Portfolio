<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
        <title><?php echo $my_name;?> Portfolio Website</title>
        
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
            <h1 class="section_title section_title-intro">
                Hi, I am <strong><?php echo $my_name;?></strong>
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                <?php 
                    echo $my_tagline;
                ?>
            </p>
            <img img src="img/snowy_liam_square.png" class="intro_img" alt="picture of Liam smiling">
        </section> <!-- /section -->

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- My Skills -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-section my-skills" id="skills">
            <h2 class="section_title section_title-skills">My Skills</h2>
            <div class="skills">

                <div class="skill">
                    <h3 class="skill-head"><?php echo $my_skills[0];?></h3>
                    <p class="skill-body"><?php echo $my_skills_bodys[0];?></p>
                </div> <!-- / skill -->

                <div class="skill">
                    <h3 class="skill-head"><?php echo $my_skills[1];?></h3>
                    <p class="skill-body"><?php echo $my_skills_bodys[1];?></p>
                </div> <!-- / skill -->

                <div class="skill">
                    <h3 class="skill-head"><?php echo $my_skills[2];?></h3>
                    <p class="skill-body"><?php echo $my_skills_bodys[2];?></p>
                </div> <!-- / skill -->

            </div> <!-- / skills -->
            <a href="#projects" class="btn">My Projects</a>

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- About Me -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-section about-me" id="about">
            <h2 class="section_title section_title-about">About Me</h2>
            <p class="section_subtitle section_subtitle-about"><?php echo $about_me_tagline;?></p>

            <div class="about-me_body">
                <p><?php echo $about_me_bodys[0];?></p>
                <p><?php echo $about_me_bodys[1];?></p>
            </div>

            <img src="img/snowy_liam.png" alt="picture of Liam smiling" class="about-me_img">


        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- My Projects -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="my-section my-projects" id="projects">
            <h2 class="section_title section_title-projects">My Projects</h2>
            <p class="section_subtitle section_subtitle-projects"><?php echo $projects_tagline;?></p>

            <div class="portfolio">
                <!-- portfolio item 1 -->
                <a href="avalanche.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[0];?></div>
                    <img src="img/avalanche_square_light.png" alt="" class="portfolio_img" >
                </a>

                <!-- portfolio item 2 -->
                <a href="pokemon.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[1];?></div>
                    <img src="img/pokemon_square3.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 3 -->

                <a href="photo.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[2];?></div>
                    <img src="img/stag_square.jpg" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 4 -->
                <a href="snowsports.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[3];?></div>
                    <img src="img/susnow_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 5 -->
                <a href="snkrs.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[4];?></div>
                    <img src="img/snkrs_square.png" alt="" class="portfolio_img">
                </a>

                <!-- portfolio item 6 -->
                <a href="connect.php" class="portfolio_item">
                    <div class='portfolio_text'><?php echo $my_projects[5];?></div>
                    <img src="img/developer.png" alt="" class="portfolio_img">
                </a>

                
                
            </div>    
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>

        
    </body>
</html>
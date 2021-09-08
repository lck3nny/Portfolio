<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "header.php";?>
        <title>Let's Connect</title>

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
                 Let's Connect!
            </h1>
            <p class="section_subtitle section_subtitle-intro">
                Want to collaborate?
            </p>
            <img img src="img/developer.png" class="intro_img" alt="ow_blazer_vanilla">
        </section> <!-- /section -->

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Contact Form -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <section class="my-section my-project-end" id="contact">
            <h2 class="section_project-title section_project-title-light">What's Your Idea?</h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $snkrs_profit_subtitle?></h3>
            <form class="contact_form" method="POST" action="index.php" id="contact-form">
                <p class="name"><label>Name:</label> <br> <input name="myName" type="text" /></p>
                <p class="email"><label>Email:</label> <br> <input style="cursor: pointer;" name="myEmail" type="text" /></p>
                <p class="msg_body"><label>Message:</label> <br>  <textarea name="myMessage" ></textarea> </p>
                <p class="submit_btn"><input type="submit" value="Send" /></p>
            </form>
        </section>

        


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>


    </body>
</html>
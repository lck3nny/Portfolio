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
        <link rel="stylesheet" href="css/contact.css">


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
            <h2 class="section_project-title section_project-title-light"><?php echo $contact_title;?></h2>
            <h3 class="section_subtitle section_subtitle_end"><?php echo $contact_subtitle;?></h3>
            <!-- <form class="contact-form" method="POST" action="contactform.php"> -->
            <form class="contact-form" method="POST" action="contactform.php">

            
                <input class="name" type="text" name="name" placeholder="Full Name">
                <input class="email" type="text" name="email" placeholder="Your E-Mail">
                <input class="subject" type="text" name="subject" placeholder="Subject">
                <textarea class="msg_body" name="message" placeholder="Your Message"></textarea>
                <button class="submit_btn" type="submit" name="submit">Send</button>
            </form>
        </section>

        <script src="js/contact.js"></script>
        


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Footer Import -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php include "footer.html";?>


    </body>
</html>
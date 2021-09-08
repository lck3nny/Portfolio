<?php
    $mailTo = "lck3nny.dev@gmail.com";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $headers = "From: " . $mailFrom;
        $txt = "You have received a message from " . $name . ".\n\n" . $message;

        mail($mailTo, $subject, $txt, $headers);

        header("Location: index.php?mailsent");
    }
?>
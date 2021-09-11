<?php
    $err = false;
    $urlParams = "";
    $nameErr = "";
    $emailErr = "";
    $subjectErr = "";
    $messageErr = "";

    if(isset($_POST['submit'])){
        $name = test_input($_POST['name']);
        $mailFrom = test_input($_POST['email']);
        $subject = test_input($_POST['subject']);
        $message = test_input($_POST['message']);
        $mailTo = "contact@liamkenny.com";

        if($name == null){
            $name_err = "Name is required";
            $urlParams .= "nErr=0&";
            $err = true;
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $name_err = "Name must only contain letters";
            $urlParams .= "nErr=inv&";
            $err = true;
        }
        
        if($mailFrom == null){
            $email_err = "Email address required";
            $urlParams .= "eErr=0&";
            $err = true;
        }elseif(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
            $email_err = "Invalid email address";
            $urlParams .= "eErr=inv&";
            $err = true;
        }

        if($subject == null){
            $subject_err = "Subject required";
            $urlParams .= "sErr=0&";
            $err = true;
        }

        if($message == null){
            $message_err = "Message required";
            $urlParams .= "mErr=0&";
            $err = true;
        }

        if(!$err){
            $headers = "From: " . $mailFrom;
            $txt = "You have received a message from " . $name . ".\n\n" . $message;

            mail($mailTo, $subject, $txt, $headers);
            header("Location: index.php?mailsent");
        }else{
            header("Location: contact.php?" . $urlParams);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
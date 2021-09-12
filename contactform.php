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
        $mailTo = "lck3nny@liamkenny.com";

        
        if($name == null){
            $name_err = "Name is required";
            $urlParams .= "nErr=none&";
            $err = true;
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $name_err = "Name must only contain letters";
            $urlParams .= "nErr=inv&";
            $err = true;
        }
        
        if($mailFrom == null){
            $email_err = "Email address required";
            $urlParams .= "eErr=none&";
            $err = true;
        }elseif(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)){
            $email_err = "Invalid email address";
            $urlParams .= "eErr=inv&";
            $err = true;
        }

        if($subject == null){
            $subject_err = "Subject required";
            $urlParams .= "sErr=none&";
            $err = true;
        }

        if($message == null){
            $message_err = "Message required";
            $urlParams .= "mErr=none&";
            $err = true;
        }
        

        if(!$err){

            /*
            $headers = "From: " . $mailFrom;
            $txt = "You have received a message from " . $name . ".\n\n" . $message;

            mail($mailTo, $subject, $txt, $headers);

            $mailSubject = "Mail From: " . $mailFrom . " - " . $subject;
            */

            header("Location: index.php?mailsent=True");

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
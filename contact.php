<?php
    if (isset($_POST['submit'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];


       $to = "estalien.sandy@outlook.com";
       $subject = "Online website inquiry";
       $message = $msg;
       $headers = $email;
       
       // Send email
       if(mail($to, $subject, $message, $headers)) {
           header("Location: ./index.html?status=email_sent_successfully");
           exit();
       } else {
        header("Location: ./index.html?status=error_sending_your_email");
        exit();
       }








    }


?>
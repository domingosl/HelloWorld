<?php
    if($_POST){
        $to = 'riten.s.v@gmail.com, example@example.com'; /*Put Your Email Address Here*/
        $subject = "Inquiry received from mobile website";
        $from_name = $_POST['fullname'];
        $from_email = $_POST['email'];
        $message = $_POST['message'] . "--- Contact Number: " . $_POST['contact'];
        $header = "From: $from_name <$from_email-->";
        mail($to, $subject, $message, $header);
        echo "1"; //should echo 0 if there is any error in above mail function. This is not included in demo version
    }
?>
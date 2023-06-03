<?php
    define("TITLE", "Contact Us| Practice Website");
    include('includes/header.php');


?>

<div class="contact">
<hr>
    <h1>Get in touch with us!</h1>

    <?php
        // Check for header injections
        function has_header_injection($str){
            return preg_match( "/[\r\n]/", $str );
        }

        if (isset($_POST['contact_submit'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $msg = $_POST['message'];

            //check to see if $name or $email have header injections
            if (has_header_injection($name) || has_header_injection($email)){
                die();
            }

            if( !$name || !$email || !$msg ){
                echo '<div><h4>All fields required.</h4><a href="contact.php" class="ctn-button">Go back and try again</a></div>';
                exit;
            }

            //Add the recipient email to a variable
            $to = "your@email.com";

            //Create a subject
            $subject = "$name sent a message via your contact form";

            //Construct the message
            $message = "Name: $name\r\n";
            $message .= "Email: $email\r\n";
            $message .= "Message: \r\n$msg";

            //If the subscribe checkbox was checked
            if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

                //Add a new line to the message
                $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
            }

            $message = wordwrap($message, 72);

            //Set the mail headers into a variable
            $headers = "MIME-VERSION: 1.0\r\n";
            $headers .="Content-type: text/plain: charset=iso-8859-1\r\n";
            $headers .="From: $name <email>\r\n";
            $headers .= "X-MSMail-Priority: High\r\n\r\n";

            //send the email
            mail($to, $subject, $message, $headers);
        
    ?>

    <!-- Show success message after email has sent -->
    <h5>Thanks for contacting Purity's</h5>
    <p>Please allow 24 hours for a response</p>
    <p?><a href="/final" class="ctn-button">&laquo; Go to Home Page</a></p>
    <?php } else{ ?>
    
    <form method="post" action="" class="contact-form">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name"> 

        <label for="email">Your email</label>
        <input type="email" id="email" name="email"> 

        <label for="message">Your message</label>
        <textarea id="message" name="message">Your Message</textarea>

        <div class="checked" >
            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe"> 
            <label for="subscribe">Subscribe to newsletter</label>
        </div>
        <input type="submit" class="ctn-button" name="contact_submit" value="Send Message">
      
    </form>
    <?php } ?>

</div>


<?php include('includes/footer.php'); ?>
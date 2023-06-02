<?php
    define("TITLE", "Contact Us| Practice Website");
    include('includes/header.php');

?>

<div class="contact">

<hr>
    <h1>Get in touch with us!</h1>
    
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

</div>


<?php include('includes/footer.php'); ?>
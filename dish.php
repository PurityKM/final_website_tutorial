<?php
    define("TITLE", "Menu Item| Practice Website");
    include('includes/header.php');     


    function strip_bad_chars($input){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
        return $output;
    }

    if(isset($_GET['item'])) {

        $menuItem = strip_bad_chars($_GET['item']);
        
        $dish = $menuItems[$menuItem];
    }

    //calculate a suggested tip
    function suggestedTip($price, $tip) {

        $totalTip = $price * $tip;
        echo sprintf('%.2f', $totalTip);
    }
?>

<div class="dish">
    <h1><?php echo $dish['title']; ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?></span> </h1>
    <p class="m-p"><?php echo $dish['blurb']; ?></p>
    <br>
    <p><strong>Suggested beverage: <?php echo $dish['drink']; ?> </strong></p>
    <p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish['price'], 0.20); ?></em></p>
</div>

<hr>

<a href="menu.php" class="button">&laquo; Back to Menu</a>


<?php include('includes/footer.php'); ?>
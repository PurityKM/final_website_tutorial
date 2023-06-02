<?php
    define("TITLE", "Menu| Practice Website");
    include('includes/header.php');

?>

    <div class="menu-items">

        <h1>Our Delicious Meals</h1>
        <p class="m-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore dolorum sapiente optio excepturi quis culpa repellendus. Repellat, perferendis officiis.</p>
        <p class="m-p">Click any menu of your desire to learn more about it.</p>

        <hr>

        <ul>
            <?php foreach($menuItems as $dish => $item) { ?>

                <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a><sup>$</sup><?php echo $item['price']; ?></li>
            <?php 
        } 
        ?>
        </ul>

    </div>
    <!-- <hr> -->


<?php include('includes/footer.php'); ?>
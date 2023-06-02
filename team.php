<?php
    define("TITLE", "Team| Practice Website");
    include('includes/header.php');
    include('includes/arrays.php');
?>
 
    <div class="team-members">
        <h1>Our Team at Purity's company</h1>
        <p class="m-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore dolorum sapiente optio excepturi quis culpa repellendus. Repellat, perferendis officiis.
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore dolorum sapiente optio excepturi quis culpa repellendus. Repellat, perferendis officiis.
        </p>

        <hr>

        <div class="member-ctn">
        <?php
            foreach($teamMembers as $member){
        ?>
       
            <div class="member">
                <img src="img/<?php echo $member['img']; ?>.jpg" alt="<?php echo $member['name']; ?>">
                <h2><?php echo $member['name']; ?></h2>
                <p class="p-b"></p><?php echo $member['bio']; ?></p>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
    <hr>
<?php include('includes/footer.php'); ?>
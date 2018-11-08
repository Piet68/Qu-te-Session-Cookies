<?php require 'inc/head.php'; ?>



<section class="cookies container-fluid text-center text-success" style="font-size: 2em;>
    <div class="row">
        <?php
        echo "<strong>Vous avez sélectionné :<br/></strong>";
        echo $_SESSION['panier']['1'] . "<strong> Pecan nuts !</strong><br/>";
        echo $_SESSION['panier']['2'] . "<strong> Chocolate chips !</strong><br/>";
        echo $_SESSION['panier']['3'] . "<strong> Chocolate cookie !</strong><br/>";
        echo $_SESSION['panier']['4'] . "<strong> M&Ms cookies !</strong>";
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>

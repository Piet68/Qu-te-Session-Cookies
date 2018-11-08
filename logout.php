/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 06/11/18
 * Time: 17:24
 */
<?php
session_start();
session_destroy();
header('Location: index.php');
?>




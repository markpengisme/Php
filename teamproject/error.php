<?php

require($_SERVER['DOCUMENT_ROOT'].'/function.php');

if (isset($_SESSION['message'])) {
    ?>

    <h1><?= $_SESSION['message'] ?></h1>
    <?php
}

?>
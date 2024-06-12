<?php require './libs/functions.php' ?>
<?php require './libs/vars.php' ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $deletedId = $_POST['game_ID'];
    if ($deletedId != null) {
        deleteLikeById($_SESSION['userid'], $deletedId);
        header('Location:favs.php');
    }
}

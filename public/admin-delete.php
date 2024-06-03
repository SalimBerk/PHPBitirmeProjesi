<?php require './libs/functions.php' ?>
<?php

$id = $_GET['id'];

if (deleteGameByID($id)) {
    header('Location:admin-panel.php');
} else {
    return 'Bir Hata Oluştu';
}

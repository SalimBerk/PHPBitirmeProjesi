<?php require './libs/functions.php' ?>
<?php

$id = $_GET['id'];

if (deleteCategoryByID($id)) {
    header('Location:admin-category-panel.php');
} else {
    return 'Bir Hata Oluştu';
}

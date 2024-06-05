<?php require './libs/functions.php' ?>
<?php require './libs/vars.php' ?>


<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getgamebyid = getGameByID($id);
    $categories = getAllCategories();
    $selectedcategoriesbygameid = getCategoriesByGameId($id);
    $getgamebyidparam = mysqli_fetch_assoc($getgamebyid);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gamename = trim($_POST['name']);
    $gameprice = trim($_POST['price']);
    $gamedescription = trim(htmlspecialchars($_POST['description']));
    $gameimageurl = trim($_POST['imageurl']);
    $categories = $_POST["categories"];
    $gameisactive = isset($_POST['isactive']) ? 1 : 0;

    $gameadminupdate = updateGameById($id, $gamename, $gameprice, $gamedescription, $gameimageurl, $gameisactive);
    if ($gameadminupdate) {

        if (count($categories) > 0) {
            addGameToCategories($id, $categories);
        } else {
            clearGameCategories($id);
        }

        header('Location:admin-panel.php');
    } else {
        echo "Güncelleme İşlemi Başarısız Oldu";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>

<body>
    <?php include '../public/Views/_navbar.php' ?>
    <section class="admin-panel  max-h-screen w-full   ">
        <div class="flex ">
            <div class=" text-center space-y-8 flex flex-col items-center py-8 admin-menu min-h-[800px]  w-1/6 ">
                <span class="text-3xl font-bold">Admin</span>
                <img src="./images/profile.jpg" class="admin-profile border-solid border-4 rounded-full bg-cover border-black h-40 w-40" alt="resim bulunamadı" />
                <!-- Admin Menu -->
                <?php include './Views/_admin-menu.php' ?>
            </div>

            <div class="admin-content m-h-[800px]  flex justify-center p-10 border-4  border-solid w-5/6">
                <div class="w-[600px] max-h-[800px] border-4  border-solid border-gray-500 rounded-lg">
                    <div class="user-menu flex items-center">
                        <a href="/PHPBitirmeProjesi/public/signup.php" class="login h-[80px] w-full    font-bold text-center text-lg p-5 bg-black text-white">
                            Oyun Güncelleme
                        </a>

                    </div>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="space-y-2  ">
                            <div class="mt-10 grid grid-cols-1 p-6 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="name" class="block text-md font-medium  leading-6 text-gray-900">Oyun Adı</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="name" value="<?php echo isset($getgamebyidparam) ? $getgamebyidparam['name'] : '' ?>" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>


                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="price" class="block text-md font-medium  leading-6 text-gray-900">Oyun Fiyatı</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="price" value="<?php echo isset($getgamebyidparam) ? $getgamebyidparam['price'] : '' ?>" id="price" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <div class="block sm:col-span-2 " style="overflow:scroll; height: 100px; overflow-x:hidden">
                                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategorileri Güncelle</label>
                                    <?php foreach ($categories as $c) : ?>
                                        <div class="flex gap-2">
                                            <label for="category_<?php echo $c['categoryID'] ?>"><?php echo $c["categoryname"] ?></label><br>
                                            <input type="checkbox" id="category_<?php echo $c['categoryID'] ?>" name="categories[]" value="<?php echo $c['categoryID'] ?>" <?php
                                                                                                                                                                            $isChecked = false;

                                                                                                                                                                            foreach ($selectedcategoriesbygameid as $s) {
                                                                                                                                                                                if ($s["categoryID"] == $c["categoryID"]) {
                                                                                                                                                                                    $isChecked = true;
                                                                                                                                                                                }
                                                                                                                                                                            }

                                                                                                                                                                            if ($isChecked) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }

                                                                                                                                                                            ?>>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                                <div class="sm:col-span-4">
                                    <label for="description" class="block text-md font-medium  leading-6 text-gray-900">Oyun Açıklaması</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="description" value="<?php echo isset($getgamebyidparam) ? $getgamebyidparam['description'] : '' ?>" id="description" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="imageurl" class="block text-md font-medium  leading-6 text-gray-900">Oyun Url</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="imageurl" value="<?php echo isset($getgamebyidparam) ? $getgamebyidparam['imageurl'] : '' ?>" id="imageurl" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-4 flex items-center ps-4 gap-x-5 space-x-3">
                                    <input id="isactive" name="isactive" type="checkbox" value="" <?php
                                                                                                    if ($getgamebyidparam['isactive']) {
                                                                                                        echo 'checked';
                                                                                                    }
                                                                                                    ?> <?php ?> class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-4 ml-4 text-sm font-medium text-gray-900 dark:text-gray-300">Aktiflik Durumu</label>
                                </div>


                                <input type="submit" value="Oyun Güncelle" class="col-span-full   text-center rounded-full h-14 mb-8    to-black  bg-gradient-to-l  text-xl text-white from-gray-300    ">

                                </input>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <?php include '../public/Views/_footer.php' ?>
</body>

</html>
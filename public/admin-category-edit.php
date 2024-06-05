<?php require './libs/functions.php' ?>
<?php require './libs/vars.php' ?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getcategorybyid = getCategoryByID($id);
    $getcategorybyidparam = mysqli_fetch_assoc($getcategorybyid);




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $categoryname = trim($_POST['categoryname']);

        $adminupdatecategory = updateCategory($id, $categoryname);
        if ($adminupdatecategory) {
            header('Location:admin-category-panel.php');
        } else {
            echo "Güncelleme İşlemi Başarısız Oldu";
        }
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
            <div class=" text-center space-y-8 flex flex-col items-center py-8 admin-menu h-[800px] border-4 border-solid w-1/6 ">
                <span class="text-3xl font-bold">Admin</span>
                <img src="./images/profile.jpg" class="admin-profile border-solid border-4 rounded-full bg-cover border-black h-40 w-40" alt="resim bulunamadı" />
                <!-- Admin Menu -->
                <?php include './Views/_admin-menu.php' ?>
            </div>

            <div class="admin-content min-h-[800px] flex justify-center p-10 border-4 border-solid w-5/6">
                <div class="w-[600px] min-h-[600px] border-4  border-solid border-gray-500 rounded-lg">
                    <div class="user-menu flex items-center">
                        <a href="/PHPBitirmeProjesi/public/signup.php" class="login h-[80px] w-full    font-bold text-center text-lg p-5 bg-black text-white">
                            Kategori Güncelle
                        </a>

                    </div>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="space-y-2   ">
                            <div class="mt-10 grid grid-cols-1 p-6 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="categoryname" class="block text-md font-medium  leading-6 text-gray-900">Kategori Adı</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" value="<?php echo isset($getcategorybyidparam) ? $getcategorybyidparam['categoryname'] : '' ?>" name="categoryname" id="categoryname" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Kategori Güncelle" class="col-span-full mt-4  text-center rounded-full h-14    to-black  bg-gradient-to-l  text-xl text-white from-gray-300    ">

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
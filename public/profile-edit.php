<?php

require "./libs/functions.php";
require "libs/vars.php";

$getimage = getImage($_SESSION['userid']);
if (isset($getimage)) {

    $get = mysqli_fetch_assoc($getimage);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image'])) {
        $imagename = $_FILES['image']['name'];
        $imagesize = $_FILES['image']['size'];
        $imagetmpname = $_FILES['image']['tmp_name'];
        $imageerror = $_FILES['image']['error'];
        $imagetype = $_FILES['image']['type'];
        $folder = './images/' . $imagename;

        if (move_uploaded_file($imagetmpname, $folder)) {
            $editimage = editImage($imagename, $_SESSION['userid']);
            $getimage = getImage($_SESSION['userid']);
            $get = mysqli_fetch_assoc($getimage);
            echo "<div class=' bg-green-900 border-t border-b text-center text-white font-bold  border-blue-500 px-4 py-3' role='alert'>
            
            <p class='text-2xl'>Resim Başarı İle Değiştirildi !</p>
          </div>";
        } else {
            echo "<div class='bg-red-400 border-t border-b text-center text-black font-bold  border-blue-500 px-4 py-3' role='alert'>
            
            <p class='text-2xl'>Resim Başarı İle Değiştirildi !</p>
          </div>";
        }

        if ($imageerror != 0) {
            echo 'Hata Yükleniyor ' . $imageerror;
        }

        if (!in_array($imagetype, ['image/jpeg', 'image/png'])) {
            echo 'Geçersiz Resim Uzantısı';
        }
    }
}








?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>

<body>
    <?php include '../public/Views/_navbar.php' ?>

    <section class="profile-edit">
        <div class="min-h-96 max-h-screen p-16">
            <div class="container flex justify-center items-center">
                <div class="w-[1200px] h-[600px] border-4  border-solid border-gray-500 rounded-lg">

                    <form action="profile-edit.php" method="POST" class="flex justify-between items-center my-10 mx-8  p-25" enctype="multipart/form-data">
                        <div>
                            <?php if (!empty($get['imagename'])) : ?>

                                <img src="../public/images/<?php echo $get["imagename"] ?>" alt="Resim Bulunamadı." class="h-[400px] w-[400px] rounded-full border-[6px]  border-yellow-400">
                            <?php else : ?>
                                <img src="../public/images/profile.jpg" alt="Resim Bulunamadı." class="h-[400px] w-[400px] rounded-full border-[6px]  border-black">
                            <?php endif; ?>


                        </div>
                        <div class="flex flex-col space-y-10">
                            <label class="text-2xl" for="image">Resim Seçin :</label>
                            <input type="file" id="image" name="image" required>
                            <br><br>
                            <input type="submit" name="profile-edit" class="bg-black text-white p-6 rounded-md" value="Upload">
                        </div>

                    </form>
                </div>
            </div>
            <?php if (isset($loginerr)) : ?>
                <div id="alertDanger" class="my-10 w-1/2 mx-auto opacity-100 transition duration-300 ease-in-out   ">
                    <div role="alert" class="rounded-full">
                        <div class="bg-red-500 text-center text-white font-bold rounded-t px-4 py-2  ">
                            HATA !
                        </div>
                        <div class="border border-t-0 text-center border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p><?php echo $loginerr ?></p>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>





    <?php include '../public/Views/_footer.php' ?>

</body>

</html>
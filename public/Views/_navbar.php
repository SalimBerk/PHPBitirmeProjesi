<?php

if (!empty($_SESSION['userid'])) {
    $getprofile = getImage($_SESSION["userid"]);
    $get = mysqli_fetch_assoc($getprofile);
}





if (isset($_GET['name'])) {
    $nameparam = trim($_GET["name"]);
    $filteredgames = getGamesFilteredBySearch($nameparam);
}



?>

<header class="bg-white border-4 border-solid text-black py-12 w-full  ">
    <div class="container flex items-center justify-between space-x-8 lg:space-x-16">
        <a href="/PHPBitirmeProjesi/public/" class=" pl-4 md:pl-0 sm:ml-2 text-2xl lg:text-xl font-bold text-black whitespace-nowrap relative">Oyun Günlüğ<i class="fa-solid fa-gamepad "></i><span class="absolute top-[-21px] right-[8px]">..</span></a>
        <div class="block md:hidden">
            <div class="space-y-1 cursor-pointer">
                <div class="w-8 h-1 rounded-full"></div>
                <div class="w-8 h-1 rounded-full"></div>
                <div class="w-8 h-1 rounded-full"></div>
                <div class="w-8 h-1 rounded-full"></div>
            </div>
        </div>
        <nav class="hidden md:flex justify-between flex-1 ">
            <div class="flex items-center lg:text-lg font-bold space-x-4 lg:space-x-8">
                <a href="#" class="text-black whitespace-nowrap">Anasayfa</a>
                <a href="#" class="text-black whitespace-nowrap">Yeni Oyunlar</a>
                <a href="#" class="text-black whitespace-nowrap">Hakkımızda</a>



            </div>
            <div class="flex items-center space-x-4 lg:space-x-8 whitespace-nowrap">
                <form action="/PHPBitirmeProjesi/public/index.php" method="GET">
                    <div class="border-r ">
                        <input type="text" name="name" value="<?php echo isset($nameparam) ? $nameparam  : '' ?>" class="bg-white mx-2 p-2 border-black border focus:outline-none w-24 md:w-44  rounded-lg">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <?php if (isset($_SESSION["username"]) && $_SESSION["username"] != "admin") : ?>
                    <div class="flex items-center space-x-4 md:space-x-12 text-lg">
                        <a href="/PHPBitirmeProjesi/public/favs.php" class="font-bold transition-all ease-in-out hover:text-red-500 ] "><i class="fa-solid fa-heart "> favs </i></a><span style="width: 30px; height:30px;" class="bg-red-400 rounded-full text-center text-white"><?php $total = getLikeTotalByUserId($_SESSION['userid']);
                                                                                                                                                                                                                                                                                    $total = mysqli_fetch_assoc($total);
                                                                                                                                                                                                                                                                                    echo $total['total_likes'];  ?></span>
                        <a href="/PHPBitirmeProjesi/public/logout.php" class="font-bold transition-all ease-in-out hover:text-red-500 ]">Logout</a>
                        <a href="/PHPBitirmeProjesi/public/profile-edit.php" class=" bg-white font-bold py-1 px-1 flex gap-4 items-center  whitespace-nowrap">Hoş Geldiniz, <?php echo $_SESSION["username"] ?><img src="/PHPBitirmeProjesi/public/images/<?php echo $get['imagename'] ?>" alt="Resim Bulunamadı." style="height: 50px; " class="rounded-full  border-4  border-black border-solid "></a>


                    </div>
                <?php elseif (isset($_SESSION["username"]) && $_SESSION["username"] == "admin" && $_SESSION["password"] == "admin1234") : ?>
                    <div class="flex items-center space-x-4 md:space-x-12 text-lg">
                        <a href="/PHPBitirmeProjesi/public/favs.php" class="font-bold transition-all ease-in-out hover:text-red-500 ]"><i class="fa-solid fa-heart "> favs </i></a><span style="width: 30px; height:30px;" class="bg-red-400 rounded-full text-center text-white"><?php $total = getLikeTotalByUserId($_SESSION['userid']);
                                                                                                                                                                                                                                                                                    $total = mysqli_fetch_assoc($total);
                                                                                                                                                                                                                                                                                    echo $total['total_likes'];  ?></span>
                        <a href="/PHPBitirmeProjesi/public/logout.php" class="font-bold transition-all ease-in-out hover:text-red-500 ]">Logout</a>
                        <a href="/PHPBitirmeProjesi/public/profile-edit.php" class=" bg-white font-bold py-1 px-1 flex gap-4 items-center   whitespace-nowrap">Hoş Geldiniz, <?php echo $_SESSION["username"] ?><img src="/PHPBitirmeProjesi/public/images/<?php echo $get['imagename'] ?>" alt="Resim Bulunamadı." style="height: 50px; " class="rounded-full  border-4  border-black border-solid "></a>
                        <a href="/PHPBitirmeProjesi/public/admin-panel.php" class=" bg-white font-bold py-1 px-1   whitespace-nowrap">Admin Panel</a>

                    </div>
                <?php else : ?>
                    <div class="flex items-center space-x-4 md:space-x-12 text-lg">

                        <a href="/PHPBitirmeProjesi/public/login.php" class="font-bold">Giriş Yap</a>
                        <a href="/PHPBitirmeProjesi/public/signup.php" class=" bg-white font-bold py-1 px-1 hover:bg-stone-500  hover:text-white hover:border-black  border-2 rounded-sm cursor-pointer transition duration-500 whitespace-nowrap">Kayıt Ol</a>

                    </div>
                <?php endif; ?>


            </div>



        </nav>
        <div class="invisible lg:visible nav-animate">
            <span class="first-item font-bold">Sadece Oyun Severlere</span>
            <span class="last-item font-bold"></span>

        </div>
        <button><i class="fa fa-bars fa-2x pr-4  visible md:invisible"></i></button>
    </div>

</header>
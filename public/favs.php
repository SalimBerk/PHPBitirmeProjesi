<?php require './libs/functions.php' ?>
<?php require "libs/vars.php"; ?>
<?php

$result = getLikesListById($_SESSION['userid']);




?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>




<body>

    <?php include '../public/Views/_navbar.php' ?>

    <section class="fav-list min-h-screen">
        <div class="container flex mt-10 justify-center font-bold text-4xl text-[#f87171] gap-x-5 bg-black p-10">FAVORİ OYUNLAR LİSTESİ <i class="fa-solid fa-heart "></i></div>
        <div class="grid lg:grid-cols-3 place-items-center space-y-10 p-4 ">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="card  w-80 max-h-[600px] border-4 rounded-lg border-black  ">
                    <div class="card-title text-center font-bold text-white  text-lg bg-black ">
                        <span><?php echo substr($row['name'], 0, 25) ?><?php echo strlen($row['name']) > 25 ? '...' : '' ?></span>

                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="<?php echo $row['imageurl'] ?>" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-3 mx-auto my-2  flex-wrap">
                        <a href="/PHPBitirmeProjesi/public/game-detail.php?id=<?php echo $row['gameID'] ?>" class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></a>

                        <form action="delete_fav.php" class="flex justify-center flex-col" method="post">
                            <input type="hidden" name="game_ID" id="game_ID" value="<?php echo $row['gameID'] ?>">
                            <span class=" bg-green-500 p-1 rounded-lg mt-3  text-white text-nowrap "><?php echo $row['likedate'] ?> oyun favorilere eklendi.</span>
                            <button type='submit' class="bg-red-500 p-1 rounded-lg mt-3 text-center    text-white text-nowrap">Favorilerden Çıkar <i class="fa fa-sign-out ml-4" aria-hidden="true"></i></button>
                        </form>

                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#808080] p-1 rounded-full text-white">Fiyat: <span><?php echo $row['price'] ?>$ </span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>


        </div>


    </section>




    <?php include '../public/Views/_footer.php' ?>

</body>


</html>
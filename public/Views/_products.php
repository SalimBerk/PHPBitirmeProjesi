<?php

if (isset($_GET['id'])) {
    $result = getGamesByCategoryID($_GET['id']);
    if (mysqli_num_rows($result) < 1) {
        echo "<div class='container block'>
        <h2 class='font-bold text-2xl py-4 my-4 text-center'>Tıklanan Kategoriye Ait Herhangi Bir Oyun Bilgisi Bulunamadı.</h2>
        <br><br>
       </div> <i class='fa-solid fa-circle-question fa-8x'></i>";
    }
} else if (isset($_GET['name'])) {
    $result = $filteredgames;
    if (mysqli_num_rows($result) < 1) {
        echo "<div class='container block'>
        <h2 class='font-bold text-2xl py-4 my-4 text-center'>Aranan Oyuna Ait Herhangi Bir Bilgi Bulunamadı.</h2>
        <br><br>
       </div> <i class='fa-solid fa-circle-question fa-8x'></i>";
    }
} else {
    if (!is_null($clickeditem)) {
        $result = getGamesByPage($clickeditem);
    }
}



while ($row = mysqli_fetch_assoc($result)) :
?>
    <?php if ($row['isactive']) : ?>
        <div class="card  w-80 max-h-[600px] border-4 rounded-lg border-black">
            <div class="card-title text-center font-bold text-white  text-lg bg-black ">
                <span><?php echo substr($row['name'], 0, 25) ?><?php echo strlen($row['name']) > 25 ? '...' : '' ?></span>

            </div>
            <div class=" card-image m-4  border-2 border-black rounded-xl">
                <img src="<?php echo $row['imageurl'] ?>" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
            </div>
            <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                <a href="/PHPBitirmeProjesi/public/game-detail.php?id=<?php echo $row['gameID'] ?>" class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></a>

                <form action="index.php" method="post">
                    <input type="hidden" name="game_ID" id="game_ID" value="<?php echo $row['gameID'] ?>">
                    <button type="submit" class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
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



    <?php endif; ?>
<?php endwhile; ?>
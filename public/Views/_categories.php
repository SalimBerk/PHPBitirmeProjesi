<?php

$categories = getAllCategories();

?>
<div class="  bg-[#78716c] w-full rounded-lg p-6 h-[800px]" style="overflow: scroll; scroll-behavior:smooth; overflow-x:hidden;">
    <div class="w-full text-center mb-4">
        <span class="mb-8 text-md lg:text-2xl font-bold text-white ">KATEGORİLER</span>
    </div>



    <ul class="   list-disc list-inside ">
        <a href="/PHPBitirmeProjesi/public/index.php">
            <li class="border-2 font-bold  border-white rounded-md list-none text-center text-sm text-wrap  text-white whitespace-normal ">Tüm Kategoriler</li>
        </a>
        <?php while ($category = mysqli_fetch_assoc($categories)) : ?>

            <a href="/PHPBitirmeProjesi/public/index.php?id=<?php echo $category['categoryID'] ?>" class="p-3">
                <li class="border-2 font-bold  border-white rounded-md list-none text-center text-sm text-wrap  text-white whitespace-normal "><?php echo $category['categoryname'] ?></li>
            </a>
    </ul>
<?php endwhile; ?>
</div>
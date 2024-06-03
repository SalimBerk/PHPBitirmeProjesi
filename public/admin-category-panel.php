<?php require './libs/functions.php' ?>
<?php

$getcategories = getAllCategories();


?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>

<body>
    <?php include '../public/Views/_navbar.php' ?>
    <section class="admin-panel  max-h-screen w-full   ">
        <div class="flex ">
            <div class=" text-center space-y-8 flex flex-col items-center p-10 admin-menu min-h-[800px] border border-solid w-1/6 ">
                <span class="text-3xl font-bold">Admin</span>
                <img src="./images/profile.jpg" class="admin-profile border-solid border-4 rounded-full bg-cover border-black h-40 w-40" alt="resim bulunamadı" />
                <!-- Admin Menu -->
                <?php include './Views/_admin-menu.php' ?>
            </div>

            <div class="admin-content h-[800px]  p-10 border-4 border-solid w-5/6" style="overflow: scroll; height:800px; overflow-x:hidden;">
                <table class="table-auto border-collapse border border-slate-400  w-full mx-auto  ">
                    <thead>
                        <tr>

                            <th class="border border-slate-500 text-3xl p-1">KATEGORİLER</th>

                            <th class="border border-slate-500"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center ">
                        <?php while ($row = mysqli_fetch_assoc($getcategories)) : ?>
                            <tr class="border border-slate-500">
                                <td class="border p-2 border-slate-500"><?php echo "<span class=' font-bold border-2 border-solid border-black w-9 p-1 rounded-xl bg-purple-600  text-white '>" . $row['categoryname'] . "</span>" ?></td>

                                <td class="p-2">
                                    <a href="admin-category-edit.php?id=<?php echo $row['categoryID'] ?>" class=" bg-yellow-400 text-md  p-1 w-36  font-bold text-black rounded-md ">Güncelle</a>
                                    <a href="admin-delete-category.php?id=<?php echo $row['categoryID'] ?>" class=" bg-red-400 text-md p-1 w-36  font-bold text-black rounded-md ">Sil</a>
                                </td>

                            </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <?php include '../public/Views/_footer.php' ?>
</body>

</html>
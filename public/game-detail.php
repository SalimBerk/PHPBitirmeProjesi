<?php
require './libs/functions.php'

?>
<?php

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location:index.php');
}
$result = getGameByID($_GET['id']);
$game = mysqli_fetch_assoc($result);
if (!$game) {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>


<body>
    <?php include '../public/Views/_navbar.php' ?>

    <section class="game-detail w-full min-h-screen p-10 z-30 " style="background-image: url(../public/images/back.jpeg); background-repeat:no-repeat; background-size:cover; background-position:center right; ">
        <div class="game-card rounded-md mt-28 mx-auto p-5 border-4 border-black border-solid md:w-1/2 bg-white">

            <div class="container  md:flex  items-center">
                <div class="game-card-image  ">
                    <img src="<?php echo $game['imageurl'] ?>" class="md:h-[300px] h-[120px]  w-1/2 rounded-full border-dashed border-4 border-black" />
                </div>
                <div class="game-card-detail md:w-1/2 p-3 ">
                    <article class="prose lg:prose-xl space-y-4">
                        <h1 class="font-bold text-4xl"><?php echo $game['name'] ?></h1>
                        <div class="text-md">
                            <p class="text-xl">
                                <?php echo $game['description'] ?>
                            </p>


                        </div>


                    </article>
                </div>

            </div>
        </div>

    </section>

    <?php include '../public/Views/_footer.php' ?>
</body>

</html>
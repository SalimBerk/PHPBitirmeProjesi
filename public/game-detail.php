<?php require './libs/vars.php' ?>
<?php
require './libs/functions.php'


?>
<?php

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location:index.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commenttitle = $_POST['commenttitle'];
    $commentcontent = $_POST['commentcontent'];
    $addcomment = addComment($commenttitle, $commentcontent, $_SESSION["userid"], $_GET['id']);
    if ($addcomment) {
        header('Location:game-detail.php' . '?id=' . $_GET['id']);
    }
}

$getcomments = getComments($_GET['id']);
$getgame = getGameByID($_GET['id']);


$game = mysqli_fetch_assoc($getgame);

if (!$game) {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>


<body>
    <?php include '../public/Views/_navbar.php' ?>

    <section class="game-detail w-full min-h-screen p-10  " style="background-image: url(../public/images/back.jpeg); background-repeat:no-repeat; background-size:cover; background-position:center right; ">
        <div class="game-card rounded-md mt-5 mx-auto p-5 border-4 border-black border-solid md:w-1/2 bg-white">

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
        <div class="game-card bg-gray-500 rounded-md mt-10 mx-auto p-5 border-4 border-black border-solid md:w-3/4 md:h-128 ">

            <div class="container    flex flex-col min-h-80 max-h-128  space-y-10">
                <div class="comments-field space-y-5  w-full min-h-80 max-h-80 bg-blue-400   rounded-lg border-solid border-4 border-black" style="overflow:scroll; overflow-x:hidden;">
                    <?php if (mysqli_num_rows($getcomments) > 0) : ?>
                        <?php while ($getcomment = mysqli_fetch_assoc($getcomments)) : ?>

                            <div class=" h-[120px] bg-white border-4 mt-4 w-1/2 mx-auto border-solid border-black rounded-full">

                                <div class="container  flex justify-between   px-10">
                                    <div class="text-center space-y-2">
                                        <span class="mt-2 font-bold "><?php echo $getcomment['username'] ?></span>
                                        <img src="../public/images/spiderman.jpeg" alt="resim bulunamadı" class="h-[60px] my-3 rounded-full mb-4 ">
                                    </div>


                                    <div class="flex flex-col my-5">
                                        <h1 class="font-bold text-md"><?php echo $getcomment['commenttitle'] ?></h1>
                                        <div class="flex flex-col text-center">
                                            <p><?php echo $getcomment['commentcontent'] ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="container justify-center flex flex-col align-middle space-y-10 p-8">
                            <i class="fa fa-exclamation-circle mt-8 text-center fa-4x text-red-600" aria-hidden="true"></i>
                            <h1 class="text-center mt-16 text-2xl font-bold  text-red-600 ">OYUN HAKKINDA YORUM BULUNAMADI !</h1>
                        </div>


                    <?php endif; ?>




                </div>
                <div class="comment-profile w-full bg-white   min-h-20  rounded-full  border-4 border-solid border-black">
                    <?php if (isset($_SESSION["username"])) : ?>
                        <div>
                            <form method="POST" class="container flex justify-center mt-2 mb-auto px-10">

                                <input name="commenttitle" id="commenttitle" placeholder="Mesaj Başlığı" class="w-1/6 h-14 px-3 text-2xl text-center ">
                                <input name="commentcontent" id="commentcontent" placeholder="Oyun Hakkında Mesaj Bırakınız" class="w-1/2 ml-2 h-14 px-3 text-2xl ">
                                <button name="game-detail" type="submit" class=" w-auto p-1
                             h-14 ml-2 bg-green-400 text-black font-bold  rounded-lg">Mesaj Gönder</button>
                            </form>

                        </div>
                    <?php else : ?>
                        <div class="text-center my-5 text-2xl text-black font-bold">

                            Yorum Bırakabilmek için Önce Giriş Yapmalısınız !

                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>


    </section>

    <?php include '../public/Views/_footer.php' ?>
</body>

</html>
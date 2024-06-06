<?php
$clickeditem = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $buttonId = $_POST['button_id'];


  $clickeditem = $buttonId;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>
<?php require './libs/functions.php' ?>
<?php require "libs/vars.php"; ?>



<body>
  <!-- Navbar  -->
  <?php include '../public/Views/_navbar.php' ?>
  <!-- Main Header -->
  <?php include '../public/Views/_mainheader.php' ?>
  <section class="main-section mt-4 mb-3 ">
    <div class="container block justify-center md:flex-row min-h-screen my-16 items-center  mx-auto py-4 md:flex space-x-8">
      <div class="w-full md:w-1/4 md:flex h-full flex-col sm:flex-row">
        <!-- Categories -->
        <?php include '../public/Views/_categories.php' ?>
      </div>
      <div class="w-1/2 md:w-9/12  items-center h-full flex flex-row gap-5 flex-wrap justify-center  " style="margin: auto; margin-top:2rem;">
        <!-- Products -->
        <?php include '../public/Views/_products.php' ?>



      </div>


    </div>


  </section>
  <div class="flex flex-row container justify-center">
    <table style="margin-bottom:15px; ">

      <tr>

        <?php for ($i = 1; $i <= $filteredGamesCount; $i++) : ?>

          <td style="text-align:center; width: 50px; height:50px; background-color:black; color:white;  ">
            <form action="index.php" method="post">
              <input type="hidden" name="button_id" id="button_id" value="<?php echo $i; ?>">
              <button name="<?php echo $i; ?>" type="submit" id="<?php echo $i; ?>"><?php echo $i ?></button>
            </form>

          </td>
        <?php endfor; ?>

      </tr>

    </table>



  </div>


  <section class="main-paralax ">
    <div class="flex justify-center items-center bg-gameplayer w-full h-80  bg-no-repeat bg-cover bg-right-top bg-fixed">
      <h1 class="font-black text-4xl text-white">Yeni Oyunlar Burada Hadi İncelemeye Başla</h1>
    </div>

  </section>
  <section class="main-swipper max-h-[700px] flex">
    <div class="swiper h-[500px]  w-1/2 ">

      <div class="swiper-wrapper text-center flex   ">

        <div class="swiper-slide"><img src="./images/forza.jpg" class="object-fill w-full h-full"></div>
        <div class="swiper-slide relative"><img src="./images/uncharted.jpg" class="object-fill w-full  object-top  h-full"></div>
        <div class="swiper-slide"><img src="./images/hogwards.jpg" class="object-fill  w-full   h-full"></div>
        ...
      </div>

      <div class="swiper-pagination"></div>





      <div class="swiper-scrollbar"></div>
    </div>
    <div class=" h-[500px] w-1/2 p-10 space-y-10 bg-black ">

      <h2 class="title text-4xl text-white font-bold">Forza Horizon 5</h2>
      <article class="desc text-xl text-white">
        Dünyanın en iyi araçlarında sınırsız, eğlenceli sürücülük aksiyonuyla dolu Meksika'nın capcanlı açık dünya manzaralarını keşfedin. Üst düzey Horizon Ralli deneyiminde engebeli Sierra Nueva yollarını fethedin. Forza Horizon 5 oyunu gerekir, genişletme ayrı satılır.
      </article>



  </section>
  <!-- Footer -->
  <?php include '../public/Views/_footer.php' ?>

</body>
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {

    direction: 'horizontal',
    loop: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },



    pagination: {
      el: '.swiper-pagination',
      clickable: false
    },



    on: {
      slideChange: function() {
        const currentSlideIndex = this.activeIndex;

        switch (currentSlideIndex) {
          case 0:
            console.log('case 0')
            document.querySelector(".title").innerHTML = "Forza Horizon 5";
            document.querySelector(".desc").innerHTML = "Dünyanın en iyi araçlarında sınırsız, eğlenceli sürücülük aksiyonuyla dolu Meksika'nın capcanlı açık dünya manzaralarını keşfedin. Üst düzey Horizon Ralli deneyiminde engebeli Sierra Nueva yollarını fethedin. Forza Horizon 5 oyunu gerekir, genişletme ayrı satılır.";

            break;
          case 1:
            console.log('case 1')

            document.querySelector(".title").innerHTML = "Uncharted The Nathan Drake";
            document.querySelector(".desc").innerHTML = "Nathan Drake'in dünya çapında alçakgönüllü kökenlerden olağanüstü maceralara uzanan, tehlikeli seyehatini takip ederek tüm zamanların en çok beğenilen oyunlarından birini sen de tecrübe et.".concat("<br><br>Drake akla hayale gelmeyecek hazineleri bulmak için zalim düşmanlara karşı hayatını ve dostlarını ortaya koyarken, sen de unutulmaz karakterlerle tanış.")

            break;
          case 2:
            console.log('case 2')
            document.querySelector(".title").innerHTML = "Hogwarts Legacy";
            document.querySelector(".desc").innerHTML = "Hogwarts Legacy, insanı içine çeken, açık dünyaya sahip bir RPG oyunudur. Şimdi ipleri elinize alarak büyücülük dünyasında kendi maceranızın tam ortasındaki yerinizi alabilirsiniz.";

            break;
          default:
            break;
        }
      }
    },


    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

</html>
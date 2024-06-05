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
  <section class="main-paralax ">
    <div class="flex justify-center items-center bg-gameplayer w-full h-72 bg-no-repeat bg-cover bg-right-top bg-fixed">
      <h1 class="font-black text-4xl text-white">Yeni Oyunlar Burada</h1>
    </div>

  </section>
  <section class="main-swipper max-h-[700px]">
    <div class="swiper h-[650px] w-full ">

      <div class="swiper-wrapper text-center flex ">

        <div class="swiper-slide"><img src="./images/forza.jpg" class="object-cover w-full h-full"></div>
        <div class="swiper-slide relative"><img src="./images/uncharted.jpg" class="object-cover object-top w-full h-full"></div>
        <div class="swiper-slide"><img src="./images/hogwards.jpg" class="object-cover w-full h-full"></div>
        ...
      </div>

      <div class="swiper-pagination"></div>


      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>


      <div class="swiper-scrollbar"></div>
    </div>
  </section>
  <!-- Footer -->
  <?php include '../public/Views/_footer.php' ?>

</body>
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {

    direction: 'horizontal',
    loop: true,


    pagination: {
      el: '.swiper-pagination',
    },


    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link
  rel="stylesheet"
  href="../node_modules/swiper/swiper-bundle.min.css"
/>
  
    <title>Oyun Günlüğü</title>
   
</head>
<body>
     <!-- Navbar  -->
     <?php include '../public/Views/_navbar.php' ?>
     <!-- Main Header -->
     <?php include '../public/Views/_mainheader.php'?>
    <section class="main-section mt-4 mb-3">
        <div class="container mx-auto py-4 flex space-x-8">
            <div class="w-1/4 flex-col">
                <!-- Categories -->
                <?php include '../public/Views/_categories.php'?>
            </div>
            <div class="w-9/12 flex flex-row gap-5 flex-wrap justify-center  ">
                <!-- Products -->
                <?php include '../public/Views/_products.php'?>



            </div>


        </div>


    </section>
    <section class="main-paralax">
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
<?php include '../public/Views/_footer.php'?>
    
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

 

                <!-- <div class="flex flex-row space-x-8">

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 space-y-4 space-x-6">



</div>








</div> -->
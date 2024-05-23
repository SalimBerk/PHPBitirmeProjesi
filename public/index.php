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
    <header class="bg-white border-3 text-black py-12 w-full  ">
        <div class="container flex items-center justify-between space-x-8 lg:space-x-16">
            <a  href="#" class=" pl-4 md:pl-0 sm:ml-2 text-2xl lg:text-xl font-bold text-black whitespace-nowrap relative">Oyun Günlüğ<i class="fa-solid fa-gamepad "></i><span class="absolute top-[-21px] right-[8px]">..</span></a>
            <div class="block md:hidden">
                <div class="space-y-1 cursor-pointer">
                    <div class="w-8 h-1 rounded-full"></div>
                    <div class="w-8 h-1 rounded-full"></div>
                    <div class="w-8 h-1 rounded-full"></div>
                    <div class="w-8 h-1 rounded-full"></div>
                </div>
            </div>
            <nav class="hidden md:flex justify-between flex-1">
            <div class="flex items-center lg:text-lg font-bold space-x-4 lg:space-x-8">
                <a href="#" class="text-black whitespace-nowrap">Anasayfa</a>
                <a href="#" class="text-black whitespace-nowrap">Yeni Oyunlar</a>
                <a href="#" class="text-black whitespace-nowrap">Hakkımızda</a>

            </div>
            <div class="flex items-center space-x-4 lg:space-x-8 whitespace-nowrap">
            <form>
                <div class="border-r ">
                    <input type="text" class="bg-white mx-2 border-black border focus:outline-none w-24 md:w-44  rounded-lg">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="flex items-center space-x-4 md:space-x-12 text-lg">
                <a href="#" class="font-bold">Giriş Yap</a>
                <a href="#" class=" bg-white font-bold py-1 px-1 hover:bg-stone-500  hover:text-white hover:border-black  border-2 rounded-sm cursor-pointer transition duration-500 whitespace-nowrap">Kayıt Ol</a>
            </div>
        </div>
        
 

        </nav>
        <div class="invisible lg:visible nav-animate">
                <span class="first-item font-bold">Sadece Oyun Severlere</span>
                <span class="last-item font-bold"></span>
            </div>
        <button><i class="fa fa-bars fa-2x pr-4  visible md:invisible"></i></button>
        </div>

    </header>
    <section class="main-header h-128 group relative">

        <img src="./images/joystickpic.jpg" alt="Main Image" class="h-full w-full object-cover blur-sm ">
        <div class="absolute bottom-[15%] left-[25%] w-full">
            <div class="container tracking-wider">
 
                <h1 class="text-2xl md:text-6xl w-128 lg:w-full font-bold filter brightness-300  group-hover:mb-3 duration-500 from-[#F5F5DC] to-slate-100 bg-gradient-to-t  bg-clip-text text-transparent">EN GÜNCEL OYUNLAR BURADA</h1>
                <p class="text-2xl md:text-4xl w-96 lg:w-full  text-white group-hover:mb-4 duration-500 font-medium">
                    Aradığın Oyuna Sahip Ol ve Kendi Günlüğünü Yazmaya Başla.
                </p>
            </div>
        </div>
    </section>
    <section class="main-section mt-4 mb-3">
        <div class="container mx-auto py-4 flex space-x-8">
            <div class="w-1/4 flex-col">
            <div class="  bg-[#78716c] rounded-lg p-6">
                <div class="w-full text-center mb-4">
                <span class="mb-8 text-md lg:text-2xl font-bold text-white ">KATEGORİLER</span>
                </div>
                
                <ul class=" mt-2 space-y-7 list-disc list-inside">
                    <a href="/" class=" py-2 px-2"><li class="border-2 font-bold border-white p-2 rounded-md list-none text-center text-xl text-white">Macera Oyunları</li></a>
                    <a href="/" class=" py-2 px-2"><li class="border-2 font-bold border-white p-2 rounded-md list-none text-center text-xl text-white">Aksiyon Oyunları</li></a>
                    <a href="/" class=" py-2 px-2"><li class="border-2 font-bold border-white p-2 rounded-md list-none text-center text-xl text-white">Yarış Oyunları</li></a>
                    <a href="/"class=" py-2 px-2"><li class="border-2 font-bold border-white p-2 rounded-md list-none text-center text-xl text-white">Spor Oyunları</li></a>
                </ul>
            </div>
            </div>
            <div class="w-9/12 flex flex-row gap-5 flex-wrap justify-center  ">
            <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-80 max-h-[1200px] border-4 rounded-lg border-black">
                    <div class="card-title text-center font-bold text-white  text-lg bg-[#78716c] ">
                    <span>MARVEL’S SPİDER-MAN REMASTERED</span>
                    </div>
                    <div class=" card-image m-4  border-2 border-black rounded-xl">
                        <img src="./images/MarvelsSpiderManRemastered.jpg" alt="Product Image" class=" w-full h-[9rem] object-cover rounded-xl">
                    </div>
                    <div class="flex justify-evenly space-x-1 p-1 my-2  flex-wrap">
                        <button class="bg-blue-500 p-1 rounded-lg text-white text-nowrap">incele <i class="fa-solid fa-eye text-white "></i></button>
                        <button class="bg-red-500 p-1 rounded-lg text-white text-nowrap">Sepete Ekle <i class="fa-solid fa-basket-shopping text-white"></i></button>
                        <button class="bg-green-500 p-1 rounded-lg mt-1  text-white text-nowrap ">Favorilere Ekle<i class="fa-solid fa-heart text-white"></i></button>
                    </div>
                    <div class="py-5 bg-white ">
                        <div class="container flex justify-between px-2">
                            <div class="flex items-center">
                                <span class="bg-[#78716c] p-1 rounded-full text-white">Yayın Tarihi:<span> 03-12-2020</span></span>
                            </div>
                            <div class="flex items-center relative">
                                <div class="absolute w-4 h-12 bg-yellow-300 right-[30px]"></div>
                                <div class="absolute w-12 h-4 bg-yellow-300 right-[15px]"></div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>


    </section>
    <section class="main-paralax">
        <div class="flex justify-center items-center bg-gameplayer w-full h-72 bg-no-repeat bg-cover bg-right-top bg-fixed">
            <h1 class="font-black text-4xl text-white">Yeni Oyunlar Burada</h1>
        </div>

    </section>
    <section class="main-swipper max-h-128">
    <div class="swiper h-[450px] ">
  
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
    <footer class="w-full max-h-screen bg-[#78716C]">
        <div class="container flex justify-between items-center h-44 ">
            <div class="flex justify-center  space-x-4">
                <ul class="flex gap-4">
                    <a href="/facebook" class="bg-white w-12 h-12 text-center rounded-full relative"><li ><i class="fa-brands fa-facebook fa-2x absolute top-2 right-2 "></i></li></a>
                    <a href="/instagram" class="bg-white w-12 h-12 text-center rounded-full relative"><li ><i class="fa-brands fa-instagram fa-2x absolute top-2 right-2 "></i></li></a>
                    <a href="/twitter" class="bg-white w-12 h-12 text-center rounded-full relative"><li ><i class="fa-brands fa-x-twitter fa-2x absolute top-2 right-2 "></i></li></a>
                    <a href="/github" class="bg-white w-12 h-12 text-center rounded-full relative"><li ><i class="fa-brands fa-github fa-2x absolute top-2 right-2 "></i></li></a>
                </ul>
            </div>
            <div class="flex justify-center  space-x-4">
                <span class="font-bold text-md lg:text-2xl text-white">Bizi Takip Edin</span>
            </div>
            <div class="flex justify-center  space-x-4">
                <span class="font-bold text-md lg:text-2xl text-white">Copyright &copy;2024; Designed By Salim</span>

            </div>

        </div>
    </footer>
    
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
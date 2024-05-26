<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>

<body>
    <?php include '../public/Views/_navbar.php' ?>
    <section class="signup-section">
        <div class="min-h-96 max-h-screen p-16">
            <div class="container flex justify-center items-center">
                <div class="w-[600px] h-[600px] border-4  border-solid border-gray-500 rounded-lg">
                    <div class="user-menu flex items-center">
                        <a href="/public/signup.php" class="login h-[80px] w-1/2     font-bold text-center text-lg p-5 bg-black text-white">
                            Kayıt Ol
                        </a>
                        <a href="/public/login.php" class="register h-[80px] w-1/2   font-bold text-center text-lg p-5 bg-[#78716c] text-white">
                            Giriş Yap
                        </a>
                    </div>
                    <form>
                        <div class="space-y-4  ">
                            <div class="mt-10 grid grid-cols-1 p-6 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-md font-medium  leading-6 text-gray-900">Kullanıcı Adı / E-Posta</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-md font-medium  leading-6 text-gray-900">Şifre</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="password" name="password" id="password" autocomplete="password" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="col-span-full mt-4  text-center rounded-full h-14    to-black  bg-gradient-to-l  text-xl text-white from-gray-300    ">
                                    Giriş Yap
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../public/Views/_footer.php' ?>
</body>

</html>
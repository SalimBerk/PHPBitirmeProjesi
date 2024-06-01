<?php

require "./libs/functions.php";

if (isset($_POST["signup"])) {
    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];



    if (empty($username) || empty($email) || empty($password)) {

        $hatamesaji = "Zorunlu Alanları Doldurunuz.";
    } else {
        $userInfo = getUserInfoCheck($username, $email);
        if (!is_null($userInfo)) {

            while ($result = mysqli_fetch_assoc($userInfo)) {
                if (!is_null($result["username"] || !is_null($result["email"]))) {
                    $hatamesaji = "Lütfen Girdiğiniz Girdileri Kontrol Edin. Başka kullanıcı verileri ile eşleşiyor.";
                }
            }
        } else {
            if ($password == $repeatpassword) {
                if (strlen($password) < 8) {
                    $hatamesaji = "Girilen Şifre 8 karakterden az olamaz";
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    createUser($username, $email, $hashedPassword);
                    header('Location:login.php');
                }
            } else {
                $hatamesaji = "Girilen Şifreler Eşleşmiyor.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../public/views/_head.php' ?>

<body>
    <?php include '../public/Views/_navbar.php' ?>
    <section class="signup-section">
        <div class="min-h-96 max-h-screen p-8">
            <div class="container flex justify-center items-center">
                <div class="w-[600px] h-[600px] border-4  border-solid border-gray-500 rounded-lg">
                    <div class="user-menu flex items-center">
                        <a href="/PHPBitirmeProjesi/public/signup.php" class="login h-[80px] w-1/2   font-bold text-center text-lg p-5 bg-[#78716c] text-white">
                            Kayıt Ol
                        </a>
                        <a href="/PHPBitirmeProjesi/public/login.php" class="register h-[80px] w-1/2   font-bold text-center text-lg p-5 bg-black text-white">
                            Giriş Yap
                        </a>
                    </div>
                    <form action="signup.php" method="POST">
                        <div class="space-y-3  ">
                            <div class=" grid grid-cols-1 p-6 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-md font-medium  leading-6 text-gray-900">Kullanıcı Adı</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-md font-medium  leading-6 text-gray-900">E-Posta</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-md font-medium  leading-6 text-gray-900">Şifre</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="password" maxlength="14" name="password" id="password" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-md font-medium  leading-6 text-gray-900">Şifreyi Tekrar Giriniz</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="password" maxlength="14" name="repeatpassword" id="repeatpassword" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="signup" value="Kayıt Ol" class="col-span-full   text-center rounded-full h-14    to-black  bg-gradient-to-l  text-xl text-white from-gray-300    ">
                                </input>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <?php if (isset($hatamesaji)) : ?>
                <div id="alertDanger" class="my-10 w-1/2 mx-auto opacity-100 transition duration-300 ease-in-out   ">
                    <div role="alert" class="rounded-full">
                        <div class="bg-red-500 text-center text-white font-bold rounded-t px-4 py-2  ">
                            HATA !
                        </div>
                        <div class="border border-t-0 text-center border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p><?php echo $hatamesaji ?></p>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>
    <?php include '../public/Views/_footer.php' ?>
    <?php include './libs/errorscript.php'; ?>
</body>

</html>
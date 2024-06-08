<?php

require "./libs/functions.php";
require "libs/vars.php";










if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = trim($_POST["password"]);
    $logincheck = getLoginUser($username);

    if (!is_null($logincheck)) {
        while ($result = mysqli_fetch_assoc($logincheck)) {
            if ($username == $result["username"]) {
                if (password_verify($password, $result["password"])) {
                    ini_set('session.gc_maxlifetime', 3600);
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;
                    $_SESSION["userid"] = $result["id"];

                    header("Location:index.php");
                } else {
                    $loginerr = "Girdiğiniz Parola Bilgisi Yanlış Lütfen Tekrar Deneyin !";
                }
            }
        }
    } else {
        $loginerr = "Girilen Kullanıcı Adı Bilgisini ve Şifre Bilgisini Lütfen Kontrol Ediniz !";
    }
    if (empty($username) || empty($password)) {
        $loginerr = "Lütfen Boş Girilen Alanları Doldurunuz !";
    }
}







?>

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
                        <a href="/PHPBitirmeProjesi/public/signup.php" class="login h-[80px] w-1/2     font-bold text-center text-lg p-5 bg-black text-white">
                            Kayıt Ol
                        </a>
                        <a href="/PHPBitirmeProjesi/public/login.php" class="register h-[80px] w-1/2   font-bold text-center text-lg p-5 bg-[#78716c] text-white">
                            Giriş Yap
                        </a>
                    </div>
                    <form action="login.php" method="POST">
                        <div class="space-y-4  ">
                            <div class="mt-10 grid grid-cols-1 p-6 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-md font-medium  leading-6 text-gray-900">Kullanıcı Adı</label>
                                    <div class="mt-3">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:border-blue-400 sm:max-w-md">
                                            <input type="text" name="username" id="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
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
                                <input type="submit" name="login" value="Giriş Yap" class="col-span-full mt-4  text-center rounded-full h-14    to-black  bg-gradient-to-l  text-xl text-white from-gray-300    ">

                                </input>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <?php if (isset($loginerr)) : ?>
                <div id="alertDanger" class="my-10 w-1/2 mx-auto opacity-100 transition duration-300 ease-in-out   ">
                    <div role="alert" class="rounded-full">
                        <div class="bg-red-500 text-center text-white font-bold rounded-t px-4 py-2  ">
                            HATA !
                        </div>
                        <div class="border border-t-0 text-center border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p><?php echo $loginerr ?></p>

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
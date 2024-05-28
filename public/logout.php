<?php

setcookie("auth[username]", "", time() - (60 * 60));

header('Location: login.php');

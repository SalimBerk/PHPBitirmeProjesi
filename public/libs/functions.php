<?php

function getUserInfoCheck(string $username, string $email)
{
    include "connection.php";
    $query = "SELECT*FROM users WHERE username='{$username}' OR email='{$email}' ";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        mysqli_close($connection);
        return $result;
    } else {
        mysqli_close($connection);
        return null;
    }
}

function getLoginUser(string $username)
{
    include "connection.php";
    $query = "SELECT*FROM users WHERE username='{$username}' LIMIT 1";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        mysqli_close($connection);
        return $result;
    } else {
        mysqli_close($connection);
        return null;
    }
}

function createUser(string $username, string $email, string $password)
{

    include "connection.php";
    $registerdate = date("Y-m-d");
    $query = "INSERT INTO users(username,email,password,register_date) VALUES (?,?,?,?)";
    $result = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($result, 'ssss', $username, $email, $password, $registerdate);
    mysqli_stmt_execute($result);
    mysqli_stmt_close($result);
    mysqli_close($connection);
    return $result;
}

function getAllGames()
{
    include 'connection.php';

    $query = "SELECT*FROM games";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        mysqli_close($connection);
        return $result;
    }
    mysqli_close($connection);
    return;
}

$filteredGamesCount = 0;
function getGamesByPage(int $pageNumber)
{
    include 'connection.php';
    $currentPage = 1;
    $recordsPerPage = 10;
    $offset = ($pageNumber - $currentPage) * $recordsPerPage;
    $allGames = getAllGames();
    $filtereddata = ceil(mysqli_num_rows($allGames) / $recordsPerPage);
    $GLOBALS['filteredGamesCount'] = $filtereddata;


    $filteredquery = "SELECT*FROM games LIMIT $recordsPerPage OFFSET $offset";
    $result = mysqli_query($connection, $filteredquery);
    if (mysqli_num_rows($result) > 0) {
        mysqli_close($connection);
        return $result;
    }
    mysqli_close($connection);
    return mysqli_error($connection);
}



function getGameByID(int $gameID)
{
    include "connection.php";
    $query = "SELECT*FROM games WHERE gameID={$gameID}";
    $result = mysqli_query($connection, $query);
    if ($result != null) {
        mysqli_close($connection);
        return $result;
    }
}
function deleteGameByID(int $gameID)
{
    include "connection.php";
    $query = "DELETE FROM games WHERE gameID={$gameID}";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getAllCategories()
{
    include "connection.php";
    $query = "SELECT*FROM category";
    $result = mysqli_query($connection, $query);
    if ($result != null) {
        mysqli_close($connection);
        return $result;
    }
    return null;
}
function createCategory(string $categoryname, int $isactive = 1)
{
    include "connection.php";
    $query = "INSERT INTO category(categoryname,isactive) VALUES('$categoryname',$isactive)";
    $result = mysqli_query($connection, $query);
    if ($result != null) {
        mysqli_close($connection);
        return $result;
    }
    return;
}
function getCategoryByID(int $catID)
{
    include "connection.php";
    $query = "SELECT*FROM category WHERE categoryID=$catID";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function deleteCategoryByID(int $catID)
{
    include "connection.php";
    $query = "DELETE FROM category WHERE categoryID={$catID}";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}
function updateCategory(int $catID, string $categoryname)
{
    include "connection.php";
    $query = "UPDATE category SET categoryname='$categoryname' WHERE categoryID=$catID";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}
function clearGameCategories(int $gameid)
{
    include "connection.php";

    $query = "DELETE FROM gamescategory WHERE games_ID=$gameid";
    $result = mysqli_query($connection, $query);
    echo mysqli_error($connection);

    return $result;
}
function addGameToCategories(int $gameid, array $categories)
{
    include "connection.php";


    foreach ($categories as $catid) {
        $query = "INSERT INTO gamescategory(games_ID,category_ID) VALUES ($gameid, $catid);";
        $result = mysqli_multi_query($connection, $query);
    }


    echo mysqli_error($connection);

    return $result;
}
function getGamesByCategoryID(int $categoryID)
{
    include "connection.php";
    if ($categoryID != null) {
        $query = "SELECT*FROM gamescategory gc INNER JOIN games g on gc.games_ID=g.gameID WHERE gc.category_ID={$categoryID}";
    }

    $result = mysqli_query($connection, $query);
    if ($result != null) {
        mysqli_close($connection);
        return $result;
    }
    mysqli_close($connection);
    return;
}

function getGamesFilteredBySearch(string $search)
{
    include "connection.php";
    $query = "SELECT*FROM games WHERE name LIKE '%{$search}%' OR description LIKE '%{$search}%'  ";
    $result = mysqli_query($connection, $query);

    if ($result != null) {
        mysqli_close($connection);
        return $result;
    }
    mysqli_close($connection);
    return;
}
function getCategoriesByGameId($id)
{
    include "connection.php";

    $query = "SELECT c.categoryID,c.categoryname from gamescategory gc  inner join category c on gc.category_ID=c.categoryID WHERE gc.games_ID=$id";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function createGame(int $gameID, string $name, float $price, string $description, string $imageurl, int $isactive = 1)
{
    include "connection.php";

    $query = "INSERT INTO games(gameID,name, price,description,imageurl,isactive) VALUES (?,?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    mysqli_stmt_bind_param($stmt, 'isdssi', $gameID, $name, $price, $description, $imageurl, $isactive);

    $result = mysqli_stmt_execute($stmt);

    if ($result === false) {
        die('Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $result;
}
function lastGameId()
{
    include 'connection.php';
    $query = 'SELECT gameID FROM games ORDER BY gameID DESC LIMIT 1';
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}
function updateGameById(int $id, string $name, float $price, string $description, string $imageurl, int $isactive = 1)
{
    include "connection.php";

    $query = "UPDATE games SET name='$name',price=$price,description='$description',imageurl='$imageurl',isactive=$isactive WHERE gameID=$id";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function addComment(string $commenttitle, string $commentcontent, int $userid, int $gameID)
{
    include "connection.php";
    $query = "INSERT INTO comments(commenttitle,commentcontent,user_ID,game_ID) VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($connection, $query);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    mysqli_stmt_bind_param($stmt, 'ssii', $commenttitle, $commentcontent, $userid, $gameID);

    $result = mysqli_stmt_execute($stmt);

    if ($result === false) {
        die('Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $result;
}

function getComments(int $id)
{
    include "connection.php";

    $query = "SELECT*FROM comments c INNER JOIN games g on g.gameID=c.game_ID INNER JOIN users u on c.user_ID=u.id WHERE c.game_ID=$id";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function editImage(string $imagename, int $id)
{
    include "connection.php";


    $query = "UPDATE users SET imagename='$imagename' WHERE id=$id";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function  getImage(int $id)
{
    include "connection.php";


    $query = "SELECT imagename FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}

function addLike(int $userid, int $gameid)
{

    include "connection.php";
    if (getLike($gameid, $userid)) {
        $query = "INSERT INTO likes(user_ID,game_ID) VALUES (?,?)";
        $stmt = mysqli_prepare($connection, $query);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
        }

        mysqli_stmt_bind_param($stmt, 'ii', $userid, $gameid);

        $result = mysqli_stmt_execute($stmt);

        if ($result === false) {
            die('Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connection);

        return $result;
    }
}

function  getLike(int $gameid, int $userid)
{
    include "connection.php";


    $query = "SELECT*FROM  likes WHERE game_ID=$gameid and user_ID=$userid";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        return false;
    } else {
        return true;
    }
}

function  getLikeTotalByUserId(int $userid)
{
    include "connection.php";


    $query = "SELECT COUNT(*) AS total_likes FROM   likes WHERE user_ID=$userid";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getLikesListById(int $userid)
{
    include "connection.php";
    $query = "SELECT*FROM likes l INNER JOIN games g on l.game_ID=g.gameID WHERE l.user_ID=$userid";
    $result = mysqli_query($connection, $query);
    return $result;
}

function deleteLikeById(int $userid, int $gameid)
{
    include "connection.php";
    $query = "DELETE FROM likes WHERE game_ID = $gameid AND user_ID = $userid";
    $result = mysqli_query($connection, $query);
    return $result;
}

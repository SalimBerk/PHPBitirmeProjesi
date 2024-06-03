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
function deleteCategoryByID(int $catID)
{
    include "connection.php";
    $query = "DELETE FROM category WHERE categoryID={$catID}";
    $result = mysqli_query($connection, $query);
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
    }

    $result = mysqli_multi_query($connection, $query);
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

function createGame(string $name, float $price, string $description, string $imageurl, int $isactive = 1)
{
    include "connection.php";

    $query = "INSERT INTO games(name, price,description,imageurl,isactive) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars(mysqli_error($connection)));
    }

    mysqli_stmt_bind_param($stmt, 'sdssi', $name, $price, $description, $imageurl, $isactive);

    $result = mysqli_stmt_execute($stmt);

    if ($result === false) {
        die('Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
    }

    mysqli_stmt_close($stmt);
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

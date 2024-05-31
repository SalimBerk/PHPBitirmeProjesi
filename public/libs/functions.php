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
        return $result;
    }
    return;
}
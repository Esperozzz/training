<?php

//Добавление текста в базу
function add_text(PDO $pdo, $text)
{
    $query = 'INSERT INTO task9 (`text`) VALUE (?)';

    $stmt = $pdo->prepare($query);
    $stmt->execute([$text]);
    return (bool) $stmt->rowCount();
}

//Выбрать информацию о пользователе
function select_user(PDO $pdo, $id)
{
    $query = 'SELECT `first_name`, `last_name`, `username` 
              FROM task8 
              WHERE id=?';

    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

//Обновление данных пользователя
function user_data_update(PDO $pdo, $new_data = [])
{
    $query = 'UPDATE task8 
              SET 
              `first_name` = ?, 
              `last_name` = ?, 
              `username` = ?
              WHERE id=?';

    //Сбрасываем ключи
    $new_data = array_values($new_data);

    $stmt = $pdo->prepare($query);
    return $stmt->execute($new_data);
}

//Удаление пользователя
function delete_user(PDO $pdo, $id)
{
    $query = "DELETE FROM task8 WHERE id = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    return (bool) $stmt->rowCount();
}
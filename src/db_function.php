<?php

function db_select($pdo, $columns = [])
{
    //Получаем список необходимых колонок
    $col_names = '';
    foreach ($columns as $column) {
        $col_names .= "`{$column}`, ";
    }
    //Удаляем лишнюю запятую и пробел в конце строки
    $col_names = substr($col_names, 0, -2);

    $query = "SELECT {$col_names} FROM task8;";
    $stmt = $pdo->query($query);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function add_text(PDO $pdo, $text)
{
    $query = 'INSERT INTO task9 (`text`) VALUE (?)';

    $stmt = $pdo->prepare($query);
    $stmt->execute([$text]);
    if ($stmt->errorCode() === 23000) {
        return false;
    }
    return true;
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

    //Если не получается удалить выдаем информацию об ошибке
    if (!$stmt->execute([$id])) {
        print_r($pdo->errorInfo());
    }
}
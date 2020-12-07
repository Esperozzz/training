<?php

function db_select($pdo, $table_name, $columns = [])
{
    //Получаем список необходимых колонок
    $col_names = '';
    foreach ($columns as $column) {
        $col_names .= "`{$column}`, ";
    }
    //Удаляем лишнюю запятую и пробел в конце строки
    $col_names = substr($col_names, 0, -2);

    $query = "SELECT {$col_names} FROM {$table_name};";
    $stmt = $pdo->query($query);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function select_user($pdo, $id)
{
    $query = 'SELECT `first_name`, `last_name`, `username` 
              FROM task8 
              WHERE id=?';

    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function db_insert()
{

}

function user_data_update($pdo, $new_data = [])
{
    $query = 'UPDATE task8 
              SET 
              `first_name` = ?, 
              `last_name` = ?, 
              `username` = ?
              WHERE id=?';

    //Сбрасываем ключи
    $new_data = array_values($new_data);

    print_r($new_data);

    $stmt = $pdo->prepare($query);
    return $stmt->execute($new_data);
}

function delete_user($pdo, $id)
{
    $query = "DELETE FROM task8 WHERE id = ?;";
    $stmt = $pdo->prepare($query);

    //Если не получается удалить выдаем информацию об ошибке
    if (!$stmt->execute([$id])) {
        print_r($pdo->errorInfo());
    }
}
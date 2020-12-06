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

    $sql = "SELECT {$col_names} FROM {$table_name};";
    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function db_insert()
{

}

function db_update()
{

}

function delete_user($pdo, $table_name, $id)
{
    $sql = "DELETE FROM task8 WHERE id = ?;";
    //$pdo->prepare
}
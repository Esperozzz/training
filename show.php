<?php

include_once 'includes.php';

//Перенаправляем на страницу редактирования
header('Location: /edit.php?id=' . $id);
exit;
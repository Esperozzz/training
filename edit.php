<?php
include_once 'src/db_connect.php';
include_once 'src/db_function.php';

//Список ключей данных пользователя
$user_keys = [
    'first_name',
    'last_name',
    'username',
];

//Получаем id пользователя
$id = $_GET['id'];

//Проверяем, был ли ввод новых данных
if (isset($_POST['submit']) && ($_POST['submit'] === 'ok')) {
    $new_data['first_name'] = htmlspecialchars(trim($_POST['firstname']));
    $new_data['last_name'] = htmlspecialchars(trim($_POST['lastname']));
    $new_data['username'] = htmlspecialchars(trim($_POST['username']));
    $new_data['id'] = $id;

    user_data_update($pdo, $new_data);
} else {
    //Если нет, заполняем поля значениями по умолчанию
    $new_data = array_fill_keys($user_keys, '');
}

//Получаем информацию о пользователе из БД
if (!$user = select_user($pdo, $id)) {
    //Если нет, заполняем поля значениями по умолчанию
    $user = array_fill_keys($user_keys, '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">

    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-content">
                        <div class="form-group">
                            <form method="post" action="<?=$_SERVER['SCRIPT_NAME'] . '?id=' . $id?>">

                                <label class="form-label" for="firstname">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-control" value="<?=$user['first_name']?>">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" value="<?=$user['last_name']?>">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?=$user['username']?>">
                                <button name="submit" class="btn btn-success mt-3" type="submit" value="ok">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>


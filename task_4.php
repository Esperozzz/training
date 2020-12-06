<?php
$entity = [
    [
        'name' => 'My Tasks',
        'indicator' => '130 / 500',
        'bg_fusion' => '400',
        'bar_width' => '65',
        'color' => 'fusion',
    ],
    [
        'name' => 'Transfered',
        'indicator' => '440 TB',
        'bg_fusion' => '500',
        'bar_width' => '34',
        'color' => 'success',
    ],
    [
        'name' => 'Bugs Squashed',
        'indicator' => '77%',
        'bg_fusion' => '400',
        'bar_width' => '77',
        'color' => 'info',
    ],
    [
        'name' => 'User Testing',
        'indicator' => '7 days',
        'bg_fusion' => '300',
        'bar_width' => '84',
        'color' => 'primary',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
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

                            <?php
                            foreach ($entity as $key => $item) {
                                //Добавляем bootstrap класс если элемент является первым
                                $div_class = '';
                                if ($key === 0) { $div_class = ' mt-2'; }

                                echo "<div class=\"d-flex {$div_class}\">";
                                echo $item['name'];
                                echo "<span class=\"d-inline-block ml-auto\">{$item['indicator']}</span>";
                                echo '</div>';
                                echo '<div class="progress progress-sm mb-3">';
                                echo '<div class="progress-bar bg-'. $item['color'] . '-'. $item['bg_fusion'] . '" role="progressbar" style="width: ' . $item['bar_width'] . '%;" aria-valuenow="' . $item['bar_width'] . '" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '</div>';
                            }
                            ?>
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

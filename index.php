<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>HOW-OLD-IS</title>
    <?php include('master/lib.php'); ?>

</head>

<body>
    <div id="overlay">
        <img src="library/img/loading.svg" style="width: 60px; height: 60px; left: 50%; top: 50%; position: relative;" alt="Loading" />
    </div>
    <?php @include('master/header.php') ?>
    <main class="main-content">
        <?php
        $db = new SQLite3('tech_db.db');
        $results = $db->query('SELECT `icon`, `tech_name`, `start_date`, `link` FROM technologies');
        // while ($row = $results->fetchArray()) {
        //     print($row['tech_name']);
        //     print("<br/>");
        // }
        ?>
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col col-lg-12">
                    <div class="input-box">
                        <input id="input-search" type="text" class="form-control" placeholder="Search technology">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col col-lg-12">
                    <div class="list-group w-auto tech-list">
                        <?php while ($row = $results->fetchArray()) { ?>
                            <div class="tech-item" tech-name="<?php echo $row['tech_name'] ?>">
                                <a href="<?php echo $row['link']; ?>" target="_blank" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                    <?php
                                    $icon = $row['icon'];

                                    if ($icon == '') {
                                        $icon = "fa-regular fa-code";
                                    }
                                    ?>
                                    <span class="<?php echo $icon ?> colored rounded-circle flex-shrink-0" style="width: 40px; height: 40px; font-size: 40px;"></span>
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0"><?php echo $row['tech_name'] ?></h6>
                                            <p class="mb-0 opacity-80" style="margin-top: 2px;">
                                                Release Data: <span class="fa-regular fa-calendar"></span> <b><?php echo $row['start_date'] ?></b>
                                            </p>
                                        </div>
                                        <?php
                                        $start_date   = new DateTime($row['start_date']);
                                        $current_date = new DateTime();
                                        $date_diff    = $start_date->diff($current_date);
                                        ?>
                                        <small class="opacity-50 text-nowrap"><?php print($date_diff->y . ' year ' . $date_diff->m . ' months') ?></small>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require('master/footer.php'); ?>
    </footer>
</body>
<script>
    $(function() {
        $("#overlay").fadeOut(500, function() {
            $(".main-content").fadeIn(500);
        });
    })

    $(document).ready(function() {
        tech_list = $('.tech-list');

        $('#input-search').on('input', function() {
            input = $(this);
            search = input.val().toLowerCase();

            tech_list.find('.tech-item').each(function() {
                element = $(this);
                tech_name = element.attr('tech-name').toLowerCase();

                if (tech_name.includes(search)) {
                    element.show();
                } else {
                    element.hide();
                }
            })
        })
    });
</script>

</html>